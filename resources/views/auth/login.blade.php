
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
            <h1 class="theme-login-title">Sign In</h1>
            <p class="theme-login-subtitle">Login into your Bookify account</p>
          </div>
          <div class="theme-login-box">
            <div class="theme-login-box-inner">

              <form class="theme-login-form" id="my_form_login" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group theme-login-form-group">
                  <input class="form-control" name="email" type="text" value="{{ old('email') }}" placeholder="Email Address"/>
                  @if ($errors->has('email'))
                    <span class="text-danger">
                        <strong>Email ไม่มีอยู่ในระบบ</strong>
                    </span>
                @endif
                </div>
                <div class="form-group theme-login-form-group">
                  <input class="form-control" type="password" name="password" placeholder="Password"/>
                  @if ($errors->has('password'))
                    <span class="help-block">
                       <strong>password ไม่ถูกต้อง</strong>
                    </span>
                @endif
                  <p class="help-block">
                    <a href="{{ url('/password/reset') }}">Forgot password?</a>
                  </p>
                </div>
                <div class="form-group">
                  <div class="theme-login-checkbox">
                    <label class="icheck-label">
                      <input class="icheck" type="checkbox"/>
                      <span class="icheck-title">Keep me logged in</span>
                    </label>
                  </div>
                </div>
                <a type="submit" class="btn btn-uc btn-dark btn-block btn-lg" href="javascript:{}" onclick="document.getElementById('my_form_login').submit();">Sign In</a>
              </form>

              <div class="theme-login-social-separator">
                <p>or sign in with social media</p>
              </div>
              <div class="theme-login-social-login">
                <div class="row" data-gutter="10">
                  <div class="col-xs-6">
                    <a class="theme-login-social-login-facebook" href="#">
                      <i class="fa fa-facebook-square"></i>
                      <span>Sign in with
                        <br/>
                        <b>Facebook</b>
                      </span>
                    </a>
                  </div>
                  <div class="col-xs-6">
                    <a class="theme-login-social-login-google" href="#">
                      <i class="fa fa-google-plus-circle"></i>
                      <span>Sign in with
                        <br/>
                        <b>Google</b>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-login-box-alt">
              <p>Don't have an account? &nbsp;
                <a href="{{url('register')}}">Sign up.</a>
              </p>
            </div>
          </div>
          <p class="theme-login-terms">By logging in you accept our
            <a href="#">terms of use</a>
            <br/>and
            <a href="#">privacy policy</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection

@section('scripts')


@stop('scripts')
