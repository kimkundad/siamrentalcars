@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')

<style>
.theme-payment-success-title {
    font-size: 26px;
}
</style>

@stop('stylesheet')

@section('content')


<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="theme-payment-success">
              <div class="theme-payment-success-header">
                <i class="fa fa-check-circle theme-payment-success-header-icon"></i>
                <h1 class="theme-payment-success-title">การจองของคุณ เราได้รับข้อมูลแล้ว!</h1>
                <p class="theme-payment-success-subtitle">เราได้ส่งข้อมูลการจองไปทาง Email แล้ว<br /> รอการติดต่อกลับจากบริษัทรถเช่าในเวลาทำการ 08.00 - 20.00 น.</p>
              </div>
              <div class="theme-payment-success-box">
                <ul class="theme-payment-success-summary">
                  <li>Order ID
                    <span>#{{$objs->order_ids}}</span>
                  </li>
                  <li>วันที่รับรถ
                    <span>{{$objs->re_car}} {{$objs->re_car_time}} </span>
                  </li>
                  <li>วันที่คืนรถ
                    <span>{{$objs->se_car}} {{$objs->se_car_time}}</span>
                  </li>
                  <li>บริษัทรถเช่า
                    <span>{{$part->part_name}} </span>
                  </li>
                  <li>รถเช่า
                    <span>{{$car->name}} </span>
                  </li>
                  <li>ชื่อผู้เช่ารถ
                    <span>{{$objs->name}} </span>
                  </li>
                  <li>เบอร์ติดต่อ
                    <span>{{$objs->phone}}.</span>
                  </li>
                  <li>อีเมล
                    <span>{{$objs->email}}</span>
                  </li>
                  <li style="height: 100px;">รายละเอียด
                    <span style="width: 80%;">{{$objs->detail}}</span>
                  </li>
                  <li>สถานที่รับรถ
                    <span>{{$position->position_name}} , {{$position->PROVINCE_NAME}}</span>
                  </li>
                  <li>จำนวนวันที่เช่า
                    <span>{{$objs->day}} วัน</span>
                  </li>

                  @if($objs->promotion_id != 0)
                  <li>ส่วนลด ที่ได้รับ ({{$get_pro->promotion_name}})
                    <span>{{number_format($get_pro->promotion_amount, 2)}} บาท</span>
                  </li>
                  @else
                  @endif

                  <li>ราคารวม
                    <span>{{number_format($objs->total, 2)}}</span>
                  </li>
                </ul>
                <p class="theme-payment-success-check-order">
                  ราคานี้ยังไม่รวม <b>ค่ามัดจำเพื่อประกันความเสียหาย</b> (ได้รับคืนหลังเสร็จสิ้นการเช่า)
                  ชำระ ณ วันรับรถโดยใช้เงินสด, โอนเงิน, บัตรเครดิต หรือตามที่บริษัทผู้ให้เช่ากำหนด
                </p>
              </div>
              <ul class="theme-payment-success-actions">
                <li>
                  <a href="#" onclick="window.print();">
                    <i class="fa fa-file-pdf-o"></i>
                    <p>PDF
                      <br/>receipt
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#" onclick="window.print();">
                    <i class="fa fa-print"></i>
                    <p>Print
                      <br/>receipt
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <p>SMS
                      <br/>receipt
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




@endsection

@section('scripts')


@stop('scripts')
