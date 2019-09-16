<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use App\partner;
use App\province;
use App\provi_partner;
use App\car_part;
use Redirect;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obj = partner::all();
        $data['objs'] = $obj;
        return view('admin.partners.index', $data);
    }


    public function api_post_status(Request $request){

    $user = partner::findOrFail($request->user_id);

              if($user->part_status == 1){
                  $user->part_status = 0;
              } else {
                  $user->part_status = 1;
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

        $data['method'] = "post";
        $data['url'] = url('admin/partners');
        return view('admin.partners.create', $data);
    }

    public function partner_pro($id){

      $objs = DB::table('provi_partners')
          ->leftjoin('province', 'province.PROVINCE_ID',  'provi_partners.pro_id')
          ->where('part_id', $id)
          ->get();
        $text_tag = '';
          foreach($objs as $u){
            $text_tag .= $u->PROVINCE_NAME.',';
          }

      $data['objs'] = $text_tag;

      $obj1 = DB::table('province')
          ->where('GEO_ID', 2)
          ->get();

          $obj2 = DB::table('province')
              ->where('GEO_ID', 3)
              ->get();

              $obj3 = DB::table('province')

                  ->where('GEO_ID', 1)
                  ->get();

                  $obj4 = DB::table('province')
                      ->where('GEO_ID', 6)
                      ->get();

                      $obj5 = DB::table('province')
                          ->where('GEO_ID', 4)
                          ->get();

                          $obj6 = DB::table('province')
                              ->where('GEO_ID', 5)
                              ->get();



      $data['objs1'] = $obj1;
      $data['objs2'] = $obj2;
      $data['objs3'] = $obj3;
      $data['objs4'] = $obj4;
      $data['objs5'] = $obj5;
      $data['objs6'] = $obj6;
      $data['id'] = $id;
      return view('admin.partners.partner_pro', $data);


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
        $image = $request->file('part_image');

        $this->validate($request, [
             'part_image' => 'required|max:8048',
             'part_name' => 'required',
             'part_owner' => 'required',
             'part_email' => 'required',
             'part_phone' => 'required',
             'part_address' => 'required'
         ]);

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = asset('assets/back/image/partnets/');
        $img = Image::make($image->getRealPath());
        $img->resize(800, 533, function ($constraint) {
        $constraint->aspectRatio();
      })->save('assets/back/image/partnets/'.$input['imagename']);

      $package = new partner();
       $package->part_name = $request['part_name'];
       $package->part_owner = $request['part_owner'];
       $package->part_email = $request['part_email'];
       $package->part_phone = $request['part_phone'];
       $package->part_address = $request['part_address'];
       $package->part_detail = $request['part_detail'];
       $package->part_image = $input['imagename'];
       $package->save();

       $the_id = $package->id;

       return redirect(url('admin/partners/'.$the_id.'/edit'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

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
        $obj = partner::find($id);

              $data['objs'] = $obj;

              $data['url'] = url('admin/partners/'.$id);
              $data['method'] = "put";

              return view('admin.partners.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function add_cars_part(Request $request, $id)
     {
       $car_id = $request['car_id'];
       $car_price = $request['car_price'];
       $prov_id = $request['prov_id'];


       $package = new car_part();
       $package->prov_id = $prov_id;
       $package->partn_id = $id;
       $package->cars_id = $car_id;
       $package->cars_price = $car_price;
       $package->save();

       return redirect(url('admin/partner_dash_pro/'.$id))->with('add_success_car','คุณทำการแก้ไขอสังหา สำเร็จ');
     }

     public function edit_cars_part(Request $request, $id){

       $package = car_part::find($id);
       $package->cars_price = $request['car_price'];
       $package->save();

       return redirect(url('admin/partner_dash_pro/'.$request['part_id']))->with('add_success_car','คุณทำการแก้ไขอสังหา สำเร็จ');

     }


     public function del_cars_part(Request $request, $id){

       $package = car_part::find($id);
       $package->delete();

       return redirect(url('admin/partner_dash_pro/'.$request['part_id']))->with('del_product','คุณทำการแก้ไขอสังหา สำเร็จ');

     }



     public function post_status_car_part(Request $request){


       $user = car_part::findOrFail($request->user_id);

                 if($user->car_part_status == 1){
                     $user->car_part_status = 0;
                 } else {
                     $user->car_part_status = 1;
                 }


         return response()->json([
         'data' => [
           'success' => $user->save(),
         ]
       ]);

     }

    public function post_partner_pro(Request $request, $id)
    {

      $gallary = $request['province_id'];

      if (sizeof($gallary) > 0) {
          for ($i = 0; $i < sizeof($gallary); $i++) {

            $admins[] = [
                'part_id' => $id,
                'pro_id' => $gallary[$i]
            ];
          }
          provi_partner::insert($admins);
        }

        return redirect(url('admin/partner_data_pro/'.$id))->with('add_success_img','คุณทำการแก้ไขอสังหา สำเร็จ');

    }

    public function partner_del_pro($id){

      //dd($id);

      DB::table('provi_partners')
      ->where('id', $id)
      ->delete();

      return Redirect::back()->with('delete_success','คุณทำการเพิ่มอสังหา สำเร็จ');

    }

    public function partner_data_pro($id){
      $data['id'] = $id;

      $obj = partner::find($id);

      $objs = DB::table('provi_partners')->select(
              'province.*',
              'province.PROVINCE_ID as id_p',
              'provi_partners.*',
              'provi_partners.id as id_of'
              )
          ->where('part_id', $id)
          ->leftjoin('province', 'province.PROVINCE_ID',  'provi_partners.pro_id')
          ->get();

          if(isset($objs)){
            foreach($objs as $u){

            $count = DB::table('car_parts')
              ->where('prov_id', $u->id_p)
              ->count();

              $u->count_car = $count;

            }
          }

    //  dd($objs);
      $data['objs'] = $objs;
      $data['data_p'] = $obj;
      return view('admin.partners.partner_data_pro', $data);
    }

    public function partner_dash_pro($id){

      $objs = DB::table('provi_partners')
      ->where('id', $id)
      ->first();

      $pro = DB::table('province')
      ->where('PROVINCE_ID', $objs->pro_id)
      ->first();

      $name = DB::table('partners')
      ->where('id', $objs->part_id)
      ->first();

      $get_car = DB::table('car_parts')
      ->select(
              'car_parts.*',
              'car_parts.id as id_p',
              'cars.name',
              'categories.name_cat'
              )
      ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
      ->leftjoin('categories', 'categories.id',  'cars.cat_id')
      ->get();

      $data['get_car'] = $get_car;

      //dd($get_car);

      $cars = DB::table('cars')
      ->select(
              'cars.*',
              'cars.id as id_c',
              'categories.*'
              )
      ->leftjoin('categories', 'categories.id',  'cars.cat_id')
      ->get();


      $data['cars'] = $cars;

      $data['name'] = $name;
      $data['pro'] = $pro;
      $data['objs'] = $objs;

      return view('admin.partners.partner_dash_pro', $data);
    }

    public function update(Request $request, $id)
    {
        //

        $image = $request->file('part_image');
        $this->validate($request, [
             'part_name' => 'required',
             'part_owner' => 'required',
             'part_email' => 'required',
             'part_phone' => 'required',
             'part_address' => 'required'
         ]);

        if($image == NULL){

          $package = partner::find($id);
          $package->part_name = $request['part_name'];
          $package->part_owner = $request['part_owner'];
          $package->part_email = $request['part_email'];
          $package->part_phone = $request['part_phone'];
          $package->part_address = $request['part_address'];
          $package->part_detail = $request['part_detail'];
          $package->save();
        }else{

          $objs = DB::table('partners')
          ->where('id', $id)
          ->first();

          $file_path = 'assets/back/image/partnets/'.$objs->part_image;
          unlink($file_path);

          $package = partner::find($id);
          $package->part_name = $request['part_name'];
          $package->part_owner = $request['part_owner'];
          $package->part_email = $request['part_email'];
          $package->part_phone = $request['part_phone'];
          $package->part_address = $request['part_address'];
          $package->part_detail = $request['part_detail'];
          $package->part_image = $input['imagename'];
          $package->save();

        }

        return redirect(url('admin/partners/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');


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
}
