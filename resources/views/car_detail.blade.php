@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')

<style>
.theme-payment-page-item-thumb .theme-search-results-item-img {
    max-height: 600px;
    max-width: 100%;
    float: right;
    display: block;
    width: auto;
}
</style>
@stop('stylesheet')

@section('content')


<div class="theme-page-section theme-page-section-lg">
  <div class="container">
    <div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
      <div class="col-md-8 ">
        <div class="theme-payment-page-sections">
          <div class="theme-search-results-sign-in _mob-h bg-grad">
          <i class="theme-search-results-sign-in-icon fa fa-unlock-alt"></i>
          <h5 class="theme-search-results-sign-in-title">Sign in to unlock our secret delas. Save up to
            <b>50%</b>
          </h5>
          <a class="btn theme-search-results-sign-in-btn btn-ghost btn-white" href="#">Sign in now</a>
        </div>

        <div class="_mob-h"><br><br></div>

          <div class="theme-payment-page-sections-item">
            <div class="theme-search-results-item theme-payment-page-item-thumb">
              <div class="row" data-gutter="20">
                <div class="col-md-6 ">
                  <h5 class="theme-search-results-item-title theme-search-results-item-title-lg">{{$objs->name}}</h5>
                  <div class="theme-search-results-item-car-location">
                    <i class="fa fa-building theme-search-results-item-car-location-icon"></i>
                    <div class="theme-search-results-item-car-location-body">
                      <p class="theme-search-results-item-car-location-title">ผู้ให้บริการ {{$objs->part_name}}</p>
                      <p class="theme-search-results-item-car-location-subtitle">{{$objs->PROVINCE_NAME}}</p>
                    </div>
                  </div>
                  <ul class="theme-search-results-item-car-list">
                    <li>
                      <i class="fa fa-check"></i>รุ่นรถยนต์ {{$objs->name_cat}}
                    </li>
                    <li>
                      <i class="fa fa-check"></i>ขนาดรถ {{$objs->sub_name}}
                    </li>
                    <li>
                      <i class="fa fa-check"></i>ระบบเกียร์ {{$objs->grear}}
                    </li>
                    <br>

                    <li>
                      <i class="fa fa-check"></i>จำนวนผู้โดยสาร {{$objs->total_p}}
                    </li>

                    <li>
                      <i class="fa fa-check"></i>จำนวนกระเป๋า	 {{$objs->bags}}
                    </li>

                    <li>
                      <i class="fa fa-check"></i>ประกันภัย	 {{$objs->insurance}}
                    </li>


                  </ul>
                  <br>
                  <p style="font-size:12px;">อุปกรณ์ภายในรถ	 {!! $objs->service !!}</p>
                  <hr>
                  <p style="font-size:12px;">รายละเอียด	 {!! $objs->detail !!}</p>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-search-results-item-img-wrap" >
                    <img class="theme-search-results-item-img" src="{{url('assets/back/image/car/'.$objs->image)}}" alt="{{$objs->name}}" title="{{$objs->name}}" style="width:100%; height:100%"/>

                  </div>
                  <ul class="theme-search-results-item-car-feature-list">
                    <br>
                    <li>
                      <i class="fa fa-male"></i>
                      <span>{{$objs->total_p}}</span>
                    </li>
                    <li>
                      <i class="fa fa-suitcase"></i>
                      <span>{{$objs->bags}}</span>
                    </li>
                    <li>
                      <i class="fa fa-cog"></i>
                      <span>Auto</span>
                    </li>
                    <li>
                      <i class="fa fa-snowflake-o"></i>
                      <span>A/C</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- form start -->
          <form method="post" id="add_mt4_account" enctype="multipart/form-data" name="product" >
          {{ csrf_field() }}
          <div class="theme-payment-page-sections-item">
            <h3 class="theme-payment-page-sections-item-title">กรอกข้อมูล ผู้จองรถเช่า <br>
              <span class="text-danger" style="font-size:12px;">* ผู้ใช้งานจำเป็นต้องกรอกข้อมูลให้ครบทุกช่อง</span></h3>


            <input type="hidden" name="start_dat" id="start_dat" value="{{Session::get('start_dat')}}" >
            <input type="hidden" name="end_day" id="end_day" value="{{Session::get('end_day')}}" >
            <input type="hidden" name="start_time" id="start_time" value="{{Session::get('start_time')}}" >
            <input type="hidden" name="end_time" id="end_time" value="{{Session::get('end_time')}}" >

            <input type="hidden" name="part_id" id="part_id" value="{{$objs->id_part}}" >

            <input type="hidden" name="total_price" id="total_buy" value="" >
            <input type="hidden" name="total_day" id="total_day" value="" >

            <input type="hidden" name="get_position" id="get_position" value="{{Session::get('position1')}}, {{Session::get('position2')}}" >

            <div class="theme-payment-page-form">
              <div class="row row-col-gap" data-gutter="20">
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" name="cus_name" id="cus_name" placeholder="ชื่อผู้ติดต่อ"/>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" name="cus_lname" id="cus_lname" placeholder="นามสกุล"/>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" name="cus_email" id="cus_email" placeholder="อีเมล"/>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" name="cus_phone" id="cus_phone" placeholder="เบรอ์ติดต่อกลับ"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="theme-payment-page-sections-item">


            <div class="theme-payment-page-form _mb-20">
              <h3 class="theme-payment-page-form-title">รายละเอียดในการรับรถ</h3>
              <div class="row row-col-gap" data-gutter="20">

                <div class="col-md-12 ">
                  <div class="theme-payment-page-form-item form-group">

                    <textarea class="form-control" style="height:180px;" rows="5" placeholder="รายละเอียดเพิ่มเติมของผู้ใช้งาน" name="cus_detail" id="cus_detail"></textarea>
                  </div>
                </div>



              </div>
            </div>


          </div>
          <div class="theme-payment-page-sections-item">
            <div class="theme-payment-page-booking">
              <div class="theme-payment-page-booking-header">
                <h3 class="theme-payment-page-booking-title">ราคารวมสำหรับ <span id="day-set2"></span> วัน</h3>
                <p class="theme-payment-page-booking-subtitle">
