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
}
