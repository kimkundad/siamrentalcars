@extends('admin.layouts.template')

@section('admin.content')



<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">เลือกจังหวัดให้บริการ</h4>

        <div class="card-body">

          <p class="card-description">จัดหวัดที่มีอยู่ตอนนี้</p>
          <input name="tags" id="tags" value="{{$objs}}" />
        </div>

        <p class="card-description">สามารถ เลือกจังหวัดได้มากกว่า 1 จังหวัด</p>
        <form class="forms-sample" method="POST" action="{{url('admin/post_partner_pro/'.$id)}}" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="row">
            <div class="col-md-2">
              <p class="card-description">ภาคกลาง</p>
              <div class="form-group">
                @foreach($objs1 as $u)
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="province_id[]" value="{{$u->PROVINCE_ID}}" class="form-check-input">
                    {{$u->PROVINCE_NAME}}
                  </label>
                </div>
                @endforeach

              </div>
            </div>
            <div class="col-md-2">
              <p class="card-description">ภาคอีสาน</p>
              <div class="form-group">
                @foreach($objs2 as $u)
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="province_id[]" value="{{$u->PROVINCE_ID}}" class="form-check-input">
                    {{$u->PROVINCE_NAME}}
                  </label>
                </div>
                @endforeach
            </div>
          </div>
          <div class="col-md-2">
            <p class="card-description">ภาคเหนือ</p>
            <div class="form-group">
              @foreach($objs3 as $u)
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" name="province_id[]" value="{{$u->PROVINCE_ID}}" class="form-check-input">
                  {{$u->PROVINCE_NAME}}
                </label>
              </div>
              @endforeach
          </div>
        </div>
        <div class="col-md-2">
          <p class="card-description">ภาคใต้</p>
          <div class="form-group">
            @foreach($objs4 as $u)
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" name="province_id[]" value="{{$u->PROVINCE_ID}}" class="form-check-input">
                {{$u->PROVINCE_NAME}}
              </label>
            </div>
            @endforeach
        </div>
      </div>
      <div class="col-md-2">
        <p class="card-description"></p>
        <div class="form-group">
          @foreach($objs5 as $u)
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="province_id[]" value="{{$u->PROVINCE_ID}}" class="form-check-input">
              {{$u->PROVINCE_NAME}}
            </label>
          </div>
          @endforeach
      </div>
    </div>
    <div class="col-md-2">
      <p class="card-description"></p>
      <div class="form-group">
        @foreach($objs6 as $u)
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" name="province_id[]" value="{{$u->PROVINCE_ID}}" class="form-check-input">
            {{$u->PROVINCE_NAME}}
          </label>
        </div>
        @endforeach
    </div>
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

<script type="text/javascript">

$('#tags').tagsInput({
    'width': '100%',
    'height': '75%',
    'interactive': false,
    'defaultText': 'Add More',
    'removeWithBackspace': false,
    'minChars': 0,
    'maxChars': 20, // if not provided there is no limit
    'placeholderColor': '#666666'
  });


@if ($message = Session::get('del_product'))
$.toast({
      heading: 'Success',
      text: 'ทำการลบข้อมูลสำเร็จ.',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
    @endif
</script>

@stop('scripts')
