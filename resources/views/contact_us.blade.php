@extends('layouts.template')

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

<div class="theme-hero-area _h-50vh _h-mob-80vh theme-hero-area-sm">
  <div class="theme-hero-area-bg-wrap">
    <div class="theme-hero-area-bg" style="background-image:url({{url('assets/home/img/o7qk1vqy3p0_1500x800.jpeg')}});"></div>
    <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
    <div class="theme-hero-area-inner-shadow"></div>
  </div>
  <div class="theme-hero-area-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 theme-page-header-abs">
          <div class="theme-page-header theme-page-header-lg">
            <h1 class="theme-page-header-title">ติดต่อเรา</h1>
            <div class="theme-contact-info">
              <div class="row row-no-gutter">
                <div class="col-md-5">
                  <address class="theme-contact-address">ที่อยู่ 222/57 หมู่ 10
                    <br/> ถนนกาญจนาภิเษก ต.บางแก้ว อำเภอบางพลี
                    <br/>สมุทรปราการ 10540
                  </address>
                </div>
                <div class="col-md-4">
                  <ul class="theme-contact-info-list">
                    <li>
                      <i class="fa fa-phone"></i>089-059-1794
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>090-921-0135
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-envelope"></i>reservations@siamrentalcars.com
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="theme-page-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="theme-about-us">
          <div class="theme-about-us-section sticky-parent">
            <div class="row row-col-static row-col-reverse">


              <div class="col-md-12">
                <div class="theme-about-us-section-body">
                  <h2 class="theme-page-header-title">ติดต่อ Siamrentalcars</h2>
                  <hr>
                  <p>คุณสามารถพบคำตอบสำหรับคำถามทั่วๆไปได้ที่ส่วนความช่วยเหลือ <a>คลิกที่นี่</a></p>
                  <p>หรือสามารถอีเมล์มาถามเราได้ที่ reservations@siamrentalcars.com หรือโทรหาเราที่ 089-059-1794, 090-921-0135</p>

                  <p>Siamrentalcars พยายามตอบทุกข้อสงสัยของคุณภายใน 24 ชม. ตลอดช่วงเวลาทำการของเราทุกวัน 08:00 - 22:00 น.</p>


                </div>
              </div>





            </div>
          </div>







        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="theme-contact">
            <br><br>

            <form id="contactForm">
              {{ csrf_field() }}
            <div class="row row-col-mob-gap">
              <div class="col-md-7">
                <div class="form-group theme-contact-form-group">
                  <input class="form-control" type="text" name="name" id="name" placeholder="ชื่อผู้ติดต่อ"/>
                </div>
                <div class="form-group theme-contact-form-group">
                  <input class="form-control" type="text" name="phone" id="phone" placeholder="เบอร์ติดต่อกลับ"/>
                </div>
                <div class="form-group theme-contact-form-group">
                  <input class="form-control" type="text" name="email" id="email" placeholder="อีเมล"/>
                </div>
                <div class="form-group theme-contact-form-group">
                  <div class="g-recaptcha" data-sitekey="6LdBOl8UAAAAALrNu0pKZ5qiNc42G2FYKh8Jmynb"></div>
                </div>
                <div class="form-group theme-contact-form-group">
                  <textarea class="form-control" rows="5" name="msg" id="msg" placeholder="ข้อความที่ต้องการส่งหาเรา"></textarea>
                </div>
                <a class="btn btn-uc btn-primary btn-lg" id="btnSendData">ส่งข้อความหาเรา</a>
              </div>
              <div class="col-md-5">
                <div class="google-map theme-contact-map" data-lat="17.3721633" data-lng="104.6576194" data-tab="false"></div>
              </div>
            </div>
          </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>

<script>
$(document).on('click','#btnSendData',function (event) {
  event.preventDefault();
  var form = $('#contactForm')[0];
  var formData = new FormData(form);

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var msg = document.getElementById("msg").value;
  var phone = document.getElementById("phone").value;




if(name == '' || msg == '' || email == '' || phone == ''){

  swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

}else{

  $.LoadingOverlay("show", {
    background  : "rgba(255, 255, 255, 0.4)",
    image       : "",
    fontawesome : "fa fa-cog fa-spin"
  });


  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
    }
});

  $.ajax({
      url: "{{url('/api/add_my_contact')}}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
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

            swal("สำเร็จ!", "ข้อความถูกส่งไปหาเจ้าหน้าที่เรียบร้อยแล้ว", "success");

            $("#name").val('');
            $("#msg").val('');
            $("#email").val('');
            $("#phone").val('');


          setTimeout(function(){
            //    window.location.replace("{{url('clients/success_payment/')}}/"+data.data.value);
          }, 3000);

          }else{

            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 500);

            swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

          }
      },
      error: function () {

      }
  });

}


});
</script>

@stop('scripts')
