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

      $data_car = null;

      $data['car_options'] = $car_options;

      $result = explode(",",$start_point);

      $data['result'] = $result;

      //dd($result);

      //เงื่อนไขแรก

      if($start_point != null){

        $div = explode(",",$start_point);
        //if have value not null, please check count

        $get_count_value = DB::table('province')
                      ->select(
                      'province.PROVINCE_NAME',
                      'province.PROVINCE_ID'
                      )
                      ->Where('province.PROVINCE_NAME', $div[0])
                      ->count();

          if($get_count_value != 0){
            // if count > 0 data

            // ค้าหาจังหวัด

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

                        // ค้าหา partner ว่าอยู่ในจังหวัดนั้นไหม

                        if($get_count > 0){

                          $get_part_id = DB::table('provi_partners')
                                        ->select(
                                        'provi_partners.part_id'
                                        )
                                        ->Where('pro_id', $get_provinces->PROVINCE_ID)
                                        ->get();


                                        foreach($get_part_id as $u){

                                          $get_car2 = DB::table('car_parts')
                                                        ->select(
                                                        'car_parts.cars_id',
                                                        'cars.*',
                                                        'partners.*',
                                                        'province.*'
                                                        )
                                                        ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                                                        ->leftjoin('partners', 'partners.id',  'car_parts.partn_id')
                                                        ->leftjoin('province', 'province.PROVINCE_ID',  'car_parts.prov_id')
                                                        ->Where('car_parts.partn_id', $u->part_id)
                                                        ->get();

                                                        $data_car[] = $get_car2;
                                        }

                                        //$data_car = $get_part_id;

                                      //  dd($get_part_id);

                        }else{
                          $data['data'] = null;
                        }



          }else{
            // if count 0 data = null
            $data['data'] = null;
          }







      }else{
        $data['data'] = null;
      }

        $data['data_car1'] = $data_car;

      //  dd(($data_car));


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
