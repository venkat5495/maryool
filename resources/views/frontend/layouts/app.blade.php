<!DOCTYPE html>
@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl">
@else
<html>
@endif
<head>
@php
    if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
        $current_language="arabic";
    else
        $current_language="english";
    $seosetting = \App\SeoSetting::first();
    $generalsetting = \App\GeneralSetting::first();
    if(!empty($generalsetting->frontend_color)) 
    {
        switch($generalsetting->frontend_color)
        {
            case 1:
            $color = "#1abc9c";
            break;
            case 2:
            $color = "#3498db";
            break;
            case 3:
            $color = "#72bf40";
            break;
            case 4:
            $color = "#F79F1F";
            break;
            case 5:
            $color = "#12CBC4";
            break;
            case 6:
            $color = "#8e44ad";
            break;
            case 7:
            $color = "#ED4C67";
            break;
            default:
            $color = "#b8964b";
            break;
        }
    } else {
        $color = "#b8964b";
    }
@endphp
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="description" content="{{ $seosetting->description }}">
<meta name="keywords" content="{{ $seosetting->keyword }}">
<meta name="author" content="{{ $seosetting->author }}">
<meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">
<!-- Favicons -->
<!-- <link rel="shortcut icon" href="{{ asset(\App\GeneralSetting::first()->favicon) }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset(\App\GeneralSetting::first()->favicon) }}"> -->

<!-- SITE TITLE -->
<title>{!! __('Maryool') !!}</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}"> 
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/simple-line-icons.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">

</head>

<body>

<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->


<!-- START HEADER -->
@include('frontend.inc.inner_header')
<!-- END HEADER -->

<!-- START SECTION BANNER -->
@yield('content')
<!-- END SECTION BLOG -->

</div>
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
@include('frontend.inc.footer')