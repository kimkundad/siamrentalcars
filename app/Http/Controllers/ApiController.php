<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_category;
use Response;
use App\province;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class ApiController extends Controller
{
    //
    public function add_my_order(Request $request){

      $randomSixDigitInt = (\random_int(100000, 999999));

      return response()->json([
              'data' => [
                'status' => 200,
                'msg' => 'Add data success',
                'get_data' => $request->all()
              ]
            ]);

    }
}
