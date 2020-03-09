
@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')



@stop('stylesheet')

@section('content')


<div class="theme-page-section theme-page-section-gray theme-page-section-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-2-5 ">
        <div class="theme-account-sidebar">
          <div class="theme-account-avatar">
            @if(Auth::user()->provider == 'email')
            <img class="theme-account-avatar-img" src="{{url('assets/back/img/avatar/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}"/>
            @else
            <img class="theme-account-avatar-img" src="{{$objs->avatar}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}"/>

            @endif
            <p class="theme-account-avatar-name">Welcome,
              <br/>{{Auth::user()->name}}
            </p>
          </div>
          <nav class="theme-account-nav">
            <ul class="theme-account-nav-list">
              <li>
                <a href="{{url('preferences')}}">
                  <i class="fa fa-cog"></i>ตั้งค่า
                </a>
              </li>


              <li class="active">
                <a href="{{url('account_history')}}">
                  <i class="fa fa-history"></i>ประวัติการใช้บริการ
                </a>
              </li>
              <li>
                <a href="{{url('account_bookmarks')}}">
                  <i class="fa fa-bookmark"></i>Booking
                </a>
              </li>
              <li>
                <a href="{{url('logout')}}">
                  <i class="fa fa-lock"></i>ออกจากระบบ
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-md-9-5 ">
        <h1 class="theme-account-page-title">Booking History</h1>




        <div class="theme-account-history">
          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th>บริการ</th>
                <th>สถานที่ที่รับรถ</th>
                <th>วันรับรถ - คืนรถ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($objs))
              @foreach($objs as $u)
              <tr>
                <td class="theme-account-history-type">
                  <i class="fa fa-car theme-account-history-type-icon"></i>
                </td>
                <td>
                  <p class="theme-account-history-type-title">{{$u->car_order}}</p>
                  <a class="theme-account-history-item-name" href="#">{{$u->part_name}}</a>
                </td>
                <td>
                  <a href="#">{{$u->position_name}}, {{$u->PROVINCE_NAME}}</a>
                </td>
                <td class="theme-account-history-tr-date">
                  <p class="theme-account-history-date">{{$u->re_car}} &#8212; {{$u->se_car}}</p>
                </td>
                <td>
                  <p class="theme-account-history-item-price">฿ {{$u->total_order}}</p>
                </td>
              </tr>
              @endforeach
              @endif

            </tbody>
          </table>
        </div>




      </div>



    </div>
  </div>
</div>




@endsection

@section('scripts')


@stop('scripts')