การคลิกที่ปุ่มจองตอนนี้ คุณเห็นด้วยกับข้อตกลงและเงื่อนไขการใช้บริการและรับประกันคืนเงิน ขอบคุณสำหรับความไว้วางใจบริการของเรา</p>
                <p class="theme-payment-page-booking-price"><span id="sum-muney2"></p>
              </div>
              <a class="btn _tt-uc btn-primary-inverse btn-lg btn-block" id="btnSendData">จองรถออนไลน์</a>
            </div>
          </div>


          </form>

          <!-- form ending -->
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="sticky-col">
          <div class="theme-sidebar-section _mb-10">
            <h5 class="theme-sidebar-section-title">สรุปข้อมูลการจอง</h5>

            <ul class="theme-sidebar-section-summary-list">
              <li>{{$objs->name}} <br></li>
              <li>จุดรับรถ : <b>{{Session::get('position1')}}, {{Session::get('position2')}}</b> <br></li>
              <li>วันรับรถ: {{Session::get('start_dat')}} {{Session::get('start_time')}}</li>
              <li>วันส่งคืน: {{Session::get('end_day')}} {{Session::get('end_time')}}</li>
            </ul>
            <hr>
            <span class="text-success" style="font-size:12px;">ฟรีค่าธรรมเนียมการเพิ่มผู้ขับขี่สำรอง</span><br>
            <span class="text-danger" style="font-size:12px;">*ยกเลิกฟรีภายใน 24 ชั่วโมงก่อนถึงเวลาไปรับท่าน</span>
          </div>
          <div class="theme-sidebar-section _mb-10">
            <h5 class="theme-sidebar-section-title">ค่าใช้จ่าย</h5>
            <div class="theme-sidebar-section-charges">
              <ul class="theme-sidebar-section-charges-list">
                <li class="theme-sidebar-section-charges-item">
                  <h5 class="theme-sidebar-section-charges-item-title"><span id="day-set"></span> days</h5>
                  <p class="theme-sidebar-section-charges-item-subtitle">{{$objs->name}}</p>
                  <p class="theme-sidebar-section-charges-item-price">฿ {{($objs->price )}} / วัน</p>
                </li>
                <li class="theme-sidebar-section-charges-item">
                  <h5 class="theme-sidebar-section-charges-item-title">ภาษี & ค่าธรรมเนียม</h5>
                  <p class="theme-sidebar-section-charges-item-subtitle"></p>
                  <p class="theme-sidebar-section-charges-item-price">00.00</p>
                </li>
              </ul>
              <p class="theme-sidebar-section-charges-total">Total
                <span id="sum-muney">{{number_format($objs->price ,2)}}</span>
              </p>
              <hr>
              <span class="text-success" style="font-size:12px;">จำนวนเงินมัดจำ ที่ต้องจ่ายตอนรับรถ : ฿ {{number_format($objs->deposit ,2)}}</span><br>
              <span class="text-danger" style="font-size:12px;">*หากเลยเวลาส่งคืนรถ แต่ไม่เกิน 4 ชม. เราคิดเพิ่มอีก 400 บาท หากเกิน 4 ชม. เราจะคิดเพิ่มเป็นอีก 1 วัน</span>
            </div>
          </div>
          <div class="theme-sidebar-section _mb-10">
            <ul class="theme-sidebar-section-features-list">
              <li>
                <h5 class="theme-sidebar-section-features-list-title">เงินประกันการเช่า</h5>
                <p class="theme-sidebar-section-features-list-body">เป็นวงเงินประกันรถยนต์ โดยท่านจะต้องทำการชำระไว้ ณ วันที่รับรถเช่า และจะได้รับคืนเมื่อสิ้นสุดการเช่า</p>
              </li>
              <li>
                <h5 class="theme-sidebar-section-features-list-title">นโยบายการใช้น้ำมัน การเติมน้ำมัน</h5>
                <p class="theme-sidebar-section-features-list-body">ระดับน้ำมัน ณ วันคืนรถยนต์เช่า ผู้เช่าจำเป็นต้องเติมน้ำมันให้อยู่ในระดับเดียวกันกับวันรับรถยนต์ โดยระดับของน้ำมันนั้นปกติแล้วจะอยู่ในระดับเต็มถัง
                  แต่ในบางกรณีอาจไม่เต็มถัง ซึ่งผู้เช่าก็สามารถคืนรถในระดับเดียวกันกับระดับเดิมได้</p>
              </li>
              <li>
                <h5 class="theme-sidebar-section-features-list-title">การยืนยันการจอง</h5>
                <p class="theme-sidebar-section-features-list-body">หลังจากที่ท่านทำการจองเสร็จสิ้น จะมีเจ้าหน้าที่ติดต่อกลับตามหมายเลขโทรศัพท์ที่ท่านให้ไว้
                  เพื่อยืนยันการจองและนัดหมายท่านถึงสถานที่รับรถเช่าที่แน่นอนอีกครั้ง (ภายในระยะเวลาทำการ 08.30 - 20.30)</p>
              </li>
              <li>
                <h5 class="theme-sidebar-section-features-list-title">รวมประกันภัยพื้นฐาน</h5>
                <p class="theme-sidebar-section-features-list-body">ราคาดังกล่าวรวมประกันภัยประเภท 1 หากเกิดอุบัติเหตุและผู้เช่าเป็น ฝ่ายถูก ผู้เช่าไม่จำเป็นต้องเสียค่าใช้จ่ายใดๆทั้งสิ้นแต่หากกรณีที่ผู้เช่าเป็นฝ่ายผิด
                  ผู้เช่าจำเป็นต้องจ่ายค่าเสียหายส่วนแรกให้ทางผู้ให้เช่า 3,000 - 5,000 บาท โดยสูงสุดไม่เกิน 10,000 บาท</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('scripts')
