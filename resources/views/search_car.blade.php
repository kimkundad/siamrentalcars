@extends('layouts.template')

@section('title')

@stop

@section('stylesheet')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<style>
.lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #fff;
  margin: -4px 0 0 -4px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>


@stop('stylesheet')



@section('content')


<div class="theme-hero-area front">
  <div class="theme-hero-area-bg-wrap">
    <div class="theme-hero-area-bg" style="background-image:url({{url('assets/home/img/1500x400.png')}});" id="hero-banner"></div>
    <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
  </div>
  <div class="theme-hero-area-body">
    <div class="container">
      <div class="_pb-100 _pt-150 _pv-mob-50">






        <form class=" search-form" id="uguu" name="form1" method="POST" action="{{ url('search_car/') }}" >
          {{ csrf_field() }}
            <!-- start form -->
        <div class="theme-search-area _mob-h theme-search-area-stacked">
          <div class="theme-search-area-header _mb-20">
            <ul class="theme-breadcrumbs _mt-20">
              <li>
                <p class="theme-breadcrumbs-item-title">
                </p>
              </li>
            </ul>
          </div>


          <style>
          .select2-container--default .select2-selection--single{
            height: 55px;
                padding: 12px;
                padding-left: 27px;
                    background: none;
          }
          .select2-container--default .select2-selection--single .select2-selection__rendered {
              color: #666;
              line-height: 28px;
          }
          .select2-container--default .select2-selection--single .select2-selection__arrow b {
              border-color: #fff transparent transparent transparent;
          }
          .select2-container--default .select2-selection--single .select2-selection__arrow {
              top: 10px;
          }
          </style>

          <div class="theme-search-area-form" id="hero-search-form">
            <div class="row" data-gutter="none">
              <div class="col-md-5 ">
                <div class="row" data-gutter="none">



                  <div class="col-md-12">
                    <div class="ttheme-search-area-section first theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>

                        <select class="theme-search-area-section-input js-example-basic-single" name="start_point" style="height: 45px!important; font-size: 14px !important;">
                            <option value="{{$start_point}}" selected="selected">{{$show_text2}}, {{$show_text}}</option>

                        </select>

                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="col-md-3 ">
                <div class="row" data-gutter="none">
              <div class="col-md-8 ">
                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                    <input class="theme-search-area-section-input datePickerStart _mob-h" name="start_dat" value="{{$start_dat}}" type="text" placeholder="Check-in"/>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                  <div class="theme-search-area-section-inner">

                    <div class="theme-payment-page-form-item form-group">
                      <style>
                      option {
                            color:#000;
                            min-height: 1.5em;
                          }
                      </style>
                    <select class="theme-search-area-section-input" name="start_time" style="padding-left: 8px;">
                      <option selected="selected" value="{{$start_time}}">{{$start_time}}</option>
                      <option value="0:30">0:30</option>
                      <option value="1:00">1:00</option>
                      <option value="1:30">1:30</option>
                      <option value="2:00">2:00</option>
                      <option value="2:30">2:30</option>
                      <option value="3:00">3:00</option>
                      <option value="3:30">3:30</option>
                      <option value="4:00">4:00</option>
                      <option value="4:30">4:30</option>
                      <option value="5:00">5:00</option>
                      <option value="5:30">5:30</option>
                      <option value="6:00">6:00</option>
                      <option value="6:30">6:30</option>
                      <option value="7:00">7:00</option>
                      <option value="7:30">7:30</option>
                      <option value="8:00">8:00</option>
                      <option value="8:30">8:30</option>
                      <option value="9:00">9:00</option>
                      <option value="9:30">9:30</option>
                      <option value="10:00">10:00</option>
                      <option value="10:30">10:30</option>
                      <option value="11:00">11:00</option>
                      <option value="11:30">11:30</option>
                      <option value="12:00">12:00</option>
                      <option value="12:30">12:30</option>
                      <option value="13:00">13:00</option>
                      <option value="13:30">13:30</option>
                      <option value="14:00">14:00</option>
                      <option value="14:30">14:30</option>
                      <option value="15:00">15:00</option>
                      <option value="15:30">15:30</option>
                      <option value="16:00">16:00</option>
                      <option value="16:30">16:30</option>
                      <option value="17:00">17:00</option>
                      <option value="17:30">17:30</option>
                      <option value="18:00">18:00</option>
                      <option value="18:30">18:30</option>
                      <option value="19:00">19:00</option>
                      <option value="19:30">19:30</option>
                      <option value="20:00">20:00</option>
                      <option value="20:30">20:30</option>
                      <option value="21:00">21:00</option>
                      <option value="21:30">21:30</option>
                      <option value="22:00">22:00</option>
                      <option value="22:30">22:30</option>
                      <option value="23:00">23:00</option>
                      <option value="23:30">23:30</option>
                    </select>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
              <div class="col-md-3 ">
                <div class="row" data-gutter="none">
              <div class="col-md-8 ">
                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                    <input class="theme-search-area-section-input datePickerStart _mob-h" name="end_day" value="{{$end_day}}" type="text" placeholder="Check-in"/>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                  <div class="theme-search-area-section-inner">

                    <div class="theme-payment-page-form-item form-group">
                      <style>
                      option {
                            color:#000;
                            min-height: 1.5em;
                          }
                      </style>
                    <select class="theme-search-area-section-input" name="end_time" style="padding-left: 8px;">
                      <option selected="selected" value="{{$end_time}}">{{$end_time}}</option>
                      <option value="0:30">0:30</option>
                      <option value="1:00">1:00</option>
                      <option value="1:30">1:30</option>
                      <option value="2:00">2:00</option>
                      <option value="2:30">2:30</option>
                      <option value="3:00">3:00</option>
                      <option value="3:30">3:30</option>
                      <option value="4:00">4:00</option>
                      <option value="4:30">4:30</option>
                      <option value="5:00">5:00</option>
                      <option value="5:30">5:30</option>
                      <option value="6:00">6:00</option>
                      <option value="6:30">6:30</option>
                      <option value="7:00">7:00</option>
                      <option value="7:30">7:30</option>
                      <option value="8:00">8:00</option>
                      <option value="8:30">8:30</option>
                      <option value="9:00">9:00</option>
                      <option value="9:30">9:30</option>
                      <option value="10:00">10:00</option>
                      <option value="10:30">10:30</option>
                      <option value="11:00">11:00</option>
                      <option value="11:30">11:30</option>
                      <option value="12:00">12:00</option>
                      <option value="12:30">12:30</option>
                      <option value="13:00">13:00</option>
                      <option value="13:30">13:30</option>
                      <option value="14:00">14:00</option>
                      <option value="14:30">14:30</option>
                      <option value="15:00">15:00</option>
                      <option value="15:30">15:30</option>
                      <option value="16:00">16:00</option>
                      <option value="16:30">16:30</option>
                      <option value="17:00">17:00</option>
                      <option value="17:30">17:30</option>
                      <option value="18:00">18:00</option>
                      <option value="18:30">18:30</option>
                      <option value="19:00">19:00</option>
                      <option value="19:30">19:30</option>
                      <option value="20:00">20:00</option>
                      <option value="20:30">20:30</option>
                      <option value="21:00">21:00</option>
                      <option value="21:30">21:30</option>
                      <option value="22:00">22:00</option>
                      <option value="22:30">22:30</option>
                      <option value="23:00">23:00</option>
                      <option value="23:30">23:30</option>
                    </select>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
              <div class="col-md-1 ">
                <button class="theme-search-area-submit theme-search-area-submit-curved theme-search-area-submit-primary" style="margin-top: 0px;">เปลี่ยน</button>
              </div>
            </div>
          </div>

          <div class="theme-search-area-options _mob-h theme-search-area-options-white theme-search-area-options-center clearfix">
            <div class="btn-group theme-search-area-options-list" data-toggle="buttons">

              <label class="btn btn-primary @if($car_options == 0)
              active
              @endif">
                <input type="radio" name="car_options" value="0"  @if($car_options == 0)
                checked
                @endif/>ทั้งหมด
              </label>


              @if(isset($obj))
              @foreach($obj as $u)
              <label class="btn btn-primary @if($car_options == $u->id)
              active
              @endif">
                <input type="radio" name="car_options" value="{{$u->id}}"
                @if($car_options == $u->id)
                checked
                @endif
                />{{$u->sub_name}}
              </label>
              @endforeach
              @endif



            </div>
          </div>


        </div>


      </form>
