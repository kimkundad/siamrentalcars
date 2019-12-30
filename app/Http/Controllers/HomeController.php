<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_category;
use Response;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj = sub_category::all();
        $data['obj'] = $obj;
        return view('welcome', $data);
    }

    public function search_car(Request $request){

      $obj = sub_category::all();

      //dd($obj);
      $data['obj'] = $obj;



      $start_point = $request['start_point'];
      $start_dat = $request['start_dat'];
      $start_time = $request['start_time'];
      $end_day = $request['end_day'];
      $end_time = $request['end_time'];
      $car_options = $request['car_options'];

      $data['start_point'] = $start_point;
      $data['start_time'] = $start_time;
      $data['end_time'] = $end_time;
      $data['start_dat'] = $start_dat;
      $data['end_day'] = $end_day;

      $data['car_options'] = $car_options;

      $result = explode(",",$start_point);

      $data['result'] = $result;

      //dd($result);

      //เงื่อนไขแรก

      if($start_point != null){



        //  dd($div[0]);
          $div = explode(",",$start_point);
          $get_provinces = DB::table('province')
                        ->select(
                        'province.PROVINCE_NAME',
                        'province.PROVINCE_ID'
                        )
                        ->Where('province.PROVINCE_NAME', $div[0])
                        ->first();




        $get_count = DB::table('provi_partners')
                      ->select(
                      'provi_partners.id',
                      'provi_partners.part_id'
                      )
                      ->Where('pro_id', $get_provinces->PROVINCE_ID)
                      ->count();

                      if($get_count > 0){

                        $get_part_id = DB::table('provi_partners')
                                      ->select(
                                      'provi_partners.part_id'
                                      )
                                      ->Where('pro_id', $get_provinces->PROVINCE_ID)
                                      ->get();


                                      foreach($get_part_id as $u){

                                        $get_car = DB::table('car_parts')
                                                      ->select(
                                                      'car_parts.cars_id',
                                                      'cars.*'
                                                      )
                                                      ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                                                      ->Where('car_parts.partn_id', $u->part_id)
                                                      ->get();
                                      }

                      }else{
                        $data['data'] = null;
                      }





      }else{
        $data['data'] = null;
      }



                    return view('search_car', $data);
                  //  dd($get_car);

    }

    public function search_data(Request $request){

      $this->validate($request, [
       'field2' => 'required'
      ]);
      $field2= $request['field2'];


      $get_provinces = DB::table('province')
                    ->select(
                    'province.PROVINCE_NAME',
                    'province.PROVINCE_ID'
                    )
                    ->Where('province.PROVINCE_NAME', 'LIKE', '%'.$field2.'%')
                    ->first();

                  //  dd($get_provinces);


                    $get_count = DB::table('position_links')
                                  ->select(
                                  'position_links.id',
                                  'position_links.position_name'
                                  )
                                  ->Where('position_links.prov_id', $get_provinces->PROVINCE_ID)
                                  ->count();

                    $get_position = DB::table('position_links')
                                  ->select(
                                  'position_links.id',
                                  'position_links.position_name'
                                  )
                                  ->Where('position_links.prov_id', $get_provinces->PROVINCE_ID)
                                  ->get();


                  if($get_count > 0){
                    //  dd($get_provinces);
                      foreach($get_position as $x){

                        $admin[] =
                            array('name' => $get_provinces->PROVINCE_NAME.','.$x->position_name, 'id_pro' => $get_provinces->PROVINCE_ID);
                        //  'name' => "$get_provinces->PROVINCE_NAME,$x->position_name";
                        ;
                      }
                  }else{
                    $admin[] = 'ไม่มีข้อมูล';
                  }




      return Response::json($admin);

    }
}
