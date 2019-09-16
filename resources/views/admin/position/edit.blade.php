@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">จุดรับรถ {{$objs->PROVINCE_NAME}}</h4>

        <div class="row">
        <div class="col-sm-12 col-md-6">
          <a href="#" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@fat" class="btn btn-primary btn-sm"><i class="icon-plus"></i> เพิ่ม จุดรับรถ</a>


          <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form class="forms-sample" method="POST" action="{{url('admin/add_position/'.$objs->PROVINCE_ID)}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel-4">เพิ่มจุดรับรถ</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">ใช่ชื่อจุดรับรถ:</label>
                      <input type="text" class="form-control" name="position_name" >
                    </div>


                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <br />
        </div>
        <br />

        <div class="table-responsive">
          <br />
          <table class="table ">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  จุดรับรถ
                </th>
                <th>

                </th>

                <th>

                </th>
              </tr>
            </thead>
            <tbody>

              @if(isset($objs1))
              @foreach($objs1 as $u)
              <tr>
                <td>
                  {{$s}}
                </td>
                <td>
                  {{$u->position_name}}
                </td>
                <td>
                  <button type="button" data-toggle="modal" data-target="#exampleModal-edit-{{$u->id}}" data-whatever="@fat" class="btn btn-icons btn-rounded btn-success"><i class="icon-settings"></i></button>

                  <div class="modal fade" id="exampleModal-edit-{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form class="forms-sample" method="POST" action="{{url('admin/edit_position/'.$u->id)}}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-4">แก้ไขจุดรับรถ</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">ใช่ชื่อจุดรับรถ:</label>
                              <input type="hidden" class="form-control" name="id_pro" value="{{$objs->PROVINCE_ID}}">
                              <input type="text" class="form-control" name="position_name" value="{{$u->position_name}}">
                            </div>


                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">อัพเดทข้อมูล</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <button type="button" data-toggle="modal" data-target="#exampleModal-del-{{$u->id}}" data-whatever="@fat" class="btn btn-icons btn-rounded btn-secondary"><i class="icon-ban"></i></button>

                  <div class="modal fade" id="exampleModal-del-{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form class="forms-sample" method="POST" action="{{url('admin/del_position/'.$u->id)}}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-4">ต้องการลบ {{$u->position_name}} ?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <input type="hidden" class="form-control" name="id_pro" value="{{$objs->PROVINCE_ID}}">
                          </button>
                        </div>

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>


                </td>
              </tr {{$s++}}>
              @endforeach
              @endif

            </tbody>
          </table>
          </div>

        </div>
        <br />
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

    @if ($message = Session::get('edit_success'))
    $.toast({
          heading: 'Success',
          text: 'ทำการอัพเดทข้อมูลสำเร็จ.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        })
        @endif
</script>


@stop('scripts')