<script src="{{url('js/moment.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script>

    var sum_mon = {{$objs->price}};
    var input = "{{Session::get('start_dat')}}";
    var res = input.split("/", 1);
    var input2 = "{{Session::get('end_day')}}";
    var res2 = input2.split("/", 1);


    var timeDiff_d = moment.utc(moment(input2, "DD/MM/YYYY HH:mm").diff(moment(input, "DD/MM/YYYY HH:mm"))).format("D")
    var timeDiff_h = moment.utc(moment("{{Session::get('start_time')}}", "HH:mm").diff(moment("{{Session::get('end_time')}}", "HH:mm"))).format("H")


    over_time = 0;
      total = (res2 - res);

      if(timeDiff_d == 1){
        total = timeDiff_d;
      }else if(timeDiff_d > 1 && timeDiff_h == 0){
        total = timeDiff_d-1;
      }else if(timeDiff_d > 1 && timeDiff_h > 0 && timeDiff_h <= 4){
        total = timeDiff_d-1;
        over_time = timeDiff_h * 100;
      }else if(timeDiff_d > 1 && timeDiff_h > 4 && timeDiff_h < 8){
        total = timeDiff_d-1;
        over_time = ({{$objs->price/2}});
      }else if(timeDiff_d > 1 && timeDiff_h >= 8){
        total = timeDiff_d-1;
        over_time = ({{$objs->price}});
      }else{

      }

    console.log(total);
    $("#day-set").html(total);
    $("#day-set2").html(total);
    document.getElementById('total_day').value = total


    $("#sum-muney").html('฿'+addCommas((sum_mon * total)+over_time));
    $("#sum-muney2").html('฿'+addCommas((sum_mon * total)+over_time));
    document.getElementById('total_buy').value = (sum_mon * total)+over_time;










    $(document).on('click','#btnSendData',function (event) {
      event.preventDefault();
      var form = $('#add_mt4_account')[0];
      var formData = new FormData(form);

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
        }
    });

    var start_dat = document.getElementById("start_dat").value;
    var end_day = document.getElementById("end_day").value;
    var start_time = document.getElementById("start_time").value;
    var end_time = document.getElementById("end_time").value;
    var part_id = document.getElementById("part_id").value;
    var total_buy = document.getElementById("total_buy").value;
    var total_day = document.getElementById("total_day").value;
    var get_position = document.getElementById("get_position").value;
    var cus_name = document.getElementById("cus_name").value;
    var cus_lname = document.getElementById("cus_lname").value;


    var cus_email = document.getElementById("cus_email").value;
    var cus_phone = document.getElementById("cus_phone").value;
    var cus_detail = document.getElementById("cus_detail").value;

    if(cus_name == '' || cus_lname == '' || cus_detail == '' || cus_phone == '' || cus_email == '' || get_position == ''){

      swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

    }else{

      $.LoadingOverlay("show", {
        background  : "rgba(255, 255, 255, 0.4)",
        image       : "",
        fontawesome : "fa fa-cog fa-spin"
      });


    $.ajax({
        url: "{{url('/api/add_my_order')}}",
        data: formData,
        processData: false,
        contentType: false,
        cache:false,
        type: 'POST',
        success: function (data) {

        //  console.log(data.data.status)
            if(data.data.status == 200){


              setTimeout(function(){
                  $.LoadingOverlay("hide");
              }, 0);

              swal("สำเร็จ!", "เราได้ส่งข้อมูลเพื่อรอการอนุมัติแล้ว", "success");


            setTimeout(function(){
              //    window.location.replace("{{url('clients/success_payment/')}}/"+data.data.value);
            }, 3000);

            }else{

              setTimeout(function(){
                  $.LoadingOverlay("hide");
              }, 500);

            }
        },
        error: function () {

        }
    });

  }


  //  console.log(formData);

});



    function addCommas(nStr)
        {
        	nStr += '';
        	x = nStr.split('.');
        	x1 = x[0];
        	x2 = x.length > 1 ? '.' + x[1] : '';
        	var rgx = /(\d+)(\d{3})/;
        	while (rgx.test(x1)) {
        		x1 = x1.replace(rgx, '$1' + ',' + '$2');
        	}
        	return x1 + x2;
        }
</script>


@stop('scripts')
