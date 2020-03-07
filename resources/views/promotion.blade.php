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
            <h1 class="theme-page-header-title">คูปองลดเพิ่ม</h1>
            <div class="theme-contact-info">
              <div class="row row-no-gutter">


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
                  <h2 class="theme-page-header-title">เก็บคูปองลดเพิ่มพร้อมเช่ารถ</h2>
                  <hr>



                </div>
              </div>


              <div class="row row-col-mob-gap" data-gutter="20">

                @if(isset($promo))
                @foreach($promo as $u)
                <div class="col-md-4 ">
                  <div class="banner _h-33vh _br-5 banner-">
                    <div class="banner-bg" style="background-image:url({{url('assets/back/image/promotion/'.$u->promotion_image)}});"></div>
                    <div class="banner-mask banner-mask-half"></div>

                    <div class="banner-caption _ta-c banner-caption-bottom">
                      <h5 class="banner-title _tt-uc">{{$u->promotion_name}}</h5>
                      <a data-value="{{$u->id}}" id="{{$u->id}}" class="add_promotion btn _mt-20 _tt-uc btn-white btn-ghost" >กดเพื่อรับส่วนลดของเรา</a>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif


              </div>






            </div>
          </div>







        </div>
      </div>
    </div>
  </div>
</div>
  <br /><br /><br />



@endsection

@section('scripts')



<script>

$(document).ready(function() {


  $('.add_promotion').on('click', function () {


    @if (Auth::guest())

      swal("กรุณาทำการ Login ก่อนเพื่อรับส่วนลดนี้");

    @else

    var ea_number = this.id;
    console.log(ea_number);
        $.ajax({
          type: "POST",
          headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          data: {
            "ea_number" : ea_number
          },
          url: "{{url('/api/add_web_promotion')}}",
          success: function(data) {

            if(data.data.status == 200){
              swal("ยินดีด้วย!", "คุณได้รับโปรโมชั่นนี้แล้ว เริ่มจองรถกันเลยค่ะ", "success");
            }else{
              swal("คุณมีโปรโมชั่นนี้อยู่แล้ว");
            }

          }
        });


      @endif



  });

  });

</script>


@stop('scripts')
