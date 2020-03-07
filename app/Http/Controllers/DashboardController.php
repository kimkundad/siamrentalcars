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

      return view('admin.dashboard.index', $data);
    }
}
