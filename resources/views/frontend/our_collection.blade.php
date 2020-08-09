@extends('frontend.layouts.app') 
@section('content')
@php
if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1) {
    $banner_title       = "banner_title_arabic";
    $css_banner         = "-webkit-transform: scaleX(-1); transform: scaleX(-1);";
} else {
    $banner_title       = "banner_title_english";
    $css_banner         = "";
}
@endphp
 
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <!-- STRART CONTAINER -->
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1><a href="javascript:void(0);" > {{ __('Our Collection') }}</a></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active">{{ __('Our Collection') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- Start MAIN CONTENT -->
<div class="main_content">
    <div class="section pb_20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        @foreach ($dynamicbanner as $key => $single)
                            <div class="item">
                                <div class="product_box text-center">
                                    <a href="{{ route('productsgroup', $single->product_group) }}">
                                        <div class="product_img">
                                            <img src="{{ asset($single->banner_path) }}" alt="product">
                                        </div>
                                    </a>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{ route('productsgroup', $single->product_group) }}">{{ $single->$banner_title }}</a></h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection