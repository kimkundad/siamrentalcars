@extends('layouts.template')

@section('title')

@stop



@section('stylesheet')

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
    <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light" style="background-image:url(img/patterns/travel/5.png);"></div>
    <div class="theme-hero-area-grad-mask theme-hero-area-grad-mask-i"></div>
  </div>
  <div class="theme-hero-area-body">
    <div class="theme-page-section _pt-150 _pb-100 _pv-mob-50">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="theme-search-area-tabs">
              <div class="theme-search-area-tabs-header _c-w _ta-c _mb-20">
                <h1 class="theme-search-area-tabs-title theme-search-area-tabs-title-sm">รับจองรถเช่า</h1>
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






                  <div class="tab-pane active" id="SearchAreaTabs-4" role="tab-panel">
                <form class=" search-form"  name="form1" method="POST" action="{{ url('Api/getTextSearch') }}" onsubmit="return false;">
                  {{ csrf_field() }}
                    <!-- start form -->



                    <div class="theme-search-area theme-search-area-stacked theme-search-area-white">




                      <div class="theme-search-area-form">
                        <div class="row" data-gutter="none">
                          <div class="col-md-5 ">
                            <div class="row" data-gutter="none">
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section first theme-search-area-section-fade-white
                                theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm
                                theme-search-area-section-curved">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text" placeholder="จุดรับรถ" data-provide="typeahead"/>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-no-border theme-search-area-section-mr theme-search-area-section-sm theme-search-area-section-curved">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text" placeholder="จุดคืนรถ" data-provide="typeahead"/>
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
                                <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                                <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
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
                                <select class="theme-search-area-section-input" style="padding-left: 8px;">
                                  <option value="0:30:00">0:30</option>
                                  <option value="1:00:00">1:00</option>
                                  <option value="1:30:00">1:30</option>
                                  <option value="2:00:00">2:00</option>
                                  <option value="2:30:00">2:30</option>
                                  <option value="3:00:00">3:00</option>
                                  <option value="3:30:00">3:30</option>
                                  <option value="4:00:00">4:00</option>
                                  <option value="4:30:00">4:30</option>
                                  <option value="5:00:00">5:00</option>
                                  <option value="5:30:00">5:30</option>
                                  <option value="6:00:00">6:00</option>
                                  <option value="6:30:00">6:30</option>
                                  <option value="7:00:00">7:00</option>
                                  <option value="7:30:00">7:30</option>
                                  <option value="8:00:00">8:00</option>
                                  <option value="8:30:00">8:30</option>
                                  <option value="9:00:00">9:00</option>
                                  <option value="9:30:00">9:30</option>
                                  <option selected="selected" value="10:00:00">10:00</option>
                                  <option value="10:30:00">10:30</option>
                                  <option value="11:00:00">11:00</option>
                                  <option value="11:30:00">11:30</option>
                                  <option value="12:00:00">12:00</option>
                                  <option value="12:30:00">12:30</option>
                                  <option value="13:00:00">13:00</option>
                                  <option value="13:30:00">13:30</option>
                                  <option value="14:00:00">14:00</option>
                                  <option value="14:30:00">14:30</option>
                                  <option value="15:00:00">15:00</option>
                                  <option value="15:30:00">15:30</option>
                                  <option value="16:00:00">16:00</option>
                                  <option value="16:30:00">16:30</option>
                                  <option value="17:00:00">17:00</option>
                                  <option value="17:30:00">17:30</option>
                                  <option value="18:00:00">18:00</option>
                                  <option value="18:30:00">18:30</option>
                                  <option value="19:00:00">19:00</option>
                                  <option value="19:30:00">19:30</option>
                                  <option value="20:00:00">20:00</option>
                                  <option value="20:30:00">20:30</option>
                                  <option value="21:00:00">21:00</option>
                                  <option value="21:30:00">21:30</option>
                                  <option value="22:00:00">22:00</option>
                                  <option value="22:30:00">22:30</option>
                                  <option value="23:00:00">23:00</option>
                                  <option value="23:30:00">23:30</option>
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
                                <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                                <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
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
                                <select class="theme-search-area-section-input" style="padding-left: 8px;">
                                  <option value="0:30:00">0:30</option>
                                  <option value="1:00:00">1:00</option>
                                  <option value="1:30:00">1:30</option>
                                  <option value="2:00:00">2:00</option>
                                  <option value="2:30:00">2:30</option>
                                  <option value="3:00:00">3:00</option>
                                  <option value="3:30:00">3:30</option>
                                  <option value="4:00:00">4:00</option>
                                  <option value="4:30:00">4:30</option>
                                  <option value="5:00:00">5:00</option>
                                  <option value="5:30:00">5:30</option>
                                  <option value="6:00:00">6:00</option>
                                  <option value="6:30:00">6:30</option>
                                  <option value="7:00:00">7:00</option>
                                  <option value="7:30:00">7:30</option>
                                  <option value="8:00:00">8:00</option>
                                  <option value="8:30:00">8:30</option>
                                  <option value="9:00:00">9:00</option>
                                  <option value="9:30:00">9:30</option>
                                  <option selected="selected" value="10:00:00">10:00</option>
                                  <option value="10:30:00">10:30</option>
                                  <option value="11:00:00">11:00</option>
                                  <option value="11:30:00">11:30</option>
                                  <option value="12:00:00">12:00</option>
                                  <option value="12:30:00">12:30</option>
                                  <option value="13:00:00">13:00</option>
                                  <option value="13:30:00">13:30</option>
                                  <option value="14:00:00">14:00</option>
                                  <option value="14:30:00">14:30</option>
                                  <option value="15:00:00">15:00</option>
                                  <option value="15:30:00">15:30</option>
                                  <option value="16:00:00">16:00</option>
                                  <option value="16:30:00">16:30</option>
                                  <option value="17:00:00">17:00</option>
                                  <option value="17:30:00">17:30</option>
                                  <option value="18:00:00">18:00</option>
                                  <option value="18:30:00">18:30</option>
                                  <option value="19:00:00">19:00</option>
                                  <option value="19:30:00">19:30</option>
                                  <option value="20:00:00">20:00</option>
                                  <option value="20:30:00">20:30</option>
                                  <option value="21:00:00">21:00</option>
                                  <option value="21:30:00">21:30</option>
                                  <option value="22:00:00">22:00</option>
                                  <option value="22:30:00">22:30</option>
                                  <option value="23:00:00">23:00</option>
                                  <option value="23:30:00">23:30</option>
                                </select>
                              </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          </div>



                          <div class="col-md-1 ">
                            <button type="submit" class="theme-search-area-submit _mt-0 theme-search-area-submit-no-border theme-search-area-submit-white theme-search-area-submit-sm theme-search-area-submit-curved">ค้นหา</button>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-area-options _mob-h theme-search-area-options-center theme-search-area-options-dot-white clearfix">
                        <div class="btn-group theme-search-area-options-list" data-toggle="buttons">

                          <label class="btn btn-primary active">
                            <input type="radio" name="car-options" id="car-option-1" checked/>ทั้งหมด
                          </label>

                          @if(isset($obj))
                          @foreach($obj as $u)
                          <label class="btn btn-primary">
                            <input type="radio" name="{{$u->id}}" id="car-option-2"/>{{$u->sub_name}}
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
    <div class="theme-page-section-header">
      <h5 class="theme-page-section-title">Explore Popular Routes</h5>
    </div>

  </div>
</div>


@endsection

@section('scripts')

<script>

function autocomplete() {
    $('.typeahead').typeahead({
        minLength: 1,
        showHintOnFocus: true,
        source: function(q, cb) {
            return $.ajax({
                dataType: 'json',
                type: 'get',
                url: '{{url('/search/data/?field2=')}}' + q,
                chache: false,
                success: function(data) {
                    var res = [];
                    $.each(data, function(index, val){
                        if(val !== "%s") {
                            res.push({
                                id: index,
                                name: val
                            })
                        }else{
                          $(this).val("");
                        }
                    })
                    cb(res);
                }
            })
        }
    })
}


</script>

@stop('scripts')
