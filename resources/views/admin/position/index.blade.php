@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">จังหวัดให้บริการ</h4>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  จังหวัด
                </th>
                <th>
                  จำนวนจุดรับรถ
                </th>
                <th>
                  รถเช่า
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
                  {{$u->PROVINCE_ID}}
                </td>
                <td>
                  {{$u->PROVINCE_NAME}}
                </td>
                <td>
                  {{$u->count_position}}
                </td>
                <td>
                {{$u->count_cars}}
                </td>
                <td>
                  <li class="nav-item dropdown d-none d-lg-flex nav-language">
                    <div class="nav-link" style="padding: 0.5rem 0rem;">
                      <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">จัดการ

                      </span>
                      <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                        <a href="{{url('admin/position/'.$u->PROVINCE_ID.'/edit')}}" class="dropdown-item font-weight-medium">
                          ดูข้อมูล
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



@stop('scripts')
