@extends('admin.layouts.template')

@section('admin.content')

<br /><br /><br /><br />
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card card-statistics">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between border-right card-statistics-item">
              <div>
                <h1>{{$count_order}}</h1>
                <p class="text-muted mb-0">ออเดอร์ทั้งหมด</p>
              </div>
              <i class="icon-layers text-primary icon-lg"></i>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between border-right card-statistics-item">
              <div>
                <h1>{{$count_user}}</h1>
                <p class="text-muted mb-0">จำนวนสมาชิก</p>
              </div>
              <i class="icon-people text-primary icon-lg"></i>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between border-right card-statistics-item">
              <div>
                <h1>{{$position_links}}</h1>
                <p class="text-muted mb-0">สถานที่รับรถ</p>
              </div>
              <i class="icon-pin text-primary icon-lg"></i>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between card-statistics-item">
              <div>
                <h1>{{$cars}}</h1>
                <p class="text-muted mb-0">รถเช่า</p>
              </div>
              <i class="fa fa-car text-primary icon-lg"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Earning Report</h4>
        <div class="w-75 mx-auto">
          <canvas id="earning-report" width="100" height="100"></canvas>
        </div>
        <div class="py-4 d-flex justify-content-center align-items-end">
          <h1 class="text-center text-md-left mb-0">1.2M</h1>
          <p class="text-muted mb-0 ml-2">Total</p>
        </div>
        <div id="earning-report-legend" class="earning-report-legend"></div>
      </div>
    </div>
  </div>
  <div class="col-md-9 grid-margin stretch-card">
    <div class="card">
      <div class="row h-100">
        <div class="col-md-5 border-right">
          <div class="card-body">
            <h4 class="card-title">Performance</h4>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>
                    <h6>Order กำลังดำเนินการ </h6>
                  </td>
                  <td>
                    <h3 class="text-primary">
                      {{$get_per1}}
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Order สำเร็จแล้ว</h6>

                  </td>
                  <td>
                    <h3 class="text-danger">
                      {{$get_per2}}
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>จำนวน Partner</h6>

                  </td>
                  <td>
                    <h3 class="text-success">
                      {{$partner}}
                    </h3>
                  </td>
                </tr>


              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card-body d-flex flex-column h-100">


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br /><br /><br /><br />
@stop



@section('scripts')

<!-- Custom js for this page-->
<script src="{{url('assets/back/js/dashboard.js')}}"></script>
<script>
$(function() {
if ($("#earning-report").length) {
      var earningReportData = {
        datasets: [{
          data: [{{$cars_per1}}, {{$cars_per2}}],
          backgroundColor: [
            '#22548e',
            '#af827c'
          ],
          borderWidth: 0
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Order กำลังดำเนินการ',
          'Order สำเร็จ'
        ]
      };
      var earningReportOptions = {
        responsive: true,
        maintainAspectRatio: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: {
          display: false
        },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="legend'+ chart.id +'">');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span class="legend-label" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('<span class="legend-percentage ml-auto">'+ chart.data.datasets[0].data[i] + '%</span>');
            text.push('</li>');
          }
          text.push('</ul>');
          return text.join("");
        },
        cutoutPercentage: 70
      };
      var earningReportCanvas = $("#earning-report").get(0).getContext("2d");
      var earningReportChart = new Chart(earningReportCanvas, {
        type: 'doughnut',
        data: earningReportData,
        options: earningReportOptions
      });
      document.getElementById('earning-report-legend').innerHTML = earningReportChart.generateLegend();
    }
  });

</script>
<!-- End custom js for this page-->

@stop('scripts')
