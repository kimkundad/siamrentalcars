<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\province;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $pro = DB::table('province')
        ->paginate(15);

        foreach($pro as $u){

          $obj1 = DB::table('position_links')
          ->where('prov_id', $u->PROVINCE_ID)
          ->count();

          $u->count_position = $obj1;
        }


        $data['objs'] = $pro;
        return view('admin.position.index', $data);
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
        $obj = DB::table('province')
        ->where('PROVINCE_ID', $id)
        ->first();


        $obj1 = DB::table('position_links')
        ->where('prov_id', $id)
        ->get();

              $s = 1;
              $data['s'] = $s;
              $data['objs'] = $obj;
              $data['objs1'] = $obj1;

              $data['url'] = url('admin/position/'.$id);
              $data['method'] = "put";

              return view('admin.position.edit', $data);
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


    public function add_position(Request $request, $id){

      $this->validate($request, [
           'position_name' => 'required'
       ]);

       DB::table('position_links')->insert(
          ['prov_id' => $id, 'position_name' => $request['position_name']]
      );

      return redirect(url('admin/position/'.$id.'/edit'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

    }


    public function edit_position(Request $request, $id){

      DB::table('position_links')
            ->where('id', $id)
            ->update(['position_name' => $request['position_name']]);

            return redirect(url('admin/position/'.$request['id_pro'].'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }


    public function del_position(Request $request, $id){

      DB::table('position_links')
              ->where('id', $id)
              ->delete();

              return redirect(url('admin/position/'.$request['id_pro'].'/edit'))->with('delete_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
