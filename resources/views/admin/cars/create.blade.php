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
        <h4 class="card-title">ใส่ข้อมูลรถเช่า</h4>
        <p class="card-description">
          กรอกข้อมูล ที่มีเครื่องหมาย (*) ให้ครบ
        </p>

        @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

        <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
          {{ method_field($method) }}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">ชื่อรถเช่า*</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="บริษัทที่ให้บริการรถยนต์เช่า" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก ชื่อรถเช่า ให้ครบ</label>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">ยี่ห้อรถ*</label>
              <select class="form-control" name="cat_id" id="exampleSelectGender">
                @if(isset($category))
                @foreach($category as $u)
                <option value="{{$u->id}}">{{$u->name_cat}}</option>
                @endforeach
                @endif
              </select>
            </div>

            <div class="form-group">
              <label for="exampleSelectGender">ประเภทรถ*</label>
                <select class="form-control" name="sub_cat_id" id="exampleSelectGender">
                  @if(isset($sub_category))
                  @foreach($sub_category as $u)
                  <option value="{{$u->id}}">{{$u->sub_name}}</option>
                  @endforeach
                  @endif
                </select>
              </div>

          <div class="form-group">
            <label for="exampleInputCity1">รหัสรถเช่า*</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="code" value="{{ old('code') }}">
            @if ($errors->has('code'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">กรอก รหัสรถเช่า ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">ราคา*</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="price" value="{{ old('price') }}">
            @if ($errors->has('price'))
            <label id="cname-error" class="error mt-2 text-danger"  for="part_name">กรอก ราคา ให้ครบ</label>
            @endif
          </div>


          <div class="form-group">
            <label for="exampleInputCity1">ราคามัดจำ*</label>
            <input type="text" class="form-control" id="deposit" name="deposit" value="{{ old('deposit') }}">
            @if ($errors->has('deposit'))
            <label id="cname-error" class="error mt-2 text-danger"  for="part_name">กรอก ราคามัดจำ ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">ระบบเกียร์*</label>
              <select class="form-control" name="grear" id="exampleSelectGender">
                <option value="เกียร์อัตโนมัติ">เกียร์อัตโนมัติ</option>
                <option value="เกียร์ธรรมดา">เกียร์ธรรมดา</option>
              </select>
            </div>


            <div class="form-group">
              <label for="exampleSelectGender">ประเภทประกันรถยนต์*</label>
                <select class="form-control" name="insurance" id="exampleSelectGender">
                  <option value="ประกันภัยรถยนต์ประเภท 1">ประกันภัยรถยนต์ประเภท 1</option>
                  <option value="ประกันภัยรถยนต์ประเภท 2+">ประกันภัยรถยนต์ประเภท 2+</option>
                  <option value="ประกันภัยรถยนต์ประเภท 3+">ประกันภัยรถยนต์ประเภท 3+</option>
                  <option value="ประกันภัยรถยนต์ชั้น 2 ธรรมดา">ประกันภัยรถยนต์ชั้น 2 ธรรมดา</option>
                  <option value="ประกันภัยรถยนต์ชั้น 3 ธรรมดา">ประกันภัยรถยนต์ชั้น 3 ธรรมดา</option>
                </select>
              </div>


              <div class="form-group">
                <label for="exampleInputCity1">จำนวนผู้โดยสาร*</label>
                <input type="text" class="form-control" id="exampleInputCity1" name="total_p" value="{{ old('total_p') }}">
                @if ($errors->has('total_p'))
                <label id="cname-error" class="error mt-2 text-danger"  for="part_name">กรอก จำนวนผู้โดยสาร ให้ครบ</label>
                @endif
              </div>

              <div class="form-group">
                <label for="exampleInputCity1">จำนวนกระเป๋า*</label>
                <input type="text" class="form-control" id="exampleInputCity1" name="bags" value="{{ old('bags') }}">
                @if ($errors->has('bags'))
                <label id="cname-error" class="error mt-2 text-danger"  for="part_name">กรอก จำนวนกระเป๋า ให้ครบ</label>
                @endif
              </div>

          <div class="form-group">
            <label>รูปหลักรถเช่า</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
            @if ($errors->has('part_owner'))
            <label id="cname-error" class="error mt-2 text-danger" for="part_name">เพิ่ม รูปหลักรถเช่า ให้ครบ</label>
            @endif
          </div>


          <div class="form-group">
            <label for="exampleTextarea1">อุปกรณ์ภายในรถ</label>
            <textarea class="form-control" id="summernote" name="service" rows="4">{{ old('service') }}</textarea>
            @if ($errors->has('service'))
            <label id="cname-error" class="error mt-2 text-danger" for="service">กรอก ที่อยู่ ให้ครบ</label>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">รายละเอียด</label>
            <textarea class="form-control" id="summernote2" name="detail" rows="4">{{ old('detail') }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">เพิ่มข้อมูล</button>
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
