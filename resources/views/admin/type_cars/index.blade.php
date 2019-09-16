@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ประเภทรถ</h4>
        <div class="row">
        <div class="col-sm-12 col-md-6">
          <a href="{{url('admin/type_cars/create')}}" class="btn btn-primary btn-sm"><i class="icon-plus"></i> เพิ่ม ประเภทรถ</a>
          <br /><br />
        </div>
        <div class="col-sm-12 col-md-6">

        </div>

        </div>
        <div class="table-responsive">
          <table class="table ">
            <thead>
              <tr>
                <th>#</th>
                <th>ชื่อประเภทรถ</th>
                <th>จำนวน รถเช่า</th>

                <th>วันที่สร้าง</th>
                <th>จัดการ</th>
              </tr>
            </thead>
            <tbody>
              @if($objs)
                @foreach($objs as $u)
                    <tr>
                      <td>{{$u->id}}</td>
                      <td>{{$u->sub_name}}</td>
                      <td>{{$u->options}}</td>

                      <td>{{$u->created_at}}</td>
                      <td>


                        <a href="{{url('admin/type_cars/'.$u->id.'/edit')}}" class="btn btn-outline-primary btn-sm">แก้ไขข้อมูล</a>
                      </td>
                    </tr>
                 @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  </div>



@stop



@section('scripts')

<script>
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
</script>

@stop('scripts')
