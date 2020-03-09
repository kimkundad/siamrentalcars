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
                  <h2 class="theme-page-header-title">เกี่ยวกับ Siamrentalcars</h2>
                  <hr>
                  <p>Siamrentalcars คือ เว็บไซต์ด้านการจองรถเช่า ที่ให้ลูกค้าสามารถจองรถได้อย่างสะดวก รวดเร็ว โดยไม่มีการเรียกเก็บค่าธรรมเนียมเพิ่มเติม</p>
                  <p>Siamrentalcars ได้รวบรวมบริษัทรถเช่าท้องถิ่นจากทั่วประเทศ
ให้ลูกค้าสามารถเลือกประเภทและขนาดของรถได้ตามใจชอบรวมไปถึงราคาที่เป็นกันเอง</p>

                  <p>Siamrentalcarsเป็นพัธมิตรกับบริษัทรถเช่าท้องถิ่นเพื่อ
ให้แน่ใจว่าเราสามารถนำเสนอรถเช่าที่มีคุณภาพ
และราคาเป็นกันเอง
รวมไปถึงการอำนวยความสะดวกให้กับลูกค้าในการ
รับ ส่งรถได้ตามสถานที่ต่างๆ</p>

                    <p>Siamrentalcars คำนึงถึงความปลอดภัยของลูกค้า
เรามีการตรวจเช็คสภาพรถยนต์ก่อนให้บริการทุกครั้งรวมไปถึงยินดีให้คำปรึกษาและคำแนะนำก่อนการเดินทางโดยลูกค้าสามาร
ถติดต่อเราได้ทุกช่องทางการติดต่อ</p>


                </div>
              </div>


              <div class="col-md-12">
                <br><br>
                <h4>จังหวัดที่ให้บริการ</h4>
                <p>ด้วยบริการรถเช่ามากกว่า 100 บริษัทเช่ารถจากกว่า 30 จังหวัดทั่วประเทศ</p>
                <hr>

                <div class="col-md-2">
                  <p class="card-description">ภาคกลาง</p>
                  <div class="form-group">
                    @foreach($objs1 as $u)
                    <div class="form-check">
                      <a class="form-check-label">

                        {{$u->PROVINCE_NAME}}
                      </a>
                    </div>
                    @endforeach

                  </div>
                </div>
                <div class="col-md-2">
                  <p class="card-description">ภาคอีสาน</p>
                  <div class="form-group">
                    @foreach($objs2 as $u)
                    <div class="form-check">
                      <a class="form-check-label">

                        {{$u->PROVINCE_NAME}}
                      </a>
                    </div>
                    @endforeach
                </div>
              </div>
              <div class="col-md-2">
                <p class="card-description">ภาคเหนือ</p>
                <div class="form-group">
                  @foreach($objs3 as $u)
                  <div class="form-check">
                    <a class="form-check-label">

                      {{$u->PROVINCE_NAME}}
                    </a>
                  </div>
                  @endforeach
              </div>
            </div>
            <div class="col-md-2">
              <p class="card-description">ภาคใต้</p>
              <div class="form-group">
                @foreach($objs4 as $u)
                <div class="form-check">
                  <a class="form-check-label">

                    {{$u->PROVINCE_NAME}}
                  </a>
                </div>
                @endforeach
            </div>
          </div>
          <div class="col-md-2">
            <p class="card-description"></p>
            <div class="form-group">
              @foreach($objs5 as $u)
              <div class="form-check">
                <a class="form-check-label">

                  {{$u->PROVINCE_NAME}}
                </a>
              </div>
              @endforeach
          </div>
        </div>
        <div class="col-md-2">
          <p class="card-description"></p>
          <div class="form-group">
            @foreach($objs6 as $u)
            <div class="form-check">
              <a class="form-check-label">

                {{$u->PROVINCE_NAME}}
              </a>
            </div>
            @endforeach
        </div>
      </div>

      <br><br>
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
