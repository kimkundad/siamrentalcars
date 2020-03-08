@extends('admin.layouts.template')

@section('admin.content')
<style>
.table td, .jsgrid .jsgrid-table td, .table th, .jsgrid .jsgrid-table th {

    font-size: 12px;

}
</style>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">



        <div class="row">
          <div class="col-md-12">
            <h4 class="card-title">ข้อมูลของ {{$objs->part_name}}</h4>
          </div>
          <div class="col-md-12">


            <div class="table-responsive">
              <table class="table table-striped" style="font-size:12px;">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      ชื่อผู้เช่า
                    </th>
                    <th>
                      ผู้ให้บริการ
                    </th>
                    <th>
                      รถเช่า
                    </th>
                    <th>
                      วันรับรถ - ส่งรถ
                    </th>
                    <th>
                     ที่รับรถ
                    </th>
                    <th>
                      ราคารวม
                    </th>
                    <th>
                      สถานะ
                    </th>
                    <th>

                    </th>
                  </tr>
                </thead>
                <tbody>

                  @if(isset($order))
                  @foreach($order as $u)
                  <tr id="{{$u->id_q}}">
                    <td>
                      {{$u->order_ids}}
                    </td>
                    <td>
                      {{$u->user_name}}
                    </td>
                    <td>
                      {{$u->part_name}}
                    </td>
                    <td>
                      {{$u->car_name}}
                    </td>
                    <td>
                      {{$u->re_car}} : {{$u->re_car_time}} - {{$u->se_car}} : {{$u->se_car_time}}
                    </td>
                    <td>
                    {{$u->PROVINCE_NAME}} , {{$u->position_name}}
                    </td>
                    <td>
                      {{$u->total}}
                    </td>
                    <td>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox"
                          @if($u->statuss == 1)
                          checked
                          @endif
                          class="form-check-input">
                          สำเร็จแล้ว
                        </label>
                      </div>
                    </td>
                    <td>

                      <li class="nav-item dropdown d-none d-lg-flex nav-language">
                        <div class="nav-link">
                          <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">จัดการ

                          </span>
                          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                            <a target="_blank" href="{{url('admin/order/'.$u->id_q.'/edit')}}" class="dropdown-item font-weight-medium">
                              ดูข้อมูล
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('admin/order/del/'.$u->id_q)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="dropdown-item font-weight-medium">
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
              {{ $order->links() }}
            </div>

          </div>
        </div>
        <br />


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
            url:'{{url('api/order_status')}}',
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
