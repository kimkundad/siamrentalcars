<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\province;
use App\promotion_prov;
use App\promotion_user;
use App\promotion;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro = DB::table('promotions')
        ->paginate(15);
        $data['objs'] = $pro;
        return view('admin.promotion.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $obj = province::all();
        $data['objs'] = $obj;

        $data['method'] = "post";
        $data['url'] = url('admin/promotion');
        return view('admin.promotion.create', $data);
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
        $image = $request->file('promotion_image');

        $this->validate($request, [
             'promotion_image' => 'required',
             'promotion_name' => 'required',
             'promotion_amount' => 'required',
             'promotion_limit' => 'required',
             'promotion_type' => 'required'
         ]);

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = asset('assets/back/image/promotion/');
        $img = Image::make($image->getRealPath());
        $img->resize(800, 600, function ($constraint) {
        $constraint->aspectRatio();
      })->save('assets/back/image/promotion/'.$input['imagename']);

      $promotion_type = $request['promotion_type'];

      if($promotion_type == 0){

        $package = new promotion();
        $package->promotion_name = $request['promotion_name'];
        $package->promotion_detail = $request['promotion_detail'];
        $package->promotion_amount = $request['promotion_amount'];
        $package->promotion_limit = $request['promotion_limit'];
        $package->promotion_image = $input['imagename'];
        $package->promotion_type = $request['promotion_type'];
        $package->save();

      }else{

        $package = new promotion();
        $package->promotion_name = $request['promotion_name'];
        $package->promotion_detail = $request['promotion_detail'];
        $package->promotion_amount = $request['promotion_amount'];
        $package->promotion_limit = $request['promotion_limit'];
        $package->promotion_image = $input['imagename'];
        $package->promotion_type = $request['promotion_type'];
        $package->save();

        $gallary = $request['get_prov'];

        if (sizeof($gallary) > 0) {
            for ($i = 0; $i < sizeof($gallary); $i++) {

              $admins[] = [
                  'promotion_id' => $package->id,
                  'prov_id' => $gallary[$i]
              ];
            }
            promotion_prov::insert($admins);
          }

      }
      return redirect(url('admin/promotion/'))->with('add_success_car','คุณทำการแก้ไขอสังหา สำเร็จ');

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
        $obj = province::all();
        $data['objs'] = $obj;

        $promo = DB::table('promotions')
              ->where('id', $id)
              ->first();

              $get_prov1 = DB::table('promotion_provs')
                    ->where('promotion_id', $id)
                    ->get();

                    $exp = array();

                    if(isset($get_prov1)){
                      foreach($get_prov1 as $u){
                        $exp[] = $u->prov_id;
                      }

                    }

                    $get_prov = DB::table('province')
                          ->whereIn('PROVINCE_ID', $exp)
                          ->get();

                          $obj = DB::table('province')
                                ->whereNotIn('PROVINCE_ID', $exp)
                                ->get();
                          $data['objs'] = $obj;

                      //    dd($get_prov);

                    $data['get_prov'] = $get_prov;

              $data['promo'] = $promo;
              $data['datahead'] = "แก้ไขข้อมูลรถเช่า";
              $data['url'] = url('admin/promotion/'.$id);
              $data['method'] = "put";

              return view('admin.promotion.edit', $data);
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

        $image = $request->file('promotion_image');
        $promotion_type = $request['promotion_type'];
        $this->validate($request, [
             'promotion_name' => 'required',
             'promotion_amount' => 'required',
             'promotion_limit' => 'required',
             'promotion_type' => 'required'
         ]);

        if($image == NULL){

          $package = promotion::find($id);
          $package->promotion_name = $request['promotion_name'];
          $package->promotion_detail = $request['promotion_detail'];
          $package->promotion_amount = $request['promotion_amount'];
          $package->promotion_limit = $request['promotion_limit'];
          $package->promotion_type = $request['promotion_type'];
          $package->save();


        }else{

          $get1 = DB::table('promotions')
              ->where('id', $id)
              ->first();

          $file_path = 'assets/back/image/promotion/'.$get1->promotion_image;
          unlink($file_path);

          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

          $destinationPath = asset('assets/back/image/promotion/');
          $img = Image::make($image->getRealPath());
          $img->resize(800, 600, function ($constraint) {
          $constraint->aspectRatio();
        })->save('assets/back/image/promotion/'.$input['imagename']);


          $package = promotion::find($id);
          $package->promotion_name = $request['promotion_name'];
          $package->promotion_detail = $request['promotion_detail'];
          $package->promotion_amount = $request['promotion_amount'];
          $package->promotion_limit = $request['promotion_limit'];
          $package->promotion_image = $input['imagename'];
          $package->promotion_type = $request['promotion_type'];
          $package->save();


        }


        if($promotion_type == 0){

          DB::table('promotion_provs')
              ->where('promotion_id', $id)
              ->delete();

        }else{

          DB::table('promotion_provs')
              ->where('promotion_id', $id)
              ->delete();

              $gallary = $request['get_prov'];

              if (sizeof($gallary) > 0) {
                  for ($i = 0; $i < sizeof($gallary); $i++) {

                    $admins[] = [
                        'promotion_id' => $package->id,
                        'prov_id' => $gallary[$i]
                    ];
                  }
                  promotion_prov::insert($admins);
                }

        }


        return redirect(url('admin/promotion/'.$id.'/edit'))->with('edit_success_car','คุณทำการแก้ไขอสังหา สำเร็จ');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


          $package = promotion::find($id);
          $package->promotion_status = 0;
          $package->save();


          return redirect(url('admin/promotion/'))->with('del_success_car','คุณทำการแก้ไขอสังหา สำเร็จ');
        //
    }

    public function destroy_add($id){


          $package = promotion::find($id);
          $package->promotion_status = 1;
          $package->save();

          return redirect(url('admin/promotion/'))->with('add_success_car','คุณทำการแก้ไขอสังหา สำเร็จ');

    }
}
