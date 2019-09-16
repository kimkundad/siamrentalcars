@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">



        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h4 class="card-title">รายชื่อลูกค้า</h4>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="order-listing_filter" class="dataTables_filter">

                <input type="search" class="form-control" placeholder="Search" aria-controls="order-listing" style="width:70%; float:right">

            </div>
          </div>
        </div>
        <br />
        <div class="table-responsive">
          <table class="table ">
            <thead>
              <tr>

                  <th>ชื่อผู้ใช้งาน</th>
                  <th>อีเมล</th>
                  <th>ผ่านทาง</th>
                  <th>วันที่สมัคร</th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
              @if($objs)
                @foreach($objs as $u)
              <tr>

                <td>
                @if($u->provider == 'email')
                  <img src="{{url('assets/back/img/avatar/'.$u->avatar)}}" alt="{{$u->name}}" >
                @else
                  <img src="//{{$u->avatar}}" alt="{{$u->name}}" >
                @endif {{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->provider}}</td>
                <td id="{{ $day = date('n', strtotime($u->created_at))}}">{{$u->created_at}}</td>
                <td>
                  <a href="#" class="btn btn-outline-primary btn-sm">ดูข้อมูล</a>
                </td>
              </tr>
              @endforeach
              @endif


            </tbody>
          </table>
          {{ $objs->links() }}
        </div>
      </div>
    </div>
  </div>

  </div>



@stop



@section('scripts')



@stop('scripts')
