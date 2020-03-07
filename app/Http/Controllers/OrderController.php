<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $objs = DB::table('orders')->select(
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
              ->paginate(15);




          $data['objs'] = $objs;


        $data['datahead'] = "รายชื่อธนาคารทั้งหมด";
        return view('admin.order.index', $data);
    }


    public function order_status(Request $request){

      $user = order::findOrFail($request->user_id);

                if($user->status == 1){
                    $user->status = 0;
                } else {
                    $user->status = 1;
                }


        return response()->json([
        'data' => [
          'success' => $user->save(),
        ]
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $objs = DB::table('orders')->select(
              'orders.*',
              'orders.id as id_q',
              'orders.name as user_name',
              'orders.phone as user_phone',
              'orders.email as user_email',
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
              ->where('orders.id', $id)
              ->first();



          $data['objs'] = $objs;


        $data['datahead'] = "รายชื่อธนาคารทั้งหมด";
        return view('admin.order.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function order_del($id){

      $obj = order::find($id);
      $obj->delete();
      return redirect(url('admin/order/'))->with('del_product','คุณทำการลบอสังหา สำเร็จ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
