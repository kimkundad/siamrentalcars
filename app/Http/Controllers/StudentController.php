<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index()
    {

      $objs = DB::table('users')
          ->paginate(15);


          $count_user = DB::table('users')
              ->count();

        $data['objs'] = $objs;
        $data['count_user'] = $count_user;
        $data['datahead'] = "รายชื่อลูกค้า";
        return view('admin.user.index', $data);
    }


    public function show($id)
    {

      $objs = DB::table('users')
          ->where('id', $id)
          ->first();

        $data['objs'] = $objs;



        $order = DB::table('orders')->select(
              'orders.*',
              'orders.id as id_q',
              'orders.name as user_name',
              'orders.phone as user_phone',
              'orders.created_at as create',
              'orders.status as statuss',
              'cars.*',
              'cars.name as car_name',
              'partners.*',
              'position_links.*',
              'province.*'
              )
              ->leftjoin('cars', 'cars.id',  'orders.pro_id')
              ->leftjoin('partners', 'partners.id',  'orders.part_id')
              ->leftjoin('position_links', 'position_links.id',  'orders.position_id')
              ->leftjoin('province', 'province.PROVINCE_ID',  'orders.prov_id')
              ->where('orders.user_id', $id)
              ->paginate(15);




          $data['order'] = $order;


        $data['datahead'] = "รายชื่อลูกค้า";
        return view('admin.user.show', $data);
    }
}
