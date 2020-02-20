<div class="nav-bottom">
  <div class="container">
    <ul class="nav page-navigation">
      <li class="nav-item {{ (Request::is('admin/dashboard') ? 'active' : '') }}">
        <a href="{{url('admin/dashboard')}}" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
      </li>
      <li class="nav-item {{ (Request::is('admin/users') ? 'active' : '') }}">
        <a href="{{url('admin/users')}}" class="nav-link"><i class="link-icon icon-people"></i><span class="menu-title">รายชื่อลูกค้า</span></a>
      </li>
      <li class="nav-item {{ (Request::is('admin/partners') ? 'active' : '') }}">
        <a href="{{url('admin/partners')}}" class="nav-link"><i class="link-icon icon-game-controller"></i><span class="menu-title">Partners</span></a>
      </li>
      <li class="nav-item {{ (Request::is('admin/car_rent') ? 'active' : '') }}">
        <a href="{{url('admin/car_rent')}}" class="nav-link"><i class="link-icon icon-magnet" ></i><span class="menu-title"> Cars</span></a>
      </li>
      <li class="nav-item {{ (Request::is('admin/order') ? 'active' : '') }}">
        <a href="{{url('admin/order')}}" class="nav-link"><i class="link-icon icon-wallet" ></i><span class="menu-title"> Order</span></a>
      </li>

      <li class="nav-item {{ (Request::is('admin/contact_admin') ? 'active' : '') }}">
        <a href="{{url('admin/contact_admin')}}" class="nav-link"><i class="link-icon icon-envelope" ></i><span class="menu-title"> ข้อความ</span></a>
      </li>

      <li class="nav-item {{ (Request::is('admin/position') ? 'active' : '') }}">
        <a href="{{url('admin/position')}}" class="nav-link"><i class="link-icon icon-location-pin" ></i><span class="menu-title"> จุดรับรถ</span></a>
      </li>
      <li class="nav-item {{ (Request::is('admin/review') ? 'active' : '') }}">
        <a href="{{url('admin/review')}}" class="nav-link"><i class="link-icon icon-disc" ></i><span class="menu-title"> Review</span></a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">ข้อมูลรถ</span><i class="menu-arrow"></i></a>
        <div class="submenu">
          <ul class="submenu-item">
            <li class="nav-item"><a class="nav-link" href="{{url('admin/type_cars')}}">ประเภทรถ</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('admin/brand_cars')}}">ยี่ห้อรถ</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('admin/promotion')}}">Promotion</a></li>
          </ul>
        </div>
      </li>




    </ul>
  </div>
</div>
