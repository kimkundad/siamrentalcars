@extends('layouts.template')

@section('title')

@stop



@section('stylesheet')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@stop('stylesheet')


<style>
.theme-hero-area-body {
    position: relative;
    z-index: 6;
    height: auto !important;
}
</style>
@section('content')

<div class="theme-hero-area">
  <div class="theme-hero-area-bg-wrap">
    <div class="theme-hero-area-bg" style="background-image:url(img/o7qk1vqy3p0_1500x800.jpeg);"></div>
    <div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
  </div>
  <div class="theme-hero-area-body">
    <div class="theme-page-section _pt-150 _pb-100 _pv-mob-50" style="padding-bottom: 140px !important; padding-top: 170px !important;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="theme-search-area-tabs">
              <div class="theme-search-area-tabs-header _c-w _ta-c _mb-20">
                <h1 class="theme-search-area-tabs-title theme-search-area-tabs-title-sm">รับจัดหารถเช่า {{ env('pass_mail') }}</h1>
                <p class="theme-search-area-subtitle">จากผู้ให้บริการรถเช่าคุณภาพ เลือกวันและเวลา ที่ต้องการใช้รถและคืนรถ</p>
              </div>
              <div class="tabbable">
              <!--  <ul class="nav nav-tabs nav-white nav-line nav-center nav-lg nav-no-br nav-mob-inline" role="tablist">
                  <li class="active" role="presentation">
                    <a aria-controls="SearchAreaTabs-1" role="tab" data-toggle="tab" href="#SearchAreaTabs-1">Hotels</a>
                  </li>
                  <li role="presentation">
                    <a aria-controls="SearchAreaTabs-2" role="tab" data-toggle="tab" href="#SearchAreaTabs-2">Homes</a>
                  </li>
                  <li role="presentation">
                    <a aria-controls="SearchAreaTabs-3" role="tab" data-toggle="tab" href="#SearchAreaTabs-3">Flights</a>
                  </li>
                  <li role="presentation">
                    <a aria-controls="SearchAreaTabs-4" role="tab" data-toggle="tab" href="#SearchAreaTabs-4">Cars</a>
                  </li>
                  <li role="presentation">
                    <a aria-controls="SearchAreaTabs-5" role="tab" data-toggle="tab" href="#SearchAreaTabs-5">Experiences</a>
                  </li>
                </ul> -->

                <div class="tab-content _pt-10">



<style>
.select2-container--default .select2-selection--single{
  height: 45px;
      padding: 7px;
      padding-left: 22px;
          background: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff;
    line-height: 28px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #fff transparent transparent transparent;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 10px;
}
.select2-containe{
  width: 100% !important;
}
</style>


                  <div class="tab-pane active" id="SearchAreaTabs-4" role="tab-panel">
                <form class=" search-form"  id="uguu" name="form1" method="POST" action="{{ url('search_car/') }}" >
                  {{ csrf_field() }}
                    <!-- start form -->



                    <div class="theme-search-area theme-search-area-stacked theme-search-area-white">




                      <div class="theme-search-area-form">
                        <div class="row" data-gutter="none">
                          <div class="col-md-5 ">
                            <div class="row" data-gutter="none">
                              <div class="col-md-12">
                                <div class="theme-search-area-section first theme-search-area-section-fade-white
                                theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm
                                theme-search-area-section-curved">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <select class="theme-search-area-section-input js-example-basic-single" id="start_point" name="start_point" style="height: 45px!important; font-size: 14px !important;">
                                        <option value="">เลือกจุดรับรถ</option>

                                    </select>
                                    <!--<input class="theme-search-area-section-input typeahead" type="text" name="start_point" placeholder="จุดรับรถ" data-provide="typeahead"/> -->


                                  </div>
                                </div>
                              </div>
                              <!--
                               <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm theme-search-area-section-curved">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text" name="end_point" placeholder="จุดคืนรถ" data-provide="typeahead"/>
                                  </div>
                                </div>
                              </div>

                            -->
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="row" data-gutter="none">
                          <div class="col-md-8 ">
                            <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                <input class="theme-search-area-section-input datePickerStart " name="start_dat" value="{{date('d')}}-{{date('m')}}-{{date('Y')}}" type="text" placeholder="วันรับรถ"/>

                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-no-border
                            theme-search-area-section-mr theme-search-area-section-sm theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">

                                <div class="theme-payment-page-form-item form-group">
                                  <style>
                                  option {
                                        color:#000;
                                        min-height: 1.5em;
                                      }
                                  </style>
                                <select class="theme-search-area-section-input" name="start_time" style="padding-left: 8px;">
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
                                  <option selected="selected" value="10:00">10:00</option>
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

                          <div class="col-md-3">
                            <div class="row" data-gutter="none">
                          <div class="col-md-8 ">
                            <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                <input class="theme-search-area-section-input datePickerStart " name="end_day" value="{{date('d')}}-{{date('m')}}-{{date('Y')}}" type="text" placeholder="วันส่งรถ"/>

                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">

                                <div class="theme-payment-page-form-item form-group">
                                  <style>
                                  option {
                                        color:#000;
                                        min-height: 1.5em;
                                      }
                                  </style>
                                <select class="theme-search-area-section-input" name="end_time" style="padding-left: 8px;">
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
                                  <option selected="selected" value="10:00">10:00</option>
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
                            <button type="submit"  class="theme-search-area-submit _mt-0 theme-search-area-submit-no-border theme-search-area-submit-white theme-search-area-submit-sm theme-search-area-submit-curved">ค้นหา</button>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-area-options _mob-h theme-search-area-options-center theme-search-area-options-dot-white clearfix">
                        <div class="btn-group theme-search-area-options-list" data-toggle="buttons">

                          <label class="btn btn-primary active">
                            <input type="radio" name="car_options" value="0" id="car-option-1" checked/>ทั้งหมด
                          </label>

                          @if(isset($obj))
                          @foreach($obj as $u)
                          <label class="btn btn-primary">
                            <input type="radio" name="car_options" value="{{$u->id}}" id="car-option-2"/>{{$u->sub_name}}
                          </label>
                          @endforeach
                          @endif



                        </div>
                      </div>



                    </div>
                    </form>
