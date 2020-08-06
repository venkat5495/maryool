@extends('frontend.layouts.blank')
@section('content')
<?php
    if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1) {
        $phone_pre_arabic  = "<div class='input-group-prepend'><span class='input-group-text' style='font-size:inherit'>966+</span></div>";
        $phone_pre_english = "";
    } else {
        $phone_pre_arabic ="";
        $phone_pre_english = "<div class='input-group-prepend'><span class='input-group-text' style='font-size:inherit'>+966</span></div>";
    }
?>
<!-- Breadcumb area Start -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>{!!__('Cart')!!}</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shopping Cart</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<!-- Breadcumb area End -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	@include('frontend.partials.cart_details')
</div>
<!-- END SECTION SHOP -->

</div>
<!-- Main content wrapper end -->
@endsection