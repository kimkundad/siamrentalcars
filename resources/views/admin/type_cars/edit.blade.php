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
        <h4 class="card-title">แก้ไข {{ $objs->sub_name }}</h4>
        <p class="card-description">
          กรอกข้อมูล ที่มีเครื่องหมาย (*) ให้ครบ
        </p>
        <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
          {{ method_field($method) }}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1"> ประเภทรถ</label>
            <input type="text" class="form-control" id="exampleInputName1"  name="name" value="{{ $objs->sub_name }}">
            @if ($errors->has('name'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ประเภทรถ ให้ครบ</label>
            @endif
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


@stop('scripts')
