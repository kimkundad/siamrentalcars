<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;
use App\category;
use App\sub_category;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::table('cars')->select(
              'cars.*',
              'cars.id as id_q',
              'cars.created_at as create',
              'sub_categories.*',
              'categories.*'
              )
              ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
              ->leftjoin('categories', 'categories.id',  'cars.cat_id')
              ->paginate(15);


            $count_user = DB::table('cars')
                ->count();

          $data['objs'] = $objs;
        $data['datahead'] = "รายชื่อธนาคารทั้งหมด";
        return view('admin.cars.index', $data);
    }


    public function api_post_status(Request $request){

    $user = car::findOrFail($request->user_id);

              if($user->status == 1){
                  $user->status = 0;
              } else {
                  $user->status = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = category::all();
        $sub_category = sub_category::all();
        $data['category'] = $category;
        $data['sub_category'] = $sub_category;
        $data['method'] = "post";
        $data['url'] = url('admin/car_rent');
        return view('admin.cars.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $image = $request->file('image');
        $this->validate($request, [
             'image' => 'required|max:8048',
             'name' => 'required',
             'cat_id' => 'required',
             'price' => 'required',
             'deposit' => 'required',
             'grear' => 'required',
             'code' => 'required',
             'sub_cat_id' => 'required',
             'total_p' => 'required',
             'insurance' => 'required',
             'bags' => 'required',
             'detail' => 'required',
             'service' => 'required'
         ]);

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = asset('assets/back/image/car/');
        $img = Image::make($image->getRealPath());
        $img->resize(800, 533, function ($constraint) {
        $constraint->aspectRatio();
      })->save('assets/back/image/car/'.$input['imagename']);

      $package = new car();
       $package->name = $request['name'];
       $package->cat_id = $request['cat_id'];
       $package->price = $request['price'];
       $package->deposit = $request['deposit'];
       $package->grear = $request['grear'];
       $package->code = $request['code'];
       $package->sub_cat_id = $request['sub_cat_id'];
       $package->total_p = $request['total_p'];
       $package->insurance = $request['insurance'];
       $package->bags = $request['bags'];
       $package->branch = $request['branch'];
       $package->detail = $request['detail'];
       $package->service = $request['service'];
       $package->image = $input['imagename'];
       $package->save();

       $the_id = $package->id;

       return redirect(url('admin/car_rent/'.$the_id.'/edit'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = category::all();
        $sub_category = sub_category::all();
        $data['category'] = $category;
        $data['sub_category'] = $sub_category;

        $cat = DB::table('cars')->select(
              'cars.*',
              'cars.id as id_q',
              'cars.created_at as create',
              'sub_categories.*',
              'categories.*'
              )
              ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
              ->leftjoin('categories', 'categories.id',  'cars.cat_id')
              ->where('cars.id', $id)
              ->first();

              $data['objs'] = $cat;
              $data['datahead'] = "แก้ไขข้อมูลรถเช่า";
              $data['url'] = url('admin/car_rent/'.$id);
              $data['method'] = "put";

              return view('admin.cars.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $image = $request->file('image');

        $this->validate($request, [
             'name' => 'required',
             'cat_id' => 'required',
             'price' => 'required',
             'deposit' => 'required',
             'grear' => 'required',
             'code' => 'required',
             'sub_cat_id' => 'required',
             'total_p' => 'required',
             'insurance' => 'required',
             'bags' => 'required',
             'detail' => 'required',
             'service' => 'required'
         ]);

        if($image == NULL){



         $package = car::find($id);
      $package->name = $request['name'];
      $package->cat_id = $request['cat_id'];
      $package->price = $request['price'];
      $package->deposit = $request['deposit'];
      $package->grear = $request['grear'];
      $package->code = $request['code'];
      $package->sub_cat_id = $request['sub_cat_id'];
      $package->total_p = $request['total_p'];
      $package->insurance = $request['insurance'];
      $package->bags = $request['bags'];
      $package->detail = $request['detail'];
      $package->service = $request['service'];
      $package->save();


       }else{

         $objs = DB::table('products')
          ->select(
             'products.*'
             )
          ->where('id', $id)
          ->first();

          $file_path = 'assets/back/image/car/'.$objs->image;
          unlink($file_path);


          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

      $destinationPath = asset('assets/back/image/car/');
      $img = Image::make($image->getRealPath());
      $img->resize(800, 533, function ($constraint) {
      $constraint->aspectRatio();
    })->save('assets/back/image/car/'.$input['imagename']);


    $package = car::find($id);
    $package->name = $request['name'];
    $package->cat_id = $request['cat_id'];
    $package->price = $request['price'];
    $package->deposit = $request['deposit'];
    $package->grear = $request['grear'];
    $package->code = $request['code'];
    $package->sub_cat_id = $request['sub_cat_id'];
    $package->total_p = $request['total_p'];
    $package->insurance = $request['insurance'];
    $package->bags = $request['bags'];
    $package->detail = $request['detail'];
    $package->service = $request['service'];
    $package->image = $input['imagename'];
    $package->save();

       }

       return redirect(url('admin/car_rent/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function del_car($id){

      $objs = DB::table('cars')
          ->where('id', $id)
          ->first();

      $file_path = 'assets/back/image/car/'.$objs->image;
      unlink($file_path);

      $obj = car::find($id);
      $obj->delete();
      return redirect(url('admin/car_rent/'))->with('del_product','คุณทำการลบอสังหา สำเร็จ');

    }
}
