@extends('admin.layouts.template')

<link rel="stylesheet" href="{{url('assets/back/vendors/summernote/dist/summernote-bs4.css')}}">
@section('admin.content')

<style>
.nav-item.nav-language .dropdown-toggle {
    border: 1px solid #5b5b5b;
    padding: .35rem .81rem;
}
</style>

<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ข้อมูล Order : {{$objs->order_ids}}</h4>
        <p class="card-description">

        </p>




          <div class="form-group">
            <label for="exampleInputName1">ชื่อผู้เช่า*</label>
            <input type="text" class="form-control" value="{{$objs->user_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">อีเมล*</label>
            <input type="text" class="form-control" value="{{$objs->user_email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">เบอร์ติดต่อ*</label>
            <input type="text" class="form-control" value="{{$objs->user_phone}}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">เบอร์ติดต่อ*</label>
            <input type="text" class="form-control" value="{{$objs->user_phone}}">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">ผู้ให้บริการ*</label>
            <input type="text" class="form-control" value="{{$objs->part_name}}">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">รถเช่า*</label>
            <input type="text" class="form-control" value="{{$objs->car_name}} / {{$objs->price}} วัน">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">วันรับรถ - ส่งรถ*</label>
            <input type="text" class="form-control" value="{{$objs->re_car}} : {{$objs->re_car_time}} - {{$objs->se_car}} : {{$objs->se_car_time}}">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">ที่รับรถ*</label>
            <input type="text" class="form-control" value="{{$objs->PROVINCE_NAME}} , {{$objs->position_name}}">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">ราคารวม*</label>
            <input type="text" class="form-control" value="{{$objs->total}} ">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">จำนวนวันที่เช่า*</label>
            <input type="text" class="form-control" value="{{$objs->day}} ">
          </div>






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
<script src="{{url('assets/back/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<!-- End custom js for this page-->


<script>
$('#summernote, #summernote2').summernote({
    toolbar: [
      // [groupName, [list of button]]
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']]
    ],
    placeholder: 'Hello bootstrap 4',
    tabsize: 2,
    height: 350
  });
  </script>

@stop('scripts')
