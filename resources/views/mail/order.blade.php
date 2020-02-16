<div style="font-family:verdana;font-size:12px;color:#555555;line-height:14pt">
<div style="width:590px">
<div style="background:url('{{url('assets/image/email_top.png')}}') no-repeat;width:100%;height:75px;display:block">
<div style="padding-top:30px;padding-left:50px;padding-right:50px">
<a href="#" target="_blank" ><img src="{{url('assets/image/logo-black.png')}}" alt=""
  style="border:none; height:42px;" ></a>
</div>
</div>
<div style="background:url('{{url('assets/image/email_mid.png')}}')
repeat-y;width:100%;display:block">
<div style="padding-left:50px;padding-right:50px;padding-bottom:1px">
<div style="border-bottom:1px solid #ededed"></div>
<div style="margin:20px 0px;font-size:27px;line-height:30px;text-align:left">ใบสั่งจอง</div>
<div style="margin-bottom:30px">
<div>คุณสั่งจองรถเช่า {{$data->car_order}}</div>
<br>
<div>ผู้ให้บริการ {{$data->part_name}}</div>
<br />
<div style="margin-bottom:20px;text-align:left">
  <b>หมายเลขคำสั่งจอง:</b> {{$data->order_ids}}<br>
  <b>วันที่สั่งจอง:</b> {{$datatime}}<br>
  <b>ชื่อ:</b> {{$data->name_order}}<br>
  <b>เบอร์โทร:</b> {{$data->phone_order}}<br>
  <b>อีเมล:</b> {{$data->email_order}}<br>
  <b>สถานที่รับรถ:</b> {{$data->position_name}}, {{$data->PROVINCE_NAME}}<br>
  <b>รายละเอียด:</b> {{$data->detail_order}}
</div>
</div>
<div>
<div>
</div>
<span></span>
<table style="width:100%;margin:5px 0">
<tbody>
<tr>
<td style="text-align:left;font-weight:bold;font-size:12px">รายการ</td>
<td style="text-align:right;font-weight:bold;font-size:12px" width="70">ราคา</td>
</tr>
</tbody>
</table>
<div style="border-bottom:1px solid #ededed"></div>
<table style="width:100%;margin:5px 0">
<tbody>
<tr>
</tr>
    <tr>
      <td style="text-align:left;font-size:12px;padding-right:10px">
        <span>{{$data->car_order}}</span>
      </td>
      <td style="text-align:right;font-size:12px">
        <span>THB{{$data->price}}.00</span>
        <span></span>
      </td>
    </tr>
</tbody>
</table>
<div style="border-bottom:1px solid #ededed">
</div>
<table style="width:100%;margin:5px 0">
<tbody>
<tr>
<td style="text-align:right;font-size:12px" width="150">
ภาษี: <span>THB0.00</span>
</td>
</tr>
<tr>
<td style="text-align:right;font-size:12px" width="150">
จำนวน: <span>{{$data->day}} วัน</span>
</td>
</tr>
<tr>
<td style="text-align:right;font-size:12px" width="150">
<span>รวม: </span>THB{{$data->total_order}}.00
</td>
</tr>
</tbody>
</table>
<div style="border-bottom:1px solid #ededed"></div>
<table style="width:100%;margin:5px 0 15px 0;padding:0;border-spacing:0">
  <tbody>
    <tr>
    <td style="text-align:left;font-weight:bold;font-size:12px;vertical-align:top">เงินมัดจำจ่ายตอนรับรถ:</td>
      <td>
        <table style="margin-left:auto;font-size:12px">
          <tbody>
            <tr>
              <td style="font-size:12px;text-align:right">
                {{$data->deposit}} บาท
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<div style="border-bottom:1px solid #ededed"></div>
<table style="width:100%;margin:5px 0 15px 0;padding:0;border-spacing:0">
  <tbody>
    <tr>
    <td style="text-align:left;font-weight:bold;font-size:12px;vertical-align:top">เวลารับรถ:</td>
      <td>
        <table style="margin-left:auto;font-size:12px">
          <tbody>
            <tr>
              <td style="font-size:12px;text-align:right">
                {{$data->re_car}} {{$data->re_car_time}}
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<div style="border-bottom:1px solid #ededed"></div>
<table style="width:100%;margin:5px 0 15px 0;padding:0;border-spacing:0">
  <tbody>
    <tr>
    <td style="text-align:left;font-weight:bold;font-size:12px;vertical-align:top">เวลาคืนรถ:</td>
      <td>
        <table style="margin-left:auto;font-size:12px">
          <tbody>
            <tr>
              <td style="font-size:12px;text-align:right">
                {{$data->se_car}} {{$data->se_car_time}}
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
</div><div style="margin:20px 0">หากมีคำถาม ติดต่อ <a href="#" target="_blank" >082-841-6945, 081-872-1215</a>
</div><div style="border-bottom:1px solid #ededed"></div>
<div style="border-bottom:1px solid #ededed">
</div>
<div style="margin:20px 0 40px 0;font-size:10px;color:#707070">
ดู<a href="#" target="_blank">ประวัติการสั่งซื้อ</a>
บน siamrentalcars ข้อมูลส่วนตัวของคุณ<br>
ดู<a href="#" target="_blank" >นโยบายการคืนเงิน</a>ของ siamrentalcars และ<a href="{{url('terms')}}" target="_blank">ข้อกำหนดในการให้บริการ</a>
</div>
<div style="font-size:9px;color:#707070">

<br>© 2020 siamrentalcars | สงวนลิขสิทธิ์<br>siamrentalcars 507/2 ถ.อภิบาลบัญชา ต.ในเมือง อ.เมือง จ.นครพนม 48000</div>
</div></div>
<div class="yj6qo"></div>
<div style="background:url('{{url('assets/image/email_bottom.png')}}') no-repeat;width:100%;height:50px;display:block"></div></div></div>
