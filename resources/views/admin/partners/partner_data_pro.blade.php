@extends('admin.layouts.template')

@section('admin.content')






        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">ข้อมูลจังหวัดของ {{$data_p->part_name}} </h4>
                <div class="col-sm-12 col-md-6">
                  <a href="{{url('admin/partners/'.$id.'/province')}}" class="btn btn-primary btn-sm"><i class="icon-plus"></i> เพิ่ม จังหวัดให้บริการ</a>
                  <br /><br />
                </div>
                <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>จังหวัด</th>
                      <th>รถเช่า</th>

                      <th>จัดการ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($objs))
                      @foreach($objs as $u)
                    <tr>
                      <td>
                        {{$u->PROVINCE_NAME}}
                      </td>
                      <td>
                        {{$u->count_car}}
                      </td>

                      <td>
                        <li class="nav-item dropdown d-none d-lg-flex nav-language">
                          <div class="nav-link">
                            <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">จัดการ

                            </span>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                              <a href="{{url('admin/partner_dash_pro/'.$u->id_of)}}" class="dropdown-item font-weight-medium">
                                ดูข้อมูล
                              </a>

                              <a href="{{url('admin/partner_del_pro/'.$u->id_of)}}" class="dropdown-item font-weight-medium">
                                ลบจังหวัด
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




@if ($message = Session::get('delete_success'))
$.toast({
      heading: 'Success',
      text: 'ทำการลบข้อมูลสำเร็จ.',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    })
    @endif

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
