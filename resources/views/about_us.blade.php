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


<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="theme-about-us">
          <div class="theme-about-us-section sticky-parent">
            <div class="row row-col-static row-col-reverse">


              <div class="col-md-12">
                <div class="theme-about-us-section-body">
                  <h2 class="theme-page-header-title">เกี่ยวกับ Siamrentalcars</h2>
                  <p>Siamrentalcars คือ เว็บไซต์ผู้นำด้านการจองรถเช่า ที่อำนวยความสะดวกทั้งด้านการจองรถ คุณภาพรถ การเลือกรถอย่างอิสระ และการค้นหารถเช่าราคาที่ดีที่สุด</p>
                  <p>Siamrentalcars ได้รวบรวมบริษัทรถเช่านานาชาติ(ตามเคาน์เตอร์สนามบิน) และบริษัทรถเช่าท้องถิ่นจากทั่วประเทศ มากกว่า 500 บริษัท ไว้ภายในเว็บไซต์ซึ่งรถเช่าภายในเว็บไซต์มีมากกว่า 5000 คัน
                    ให้ลูกค้าสามารถเปรียบเทียบและค้นหารถเช่าราคาที่ดีที่สุด ผ่านเว็บไซต์ไดรฟ์ฮับ โดยเราไม่มีนโยบายเก็บค่าธรรมเนียมการจอง
                    หรือค่าการจัดการใดๆทั้งสิ้นจากผู้เช่าทั้งนี้เรายังได้ทำสัญญานโยบายคุณภาพและความปลอดภัยของรถยนต์กับผู้ประกอบการรถเช่าที่เป็นพันธมิตรกับเรา</p>

                  <p>รถยนต์ทุกคันที่อยู่ในระบบของเราจำเป็นต้องผ่านการตรวจสภาพรถยนต์มาตรฐานสากลทุกๆ 10,000 กิโลเมตร
                    เพื่อให้ผู้เช่ามั่นใจว่าในการเดินทางแต่ละครั้งของคุณจะเป็นการเดินทางที่ปลอดภัยเป้าหมายหลักของไดรฟ์ฮับคือเป็นช่องทางการเช่ารถที่สะดวก รวดเร็ว คุ้มค่า ปลอดภัยและง่ายที่สุดสำหรับผู้เช่ารถ Siamrentalcars
                    นอกจากการจองผ่านช่องทาง www.Siamrentalcars.com เรามีแผนกบริการลูกค้าสัมพันธ์สามารถติดต่อคุยกับเจ้าหน้าที่ ได้ตลอดเวลาทำการ 08.00 - 22.00น. ทุกวัน</p>

                    <p>เว็บไซต์ Siamrentalcars มีลูกค้าที่มั่นใจใช้บริการมากถึง 100,000 การเช่าในปี 2018 ที่ผ่านมา</p>


                </div>
              </div>


              <div class="col-md-12">
                <h4>จังหวัดที่ให้บริการ</h4>
                <p>ด้วยบริการรถเช่ามากกว่า 500 บริษัทเช่ารถจากกว่า 30 จังหวัดทั่วประเทศ</p>

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
