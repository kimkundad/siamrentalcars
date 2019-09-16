<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Travel Mate - Login</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('assets/home/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/home/css/lineicons.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/home/css/weather-icons.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/home/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/home/css/styles.css')}}"/>
  </head>
  <body class="bg-gray">
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
            <a class="navbar-brand" href="index.html">
              <img src="{{url('assets/home/img/logo.png')}}" alt="Image Alternative text" title="Image Title"/>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">



              <li class="active dropdown">
                <a href="{{url('/')}}" >Pages</a>


              </li>




            </ul>


            <ul class="nav navbar-nav navbar-right">






              <li class="navbar-nav-item-user dropdown">
                <a  href="{{url('login')}}" >
                  <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>เข้าสู่ระบบ
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>




    <div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="theme-login">
              <div class="theme-login-header">
                <h1 class="theme-login-title">Sign Up</h1>
                <p class="theme-login-subtitle">Create new Bookify account</p>
              </div>
              <div class="theme-login-box">
                <div class="theme-login-box-inner">

                  <form class="theme-login-form" id="my_form_register" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group theme-login-form-group">
                      <input class="form-control" type="text" placeholder="Username" value="{{ old('name') }}" name="name"/>
                      @if ($errors->has('name'))
                                <span class="text-danger">
                                    <strong>กรุณากรอก ชื่อของท่าน</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group theme-login-form-group">
                      <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email Address"/>
                      @if ($errors->has('email'))
                        <span class="text-danger">
                            <strong>กรุณากรอก email ของท่าน</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group theme-login-form-group">
                      <input class="form-control" type="password" name="password" placeholder="Create Password"/>
                      @if ($errors->has('password'))
                        <span class="text-danger">
                           <strong>password ต้องมีอย่างน้อย 6 ตัวอักษรขึ้นไป</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group theme-login-form-group">
                      <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password"/>
                      @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                           <strong>password ไม่ตรงกัน</strong>
                        </span>
                    @endif
                    </div>
                    <a class="btn btn-uc btn-dark btn-block btn-lg" type="submit" href="javascript:{}" onclick="document.getElementById('my_form_register').submit();">Create Account</a>
                  </form>

                  <div class="theme-login-social-separator">
                    <p>or sign up with social media</p>
                  </div>
                  <div class="theme-login-social-login">
                    <div class="row" data-gutter="10">
                      <div class="col-xs-6">
                        <a class="theme-login-social-login-facebook" href="#">
                          <i class="fa fa-facebook-square"></i>
                          <span>Sign up with
                            <br/>
                            <b>Facebook</b>
                          </span>
                        </a>
                      </div>
                      <div class="col-xs-6">
                        <a class="theme-login-social-login-google" href="#">
                          <i class="fa fa-google-plus-circle"></i>
                          <span>Sign up with
                            <br/>
                            <b>Google</b>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="theme-login-box-alt">
                  <p>Already have an account? &nbsp;
                    <a href="{{url('login')}}">Sign in.</a>
                  </p>
                </div>
              </div>
              <p class="theme-login-terms">By signing up you accept our
                <a href="#">terms of use</a>
                <br/>and
                <a href="#">privacy policy</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-footer" id="mainFooter">
      <div class="container _ph-mob-0">
        <div class="row row-eq-height row-mob-full" data-gutter="60">
          <div class="col-md-3">
            <div class="theme-footer-section theme-footer-">
              <a class="theme-footer-brand _mb-mob-30" href="#">
                <img src="{{url('assets/home/img/logo-black.png')}}" alt="Image Alternative text" title="Image Title"/>
              </a>
              <div class="theme-footer-brand-text">
                <p>Ante justo taciti vehicula ridiculus rutrum dis mauris convallis erat convallis class maecenas praesent sapien</p>
                <p>In suspendisse proin ut lorem convallis tortor felis arcu tempus nam nisi metus bibendum vivamus</p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Travel Mate</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">About Travel Mate</a>
                    </li>
                    <li>
                      <a href="#">Mobile App</a>
                    </li>
                    <li>
                      <a href="#">Customer Support</a>
                    </li>
                    <li>
                      <a href="#">Advertising</a>
                    </li>
                    <li>
                      <a href="#">Jobs</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="#">Terms of Use</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Explore</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">Countries</a>
                    </li>
                    <li>
                      <a href="#">Regions</a>
                    </li>
                    <li>
                      <a href="#">Cities</a>
                    </li>
                    <li>
                      <a href="#">Districs</a>
                    </li>
                    <li>
                      <a href="#">Airports</a>
                    </li>
                    <li>
                      <a href="#">Hotels</a>
                    </li>
                    <li>
                      <a href="#">Places of Interest</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Book</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">Apartments</a>
                    </li>
                    <li>
                      <a href="#">Resorts</a>
                    </li>
                    <li>
                      <a href="#">Villas</a>
                    </li>
                    <li>
                      <a href="#">Hostels</a>
                    </li>
                    <li>
                      <a href="#">B&Bs</a>
                    </li>
                    <li>
                      <a href="#">Guesthouses</a>
                    </li>
                    <li>
                      <a href="#">Hotel Chains</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="theme-footer-section theme-footer-section-subscribe bg-grad _mt-mob-30">
              <div class="theme-footer-section-subscribe-bg" style="background-image:url({{url('assets/home/img/footer/footer_subscribe_bg.png')}});"></div>
              <div class="theme-footer-section-subscribe-content">
                <h5 class="theme-footer-section-title">Save up to 50% off your next trip</h5>
                <p class="text-muted">Subscribe to unlock our secret deals</p>
                <form>
                  <div class="form-group">
                    <input class="form-control theme-footer-subscribe-form-control" type="email" placeholder="Type your e-mail here"/>
                  </div>
                  <button class="btn btn-primary-invert btn-shadow text-upcase theme-footer-subscribe-btn" type="submit">Get deals</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="theme-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="theme-copyright-text">Copyright &copy; 2018
              <a href="#">Bookify</a>. All rights reserved.
            </p>
          </div>
          <div class="col-md-6">
            <ul class="theme-copyright-social">
              <li>
                <a class="fa fa-facebook" href="#"></a>
              </li>
              <li>
                <a class="fa fa-google" href="#"></a>
              </li>
              <li>
                <a class="fa fa-twitter" href="#"></a>
              </li>
              <li>
                <a class="fa fa-youtube-play" href="#"></a>
              </li>
              <li>
                <a class="fa fa-instagram" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src="{{url('assets/home/js/jquery.js')}}"></script>
    <script src="{{url('assets/home/js/moment.js')}}"></script>
    <script src="{{url('assets/home/js/bootstrap.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&callback=initMap&libraries=places"></script>
    <script src="{{url('assets/home/js/owl-carousel.js')}}"></script>
    <script src="{{url('assets/home/js/blur-area.js')}}"></script>
    <script src="{{url('assets/home/js/icheck.js')}}"></script>
    <script src="{{url('assets/home/js/gmap.js')}}"></script>
    <script src="{{url('assets/home/js/magnific-popup.js')}}"></script>
    <script src="{{url('assets/home/js/ion-range-slider.js')}}"></script>
    <script src="{{url('assets/home/js/sticky-kit.js')}}"></script>
    <script src="{{url('assets/home/js/smooth-scroll.js')}}"></script>
    <script src="{{url('assets/home/js/fotorama.js')}}"></script>
    <script src="{{url('assets/home/js/bs-datepicker.js')}}"></script>
    <script src="{{url('assets/home/js/typeahead.js')}}"></script>
    <script src="{{url('assets/home/js/quantity-selector.js')}}"></script>
    <script src="{{url('assets/home/js/countdown.js')}}"></script>
    <script src="{{url('assets/home/js/window-scroll-action.js')}}"></script>
    <script src="{{url('assets/home/js/fitvid.js')}}"></script>
    <script src="{{url('assets/home/js/youtube-bg.js')}}"></script>
    <script src="{{url('assets/home/js/custom.js')}}"></script>
  </body>
</html>
