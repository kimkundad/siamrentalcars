<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {

      $data['datahead'] = "รายชื่อธนาคารทั้งหมด";
      return view('admin.dashboard.index', $data);
    }
}
