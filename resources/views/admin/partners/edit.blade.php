@extends('admin.layouts.template')

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
        <h4 class="card-title">{{$objs->part_name}}</h4>
        <p class="card-description">
          กรอกข้อมูล ที่มีเครื่องหมาย (*) ให้ครบ
        </p>
        <div class="form-group">

        <img class="img-fluid rounded" src="{{url('assets/back/image/partnets/'.$objs->part_image)}}" alt="banner image" style="width: 250px;">
        </div>

        <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
          {{ method_field($method) }}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">ชื่อ Partners</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="บริษัทที่ให้บริการรถยนต์เช่า" name="part_name" value="{{$objs->part_name}}">
            @if ($errors->has('part_name'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ชื่อ Partners ให้ครบ</label>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">ชื่อ เจ้าของ Partners</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="ชื่อเจ้าของ บริษัทที่ให้บริการรถยนต์เช่า" name="part_owner" value="{{$objs->part_owner}}">
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ชื่อ เจ้าของ Partners ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">อีเมล</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="part_email" value="{{$objs->part_email}}">
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก อีเมล ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">เบอร์ติดต่อ</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="part_phone" value="{{$objs->part_phone}}">
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก เบอร์ติดต่อ ให้ครบ</label>
            @endif
          </div>



          <div class="form-group">
            <label>โลโก้</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">เพิ่ม โลโก้ ให้ครบ</label>
            @endif
          </div>


          <div class="form-group">
            <label for="exampleTextarea1">ที่อยู่</label>
            <textarea class="form-control" id="exampleTextarea1" name="part_address" rows="4">{{$objs->part_address}}</textarea>
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ที่อยู่ ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">รายละเอียด</label>
            <textarea class="form-control" id="exampleTextarea1" name="part_detail" rows="4">{{$objs->part_detail}}</textarea>
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

<script>
@if ($message = Session::get('edit_success'))
$.toast({
      heading: 'Success',
      text: 'ทำการแก้ไขข้อมูลสำเร็จ.',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
    @endif

    @if ($message = Session::get('add_success'))
    $.toast({
          heading: 'Success',
          text: 'ทำการเพิ่มข้อมูลสำเร็จ.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        })
        @endif
</script>

@stop('scripts')
