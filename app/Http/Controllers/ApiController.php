<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_category;
use Response;
use App\province;
use App\order;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class ApiController extends Controller
{
    //
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
      $package->save();

      return response()->json([
              'data' => [
                'status' => 200,
                'msg' => 'Add data success',
                'value' => $randomSixDigitInt
              ]
            ]);

    }
}
