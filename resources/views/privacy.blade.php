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
                  <h2 class="theme-page-header-title">นโยบายความเป็นส่วนตัว</h2>
                  <hr>
                  <p>เราตระหนักดีถึงความเป็นส่วนตัวของคุณ ข้อความต่อไปนี้คือนโยบายความเป็นส่วนตัวของเราว่าด้วยการเก็บรวบรวม การจัดการ และการเผยแพร่ข้อมูลส่วนตัวของคุณ
                    ข้อมูลที่เราเก็บรวบรวมจะนำมาใช้เพื่อ เพื่อดำเนินธุรกรรมทางธุรกิจกับคุณอย่างสอดคล้องกับกฎหมาย รวมถึงเพื่อปรับปรุงเนื้อหาในเว็บไซต์ของเราและเพื่อแจ้งให้คู่ค้าของบริษัททราบ ของคำขอการจองของคุณ</p>
                    <h5>การเก็บรวบรวมข้อมูล</h5>
                    <p>ข้อมูลส่วนบุคคลที่เราเก็บรวบรวมอาจจะมีข้อมูลทั้งหมดที่คุณให้กับเราผ่านระบบในรูปแบบใดๆ ของsiamrentalcarsเพื่อสำรองและเช่ารถของคุณ ซึ่งรวมถึงชื่อ ที่อยู่ หมายเลขโทรศัพท์ ที่อยู่อีเมล วันเกิด หมายเลขใบอนุญาตขับรถ ข้อมูลบัตรเครดิต และประวัติการเช่าของคุณ ซึ่งเรารวบรวมข้อมูลนี้จากเว็บไซต์ของเราโดยข้อมูลดังกล่าวอาจถูกแบ่งปันไปให้กับคู่ค้าของเราซึ่งมีส่วนร่วมในการให้บริการ หากจำเป็น เราอาจส่งต่อข้อมูลนี้ให้กับบุคคลที่สามเพื่อเรียกเก็บค่าเสียหายจากคุณที่เป็นผลจากการละเมิดข้อตกลงใดๆ กับเรา ซึ่งเมื่อผู้ใช้ได้ให้ข้อมูลอันเป็นส่วนตัวใดมาให้แก่siamrentalcars ให้ถือว่าผู้ใช้ได้อนุญาตและให้ความยินยอมโดยชัดแจ้งแก่siamrentalcarsในดำเนินการใดๆ และเก็บข้อมูลอันเป็นส่วนตัวดังกล่าวรวมถึงข้อมูลอื่นๆซึ่งได้ให้ไว้โดยเกี่ยวข้องกับการเข้าร่วมหรือการใช้ผลิตภัณฑ์หรือบริการต่างๆของผู้ใช้ ทั้งนี้ผู้ใช้ไม่มีสิทธิยกเลิกการอนุญาตดังกล่าว (โดยไม่มีผลย้อนหลัง) รวมถึง:</p>
                    <p>1. ข้อมูลการลงทะเบียนและข้อมูลการใช้ – เมื่อคุณลงทะเบียนเพื่อใช้บริการของเราด้วยการสร้างบัญชี เราจะรวบรวมข้อมูลส่วนบุคคลเท่าที่จำเป็นเพื่อเสนอและให้บริการตามที่คุณร้องขอ เราอาจขอให้คุณกรอกชื่อ ที่อยู่ทางไปรษณีย์ หมายเลขโทรศัพท์ อีเมล และข้อมูลระบุของคุณเพื่อเปิดบัญชี ทั้งนี้ขึ้นอยู่กับบริการที่คุณเลือก เราอาจขอให้คุณกรอกข้อมูลส่วนบุคคลเพิ่มเติมในขณะที่คุณใช้บริการของเรา</p>
                    <p>2. ข้อมูลการทำรายการและประสบการณ์ใช้งาน – เมื่อคุณใช้บริการหรือเข้าสู่เว็บไซต์ของเรา เราจะเก็บรวบรวมข้อมูลเกี่ยวกับการทำรายการ ตลอดจนข้อมูลอื่นๆ ที่เกี่ยวข้องกับการทำรายการ เช่น จำนวนเงินที่ชำระสำหรับผลิตภัณฑ์หรือบริการ รวมถึงข้อมูลเกี่ยวกับวิธีชำระเงินใดๆ ที่ใช้ในการทำรายการ ข้อมูลเกี่ยวกับอุปกรณ์ ข้อมูลการใช้งานเชิงเทคนิค และข้อมูลตำแหน่งที่ตั้งทางภูมิศาสตร์</p>
                    <p>3. ข้อมูลการชำระหรือเรียกเก็บเงิน: เมื่อคุณชำระหรือเรียกเก็บเงินผ่านบริการ เราจะเก็บรวบรวมข้อมูลส่วนบุคคล เช่น ชื่อ ที่อยู่ทางไปรษณีย์ หมายเลขโทรศัพท์ และข้อมูลเกี่ยวกับบัญชีทางการเงินเกี่ยวกับผู้เข้าร่วมที่ได้รับเงินจากคุณหรือชำระเงินให้แก่คุณ ขอบเขตของข้อมูลส่วนบุคคลที่จำเป็นเกี่ยวกับผู้เข้าร่วมอาจแตกต่างกัน ขึ้นอยู่กับบริการที่คุณกำลังใช้เพื่อชำระหรือเรียกเก็บเงิน</p>
                    <br><br>
                    <h5>การใช้ข้อมูลส่วนตัว</h5>

                    <p>siamrentalcars จะใช้ข้อมูลส่วนบุคคลของท่านเพียงเท่าที่จำเป็น เช่น ชื่อ และที่อยู่ เพื่อใช้ในการติดต่อ ให้บริการ ประชาสัมพันธ์ หรือให้ข้อมูลข่าวสารต่างๆ รวมทั้งสำรวจความคิดเห็นของท่านในกิจการหรือกิจกรรมของsiamrentalcarsเท่านั้น</p>
                    <p>siamrentalcars ขอรับรองว่าจะไม่นำข้อมูลส่วนบุคคลของท่านที่ siamrentalcars ได้เก็บรวบรวมไว้ ไปขายหรือเผยแพร่ให้กับบุคคลภายนอกโดยเด็ดขาด เว้นแต่จะได้รับอนุญาตจากท่านเท่านั้น</p>

                    <p>ในกรณีที่siamrentalcarsได้ ว่าจ้างหน่วยงานอื่นเพื่อให้ดำเนินการเกี่ยวกับข้อมูลส่วนบุคคลของท่าน เช่น การจัดส่งพัสดุไปรษณีย์ การวิเคราะห์เชิงสถิติในกิจการหรือกิจกรรมของsiamrentalcars เป็นต้น siamrentalcars จะกำหนดให้หน่วยงานที่ได้ว่าจ้างให้ดำเนินการดังกล่าว เก็บรักษาความลับและความปลอดภัยของข้อมูลส่วนบุคคลของท่าน และกำหนดข้อห้ามมิให้มีการนำข้อมูลส่วนบุคคลดังกล่าวไปใช้นอกเหนือจาก กิจกรรมหรือกิจการของsiamrentalcars</p>

                    <h5>การปรับปรุงนโยบายความเป็นส่วนตัว</h5>

                    <p>siamrentalcars อาจ ทำการปรับปรุงหรือแก้ไขนโยบายความเป็นส่วนตัวโดยไม่ได้แจ้งให้ท่านทราบล่วงหน้า ทั้งนี้ เพื่อความเหมาะสมและมีประสิทธิภาพในการให้บริการ ดังนี้ siamrentalcars จงขอแนะนำให้ผู้ใช้บริการอ่านนโยบายความเป็นส่วนตัวทุกครั้งที่แวะชม หรือเยี่ยมชม หรือมีการใช้บริการจากเว็บไซต์ www.siamrentalcars.com</p>



          <br><br><br><br>

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