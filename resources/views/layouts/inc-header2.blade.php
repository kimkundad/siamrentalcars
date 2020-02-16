<nav class="navbar navbar-default navbar-inverse navbar-theme" id="main-nav">
  <div class="container">
    <div class="navbar-inner nav">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button" area-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{url('assets/home/img/logo.png')}}" alt="Image Alternative text" title="Image Title"/>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-main">
        <ul class="nav navbar-nav">


          <li class="{{ (Request::is('/about_us') ? 'active' : '') }} dropdown">
            <a href="{{url('/about_us')}}" >เกี่ยวกับเรา</a>
          </li>
          <li class="{{ (Request::is('/contact_us') ? 'active' : '') }} dropdown">
            <a href="{{url('/contact_us')}}" >ติดต่อเรา</a>
          </li>
          <li class="{{ (Request::is('/') ? 'active' : '') }} dropdown">
            <a class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ความช่วยเหลือ</a>
            <div class="dropdown-menu dropdown-menu-full">
              <div class="row">
                <div class="col-md-12">

                  <ul class="dropdown-meganav-list-items">
                    <li>
                      <a href="{{url('/')}}">วิธีการจอง</a>
                    </li>
                    <li>
                      <a href="{{url('/')}}">เอกสารเช่ารถ</a>
                    </li>
                    <li>
                      <a href="{{url('/')}}">ประกันภัย</a>
                    </li>
                    <li>
                      <a href="{{url('/')}}">ตวามช่วยเหลือเพิ่มเติม</a>
                    </li>

                  </ul>
                </div>


              </div>
            </div>
          </li>

          <li class="">
            <a href="#" ><b><i class="fa fa-phone" aria-hidden="true"></i></b> 082-841-6945</a>
          </li>
          <li class="">
            <a href="http://line.me/ti/p/kL8POWgHU9" target="_blank"><b><i class="fa fa-commenting" aria-hidden="true"></i></b> @Siamrentalcars</a>
          </li>




        </ul>


        <ul class="nav navbar-nav navbar-right">






          <li class="navbar-nav-item-user dropdown">
            @if (Auth::guest())
            <a  href="{{url('login')}}" >
              <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>เข้าสู่ระบบ
            </a>
            @else
            <a lass="dropdown-toggle" href="{{url('/')}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i> {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="account-history.html">ประวัติการใช้บริการ</a>
              </li>
              <li>
                <a href="{{url('logout')}}">ออกจากรับบ</a>
              </li>
            </ul>
            @endif
          </li>


        </ul>
      </div>
    </div>
  </div>
</nav>