<!-- endform -->



                  </div>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="theme-page-section theme-page-section-xxl theme-page-section-gray">
  <div class="container">
    <div class="theme-page-section-header" style="margin-bottom: 10px;">
      <h5 class="theme-page-section-title">จุดหมายปลายทางยอดนิยม</h5>
      <p class="theme-page-section-subtitle">เมืองที่ได้รับความนิยมที่สุดในการเดินทางในเดือนนี้</p>
    </div>


    <div class="tabbable">


      <div class="tab-content _pt-20" style="padding:20px;">
        <div class="tab-pane active" id="TravelRoute-1" role="tab-panel">
          <div class="row row-col-gap" data-gutter="10">
            <div class="col-md-4 ">
              <div class="banner _h-40vh _br-3 banner-animate banner-animate-mask-in">
                <div class="banner-bg" style="background-image:url({{url('img/23415224_531702273865620_1019474231772926170_o.jpg')}});"></div>
                <div class="banner-mask _mob-h"></div>
                <a class="banner-link" href="{{url('search_car/?start_point=1&car_options=0')}}"></a>
                <div class="banner-caption _pt-120 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">นครพนม</h5>
                </div>
              </div>
            </div>
            <div class="col-md-8 ">
              <div class="banner _h-40vh _br-3 banner-animate banner-animate-mask-in">
                <div class="banner-bg" style="background-image:url({{url('img/zzb4wnm8lfjyqw8wzk7schgniudnin.jpg')}});"></div>
                <div class="banner-mask _mob-h"></div>
                <a class="banner-link" href="{{url('search_car/?start_point=3&car_options=0')}}"></a>
                <div class="banner-caption _pt-120 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">เชียงใหม่</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in">
                <div class="banner-bg" style="background-image:url({{url('img/1316762622.jpg')}});"></div>
                <div class="banner-mask _mob-h"></div>
                <a class="banner-link" href="{{url('search_car/?start_point=5&car_options=0')}}"></a>
                <div class="banner-caption _pt-120 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">บุรีรัมย์</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in">
                <div class="banner-bg" style="background-image:url({{url('img/25348298350_225401d83e_152365b.png')}});"></div>
                <div class="banner-mask _mob-h"></div>
                <a class="banner-link" href="{{url('search_car/?start_point=7&car_options=0')}}"></a>
                <div class="banner-caption _pt-120 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">อุบลราชธานี</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in">
                <div class="banner-bg" style="background-image:url({{url('img/img_pro2.png')}});"></div>
                <div class="banner-mask _mob-h"></div>
                <a class="banner-link" href="{{url('search_car/?start_point=9&car_options=0')}}"></a>
                <div class="banner-caption _pt-120 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">สกลนคร</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in">
                <div class="banner-bg" style="background-image:url({{url('img/udon-750x500.jpg')}});"></div>
                <div class="banner-mask _mob-h"></div>
                <a class="banner-link" href="{{url('search_car/?start_point=11&car_options=0')}}"></a>
                <div class="banner-caption _pt-120 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">อุดรธานี</h5>
                </div>
              </div>
            </div>
          </div>
        </div>








      </div>
    </div>

  </div>
</div>


