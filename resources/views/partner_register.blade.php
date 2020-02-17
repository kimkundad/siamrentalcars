@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
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
<style>
.select2-container--default .select2-selection--single{
  height: 45px;
      padding: 7px;
      padding-left: 7px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {

    line-height: 28px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #fff transparent transparent transparent;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 10px;
}
.select2-containe{
  width: 100% !important;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid black 1px;
    outline: 0;
    height: 45px;
        padding: 7px;
        padding-left: 7px;
}
.select2-container--default .select2-selection--multiple {
  height: 45px;
      padding: 7px;
      padding-left: 7px;
}
</style>
@stop('stylesheet')

@section('content')


<div class="theme-page-section" style="padding: 80px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="theme-about-us">
          <div class="theme-about-us-section sticky-parent">
            <div class="row row-col-static row-col-reverse">


              <div class="col-md-12">
                <div class="theme-about-us-section-body">
                  <h2 class="theme-page-header-title">ร่วมเป็นพันธมิตรกับ Siamrentalcars</h2>
                  <hr>
                  <p>หากคุณเป็นผู้ประกอบการรถเช่าที่มีมาตรฐานและมีความประสงค์ในการใช้ซอฟต์แวร์ระบบการจัดการรถเช่าและต้องการโฆษณารถเช่าที่มีอยู่บนแพลตฟอร์มของเรา
                     กรุณากรอกข้อมูลเกี่ยวกับธุรกิจรถเช่าของคุณและทีมงานพัฒนาธุรกิจของเราจะทำการติดต่อกลับภายใน 3-5 วัน ในกรณีที่บริษัท/ร้านของท่าน มีรถเช่ามากกว่า 3 คันขึ้นไป</p>
                     <br />
                  <h3>รายละเอียดธุรกิจของคุณ</h3>

                  <div class="theme-contact">
                    <br>

                    <form id="partner_register">
                      {{ csrf_field() }}
                    <div class="row row-col-mob-gap">
                      <div class="col-md-12">
                        <div class="form-group theme-contact-form-group">
                          <label>เลือกจังหวัด ได้มากกว่า 1</label>
                          <select class="theme-search-area-section-input js-example-basic-single" multiple="multiple" id="get_prov" name="get_prov[]" style="height: 45px!important; font-size: 14px !important;">

                              @foreach($objs as $u)
                              <option value="{{$u->PROVINCE_ID}}">{{$u->PROVINCE_NAME}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group theme-contact-form-group">
                          <input class="form-control" type="text" name="company" id="company" placeholder="ชื่อร้าน/บริษัท"/>
                        </div>

                        <div class="form-group theme-contact-form-group">
                          <input class="form-control" type="text" name="owner" id="owner" placeholder="ชื่อผู้ติดต่อ"/>
                        </div>

                        <div class="form-group theme-contact-form-group">
                          <input class="form-control" type="text" name="number_phone" id="number_phone" placeholder="เบอร์ติดต่อ"/>
                        </div>

                        <div class="form-group theme-contact-form-group">
                          <input class="form-control" type="text" name="email" id="email" placeholder="อีเมล"/>
                        </div>


                        <div class="form-group theme-contact-form-group">
                          <input class="form-control" type="text" name="num_car" id="num_car" placeholder="ระบุจำนวนรถ"/>
                        </div>

                        <div class="form-group theme-contact-form-group">
                          <textarea class="form-control" rows="5" name="address" id="address" placeholder="ที่อยู่ของทางร้าน/บริษัท"></textarea>
                        </div>

                      </div>
                      <div class="col-md-12 text-center">
                        <a class="btn btn-uc btn-primary btn-lg" id="add_partner_register">ร่วมเป็นพันธมิตรกับเรา</a>
                      </div>

                    </div>
                  </form>


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
<script src="{{url('js/select2.js')}}"></script>
<script>
$('.js-example-basic-single').select2();




$(document).on('click','#add_partner_register',function (event) {
  event.preventDefault();
  var form = $('#partner_register')[0];
  var formData = new FormData(form);

  var get_prov = document.getElementById("get_prov").value;
  var company = document.getElementById("company").value;
  var owner = document.getElementById("owner").value;
  var number_phone = document.getElementById("number_phone").value;


  var email = document.getElementById("email").value;
  var num_car = document.getElementById("num_car").value;
  var address = document.getElementById("address").value;




if(get_prov == '' || company == '' || owner == '' || number_phone == '' || email == '' || num_car == '' || address == ''){

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
      url: "{{url('/api/add_partner_register')}}",
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


            $("#company").val('');
            $("#owner").val('');
            $("#number_phone").val('');
            $("#email").val('');
            $("#num_car").val('');
            $("#address").val('');


          setTimeout(function(){
             window.location.replace("{{url('partner_register/')}}");
          }, 1800);

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
