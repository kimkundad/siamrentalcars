<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\promotion_prov;
use App\promotion_user;
use App\promotion;

class ProfileController extends Controller
{
    //
    public function account_history(){

      $objs = DB::table('orders')
        ->select(
        'orders.*',
        'orders.email as email_order',
        'orders.name as name_order',
        'orders.phone as phone_order',
        'orders.detail as detail_order',
        'orders.total as total_order',
        'orders.status as status_main',
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
        ->where('orders.user_id', Auth::user()->id)
        ->get();

      //  dd($objs);

      $data['objs'] = $objs;


      return view('profile.account_history', $data);
    }

    public function add_web_promotion(Request $request){

      $id = $request['ea_number'];

      $check_data = DB::table('promotion_users')
            ->where('promotion_id', $id)
            ->where('user_id', Auth::user()->id)
            ->where('get_status', 0)
            ->count();



            if($check_data > 0){

              return response()->json([
              'data' => [
                'status' => 100,
                'msg' => 'same',
              ]
            ]);

            }else{

              $package = new promotion_user();
              $package->promotion_id = $id;
              $package->user_id = Auth::user()->id;
              $package->save();


              return response()->json([
              'data' => [
                'status' => 200,
                'msg' => 'success',
              ]
            ]);

            }



    }

    public function preferences(){
      return view('profile.preferences');
    }

    public function account_bookmarks(){

      $objs = DB::table('orders')
        ->select(
        'orders.*',
        'orders.email as email_order',
        'orders.name as name_order',
        'orders.phone as phone_order',
        'orders.detail as detail_order',
        'orders.total as total_order',
        'orders.status as status_main',
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
        ->where('orders.user_id', Auth::user()->id)
        ->where('orders.status_2', 0)
        ->orderBy('orders.id', 'desc')
        ->get();

      //  dd($objs);

      $data['objs'] = $objs;

      return view('profile.account_bookmarks', $data);
    }


}
