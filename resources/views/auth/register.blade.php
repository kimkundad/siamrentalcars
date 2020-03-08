
@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')

<style>
.theme-page-header-title {
    font-size: 30px;
    margin-top: 0;
    letter-spacing: 1px;
    font-weight: 300;
}
.theme-about-us-section-body > p {
    font-size: 14px;
    line-height: 1.6em;
    margin-bottom: 20px;
}
ul, li {
    margin: 0px;
    list-style-type: none;
}
.p-t-2 {
    padding-top: 2px;
}
.list-01 li {
    text-indent: -11px;
    padding-left: 22px;
}
.p-b-6 {
    padding-bottom: 6px;
}
.list-01 li::before {
    color: #233785;
}
.list-01 li::before {
    content: "\f058";
    font-family: FontAwesome;
    font-size: 15px;
    color: #233785;
    display: inline-block;
    margin-right: 5px;
}
.s-txt2 {
    font-family: Roboto-Regular;
    font-size: 15px;
    line-height: 1.618;
    color: #555555;
}
</style>

@stop('stylesheet')

@section('content')


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


                  <div class="col-xs-12">
                    <a class="theme-login-social-login-google" href="{{ route('social.oauth', 'google') }}">
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
            <a href="{{url('terms')}}">terms of use</a>
            <br/>and
            <a href="{{url('privacy')}}">privacy policy</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection

@section('scripts')


@stop('scripts')