<!-- endform -->





        <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
          <h4 class="theme-search-area-inline-title">{{$show_text2}}, {{$show_text}}</h4>
          <p class="theme-search-area-inline-details">{{$start_dat}} &rarr; {{$end_day}}</p>
          <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
            <i class="fa fa-pencil"></i>Edit
          </a>
          <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
            <div class="theme-search-area theme-search-area-vert">
              <div class="theme-search-area-header">
                <h1 class="theme-search-area-title theme-search-area-title-sm">แก้ไขข้อมูลการค้นหา</h1>
                <p class="theme-search-area-subtitle">ราคาอาจแตกต่างจากผลลัพธ์ปัจจุบัน</p>
              </div>


              <form class=" search-form" id="uguu" name="form2" method="POST" action="{{ url('search_car/') }}" >
                {{ csrf_field() }}


              <div class="theme-search-area-form">

                <div class="theme-search-area-section first theme-search-area-section-curved">
                  <label class="theme-search-area-section-label">เลือกจุดรับรถ</label>
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                    <select class="theme-search-area-section-input js-example-basic-single" name="start_point" style="height: 45px!important; width:100% font-size: 14px !important;">
                        <option value="{{$start_point}}" selected="selected">{{$show_text2}}, {{$show_text}}</option>

                    </select>
                  </div>
                </div>


                <div class="row" data-gutter="10">
                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">วันรับรถ</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-calendar"></i>
                        <input class="theme-search-area-section-input _desk-h datePickerStart" name="start_dat" value="{{$start_dat}}" type="text"/>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">เวลารับ</label>
                      <div class="theme-search-area-section-inner">
                        <select class="theme-search-area-section-input" name="start_time" style="padding-left: 8px;">
                          <option selected="selected" value="{{$start_time}}">{{$start_time}}</option>
                          <option value="0:30">0:30</option>
                          <option value="1:00">1:00</option>
                          <option value="1:30">1:30</option>
                          <option value="2:00">2:00</option>
                          <option value="2:30">2:30</option>
                          <option value="3:00">3:00</option>
                          <option value="3:30">3:30</option>
                          <option value="4:00">4:00</option>
                          <option value="4:30">4:30</option>
                          <option value="5:00">5:00</option>
                          <option value="5:30">5:30</option>
                          <option value="6:00">6:00</option>
                          <option value="6:30">6:30</option>
                          <option value="7:00">7:00</option>
                          <option value="7:30">7:30</option>
                          <option value="8:00">8:00</option>
                          <option value="8:30">8:30</option>
                          <option value="9:00">9:00</option>
                          <option value="9:30">9:30</option>
                          <option value="10:00">10:00</option>
                          <option value="10:30">10:30</option>
                          <option value="11:00">11:00</option>
                          <option value="11:30">11:30</option>
                          <option value="12:00">12:00</option>
                          <option value="12:30">12:30</option>
                          <option value="13:00">13:00</option>
                          <option value="13:30">13:30</option>
                          <option value="14:00">14:00</option>
                          <option value="14:30">14:30</option>
                          <option value="15:00">15:00</option>
                          <option value="15:30">15:30</option>
                          <option value="16:00">16:00</option>
                          <option value="16:30">16:30</option>
                          <option value="17:00">17:00</option>
                          <option value="17:30">17:30</option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                          <option value="19:00">19:00</option>
                          <option value="19:30">19:30</option>
                          <option value="20:00">20:00</option>
                          <option value="20:30">20:30</option>
                          <option value="21:00">21:00</option>
                          <option value="21:30">21:30</option>
                          <option value="22:00">22:00</option>
                          <option value="22:30">22:30</option>
                          <option value="23:00">23:00</option>
                          <option value="23:30">23:30</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">วันส่งรถ</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-calendar"></i>
                        <input class="theme-search-area-section-input _desk-h datePickerStart" name="end_day" value="{{$end_day}}" type="text"/>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">เวลาส่ง</label>
                      <div class="theme-search-area-section-inner">
                        <select class="theme-search-area-section-input" name="end_time" >
                          <option selected="selected" value="{{$end_time}}">{{$end_time}}</option>
                          <option value="0:30">0:30</option>
                          <option value="1:00">1:00</option>
                          <option value="1:30">1:30</option>
                          <option value="2:00">2:00</option>
                          <option value="2:30">2:30</option>
                          <option value="3:00">3:00</option>
                          <option value="3:30">3:30</option>
                          <option value="4:00">4:00</option>
                          <option value="4:30">4:30</option>
                          <option value="5:00">5:00</option>
                          <option value="5:30">5:30</option>
                          <option value="6:00">6:00</option>
                          <option value="6:30">6:30</option>
                          <option value="7:00">7:00</option>
                          <option value="7:30">7:30</option>
                          <option value="8:00">8:00</option>
                          <option value="8:30">8:30</option>
                          <option value="9:00">9:00</option>
                          <option value="9:30">9:30</option>
                          <option value="10:00">10:00</option>
                          <option value="10:30">10:30</option>
                          <option value="11:00">11:00</option>
                          <option value="11:30">11:30</option>
                          <option value="12:00">12:00</option>
                          <option value="12:30">12:30</option>
                          <option value="13:00">13:00</option>
                          <option value="13:30">13:30</option>
                          <option value="14:00">14:00</option>
                          <option value="14:30">14:30</option>
                          <option value="15:00">15:00</option>
                          <option value="15:30">15:30</option>
                          <option value="16:00">16:00</option>
                          <option value="16:30">16:30</option>
                          <option value="17:00">17:00</option>
                          <option value="17:30">17:30</option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                          <option value="19:00">19:00</option>
                          <option value="19:30">19:30</option>
                          <option value="20:00">20:00</option>
                          <option value="20:30">20:30</option>
                          <option value="21:00">21:00</option>
                          <option value="21:30">21:30</option>
                          <option value="22:00">22:00</option>
                          <option value="22:30">22:30</option>
                          <option value="23:00">23:00</option>
                          <option value="23:30">23:30</option>
                        </select>
                      </div>
                    </div>
                  </div>


                </div>
                <button type="submit" class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved" >เปลี่ยน</button>
              </div>



              <!--  end-->
            </div>

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