<div class="theme-hero-area">
  <div class="theme-hero-area-bg-wrap">
    <div class="theme-hero-area-bg" style="background-image:url({{url('img/beige-volkswagen-beetle-144171_1800x500.jpeg')}});"></div>
    <div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
  </div>
  <div class="theme-hero-area-body">
    <div class="theme-page-section theme-page-section-xxl">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="theme-hero-text theme-hero-text-white theme-hero-text-center">
              <div class="theme-hero-text-header">
                <h2 class="theme-hero-text-title">ประหยัดสูงสุด 30%</h2>
                <p class="theme-hero-text-subtitle">สมัครสมาชิกตอนนี้และปลดล็อคข้อตกลงของเรา ประหยัดสูงสุด 30% ด้วยการเข้าถึงข้อเสนอพิเศษของเราสำหรับรถยนต์เช่า ไปยังจุดหมายปลายทางและประสบการณ์การเดินทาง</p>
              </div>
              <a class="btn _mt-20 _tt-uc btn-white btn-ghost btn-lg" href="{{url('promotion')}}">ดูส่วนลดทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
.feature-title {
    margin-bottom: 15px;
    margin-top: 0;
    font-weight: normal;
    line-height: 1.2em;
    font-size: 17px;
}
</style>

<div class="theme-page-section theme-page-section-xxl theme-page-section-gray">
      <div class="container">
        <div class="row row-col-mob-gap" data-gutter="60">
          <div class="col-md-3 ">
            <div class="feature feature-white feature-center">
              <i class="feature-icon feature-icon-line feature-icon-box feature-icon-round lin lin-globe-alt"></i>
              <div class="feature-caption">
                <h5 class="feature-title">มีบริการครอบคลุมทั่วประเทศไทย มากกว่า 35 จังหวัด</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="feature feature-white feature-center">
              <i class="feature-icon feature-icon-line feature-icon-box feature-icon-round lin lin-badge"></i>
              <div class="feature-caption">
                <h5 class="feature-title">รับประกันราคาดีที่สุด จองฟรีไม่มีค่าธรรมเนียมใดๆ</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="feature feature-white feature-center">
              <i class="feature-icon feature-icon-line feature-icon-box feature-icon-round lin lin-wallet"></i>
              <div class="feature-caption">
                <h5 class="feature-title">มีหรือไม่มีบัตรเครดิตก็เช่าได้ ปลอดภัยตั้งแต่เริ่มจองจนสิ้นสุดการเช่า</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="feature feature-white feature-center">
              <i class="feature-icon feature-icon-line feature-icon-box feature-icon-round lin lin-earphones-alt"></i>
              <div class="feature-caption">
                <h5 class="feature-title">บริการตลอด 24 ชั่วโมง มีเจ้าหน้าที่คอยให้บริการตลอดการเช่า</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@if(isset($promo))
    <div class="theme-page-section theme-page-section-xl">
      <div class="container">
        <div class="theme-page-section-header">
          <h5 class="theme-page-section-title">ข้อเสนอยอดนิยม</h5>
          <p class="theme-page-section-subtitle">ประหยัดมากขึ้นด้วยข้อเสนอที่ดีที่สุดของเรา</p>
        </div>
        <div class="row row-col-mob-gap" data-gutter="20">


          @foreach($promo as $u)
          <div class="col-md-4 ">
            <div class="banner _h-33vh _br-5 banner-">
              <div class="banner-bg" style="background-image:url({{url('assets/back/image/promotion/'.$u->promotion_image)}});"></div>
              <div class="banner-mask banner-mask-half"></div>

              <div class="banner-caption _ta-c banner-caption-bottom">
                <h5 class="banner-title _tt-uc">{{$u->promotion_name}}</h5>
                <a data-value="{{$u->id}}" id="{{$u->id}}" class="add_promotion btn _mt-20 _tt-uc btn-white btn-ghost" >กดเพื่อรับส่วนลดของเรา</a>
              </div>
            </div>
          </div>
          @endforeach



        </div>
      </div>
    </div>
@endif

@endsection

@section('scripts')

<script>

</script>


<script src="{{url('js/select2.js')}}"></script>
<script>

$(document).ready(function() {


  $('.add_promotion').on('click', function () {


    @if (Auth::guest())

      swal("กรุณาทำการ Login ก่อนเพื่อรับส่วนลดนี้");

    @else

    var ea_number = this.id;
    console.log(ea_number);
        $.ajax({
          type: "POST",
          headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          data: {
            "ea_number" : ea_number
          },
          url: "{{url('/api/add_web_promotion')}}",
          success: function(data) {

            if(data.data.status == 200){
              swal("ยินดีด้วย!", "คุณได้รับโปรโมชั่นนี้แล้ว เริ่มจองรถกันเลยค่ะ", "success");
            }else{
              swal("คุณมีโปรโมชั่นนี้อยู่แล้ว");
            }

          }
        });


      @endif



  });



  $("#uguu").submit(function() {

    var set_size = jQuery("#start_point").val();

    console.log(set_size)


    if (set_size === "") {
        alert("โปรดระบุข้อมูลให้ครบถ้วน");
        return false;
    }
});

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
});

</script>

@stop('scripts')
