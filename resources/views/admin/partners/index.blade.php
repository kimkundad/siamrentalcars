@extends('admin.layouts.template')

@section('admin.content')



<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Partners</h4>

        <div class="row">
        <div class="col-sm-12 col-md-6">
          <a href="{{url('admin/partners/create')}}" class="btn btn-primary btn-sm"><i class="icon-plus"></i> เพิ่ม Partners</a>
        </div>
        <div class="col-sm-12 col-md-6">
          <div id="order-listing_filter" class="dataTables_filter">

              <input type="search" class="form-control" placeholder="Search" aria-controls="order-listing" style="width:70%; float:right">

          </div>
        </div>
        </div>
        <br />
        <div class="table-responsive">
          <table class="table ">
            <thead>
              <tr>
                <th>
                  Partners
                </th>
                <th>
                  ชื่อ
                </th>
                <th>
                  ชื่อเจ้าของ
                </th>
                <th>
                  เบอร์ติดต่อ
                </th>
                <th>
                  อีเมล
                </th>
                <th>
                  สถานะ
                </th>
                <th>

                </th>
              </tr>
            </thead>
            <tbody>

              @if(isset($objs))
              @foreach($objs as $u)
              <tr id="{{$u->id}}">
                <td class="py-1">
                  <img src="{{url('assets/back/image/partnets/'.$u->part_image)}}" alt="{{$u->part_name}}"/>
                </td>
                <td>
                  {{$u->part_name}}
                </td>
                <td>
                  {{$u->part_owner}}
                </td>
                <td>
                  {{$u->part_phone}}
                </td>
                <td>
                  {{$u->part_email}}
                </td>
                <td>
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox"
                      @if($u->part_status == 1)
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
                        <a href="{{url('admin/partners/'.$u->id.'/edit')}}" class="dropdown-item font-weight-medium">
                          ดูข้อมูล
                        </a>
                        <a href="{{url('admin/partner_data_pro/'.$u->id)}}" class="dropdown-item font-weight-medium">
                          ข้อมูลรถเช่า
                        </a>
                        <a href="{{url('admin/partners/'.$u->id.'/province')}}" class="dropdown-item font-weight-medium">
                          สร้างข้อมูล
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item font-weight-medium">
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
            url:'{{url('api/partner_status')}}',
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
