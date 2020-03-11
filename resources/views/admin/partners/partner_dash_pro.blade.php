@extends('admin.layouts.template')

@section('admin.content')









        <div class="row">





          <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$name->part_name}} ({{$pro->PROVINCE_NAME}})</h4>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-5" data-whatever="@fat">เพิ่มรถเช่า</button>
                <br /><br />
                    <div class="modal fade" id="exampleModal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <form class="forms-sample" method="POST" action="{{url('admin/add_cars_part/'.$objs->part_id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel-4">เพิ่มรถเช่า</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">เลือกรถเช่า:</label>
                              <select class="form-control" name="car_id" id="exampleSelectGender">
                                <option value="">--เลือกรถเช่า--</option>
                                @if(isset($cars))
                                @foreach($cars as $u)
                                  <option value="{{$u->id_c}}">{{$u->name}} ({{$u->name_cat}}) ราคาหลัก : {{$u->price}}</option>
                                @endforeach
                                @endif
                              </select>
                            </div>

                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">ราคารถเช่า กำหนดเอง:</label>
                                <input type="text" class="form-control" name="car_price" >
                                <input type="hidden" class="form-control" name="prov_id" value="{{$objs->pro_id}}" >
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





                    <div class="table-responsive">
                      <table class="table ">
                        <thead>
                          <tr>
                            <th>
                              รุ่นรถ
                            </th>
                            <th>
                              ราคา
                            </th>
                            <th>
                            ยอดค้นหา
                            </th>
                            <th>
                              สภานะ
                            </th>
                            <th>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(isset($get_car))
                          @foreach($get_car as $u)
                          <tr id="{{$u->id_p}}">
                            <td>
                              {{$u->name}} ({{$u->name_cat}})
                            </td>
                            <td>
                              {{$u->cars_price}}
                            </td>
                            <td>
                              {{$u->view_car}}
                            </td>
                            <td>
                              <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                  <input type="checkbox"
                                  @if($u->car_part_status == 1)
                                  checked
                                  @endif
                                  class="form-check-input">
                                  เปิดใช้งาน
                                </label>
                              </div>

                            </td>
                            <td>
                            <button type="button" data-toggle="modal" data-target="#exampleModal-edit-{{$u->id_p}}" data-whatever="@fat" class="btn btn-icons btn-rounded btn-success"><i class="icon-settings"></i></button>

                            <div class="modal fade" id="exampleModal-edit-{{$u->id_p}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <form class="forms-sample" method="POST" action="{{url('admin/edit_cars_part/'.$u->id_p)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel-4">แก้ไข {{$u->name}} ({{$u->name_cat}})</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">


                                      <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ราคารถเช่า กำหนดเอง:</label>
                                        <input type="text" class="form-control" name="car_price" value="{{$u->cars_price}}">
                                        <input type="hidden" class="form-control" name="part_id" value="{{$objs->part_id}}">
                                        <input type="hidden" class="form-control" name="part_re" value="{{$id_re}}">

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



                              <button type="button" data-toggle="modal" data-target="#exampleModal-del-{{$u->id_p}}" data-whatever="@fat" class="btn btn-icons btn-rounded btn-secondary"><i class="icon-ban"></i></button>


                              <div class="modal fade" id="exampleModal-del-{{$u->id_p}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <form class="forms-sample" method="POST" action="{{url('admin/del_cars_part/'.$u->id_p)}}" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel-4">ลบ {{$u->name}} ({{$u->name_cat}}) ?</h5>
                                      <input type="hidden" class="form-control" name="part_id" value="{{$objs->part_id}}">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
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
            url:'{{url('api/post_status_car_part')}}',
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



</script>

@stop('scripts')
