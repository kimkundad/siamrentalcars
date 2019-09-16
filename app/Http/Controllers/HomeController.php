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
                          "$get_provinces->PROVINCE_NAME,$x->position_name";
                        ;
                      }
                  }else{
                    $admin[] = null;
                  }




      return Response::json($admin);

    }
}
