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
          <div class="theme-payment-page-sections-item">
            <h3 class="theme-payment-page-sections-item-title">กรอกข้อมูล ผู้จองรถเช่า <br>
              <span class="text-danger" style="font-size:12px;">* ผู้ใช้งานจำเป็นต้องกรอกข้อมูลให้ครบทุกช่อง</span></h3>

            <div class="theme-payment-page-form">
              <div class="row row-col-gap" data-gutter="20">
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" placeholder="ชื่อผู้ติดต่อ"/>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" placeholder="นามสกุล"/>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" placeholder="อีเมล"/>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-payment-page-form-item form-group">
                    <input class="form-control" type="text" placeholder="เบรอ์ติดต่อกลับ"/>
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

                    <textarea class="form-control" style="height:180px;" rows="5" placeholder="รายละเอียดเพิ่มเติมของผู้ใช้งาน"></textarea>
                  </div>
                </div>



              </div>
            </div>


          </div>
          <div class="theme-payment-page-sections-item">
            <div class="theme-payment-page-booking">
              <div class="theme-payment-page-booking-header">
                <h3 class="theme-payment-page-booking-title">ราคารวมสำหรับ 6 วัน</h3>
                <p class="theme-payment-page-booking-subtitle">
การคลิกที่ปุ่มจองตอนนี้ คุณเห็นด้วยกับข้อตกลงและเงื่อนไขการใช้บริการและรับประกันคืนเงิน ขอบคุณสำหรับความไว้วางใจบริการของเรา</p>
                <p class="theme-payment-page-booking-price">$224.00</p>
              </div>
              <a class="btn _tt-uc btn-primary-inverse btn-lg btn-block" href="#">จองรถออนไลน์</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="sticky-col">
          <div class="theme-sidebar-section _mb-10">
            <h5 class="theme-sidebar-section-title">สรุปข้อมูลการจอง</h5>

            <ul class="theme-sidebar-section-summary-list">
              <li>{{$objs->name}} <br></li>
              <li>วันรับรถ: Wed, Jun 27, 2018</li>
              <li>วันส่งคืน: Tue, Jul 03, 2018</li>
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
                  <h5 class="theme-sidebar-section-charges-item-title">6 days</h5>
                  <p class="theme-sidebar-section-charges-item-subtitle">{{$objs->name}}</p>
                  <p class="theme-sidebar-section-charges-item-price">$192.00</p>
                </li>
                <li class="theme-sidebar-section-charges-item">
                  <h5 class="theme-sidebar-section-charges-item-title">ภาษี & ค่าธรรมเนียม</h5>
                  <p class="theme-sidebar-section-charges-item-subtitle"></p>
                  <p class="theme-sidebar-section-charges-item-price">00.00</p>
                </li>
              </ul>
              <p class="theme-sidebar-section-charges-total">Total
                <span>$224.00</span>
              </p>
              <hr>
              <span class="text-success" style="font-size:12px;">จำนวนเงินมัดจำ ที่ต้องจ่ายตอนรับรถ : ฿ {{number_format($objs->deposit ,2)}}</span><br>
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


@stop('scripts')
