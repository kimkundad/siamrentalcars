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
<b>ทางบริษัทรถเช่าอาจเรียกเก็บค่าเช่าล่วงหน้าเพื่อล็อคคิวรถเป็นจำนวนเงิน 500-1000 บาท</b><br />
"เอกสารที่ใช้ในการเช่ารถกับทางเว็บไซต์ siamrentalcars.com คือ บัตรประชาชนและใบขับขี่ (ฉบับตัวจริงหรือสำเนา) **ยังไม่หมดอายุ และได้รับมา
ไม่ต่ำกว่า 1 ปี <br />*สำหรับผู้เป็นนักศึกษา จำเป็นต้องมีผู้ปกครองค้ำประกัน และต้องเดินทางมาเซ็นสัญญา ณ วันรับรถด้วย<br />
 ในกรณีที่ลูกค้าไม่มีบัตรประชาชนหรือบัตรสูญหาย สามารถใช้ใบขับขี่เพียงอย่างเดียวได้ ทั้งนี้ ใบขับขี่ถือเป็นเอกสารที่จำเป็นอย่างมากในการเช่ารถ เนื่องจากทางเราต้องเข้มงวดในเรื่องกฏหมาย และเพื่อความปลอดภัยของลูกค้าในการใช้สิทธิ์จากประกันภัยที่เรามีให้"
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
