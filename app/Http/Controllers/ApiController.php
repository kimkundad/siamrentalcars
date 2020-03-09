<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_category;
use Response;
use App\province;
use App\order;
use App\subscribe;
use App\regis_partner_prov;
use App\regis_partner;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;

class ApiController extends Controller
{
    //

    public function subscribe(Request $request){

    $email = $request['email'];

    $count = DB::table('subscribes')
      ->where('email', $email)
      ->count();

      if($count > 0){

        return response()->json([
                'data' => [
                  'status' => 100,
                  'msg' => 'อีเมล ของคุณอยู่ในระบบอยู่แล้ว'
                ]
              ]);

      }else{


        $package = new subscribe();
        $package->email = $request['email'];
        $package->save();

        return response()->json([
                'data' => [
                  'status' => 200,
                  'msg' => 'ขอบคุณที่ร่วมเป็นส่วนหนึ่งกับเรา เราจะทำการส่งโปรโมชั่น ใหม่ๆ ไปให้ท่านทางอีเมล'
                ]
              ]);


      }

    }

    public function add_partner_register(Request $request){

      $package = new regis_partner();
      $package->company = $request['company'];
      $package->owner = $request['owner'];
      $package->number_phone = $request['number_phone'];
      $package->email = $request['email'];
      $package->num_car = $request['num_car'];
      $package->address = $request['address'];
      $package->save();

      $id = $package->id;

      $gallary = $request['get_prov'];

      if (sizeof($gallary) > 0) {
          for ($i = 0; $i < sizeof($gallary); $i++) {

            $admins[] = [
                'regis_partner_id' => $id,
                'prov_id' => $gallary[$i]
            ];
          }
          regis_partner_prov::insert($admins);
        }


      return response()->json([
              'data' => [
                'status' => 200,
                'msg' => 'ขอบคุณที่ร่วมเป็นส่วนหนึ่งกับเรา เราจะทำการส่งโปรโมชั่น ใหม่ๆ ไปให้ท่านทางอีเมล'
              ]
            ]);

    }



    public function add_my_order(Request $request){

      $randomSixDigitInt = (\random_int(100000, 999999));

      if(\Auth::check()){
      $user_id = Auth::user()->id;
      }else{
      $user_id = 0;
      }

      $package = new order();
      $package->order_ids = $randomSixDigitInt;
      $package->user_id = $user_id;
      $package->pro_id = $request['id_car'];
      $package->position_id = $request['position_id'];
      $package->prov_id = $request['pro_v'];
      $package->part_id = $request['part_id'];
      $package->day = $request['total_day'];
      $package->total = $request['total_price'];
      $package->detail = $request['get_position'].", ".$request['cus_detail'];
      $package->re_car = $request['start_dat'];
      $package->se_car = $request['end_day'];
      $package->re_car_time = $request['start_time'];
      $package->se_car_time = $request['end_time'];
      $package->phone = $request['cus_phone'];
      $package->email = $request['cus_email'];
      $package->name = $request['cus_name']." ".$request['cus_lname'];
      $package->promotion_id = $request['promotion_id'];
      $package->save();




      $objs = DB::table('orders')
        ->select(
        'orders.*',
        'orders.email as email_order',
        'orders.name as name_order',
        'orders.phone as phone_order',
        'orders.detail as detail_order',
        'orders.total as total_order',
        'partners.*',
        'cars.*',
        'cars.name as car_order',
        'position_links.*',
        'province.*'
        )
        ->leftjoin('partners', 'partners.id',  'orders.part_id')
        ->leftjoin('cars', 'cars.id',  'orders.pro_id')
        ->leftjoin('position_links', 'position_links.id',  'orders.position_id')
        ->leftjoin('province', 'province.PROVINCE_ID',  'orders.prov_id')
        ->where('orders.order_ids', $randomSixDigitInt)
        ->first();

        if(isset($objs->promotion_id)){
          if($objs->promotion_id != null){

            DB::table('promotion_users')
            ->where('promotion_id', $objs->promotion_id)
            ->where('user_id', $user_id)
            ->update(['get_status' => 1]);

          }
        }




        $message = $objs->name_order." มีลูกค้าสั่งจองรถ Order ID : ".$randomSixDigitInt;
        $lineapi = 'QRQbLoxSOyJVWICWoIJabLc3Yk3bYcnmVVBD2PICIqt';

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




      date_default_timezone_set("Asia/Bangkok");
       $data_date = date("Y-m-d H:i:s");


       // send email
            $data_toview = array();
          //  $data_toview['pathToImage'] = "assets/image/email-head.jpg";

          date_default_timezone_set("Asia/Bangkok");
          $data_toview['data'] = $objs;
          $data_toview['datatime'] = date("d-m-Y H:i:s");

            $email_sender   = env('us_mail');
            $email_pass     = env('pass_mail');

        /*    $email_sender   = 'info@acmeinvestor.com';
            $email_pass     = 'Iaminfoacmeinvestor';  */
            $email_to       =  $objs->email_order;
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

                        $data['emailto'] = $email_sender;
                        $data['email_part'] = $objs->part_email;
                        $data['sender'] = $email_to;
                        //Sender dan Reply harus sama

                        Mail::send('mail.order', $data_toview, function($message) use ($data)
                        {
                            $message->from($data['sender'], 'siamrentalcars');
                            $message->to($data['email_part'])
                            ->replyTo($data['sender'], 'siamrentalcars.')
                            ->subject('คุณทำรายการสำหรับสั่งจองรถเช่า siamrentalcars.com');

                            //echo 'Confirmation email after registration is completed.';
                        });

                        Mail::send('mail.order', $data_toview, function($message) use ($data)
                        {
                            $message->from($data['sender'], 'siamrentalcars');
                            $message->to($data['sender'])
                            ->replyTo($data['sender'], 'siamrentalcars.')
                            ->subject('คุณทำรายการสำหรับสั่งจองรถเช่า siamrentalcars.com');

                            //echo 'Confirmation email after registration is completed.';
                        });


                        Mail::send('mail.order', $data_toview, function($message) use ($data)
                        {
                            $message->from($data['sender'], 'siamrentalcars');
                            $message->to($data['emailto'])
                            ->replyTo($data['sender'], 'siamrentalcars.')
                            ->subject('รายการสำหรับสั่งจองรถเช่า siamrentalcars.com');

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
                'msg' => 'Add data success',
                'value' => $randomSixDigitInt
              ]
            ]);

    }
}
