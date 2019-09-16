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
        <h4 class="card-title">แก้ไข review</h4>
        <p class="card-description">
          กรอกข้อมูล ที่มีเครื่องหมาย (*) ให้ครบ
        </p>
        <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
          {{ method_field($method) }}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1"> ชื่อลูกค้า</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="แพรวา สุธรรมพงษ์" name="name" value="{{$objs->name}}">
            @if ($errors->has('part_name'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ชื่อลูกค้า ให้ครบ</label>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">ตำแหน่งลูกค้า</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="รองหัวหน้าทีมบีทรี" name="position" value="{{$objs->position}}">
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ชื่อ เจ้าของ Partners ให้ครบ</label>
            @endif
          </div>


          <div class="form-group">
    					             <label class="col-md-3 control-label">รูปลูกค้า</label>
    												<div class="col-md-8">
    													<img src="{{url('assets/back/images/review/'.$objs->avatar)}}" class="img-responsive img-thumbnail">
    												</div>
    											</div>



          <div class="form-group">
            <label>รูปลูกค้า</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">เพิ่ม รูปชื่อลูกค้า ให้ครบ</label>
            @endif
          </div>




          <div class="form-group">
            <label for="exampleTextarea1">รายละเอียด</label>
            <textarea class="form-control" id="exampleTextarea1" placeholder="สิ่งที่ทำให้ผมประทับใจมากที่สุดคือ ผมสามารถที่จะเลือกและเปรียบเทียบรถที่จะเช่าได้จากผู้ให้บริการหลายเจ้าพร้อมๆกัน ..." name="detail" rows="4">{{$objs->detail}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">แก้ไขข้อมูล</button>
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
