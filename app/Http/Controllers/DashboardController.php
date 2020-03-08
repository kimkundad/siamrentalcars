<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\order;

class DashboardController extends Controller
{
    //
    public function index()
    {

      $count_order = DB::table('orders')->count();
      $data['count_order'] = $count_order;

      $count_user = DB::table('users')->count();
      $data['count_user'] = $count_user;

      $position_links = DB::table('position_links')->count();
      $data['position_links'] = $position_links;

      $cars = DB::table('cars')->count();
      $data['cars'] = $cars;

      $partner = DB::table('partners')->count();
      $data['partner'] = $partner;


      $cars_per1 = DB::table('orders')
      ->where('status', 0)
      ->count();

      $data['get_per1'] = $cars_per1;

      $cars_per1 = (($cars_per1/$count_order)*100);

      $data['cars_per1'] = $cars_per1;




      $cars_per2 = DB::table('orders')
      ->where('status', 1)
      ->count();

      $data['get_per2'] = $cars_per2;

      $cars_per2 = (($cars_per2/$count_order)*100);

      $data['cars_per2'] = $cars_per2;

    //  dd($cars_per2);

      return view('admin.dashboard.index', $data);
    }
}
