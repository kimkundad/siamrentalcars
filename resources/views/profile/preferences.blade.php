
@extends('layouts.template2')

@section('title')

@stop



@section('stylesheet')



@stop('stylesheet')

@section('content')


<div class="theme-page-section theme-page-section-gray theme-page-section-lg">
      <div class="container">
        <div class="row">
          <div class="col-md-2-5 ">
            <div class="theme-account-sidebar">
              <div class="theme-account-avatar">
                <img class="theme-account-avatar-img" src="{{url('assets/back/img/avatar/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}"/>
                <p class="theme-account-avatar-name">Welcome,
                  <br/>{{Auth::user()->name}}
                </p>
              </div>
              <nav class="theme-account-nav">
                <ul class="theme-account-nav-list">
                  <li class="active">
                    <a href="{{url('preferences')}}">
                      <i class="fa fa-cog"></i>ตั้งค่า
                    </a>
                  </li>


                  <li>
                    <a href="{{url('account_history')}}">
                      <i class="fa fa-history"></i>ประวัติการใช้บริการ
                    </a>
                  </li>
                  <li>
                    <a href="{{url('account_bookmarks')}}">
                      <i class="fa fa-bookmark"></i>Booking
                    </a>
                  </li>
                  <li>
                    <a href="{{url('logout')}}">
                      <i class="fa fa-lock"></i>ออกจากระบบ
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-md-9-5 ">
            <h1 class="theme-account-page-title">การตั้งค่า</h1>
            <div class="row">
              <div class="col-md-9 ">
                <div class="theme-account-preferences" style="margin-bottom:250px;">
                  <div class="theme-account-preferences-item">
                    <div class="row">
                      <div class="col-md-3 ">
                        <h5 class="theme-account-preferences-item-title">Email Address</h5>
                      </div>
                      <div class="col-md-7 ">
                        <p class="theme-account-preferences-item-value">{{Auth::user()->email}}</p>
                      </div>
                    </div>
                  </div>








            

                  <div class="theme-account-preferences-item">
                    <div class="row">
                      <div class="col-md-3 ">
                        <h5 class="theme-account-preferences-item-title">Default Language</h5>
                      </div>
                      <div class="col-md-7 ">
                        <p class="theme-account-preferences-item-value">Thailand (TH)</p>
                        <div class="collapse" id="ChangeLanguage">
                          <div class="theme-account-preferences-item-change">
                            <div class="form-group theme-account-preferences-item-change-form">
                              <select class="form-control">
                                <option>Thailand (TH)</option>
                              </select>
                            </div>
                          <!--  <div class="theme-account-preferences-item-change-actions">
                              <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                              <a class="btn btn-sm btn-default" href="#ChangeLanguage" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLanguage">Cancel</a>
                            </div> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 ">
                        <a class="theme-account-preferences-item-change-link" href="#ChangeLanguage" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLanguage">
                          <i class="fa fa-pencil"></i>edit
                        </a>
                      </div>
                    </div>
                  </div>



                  <div class="theme-account-preferences-item">
                    <div class="row">
                      <div class="col-md-3 ">
                        <h5 class="theme-account-preferences-item-title">Default Currency</h5>
                      </div>
                      <div class="col-md-7 ">
                        <p class="theme-account-preferences-item-value">Thai Baht (THB)</p>
                        <div class="collapse" id="ChangeCurrency">
                          <div class="theme-account-preferences-item-change">
                            <div class="form-group theme-account-preferences-item-change-form">
                              <select class="form-control">
                                <option> Thai Baht (THB)</option>
                              </select>
                            </div>
                          <!--  <div class="theme-account-preferences-item-change-actions">
                              <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                              <a class="btn btn-sm btn-default" href="#ChangeCurrency" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeCurrency">Cancel</a>
                            </div> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 ">
                        <a class="theme-account-preferences-item-change-link" href="#ChangeCurrency" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeCurrency">
                          <i class="fa fa-pencil"></i>edit
                        </a>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




@endsection

@section('scripts')


@stop('scripts')
