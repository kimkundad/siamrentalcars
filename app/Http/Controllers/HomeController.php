<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_category;
use Response;
use App\province;
use Illuminate\Support\Facades\DB;
use Session;
use App\contact;
use Auth;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;

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
      $promo = DB::table('promotions')
            ->where('promotion_status', 1)
            ->get();

            if(isset($promo)){
              foreach($promo as $u){


                $get_prov1 = DB::table('promotion_provs')
                      ->where('promotion_id', $u->id)
                      ->get();
                      $exp = array();

                      if(isset($get_prov1)){
                        foreach($get_prov1 as $j){
                          $exp[] = $j->prov_id;
                        }

                      }


                      $get_prov = DB::table('province')
                            ->whereIn('PROVINCE_ID', $exp)
                            ->get();


                      $u->get_pro = $get_prov;



              }
            }

          //  dd($promo);

            $data['promo'] = $promo;


        $obj = sub_category::all();
        $data['obj'] = $obj;
        return view('welcome', $data);
    }

    public function promotion(){

      $obj = DB::table('promotions')
            ->where('promotion_status', 1)
            ->get();

      $data['promo'] = $obj;

      return view('promotion', $data);
    }

    public function partner_register(){

      $obj = province::all();
      $data['objs'] = $obj;
      return view('partner_register', $data);
    }


    public function how_to_book(){
      return view('how_to_book');
    }

    public function document_to_book(){
      return view('document_to_book');
    }

    public function insurance(){
      return view('insurance');
    }




    public function payment_success($id){

      $objs = DB::table('orders')
        ->where('order_ids', $id)
        ->first();

        $get_pro = DB::table('promotions')
          ->where('id', $objs->promotion_id)
          ->first();

          $data['get_pro'] = $get_pro;

        $part = DB::table('partners')
          ->where('id', $objs->part_id)
          ->first();

          $car = DB::table('cars')
            ->where('id', $objs->pro_id)
            ->first();

            $position = DB::table('position_links')
                ->select(
                'position_links.*',
                'province.*'
                )
              ->leftjoin('province', 'province.PROVINCE_ID',  'position_links.prov_id')
              ->where('position_links.id', $objs->position_id)
              ->first();


        $data['position'] = $position;
        $data['car'] = $car;
        $data['part'] = $part;
        $data['objs'] = $objs;

        return view('payment_success', $data);
    }

    public function contact_us(){

      return view('contact_us');
    }


    public function terms(){
      return view('terms');
    }

    public function privacy(){
      return view('privacy');
    }


    public function about_us(){

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


      return view('about_us', $data);
    }

    public function add_my_contact(Request $request){


      $secret="6LdBOl8UAAAAAM-iNnghy4tPxFpCOPG6J1Hg8xLu";
    //  $response = $request['captcha'];

      $captcha = "";
      if (isset($request["g-recaptcha-response"]))
        $captcha = $request["g-recaptcha-response"];

    //  $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
      $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);
      //$captcha_success=json_decode($verify);

    //  dd($captcha_success);

      if($response["success"] == false) {

        return response()->json([
          'data' => [
            'status' => 100,
            'msg' => 'This user was not verified by recaptcha.',
            'data' => "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response"
          ]
        ]);

      }else{

        $obj = DB::table('contacts')->insert(
             [
               'name' => $request['name'],
               'email' => $request['email'],
               'phone' => $request['phone'],
               'detail' => $request['msg'],
               'created_at' => new \DateTime()
             ]
           );


        $message = $request['name'].", ".$request['phone'].", ข้อความ : ".$request['msg'];
        $lineapi = 'Om126prqBmCdPDnQyWPe0f7pniw6gDBHZYlpvDwAmDh';

        $mms =  trim($message);
        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
        curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'',);
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);
        if(curl_error($chOne)){
        echo 'error:' . curl_error($chOne);
        }else{
        $result_ = json_decode($result, true);
    //    echo "status : ".$result_['status'];
    //    echo "message : ". $result_['message'];
        }
        curl_close($chOne);





           // send email
             $data_toview = array();
           //  $data_toview['pathToImage'] = "assets/image/email-head.jpg";
             date_default_timezone_set("Asia/Bangkok");
             $data_toview['name'] = $request['name'];
             $data_toview['email'] = $request['email'];
             $data_toview['phone'] = $request['phone'];
             $data_toview['detail'] = $request['msg'];
             $data_toview['datatime'] = date("d-m-Y H:i:s");

             $email_sender   = env('m_u');
             $email_pass     = env('m_p');

         /*    $email_sender   = 'info@acmeinvestor.com';
             $email_pass     = 'Iaminfoacmeinvestor';  */
           //  $email_to       =  'siri@sirispace.com';
           $email_to       =  'info@nakhonkoratcarrent.com';
             //echo $admins[$idx]['email'];
             // Backup your default mailer
             $backup = \Mail::getSwiftMailer();

             try{

                         //https://accounts.google.com/DisplayUnlockCaptcha
                         // Setup your gmail mailer
                         $transport = new \Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL');
                         $transport->setUsername($email_sender);
                         $transport->setPassword($email_pass);

                         // Any other mailer configuration stuff needed...
                         $gmail = new Swift_Mailer($transport);

                         // Set the mailer as gmail
                         \Mail::setSwiftMailer($gmail);

                         $data['emailto'] = $email_to;

                         //dd($data['emailto']);
                         $data['sender'] = $email_sender;
                         //Sender dan Reply harus sama

                         Mail::send('mail.contact', $data_toview, function($message) use ($data)
                         {
                             $message->from($data['sender'], 'มีข้อความจาก nakhonkoratcarrent');
                             $message->to($data['emailto'])
                             ->replyTo($data['emailto'], 'มีข้อความจาก nakhonkoratcarrent.')
                             ->subject('มีข้อความจาก nakhonkoratcarrent.com เข้าสู่ะบบ');

                             //echo 'Confirmation email after registration is completed.';
                         });



             }catch(\Swift_TransportException $e){
                 $response = $e->getMessage() ;
                 echo $response;

             }


             // Restore your original mailer
             Mail::setSwiftMailer($backup);
             // send email



        return response()->json([
          'data' => [
            'status' => 200,
            'msg' => 'This user is verified by recaptcha.'
          ]
        ]);

      }



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
                      ->WhereIn('province.PROVINCE_ID', [36,38,20,23,35,29])
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

      $data['obj'] = $obj;

    //  $start_point = $request['start_point'];


      $get_prov_fi = DB::table('position_links')
                    ->Where('id', $request['start_point'])
                    ->first();

      $start_point = $get_prov_fi->prov_id;
      $data['show_text'] = $get_prov_fi->position_name;

      Session::put('pro_v', $get_prov_fi->prov_id);

      Session::put('position2', $get_prov_fi->position_name);
      Session::put('position_id', $request['start_point']);

      if($request['start_dat'] != null){

        $start_dat = $request['start_dat'];
        $start_time = $request['start_time'];
        $end_day = $request['end_day'];
        $end_time = $request['end_time'];

      }else{

        $start_dat = date('d').'-'.date('m').'-'.date('Y');
        $start_time = '10:00';
        $end_day = date('d').'-'.date('m').'-'.date('Y');
        $end_time = '10:00';

      }





      $car_options = $request['car_options'];

      $data['start_point'] = $request['start_point'];


      $data['start_time'] = $start_time;
      $data['end_time'] = $end_time;

      $data['start_dat'] = $start_dat;
      $data['end_day'] = $end_day;

      Session::put('start_dat', $data['start_dat']);
      Session::put('end_day',   $data['end_day']);
      Session::put('end_time', $end_time);
      Session::put('start_time', $start_time);


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

                        Session::put('position1', $get_provinces->PROVINCE_NAME);

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
                                                          'car_parts.cars_price',
                                                          'cars.*',
                                                          'cars.id as id_car',
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
                                                          'cars.id as id_car',
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

                  //    dd(session()->all());

                    return view('search_car', $data);


    }

    public function car_detail($id){



      $get_car = DB::table('cars')
                    ->select(
                    'cars.*',
                    'car_parts.cars_id',
                    'cars.id as id_car',
                    'cars.price as price_cars',
                    'car_parts.prov_id as prov_ids',
                    'car_parts.cars_price as price_car',
                    'car_parts.cars_price as cars_price',
                    'partners.*',
                    'partners.id as id_part',
                    'province.*',
                    'categories.*',
                    'sub_categories.sub_name'
                    )
                    ->leftjoin('car_parts', 'car_parts.cars_id', 'cars.id')
                    ->leftjoin('partners', 'partners.id',  'car_parts.partn_id')
                    ->leftjoin('province', 'province.PROVINCE_ID',  'car_parts.prov_id')
                    ->leftjoin('sub_categories', 'sub_categories.id',  'cars.sub_cat_id')
                    ->leftjoin('categories', 'categories.id',  'cars.cat_id')
                    ->Where('cars.id', $id)
                    ->Where('cars.status', 1)
                    ->first();




                  //  dd($get_car);




                    if (Auth::check()) {

                      $check_data = DB::table('promotion_users')
                            ->leftjoin('promotions', 'promotions.id', 'promotion_users.promotion_id')
                            ->leftjoin('promotion_provs', 'promotion_provs.promotion_id', 'promotion_users.promotion_id')
                            ->where('promotion_users.user_id', Auth::user()->id)
                            ->where('promotion_provs.prov_id', $get_car->prov_ids)
                            ->where('promotions.promotion_type', 1)
                            ->where('promotion_users.get_status', 0)
                            ->count();

                            // check all provi

                            if($check_data > 0){

                              $get_data_cu = DB::table('promotion_users')
                                    ->select(
                                    'promotion_users.*',
                                    'promotions.*',
                                    'promotions.id as id_p',
                                    'promotion_provs.*'
                                    )
                                    ->leftjoin('promotions', 'promotions.id', 'promotion_users.promotion_id')
                                    ->leftjoin('promotion_provs', 'promotion_provs.promotion_id', 'promotion_users.promotion_id')
                                    ->where('promotion_users.user_id', Auth::user()->id)
                                    ->where('promotion_provs.prov_id', $get_car->prov_ids)
                                    ->where('promotions.promotion_type', 1)
                                    ->where('promotion_users.get_status', 0)
                                    ->first();


                              $cupon = (($get_car->price_car/100)*$get_data_cu->promotion_amount);
                              $cupon_data = $get_data_cu->promotion_name;
                              $cupon_id = $get_data_cu->id_p;



                            }else{

                              $check_data2 = DB::table('promotion_users')
                                    ->leftjoin('promotions', 'promotions.id', 'promotion_users.promotion_id')
                                    ->leftjoin('promotion_provs', 'promotion_provs.promotion_id', 'promotion_users.promotion_id')
                                    ->where('promotion_users.user_id', Auth::user()->id)
                                    ->where('promotions.promotion_type', 0)
                                    ->where('promotion_users.get_status', 0)
                                    ->count();

                                    if($check_data2 > 0){

                                      $get_data_cu1 = DB::table('promotion_users')
                                            ->select(
                                            'promotion_users.*',
                                            'promotions.*',
                                            'promotions.id as id_p',
                                            'promotion_provs.*'
                                            )
                                            ->leftjoin('promotions', 'promotions.id', 'promotion_users.promotion_id')
                                            ->leftjoin('promotion_provs', 'promotion_provs.promotion_id', 'promotion_users.promotion_id')
                                            ->where('promotion_users.user_id', Auth::user()->id)
                                            ->where('promotions.promotion_type', 0)
                                            ->where('promotion_users.get_status', 0)
                                            ->first();

                                            $cupon = (($get_car->price_car/100)*$get_data_cu1->promotion_amount);

                                            $cupon_data = $get_data_cu1->promotion_name;
                                            $cupon_id = $get_data_cu1->id_p;

                                          //  dd($get_car->price_car);

                                    }else{

                                      $cupon = 0;
                                      $cupon_data = null;
                                      $cupon_id = 0;

                                    }



                            }

                            // check all provi



                    }else{
                      $cupon = 0;
                      $cupon_data = null;
                      $cupon_id = 0;
                    }



                  $data['cupon'] = $cupon;
                  $data['cupon_data'] = $cupon_data;
                  $data['cupon_id'] = $cupon_id;


                  //  dd($get_car);
                  $data['objs'] = $get_car;

                  return view('car_detail', $data);

    }


    public function search_new(Request $request){

      $data_car = $request['data_car'];
      $get_prov_2 = $request['get_prov_2'];

      $tag_html = null;
      $tag_html2 = null;

      $get_car2 = DB::table('car_parts')
                    ->select(
                    'car_parts.cars_id',
                    'cars.*',
                    'cars.id as id_car',
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
                            <a class='theme-search-results-item-mask-link' href='".url('car_detail/'.$u->id_car)."'></a>
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
                                  <a class='btn btn-primary-inverse btn-block theme-search-results-item-price-btn' href='".url('car_detail/'.$u->id_car)."'>เลือกคันนี้</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>";


                        $tag_html2 .= '<div class="theme-search-results-item _br-3 _mb-20 _bsh-xl theme-search-results-item-grid">
                          <div class="_h-30vh theme-search-results-item-img-wrap-inner">
                            <img class="theme-search-results-item-img" src='.url('assets/back/image/car/'.$u->image).' alt="'.$u->name.'" title="'.$u->name.'"/>
                          </div>
                          <div class="theme-search-results-item-grid-body _pt-0">
                            <a class="theme-search-results-item-mask-link" href="'.url('car_detail/'.$u->id_car).'"></a>
                            <div class="theme-search-results-item-grid-header">
                              <h5 class="theme-search-results-item-title _fs">'.$u->name.'</h5>
                            </div>
                            <div class="theme-search-results-item-grid-caption">
                              <div class="row" data-gutter="10">
                                <div class="col-xs-9 ">
                                  <div class="theme-search-results-item-car-location">
                                    <i class="fa fa-building theme-search-results-item-car-location-icon"></i>
                                    <div class="theme-search-results-item-car-location-body">
                                      <p class="theme-search-results-item-car-location-title">'.$u->part_name.'</p>
                                      <p class="theme-search-results-item-car-location-subtitle">'.$u->PROVINCE_NAME.'</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-3 ">
                                  <div class="theme-search-results-item-price">
                                    <p class="theme-search-results-item-price-tag">฿ '.$u->price.'</p>
                                    <p class="theme-search-results-item-price-sign">ต่อวัน</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>';




                      }

                    }








    //  dd($data_car);

      return response()->json([
      'data' => [
        'html' => $tag_html,
        'html2' => $tag_html2,
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
