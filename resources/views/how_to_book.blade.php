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
                  <h2 class="theme-page-header-title" style="font-size: 22px;">วิธีการเช่ารถ จองรถกับ Siamrentalcars</h2>
                  <hr>
                  <p>
                    <b>เพียง 3 ขั้นตอนง่ายๆ</b><br />
                    ในการจองรถคุณก็สามารถเพลิดเพลินกับวันหยุดของคุณได้แล้ว
                  </p>
                  <p>
                    1. เตรียมข้อมูลที่ต้องใช้สำหรับการจองรถให้พร้อม<br />
                    2. ชื่อของคุณ<br />
                    3. วันที่และเวลา และสถานที่รับรถ
                  </p>

                  <p>
                    <b>เตรียมตัวก่อนจองรถ</b><br />
                    เตรียมข้อมูลที่ต้องใช้สำหรับการจองรถให้พร้อม<br />
                    1.ชื่อของคุณ<br />
                    2.วันที่และเวลา และสถานที่รับรถ<br />
                    3.เบอร์โทรศัพท์ อีเมล์<br />
                    4.ข้อมูลอื่นๆ เช่น เที่ยวบิน, ชื่อโรงแรม (ถ้ามี)
                  </p>


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
