@extends('frontend.layouts.blank')
@section('content')
<?php
    if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1) {
        $phone_pre_arabic  = "<div class='form-group-prepend'><span class='form-group-text' style='font-size:inherit'>966+</span></div>";
        $phone_pre_english = "";
    } else {
        $phone_pre_arabic ="";
        $phone_pre_english = "<div class='form-group-prepend'><span class='form-group-text' style='font-size:inherit'>+966</span></div>";
    }
?>
<style>
    .invalid-feedback {display: block;}
</style>
<!-- Main Wrapper Start -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Login</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Login</h3>
                        </div>
                        @if (Session::has('login_message'))
                            <div class="alert alert-success">
                                <strong>Success!</strong> {!! session('login_message') !!}
                            </div>
                        @endif
                        @if (Session::has('login_error'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {!! session('login_error') !!}
                            </div>
                        @endif
                        <form method="post" action="{{ route('user.login.submit') }}" method="POST" style="height:auto">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2"><?= $phone_pre_english ?></div>
                                    <div class="col-md-12"> <input autocomplete="off" id="login_phone" placeholder="{!! __('Phone') !!}" value="{!! old('phone')  !!}" name="login_phone" class="form-control {!! $login_phone = $errors->has('login_phone') ? 'is-invalid':'' !!}" type="text"></div>
                                    <div class="col-md-2"><?= $phone_pre_arabic ?></div>
                                    
                                    @if ($login_phone)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{!! $errors->first('login_phone') !!}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <input autocomplete="off" id="password" name="password" placeholder="{!! __('Password') !!}"  class="form-control {!! $password = $errors->has('password') ? 'is-invalid':'' !!}" type="password">                               
                                @if ($password)
                                <span class="invalid-feedback" role="alert"><strong>{!! $errors->first('password') !!}</strong></span>
                                @endif
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input autocomplete="off" type="checkbox" name="remember" id="remember" class="form__checkbox">
                                        <label for="sessionStore" class="form__checkbox--label">{!! __('Remember Me') !!}</label>
                                      
                                    </div>
                                </div>
                                <a href="{{ route('forgot.password') }}" class="forgot-pass">{!! __('Forgot password?') !!}</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                        </form>
                        <!-- <div class="different_login">
                            <span> or</span>
                        </div> -->
                        <!-- <ul class="btn-login list_none text-center">
                            <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul> -->
                        <div class="form-note text-center">Don't Have an Account? <a href="signup.html">Sign up now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
</div>
<!-- Main Wrapper End -->
@endsection