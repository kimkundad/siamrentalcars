@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">รถเช่าทั้งหมด</h4>
        <div class="col-sm-12 col-md-6">
          <a href="{{url('admin/car_rent/create')}}" class="btn btn-primary btn-sm"><i class="icon-plus"></i> เพิ่ม รถเช่า</a>
          <br /><br />
        </div>
        <div class="table-responsive">
          <table class="table ">
            <thead>
              <tr>
                <th>ชื่อรถ</th>
                      <th>รุ่น/ยี่ห้อ</th>
                      <th>ประเภท</th>
                      <th>ราคา</th>
                      <th>สถานะ</th>
                      <th>จัดการ</th>
              </tr>
            </thead>
            <tbody>
              @if($objs)
                @foreach($objs as $u)
                    <tr id="{{$u->id_q}}">

                      <td>{{$u->name}}</td>
                      <td>{{$u->name_cat}}</td>
                      <td>{{$u->sub_name}}</td>
                      <td>{{$u->price}}</td>
                      <td>
                        <div class="form-check form-check-flat form-check-primary">
                          <label class="form-check-label">
                            <input type="checkbox"
                            @if($u->status == 1)
                            checked
                            @endif
                            class="form-check-input">
                            เปิดใช้งาน
                          </label>
                        </div>

                      </td>
                      <td>

                        <li class="nav-item dropdown d-none d-lg-flex nav-language">
                          <div class="nav-link">
                            <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">จัดการ

                            </span>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                              <a href="{{url('admin/car_rent/'.$u->id_q.'/edit')}}" class="dropdown-item font-weight-medium">
                                ดูข้อมูล
                              </a>
                              <div class="dropdown-divider"></div>
                              <a href="{{url('admin/car_rent/del/'.$u->id_q)}}" class="dropdown-item font-weight-medium">
                                ลบข้อมูล
                              </a>
                            </div>
                          </div>
                        </li>

                      </td>
                    </tr>
                 @endforeach
              @endif
            </tbody>
          </table>
          {{ $objs->links() }}
        </div>
      </div>
    </div>
  </div>

  </div>



@stop



@section('scripts')

<script type="text/javascript">
$(document).ready(function(){
  $("input:checkbox").change(function() {
    var user_id = $(this).closest('tr').attr('id');
    console.log(user_id)
    $.ajax({
            type:'POST',
            url:'{{url('api/post_status')}}',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            data: { "user_id" : user_id },
            success: function(data){
              if(data.data.success){


                $.toast({
                      heading: 'Success',
                      text: 'ทำการแก้ไขข้อมูลสำเร็จ.',
                      showHideTransition: 'slide',
                      icon: 'success',
                      loaderBg: '#f96868',
                      position: 'top-right'
                    })



              }
            }
        });
    });
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
