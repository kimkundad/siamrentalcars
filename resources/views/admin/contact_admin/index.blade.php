@extends('admin.layouts.template')

@section('admin.content')

<?php
function DateThai($strDate)
{
$strYear = date("Y",strtotime($strDate))+543;
$strMonth= date("n",strtotime($strDate));
$strDay= date("j",strtotime($strDate));
$strHour= date("H",strtotime($strDate));
$strMinute= date("i",strtotime($strDate));
$strSeconds= date("s",strtotime($strDate));
$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
$strMonthThai=$strMonthCut[$strMonth];
return "$strDay $strMonthThai $strYear";
}
?>
<style>
.ap-questions-featured {
    margin-left: 3px;
    border: medium none;
    color: #ff951e;
    display: inline;
    font-size: 16px;
    height: auto;
    margin-right: 5px;

    position: static;
    vertical-align: baseline;
    width: auto;
}
.ap-questions-featured2 {
    margin-left: 3px;
    border: medium none;
    color: #666;
    display: inline;
    font-size: 16px;
    height: auto;
    margin-right: 5px;

    position: static;
    vertical-align: baseline;
    width: auto;
}
</style>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$datahead}}</h4>

        <div class="table-responsive">
          <table class="table ">
            <thead>
              <tr>
                <th>ชื่อผู้ส่ง</th>
                <th>อีเมล์</th>
                <th>เบอร์โทร</th>
                <th>วันที่เพิ่ม</th>
                <th>รายละเอียด</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              @if($objs)
                @foreach($objs as $u)
                    <tr>

                      <td>
                        @if($u->status == null || $u->status == 0)
                        <i class="icon-speech ap-questions-featured"></i>
                        @else
                        <i class="icon-speech  ap-questions-featured2"></i>
                        @endif




                         {{$u->name}}</td>
                      <td>{{$u->email}}</td>
                      <td>{{$u->phone}}</td>
                      <td><?php echo DateThai($u->created_at); ?></td>



                      <td>


                        <button type="button" data-toggle="modal" data-target="#exampleModal-edit-{{$u->id}}" data-whatever="@fat" class="btn btn-primary btn-sm">คลิกดูรายละเอียด</button>

                        <div class="modal fade" id="exampleModal-edit-{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">

                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel-4">รายละเอียด</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">


                                  {{$u->detail}}


                              </div>


                            </div>
                          </div>
                        </div>


                      </td>
                      <td>
                        <a href="{{url('admin/del_contact/'.$u->id)}}"  class="btn btn-danger btn-sm">ลบข้อมูล</a>
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
@if ($message = Session::get('del_contact'))
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
