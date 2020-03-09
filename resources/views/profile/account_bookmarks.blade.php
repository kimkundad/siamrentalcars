
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
            <img class="theme-account-avatar-img" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}"/>

            @endif



            <p class="theme-account-avatar-name">Welcome,
              <br/>{{Auth::user()->name}}
            </p>
          </div>
          <nav class="theme-account-nav">
            <nav class="theme-account-nav">
              <ul class="theme-account-nav-list">
                <li >
                  <a href="{{url('preferences')}}">
                    <i class="fa fa-cog"></i>ตั้งค่า
                  </a>
                </li>


                <li >
                  <a href="{{url('account_history')}}">
                    <i class="fa fa-history"></i>ประวัติการใช้บริการ
                  </a>
                </li>
                <li class="active">
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
          </nav>
        </div>
      </div>
      <div class="col-md-9-5 ">


        <h1 class="theme-account-page-title">Booking Cars</h1>

        @if(isset($objs))
        @foreach($objs as $u)
        <div class="theme-account-bookmarks-item">
          <div class="row">
            <div class="col-md-6 ">
              <div class="theme-account-bookmarks-item-thumb">
                <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                <div class="row row-eq-height" data-gutter="none">
                  <div class="col-md-3 ">
                    <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                      <div class="banner-bg" style="background-image:url({{url('assets/back/image/car/'.$u->image)}});"></div>
                      <a class="banner-link" href="#"></a>
                    </div>
                  </div>
                  <div class="col-md-9 ">
                    <div class="theme-account-bookmarks-item-thumb-body">
                      <div class="row">
                        <div class="col-xs-9 ">
                          <p class="theme-account-bookmarks-item-location">{{$u->car_order}}</p>
                          <h5 class="theme-account-bookmarks-item-title" style=" height: 22px;">{{$u->part_name}}</h5>
                          <h5 class="theme-account-bookmarks-item-title" style=" height: 22px;">
                            @if($u->status_main == 0)
                            <span class="text-warning">รอการติดต่อกลับ</span>
                            @else
                            <span class="text-success">อยู่ระหว่างการใช้งาน</span>

                            @endif
                          </h5>
                        </div>
                        <div class="col-xs-3 ">
                          <p class="theme-account-bookmarks-item-price">฿ {{$u->total_order}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="theme-account-bookmarks-item-info">
                <p class="theme-account-bookmarks-item-date">วันรับรถ {{$u->re_car}}</p>
                <ul class="theme-account-bookmarks-item-actions">
                  <li>
                    <a href="#">
                      <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>รายละเอียดเพิ่มเติม
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>ยกเลิกการจอง
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endif





      </div>
    </div>
  </div>
</div>




@endsection

@section('scripts')


@stop('scripts')
