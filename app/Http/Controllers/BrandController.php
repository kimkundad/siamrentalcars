<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\category;
use App\product;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cat = DB::table('categories')->select(
            'categories.*'
            )
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
              $data['datahead'] = "จัดการหมวดหมู่";
        return view('admin.brand_cars.index', $data);
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
      $data['url'] = url('admin/brand_cars');
      $data['datahead'] = "สร้างหมวดหมู่ ";
      return view('admin.brand_cars.create', $data);
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


      $package = new category();
      $package->name_cat = $request['name'];
      $package->save();
      return redirect(url('admin/brand_cars'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
      $obj = category::find($id);
      $data['url'] = url('admin/brand_cars/'.$id);
      $data['datahead'] = "แก้ไขหมวดหมู่";
      $data['method'] = "put";
      $data['objs'] = $obj;
      return view('admin.brand_cars.edit', $data);
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

     $package = category::find($id);
      $package->name_cat = $request['name'];
      $package->save();

  
    return redirect(url('admin/brand_cars'))->with('edit_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
