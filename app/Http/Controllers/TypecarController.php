<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\sub_category;
use App\product;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class TypecarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $cat = DB::table('sub_categories')
            ->get();

            $s = 1;
            foreach ($cat as $obj) {
              /*  $optionsRes = [];
                $options = DB::table('products')->select(
                  'products.*'
                  )
                  ->where('products.cat_id', $obj->id)
                  ->count();

                     $optionsRes['count'] = $options; */

                $obj->options = 0;
              }
              //dd($cat);
              $data['objs'] = $cat;
        return view('admin.type_cars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
      $data['url'] = url('admin/type_cars');
      $data['datahead'] = "สร้างประเภทรถ ";
      return view('admin.type_cars.create', $data);
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
        $this->validate($request, [
       'name' => 'required'
      ]);


      $package = new sub_category();
      $package->sub_name = $request['name'];
      $package->save();
      return redirect(url('admin/type_cars'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
        $obj = sub_category::find($id);
        $data['url'] = url('admin/type_cars/'.$id);
        $data['datahead'] = "แก้ไขหมวดหมู่";
        $data['method'] = "put";
        $data['objs'] = $obj;
        return view('admin.type_cars.edit', $data);
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
        $this->validate($request, [
           'name' => 'required'
       ]);

       $package = sub_category::find($id);
        $package->sub_name = $request['name'];
        $package->save();


      return redirect(url('admin/type_cars'))->with('edit_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
