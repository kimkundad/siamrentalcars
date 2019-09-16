@extends('admin.layouts.template')

@section('admin.content')


<div class="row">
  <div class="col-12 grid-margin">
    <div class="card card-statistics">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between border-right card-statistics-item">
              <div>
                <h1>28893</h1>
                <p class="text-muted mb-0">Total invoices</p>
              </div>
              <i class="icon-layers text-primary icon-lg"></i>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between border-right card-statistics-item">
              <div>
                <h1>217</h1>
                <p class="text-muted mb-0">New users</p>
              </div>
              <i class="icon-people text-primary icon-lg"></i>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between border-right card-statistics-item">
              <div>
                <h1>6875</h1>
                <p class="text-muted mb-0">Unique visits</p>
              </div>
              <i class="icon-pin text-primary icon-lg"></i>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="d-flex justify-content-between card-statistics-item">
              <div>
                <h1>45596</h1>
                <p class="text-muted mb-0">Sales</p>
              </div>
              <i class="icon-refresh text-primary icon-lg"></i>
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
                    <h6>Tasks</h6>
                    <p class="text-muted mb-0">5.6% change today</p>
                  </td>
                  <td>
                    <h3 class="text-primary">
                      +20009
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Member Profit</h6>
                    <p class="text-muted mb-0">3 days ago</p>
                  </td>
                  <td>
                    <h3 class="text-danger">
                      +91964
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Orders</h6>
                    <p class="text-muted mb-0">Weekly Orders</p>
                  </td>
                  <td>
                    <h3 class="text-success">
                        -200
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Pending</h6>
                    <p class="text-muted mb-0">Pending Tasks</p>
                  </td>
                  <td>
                    <h3 class="text-warning">
                        +5152
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Revenue</h6>
                    <p class="text-muted mb-0">5% increase</p>
                  </td>
                  <td>
                    <h3 class="text-primary">
                        +89997
                    </h3>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card-body d-flex flex-column h-100">
            <div class="d-flex flex-row">
              <h4 class="card-title">Year-wise performance</h4>
            </div>
            <p>Performance of the team is 75% higher this year!</p>
            <canvas id="chart-activity" class="mt-auto"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop



@section('scripts')

<!-- Custom js for this page-->
<script src="{{url('assets/back/js/dashboard.js')}}"></script>
<script src="{{url('assets/back/js/todolist.js')}}"></script>
<!-- End custom js for this page-->

@stop('scripts')
