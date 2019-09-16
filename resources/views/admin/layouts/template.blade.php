<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>

  <!-- plugins:css -->
  @include('admin.layouts.inc-stylesheet')
  @yield('admin.stylesheet')


</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->

    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">



      @include('admin.layouts.inc-header')




      @include('admin.layouts.inc-left-slidebar')


    </nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">


          @yield('admin.content')



        </div>
        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
        @include('admin.layouts.inc-footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <!-- jQuery -->
  @include('admin.layouts.inc-scripts')
  @yield('scripts')


</body>

</html>
