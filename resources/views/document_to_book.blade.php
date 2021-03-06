@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')

<style>
.theme-page-header-title {
    font-size: 30px;
    margin-top: 0;
    letter-spacing: 1px;
    font-weight: 300;
}
.theme-about-us-section-body > p {
    font-size: 14px;
    line-height: 1.6em;
    margin-bottom: 20px;
}

</style>

@stop('stylesheet')

@section('content')


<div class="theme-page-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="theme-about-us">
          <div class="theme-about-us-section sticky-parent">
            <div class="row row-col-static row-col-reverse">


              <div class="col-md-12">
                <div class="theme-about-us-section-body">
                  <br><br>
                  <h2 class="theme-page-header-title" style="font-size: 22px;">เอกสารสำหรับการเช่ารถ</h2>
                  <hr>
                  <p>
<b>ทางบริษัทรถเช่าอาจเรียกเก็บค่าเช่าล่วงหน้าเพื่อล็อคคิวรถเป็นจำนวนเงิน 500 บาท</b><br />

1. สำเนาบัตรประจำตัวประชาชน หรือ สำเนาบัตรข้าราชการ <br />
2. สำเนาใบขับขี่<br />

ในกรณีที่ลูกค้าไม่มีบัตรประชาชนหรือบัตรสูญหาย สามารถใช้ใบขับขี่เพียงอย่างเดียวได้ ทั้งนี้ ใบขับขี่ถือเป็นเอกสารที่จำเป็นอย่างมากในการเช่ารถ
เนื่องจากทางเราต้องเข้มงวดในเรื่องกฏหมาย และเพื่อความปลอดภัยของลูกค้าในการใช้สิทธิ์จากประกันภัยที่เรามีให้&quot;
                  </p>



      <img src="{{url('img/driver-license-siamrentalcars.jpg')}}" class="img-fluid" style="width:80%">
                </div>
              </div>





            </div>
          </div>







        </div>
      </div>
    </div>
  </div>
</div>




@endsection

@section('scripts')


@stop('scripts')
