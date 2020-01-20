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

    public function get_select2(Request $request){

    //  $get_count = ["id" => 1, "text" => "Option 1.2"];
      $search = $request['searchTerm'];

    //  dd($search);

      if($search == null){

        $get_provinces = DB::table('province')
                      ->select(
                      'province.PROVINCE_NAME',
                      'province.PROVINCE_ID'
                      )
                      ->WhereIn('province.PROVINCE_ID', [1,38,39,64,70,28])
                      ->get();

                      foreach($get_provinces as $u){

                        $get_data = DB::table('position_links')
                                      ->Where('prov_id', $u->PROVINCE_ID)
                                      ->get();

                                      $u->get_data2 = $get_data;

                      }

      }else{


        $get_provinces = DB::table('province')
                      ->select(
                      'province.PROVINCE_NAME',
                      'province.PROVINCE_ID'
                      )
                      ->Where('province.PROVINCE_NAME', 'LIKE', '%'.$search.'%')
                      ->get();

                      foreach($get_provinces as $u){

                        $get_data = DB::table('position_links')
                                      ->Where('prov_id', $u->PROVINCE_ID)
                                      ->get();

                                      $u->get_data2 = $get_data;

                      }

      }

      $data = array();



    //  echo json_encode($get_provinces);

    //  dd($get_provinces);

      if(isset($get_provinces)){
        foreach($get_provinces as $u){
          if(isset($u->get_data2)){
          foreach($u->get_data2 as $j){
          $data[] = array("id"=>$j->id, "text"=> $u->PROVINCE_NAME .", ".$j->position_name);
        }
      }
        }
      }

      echo json_encode($data);


    }

    public function search_car(Request $request){

      $obj = sub_category::all();





        //  dd($get_sort);

      //dd($obj);
      $data['obj'] = $obj;

    //  $start_point = $request['start_point'];


      $get_prov_fi = DB::table('position_links')
                    ->Where('id', $request['start_point'])
                    ->first();

      $start_point = $get_prov_fi->prov_id;
      $data['show_text'] = $get_prov_fi->position_name;

      $start_dat = $request['start_dat'];
      $start_time = $request['start_time'];
      $end_day = $request['end_day'];
      $end_time = $request['end_time'];
      $car_options = $request['car_options'];

      $data['start_point'] = $request['start_point'];
      $data['start_time'] = $start_time;
      $data['end_time'] = $end_time;
      $data['start_dat'] = $start_dat;
      $data['end_day'] = $end_day;

      $data_car = null;
      $get_sort_2 = null;
      $get_pro_2 = null;

      $data['car_options'] = $car_options;

    //  $result = explode(",",$start_point);

      $data['result'] = $get_prov_fi->prov_id;
      $data['get_prov_2'] = $get_prov_fi->prov_id;
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
                      ->Where('province.PROVINCE_ID', $start_point)
                      ->count();

          if($get_count_value != 0){
            // if count > 0 data

            // ค้าหาจังหวัด

            $get_provinces = DB::table('province')
                          ->select(
                          'province.PROVINCE_NAME',
                          'province.PROVINCE_ID'
                          )
                          ->Where('province.PROVINCE_ID', $start_point)
                          ->first();

          $get_count = DB::table('provi_partners')
                        ->select(
                        'provi_partners.id',
                        'provi_partners.part_id'
                        )
                        ->Where('pro_id', $get_provinces->PROVINCE_ID)
                        ->count();


                        $data['get_prov_2'] = $get_provinces->PROVINCE_ID;
                        $data['show_text2'] = $get_provinces->PROVINCE_NAME;

                        // ค้าหา partner ว่าอยู่ในจังหวัดนั้นไหม

                        if($get_count > 0){

                          $get_part_id = DB::table('provi_partners')
                                        ->select(
                                        'provi_partners.part_id',
                                        'provi_partners.pro_id'
                                        )
                                        ->Where('pro_id', $get_provinces->PROVINCE_ID)
                                        ->get();


                                        $get_pro_2 = $get_provinces->PROVINCE_ID;

                                        //dd($get_part_id);


                                        /*$get_sort = DB::table('sub_categories')->select(
                                                'sub_categories.*'
                                                )
                                            ->get();

                                            foreach($get_sort as $j){

                                            } */


                                        foreach($get_part_id as $u){

                                          if($car_options == 0){

                                            $get_car2 = DB::table('car_parts')
                                                          ->select(
                                                          'car_parts.cars_id',
                                                          'cars.*',
                                                          'partners.*',
                                                          'partners.id as id_part',
                                                          'province.*',
                                                          'sub_categories.sub_name'
                                                          )
                                                          ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                                                          ->leftjoin('partners', 'partners.id',  'car_parts.partn_id')
                                                          ->leftjoin('province', 'province.PROVINCE_ID',  'car_parts.prov_id')
                                                          ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
                                                          ->Where('car_parts.partn_id', $u->part_id)
                                                          ->Where('car_parts.prov_id', $u->pro_id)
                                                          ->Where('cars.status', 1)
                                                          ->get();

                                          }else{


                                            $get_car2 = DB::table('car_parts')
                                                          ->select(
                                                          'car_parts.cars_id',
                                                          'cars.*',
                                                          'partners.*',
                                                          'partners.id as id_part',
                                                          'province.*',
                                                          'sub_categories.sub_name'
                                                          )
                                                          ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                                                          ->leftjoin('partners', 'partners.id',  'car_parts.partn_id')
                                                          ->leftjoin('province', 'province.PROVINCE_ID',  'car_parts.prov_id')
                                                          ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
                                                          ->Where('car_parts.partn_id', $u->part_id)
                                                          ->Where('car_parts.prov_id', $u->pro_id)
                                                          ->Where('cars.sub_cat_id', $car_options)
                                                          ->Where('cars.status', 1)
                                                          ->get();

                                          }



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




        $get_provinces = DB::table('car_parts')
                      ->select(
                      'car_parts.*'
                      )
                      ->Where('car_parts.prov_id', $get_pro_2)
                      ->count();


                      $get_value_2 = DB::table('sub_categories')
                                    ->select(
                                    'sub_categories.*',
                                    'sub_categories.id as id_sub_cat_2',
                                    'car_parts.*',
                                    'cars.sub_cat_id'
                                    )
                                    ->join('cars', 'cars.sub_cat_id',  'sub_categories.id')
                                    ->join('car_parts', 'car_parts.cars_id',  'cars.id')
                                    ->Where('car_parts.prov_id', $get_pro_2)
                                    ->Groupby('sub_categories.sub_name')
                                    ->get();


                                    if(isset($get_value_2)){

                                      foreach($get_value_2 as $u){


                                        $get_car3 = DB::table('car_parts')
                                                      ->select(
                                                      'car_parts.cars_id',
                                                      'cars.*'
                                                      )
                                                      ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                                                      ->Where('cars.sub_cat_id', $u->sub_cat_id)
                                                      ->Where('car_parts.prov_id', $get_pro_2)
                                                      ->Where('cars.status', 1)
                                                      ->count();


                                                      $u->count_car = $get_car3;



                                      }

                                    }



                    //  dd($get_value_2);

                      $data['get_value_2'] = $get_value_2;



                    return view('search_car', $data);


    }


    public function search_new(Request $request){

      $data_car = $request['data_car'];
      $get_prov_2 = $request['get_prov_2'];

      $tag_html = null;

      $get_car2 = DB::table('car_parts')
                    ->select(
                    'car_parts.cars_id',
                    'cars.*',
                    'partners.*',
                    'partners.id as id_part',
                    'province.*',
                    'sub_categories.sub_name'
                    )
                    ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                    ->leftjoin('partners', 'partners.id',  'car_parts.partn_id')
                    ->leftjoin('province', 'province.PROVINCE_ID',  'car_parts.prov_id')
                    ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
                    ->Where('car_parts.prov_id', $get_prov_2)
                    ->WhereIn('cars.sub_cat_id', $data_car)
                    ->Where('cars.status', 1)
                    ->get();


                    $get_count = DB::table('car_parts')
                                  ->select(
                                  'car_parts.cars_id',
                                  'cars.*',
                                  'partners.*',
                                  'partners.id as id_part',
                                  'province.*',
                                  'sub_categories.sub_name'
                                  )
                                  ->leftjoin('cars', 'cars.id',  'car_parts.cars_id')
                                  ->leftjoin('partners', 'partners.id',  'car_parts.partn_id')
                                  ->leftjoin('province', 'province.PROVINCE_ID',  'car_parts.prov_id')
                                  ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
                                  ->Where('car_parts.prov_id', $get_prov_2)
                                  ->WhereIn('cars.sub_cat_id', $data_car)
                                  ->Where('cars.status', 1)
                                  ->count();

                    if(isset($get_car2)){

                      foreach($get_car2 as $u){

                      $tag_html .=  "<div class='theme-search-results-item _mb-10 theme-search-results-item-'>
                          <div class='theme-search-results-item-preview'>
                            <a class='theme-search-results-item-mask-link' href='#'></a>
                            <div class='row' data-gutter='20'>
                              <div class='col-md-5'>
                                <div class='theme-search-results-item-img-wrap'>
                                  <img class='theme-search-results-item-img' src=".url('assets/back/image/car/'.$u->image).">
                                </div>
                              </div>
                              <div class='col-md-5'>
                                <h5 class='theme-search-results-item-title theme-search-results-item-title-lg'>
                                $u->name
                                </h5>
                                <p class='theme-search-results-item-car-location-subtitle'>size :
                                $u->sub_name
                                </p>
                                <div class='theme-search-results-item-car-location'>
                                  <i class='fa fa-building theme-search-results-item-car-location-icon'></i>
                                  <div class='theme-search-results-item-car-location-body'>
                                    <p class='theme-search-results-item-car-location-title'>
                                    $u->part_name
                                    </p>
                                    <p class='theme-search-results-item-car-location-subtitle'>
                                    $u->PROVINCE_NAME
                                    </p>
                                  </div>
                                </div>
                                <ul class='theme-search-results-item-car-list'>
                                  <li>
                                    <i class='fa fa-check'></i>
                                    $u->insurance
                                  </li>
                                  <li>
                                    <i class='fa fa-check'></i>
                                    $u->grear
                                  </li>
                                  <li>
                                    <i class='fa fa-check'></i>จำนวนผู้โดยสาร
                                    $u->total_p
                                  </li>
                                </ul>
                              </div>
                              <div class='col-md-2'>
                                <div class='theme-search-results-item-book'>
                                  <div class='theme-search-results-item-price'>
                                    <p class='theme-search-results-item-price-tag'>฿
                                    $u->price
                                    </p>
                                    <p class='theme-search-results-item-price-sign'>ต่อวัน</p>
                                  </div>
                                  <a class='btn btn-primary-inverse btn-block theme-search-results-item-price-btn' href='#'>เลือกคันนี้</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>";

                      }

                    }








    //  dd($data_car);

      return response()->json([
      'data' => [
        'html' => $tag_html,
        'count' => $get_count
      ]
    ]);

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
