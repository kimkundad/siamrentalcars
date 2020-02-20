@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ข้อมูล Promotion</h4>
        <div class="row">
        <div class="col-sm-12 col-md-6">
          <a href="{{url('admin/promotion/create')}}" class="btn btn-primary btn-sm"><i class="icon-plus"></i> เพิ่ม promotion</a>
          <br /><br />
        </div>
        <div class="col-sm-12 col-md-6">

        </div>

        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>

                <th>
                  ชื่อ Promotion
                </th>
                <th>
                  จำนวนการใช้งาน
                </th>
                <th>
                  ประเภท
                </th>
                <th>
                  ราคาที่ลด
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
              <tr>
                <td >
                  {{$u->promotion_name}}
                </td>
                <td>
                  0
                </td>
                <td>
                  @if($u->promotion_type == 0)
                  ได้ทุกจังหวัด
                  @else
                  บางจังหวัด
                  @endif
                </td>
                <td>
                {{$u->promotion_amount}}
                </td>
                <td>
                {{$u->promotion_amount}}
                </td>
                <td>
                  @if($u->promotion_status == 0)
                <span class="text-danger">ถูกปิดการใช้งาน</span>
                  @else
                  <span class="text-success">ใช้งาน</span>
                  @endif
                </td>
                <td>
                  <li class="nav-item dropdown d-none d-lg-flex nav-language">
                    <div class="nav-link" style="padding: 0.5rem 0rem;">
                      <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">จัดการ</span>
                      <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                        <a href="{{url('admin/promotion/'.$u->id.'/edit')}}" class="dropdown-item font-weight-medium">
                          ดูข้อมูล
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{url('admin/promotion_add/'.$u->id)}}" class="dropdown-item font-weight-medium">
                          ใช้งาน
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{url('admin/promotion_del/'.$u->id)}}" class="dropdown-item font-weight-medium">
                          ถูกปิดการใช้งาน
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

          @include('admin.pagination.default', ['paginator' => $objs])
        </div>
      </div>
    </div>
  </div>

  </div>



@stop



@section('scripts')

<script>
@if ($message = Session::get('add_success_car'))
$.toast({
      heading: 'Success',
      text: 'ทำการเพิ่มข้อมูลสำเร็จ.',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
    @endif

    @if ($message = Session::get('edit_success_car'))
    $.toast({
          heading: 'Success',
          text: 'ทำการแก้ไขข้อมูลสำเร็จ.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        })
        @endif


        @if ($message = Session::get('del_success_car'))
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
