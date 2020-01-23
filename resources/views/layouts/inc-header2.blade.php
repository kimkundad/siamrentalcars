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


          <li class="{{ (Request::is('/') ? 'active' : '') }} dropdown">
            <a href="{{url('/')}}" >Pages</a>


          </li>




        </ul>


        <ul class="nav navbar-nav navbar-right">






          <li class="navbar-nav-item-user dropdown">
            @if (Auth::guest())
            <a  href="{{url('login')}}" >
              <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>เข้าสู่ระบบ
            </a>
            @else
            <a  href="{{url('/')}}" >
              <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i> {{ Auth::user()->name }}
            </a>
            @endif
          </li>


        </ul>
      </div>
    </div>
  </div>
</nav>