<div class="theme-page-section theme-page-section-gray">
  <div class="container">
    <div class="row row-col-static" id="sticky-parent">
      <div class="col-md-2-5 ">
        <div class="sticky-col _mob-h">
          <div class="theme-search-results-sidebar">

            <div class="theme-search-results-sidebar-sections">
            <!--  <div class="theme-search-results-sidebar-section">
                <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                <div class="theme-search-results-sidebar-section-price">
                  <input id="price-slider" name="price-slider" data-min="800" data-max="5000"/>
                </div>
              </div> -->
              <div class="theme-search-results-sidebar-section">
                <h5 class="theme-search-results-sidebar-section-title">ฟิลเตอร์ ขนาดรถ</h5>

                <div class="theme-search-results-sidebar-section-checkbox-list">
                  <div class="theme-search-results-sidebar-section-checkbox-list-items">
                    <form id="formname1" name="formname1" method="get">
                    @if(isset($get_value_2))
                    @foreach($get_value_2 as $u)
                    <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                      <label class="icheck-label">
                        <input class="icheck checkbox-buy" type="checkbox" name="option_in[]" value="{{$u->id_sub_cat_2}}" />
                        <span class="icheck-title">{{$u->sub_name}}</span>
                      </label>
                      <span class="theme-search-results-sidebar-section-checkbox-list-amount">{{$u->count_car}}</span>
                    </div>
                    @endforeach
                    @endif
                    </form>

                  </div>
                </div>

              </div>
















            </div>
          </div>

        </div>
      </div>


      <div class="col-md-6-5 ">




        <div class="theme-search-results-sign-in _mob-h bg-grad">
          <i class="theme-search-results-sign-in-icon fa fa-unlock-alt"></i>
          <h5 class="theme-search-results-sign-in-title">Sign in to unlock our secret delas. Save up to
            <b>50%</b>
          </h5>
          <a class="btn theme-search-results-sign-in-btn btn-ghost btn-white" href="#">Sign in now</a>
        </div>



        <div class="theme-search-results">
          <div class="_mob-h" >

            <div class="text-center" id="get_load">
              <br><br>
              <div>
            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
            <br><br>
            </div>

            <div id="targeted">

            @if(isset($data_car1))
            @foreach($data_car1 as $j)
            @foreach($j as $u)
            <div class="theme-search-results-item _mb-10 theme-search-results-item-">
              <div class="theme-search-results-item-preview">
                <a class="theme-search-results-item-mask-link" href="{{url('car_detail/'.$u->id_car)}}"></a>
                <div class="row" data-gutter="20">
                  <div class="col-md-5 ">
                    <div class="theme-search-results-item-img-wrap">
                      <img class="theme-search-results-item-img" src="{{url('assets/back/image/car/'.$u->image)}}" alt="{{$u->name}}" title="{{$u->name}}"/>
                    </div>

                  </div>
                  <div class="col-md-5 ">
                    <h5 class="theme-search-results-item-title theme-search-results-item-title-lg">{{$u->name}}</h5>
                    <p class="theme-search-results-item-car-location-subtitle">size : {{$u->sub_name}}</p>
                    <div class="theme-search-results-item-car-location">
                      <i class="fa fa-building theme-search-results-item-car-location-icon"></i>
                      <div class="theme-search-results-item-car-location-body">
                        <p class="theme-search-results-item-car-location-title">{{$u->part_name}}</p>
                        <p class="theme-search-results-item-car-location-subtitle">{{$u->PROVINCE_NAME}}</p>
                      </div>
                    </div>
                    <ul class="theme-search-results-item-car-list">
                      <li>
                        <i class="fa fa-check"></i>{{$u->insurance}}
                      </li>
                      <li>
                        <i class="fa fa-check"></i>{{$u->grear}}
                      </li>
                      <li>
                        <i class="fa fa-check"></i>จำนวนผู้โดยสาร {{$u->total_p}}
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2 ">
                    <div class="theme-search-results-item-book">
                      <div class="theme-search-results-item-price">
                        <p class="theme-search-results-item-price-tag">฿ {{$u->price}}</p>
                        <p class="theme-search-results-item-price-sign">ต่อวัน</p>
                      </div>
                      <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="{{url('car_detail/'.$u->id_car)}}">เลือกคันนี้</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endforeach
            @endif




            </div>



          </div>




          <div class="_desk-h">


            <div id="targeted2">

            @if(isset($data_car1))
            @foreach($data_car1 as $j)
            @foreach($j as $u)
            <div class="theme-search-results-item _br-3 _mb-20 _bsh-xl theme-search-results-item-grid">
              <div class="_h-30vh theme-search-results-item-img-wrap-inner">
                <img class="theme-search-results-item-img" src="{{url('assets/back/image/car/'.$u->image)}}" alt="{{$u->name}}" title="{{$u->name}}"/>
              </div>
              <div class="theme-search-results-item-grid-body _pt-0">
                <a class="theme-search-results-item-mask-link" href="{{url('car_detail/'.$u->id_car)}}"></a>
                <div class="theme-search-results-item-grid-header">
                  <h5 class="theme-search-results-item-title _fs">{{$u->name}}</h5>
                </div>
                <div class="theme-search-results-item-grid-caption">
                  <div class="row" data-gutter="10">
                    <div class="col-xs-9 ">
                      <div class="theme-search-results-item-car-location">
                        <i class="fa fa-building theme-search-results-item-car-location-icon"></i>
                        <div class="theme-search-results-item-car-location-body">
                          <p class="theme-search-results-item-car-location-title">{{$u->part_name}}</p>
                          <p class="theme-search-results-item-car-location-subtitle">{{$u->PROVINCE_NAME}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 ">
                      <div class="theme-search-results-item-price">
                        <p class="theme-search-results-item-price-tag">฿ {{$u->price}}</p>
                        <p class="theme-search-results-item-price-sign">ต่อวัน</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endforeach
            @endif




            </div>



          </div>



          <div class="theme-search-results-mobile-filters" id="mobileFilters">
            <a class="theme-search-results-mobile-filters-btn magnific-inline" href="#MobileFilters">
              <i class="fa fa-filter"></i>Filters
            </a>
            <div class="magnific-popup mfp-hide" id="MobileFilters">
              <div class="theme-search-results-sidebar">
                <div class="theme-search-results-sidebar-sections">
                <!--  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                    <div class="theme-search-results-sidebar-section-price">
                      <input id="price-slider-mob" name="price-slider" data-min="100" data-max="500"/>
                    </div>
                  </div> -->
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Pickup Location</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">


                        <form id="formname2" name="formname2" method="get">
                        @if(isset($get_value_2))
                        @foreach($get_value_2 as $u)
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck checkbox-buy" type="checkbox" name="option_in[]" value="{{$u->id_sub_cat_2}}" />
                            <span class="icheck-title">{{$u->sub_name}}</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">{{$u->count_car}}</span>
                        </div>
                        @endforeach
                        @endif
                        </form>




                      </div>
                    </div>
                  </div>






                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="btn _tt-uc _fs-sm btn-white btn-block btn-lg" href="#">Load More Results</a>
      </div>

      <!-- right bar -->
      <div class="col-md-3 ">
        <div class="sticky-col _mob-h">


          <div class="theme-ad _mb-20">
            <a class="theme-ad-link" href="#"></a>
            <p class="theme-ad-sign">Advertisement</p>
            <img class="theme-ad-img" src="{{url('assets/home/img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
          </div>
          <div class="theme-ad">
            <a class="theme-ad-link" href="#"></a>
            <p class="theme-ad-sign">Advertisement</p>
            <img class="theme-ad-img" src="{{url('assets/home/img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
          </div>

        </div>
      </div>



    </div>
  </div>
</div>

@endsection

@section('scripts')

<script>

$(document).ready(function(){


  $("#uguu").submit(function() {

    var set_size = jQuery("#start_point").val();

    console.log(set_size)


    if (set_size === "") {
        alert("โปรดระบุข้อมูลให้ครบถ้วน");
        return false;
    }
});



$("#get_load").hide();
var numArray = [];
var arrayLength = 0;
$("input").on('ifChecked', function(event){
    numArray.push($(this).val());
    /*arrayLength = numArray.length;
    $(".set_item").hide();
    for (var i = 0; i < arrayLength; i++) {
    $(".item-car-"+numArray[i]).show();
  }
    console.log($(".item-car-"+$(this).val()).show());

    */

    $.ajax({
    type: "POST",
    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    data: {
            "data_car" : numArray,
            "get_prov_2" : {{$get_prov_2}}
          },
    url: "{{url('/api/search_new')}}",
    success: function(data) {

        $('#get_load').html("<div class='lds-roller'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>");

        $("#get_load").show();
        $('#targeted').html("");
        $('#targeted2').html("");

        setTimeout(function(){
          $("#get_load").hide();
        $('#targeted').html(data.data.html);
        $('#targeted2').html(data.data.html2);
      }, 2000);

    }
    });

    console.log(numArray);
});

$("input").on('ifUnchecked', function(event){
    var index = numArray.indexOf($(this).val());
    if (index > -1) {
        numArray.splice(index, 1);
    }


    $.ajax({
    type: "POST",
    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    data: {
            "data_car" : numArray,
            "get_prov_2" : {{$get_prov_2}}
          },
    url: "{{url('/api/search_new')}}",
    success: function(data) {

      $("#get_load").show();

      $('#targeted').html("");
      $('#targeted2').html("");

      setTimeout(function(){
        $("#get_load").hide();
        $('#targeted').html(data.data.html);
        $('#targeted2').html(data.data.html2);
      }, 2000);
    }
    });
    /*
    $(".set_item").hide();
    $(".item-car-"+$(this).val()).hide();
    for (var i = 0; i < arrayLength; i++) {
    $(".item-car-"+numArray[i]).show();
  }*/
  console.log(numArray);

});


});



function autocomplete() {

    $('.typeahead').typeahead({
        minLength: 1,
        autoselect: false,
        showHintOnFocus: true,
        source: function(q, cb) {
            return $.ajax({
                dataType: 'json',
                type: 'get',
                url: '{{url('/search/data/?field2=')}}' + q,
                chache: false,
                success: function(data) {
                  console.log(data);
                    if(data){

                      var res = [];
                      $.each(data, function(index, val){
                          if(val !== "%s") {
                              res.push({
                                  id: index,
                                  name: val.name
                              })
                          }else{
                            $(this).val('');
                          //  $('.typeahead').typeahead('val','');
                          }
                      })
                      cb(res);

                    }else{
                    //  $('.typeahead').typeahead('val','');
                    }


                }
            })
        }
    })

}


</script>


<script src="{{url('js/select2.js')}}"></script>

<script>
$(document).ready(function() {

  $('.js-example-basic-single').select2();




  $(".js-example-basic-single").select2({
 ajax: {
  url: "{{url('/api/get_select2')}}",
  type: "post",
  dataType: 'json',
  delay: 250,
  data: function (params) {
   return {
     searchTerm: params.term // search term
   };
  },
  processResults: function (response) {
    return {
       results: response
    };
  },
  cache: true
 }
});
});
</script>

@stop('scripts')
