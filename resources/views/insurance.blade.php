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

<style>
.table-bordered {
    font-size: 12px;
}
</style>
              <div class="col-md-12">
                <div class="theme-about-us-section-body">
                  <br><br>
                  <h2 class="theme-page-header-title" style="font-size: 22px;">ประกันภัยที่มากับเช่ารถ</h2>
                  <hr>
                  <p>
<b>รถทุกคันในระบบของ siamrentalcars มีประกันภัยชั้น 1 ขั้นพื้นฐาน (ซึ่งรวมอยู่ในค่าเช่าแล้ว) แต่จะไม่รวมค่าเสียหายส่วนแรกในกรณีที่ลูกค้าเกิดอุบัติเหตุโดยท่านเป็นฝ่ายผิดหรือไม่มีคู่กรณี<br />
  หากเกิดอุบัติเหตุและท่านไม่ซื้อประกันเพิ่มเติมกับบริษัทรถเช่า โดยท่านเป็นฝ่ายผิดหรือไม่มีคู่กรณีบริษัทรถเช่าจะเรียกเก็บค่าเสียหาย(“ค่าเสียหายส่วนแรก”) ระหว่าง 1,000 - 50,000 บาท ในอัตราอ้างอิงตามประเภทรถดังนี้
                  </p>

                  <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ประเภทรถ</th>
                        <th scope="col">ตัวอย่าง</th>
                        <th scope="col">ค่าเสียหายส่วนแรกสูงสุดไม่เกิน (บาท)</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>รถอีโคร์คาร์ และ รถขนาดเล็ก</td>
                        <td>March / Almera / Yaris / Vios / City / Jazz / Ciaz</td>
                        <td>30,000</td>
                      </tr>

                      <tr>
                        <td>รถขนาดกลาง</td>
                        <td>Altis / Civic / CHR / HRV / Slyphy / Juke</td>
                        <td>40,000</td>
                      </tr>

                      <tr>
                        <td>รถขนาดใหญ่ และ รถเอสยูวี</td>
                        <td>Camry / Accord / Fortuner / CRV / Pajero / Teana</td>
                        <td>50,000</td>
                      </tr>

                    </tbody>
                  </table>

                </div>

                <p>
                  หากบริษัทประกันภัยประเมินราคาแล้ว ได้ความว่า ค่าเสียหายเกินกว่าวงเงินคุ้มครองที่กำหนดไว้ ผู้เช่า/ผู้ยืมตกลงรับผิดชอบชดใช้เงินค่าใช้จ่ายส่วนเกินที่บริษัทประกันภัยไม่ได้คุ้มครอง
                </p>
                <br />

                <img src="{{url('img/car.png')}}" class="img-fluid" style="width:100%" >


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
