@extends('admin.layouts.template')

@section('admin.content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<style>
.nav-item.nav-language .dropdown-toggle {
    border: 1px solid #5b5b5b;
    padding: .35rem .81rem;
}
</style>

<div class="row">
  <div class="col-12 grid-margin stretch-card" style="margin-bottom:80px;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">แก้ไข Promotion*</h4>
        <p class="card-description">
          กรอกข้อมูล ที่มีเครื่องหมาย (*) ให้ครบ
        </p>
        <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
          {{ method_field($method) }}
          {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleInputName1">ชื่อ Promotion*</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="ตั้งชื่อ Promotion" name="promotion_name" value="{{ $promo->promotion_name }}">
            @if ($errors->has('promotion_name'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">ตั้งชื่อ Promotion ให้ครบ</label>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">ใส่ราคาส่วนลด %*</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="ใส่ราคาส่วนลด" name="promotion_amount" value="{{ $promo->promotion_amount }}">
            @if ($errors->has('promotion_amount'))
            <label id="cname-error" class="error mt-2 text-danger" for="promotion_amount">ใส่ราคาส่วนลด ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">ใส่จำนวนที่กำหนด*</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="promotion_limit" value="{{ $promo->promotion_limit }}">
            @if ($errors->has('promotion_limit'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">ใส่จำนวนที่กำหนด</label>
            @endif
          </div>


          <div class="form-group">
            <label for="exampleInputCity1">ประเภท promotion*</label>
            <select class="form-control" id="promotion_type" name="promotion_type" >
                <option value="0" @if( $promo->promotion_type == 0)
                                  selected='selected'
                                  @endif>แบบทุกจังหวัด</option>
                <option value="1" @if( $promo->promotion_type == 1)
                                  selected='selected'
                                  @endif>แบบบางจังหวัด</option>
            </select>

          </div>


          <div class="form-group">
            <label for="exampleInputCity1">เลือกจังหวัด *ได้มากกว่า 1</label>
            <select class="form-control js-example-basic-single" multiple="multiple" id="get_prov" name="get_prov[]" >
              @if(isset($get_prov))
              @foreach($get_prov as $u)
              <option value="{{$u->PROVINCE_ID}}" selected='selected'>{{$u->PROVINCE_NAME}}</option>
              @endforeach
              @endif

                @foreach($objs as $u)
                <option value="{{$u->PROVINCE_ID}}">{{$u->PROVINCE_NAME}}</option>
                @endforeach
            </select>

          </div>


          <div class="form-group">
            <label for="exampleInputCity1">เลือกจังหวัด *ได้มากกว่า 1</label>

            <br />
            <img src="{{url('assets/back/image/promotion/'.$promo->promotion_image)}}" class="img-fluid rounded">

          </div>



          <div class="form-group">
            <label>รูป Promotion*</label>
            <input type="file" name="promotion_image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
            @if ($errors->has('promotion_image'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">ต้องมีรูป Promotion</label>
            @endif
          </div>




          <div class="form-group">
            <label for="exampleTextarea1">รายละเอียด</label>
            <textarea class="form-control" id="exampleTextarea1" name="promotion_detail" rows="4">{{ $promo->promotion_detail }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">อัพเดทข้อมูล</button>
          <button class="btn btn-light">ยกเลิก</button>
        </form>
      </div>
    </div>
  </div>

  </div>



@stop



@section('scripts')



<!-- Custom js for this page-->
<script src="{{url('assets/back/js/file-upload.js')}}"></script>
<script src="{{url('assets/back/js/typeahead.js')}}"></script>
<script src="{{url('assets/back/js/select2.js')}}"></script>
<!-- End custom js for this page-->
<script src="{{url('js/select2.js')}}"></script>
<script>
$('.js-example-basic-single').select2();

@if ($message = Session::get('edit_success_car'))
$.toast({
      heading: 'Success',
      text: 'ทำการแก้ไขข้อมูลสำเร็จ.',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
    @endif


</script>
@stop('scripts')
