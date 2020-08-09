@extends('frontend.layouts.app')
@section('content')
    @php
        if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
        {
            $current_language="arabic";
        } else {
            $current_language="english";
        }

        if($current_language=='arabic') {
            $banner_title       = "banner_title_arabic";
            $css_banner         = "-webkit-transform: scaleX(-1); transform: scaleX(-1);";
        } else {
            $banner_title       = "banner_title_english";
            $css_banner         = "";
        }
    @endphp
    <!-- START SECTION BANNER -->
    <div class="banner_section full_screen staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
            <div class="carousel-inner">
                @foreach (\App\Dynamicbanner::where([['banner_section', '=', '1'],['status','=','Active']])->get() as $key => $banner)
                    <div class="carousel-item background_bg overlay_bg_50 {{$key == 1?'active':''}}" data-img-src="{{ asset($banner->banner_path) }}">
                        <div class="banner_slide_content banner_content_inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 col-md-10">
                                        <div class="banner_content text_white text-center">
                                            <a class="btn btn-white staggered-animation" href="{{ route('productsgroup', $banner->product_group) }}" data-animation="fadeInUp" data-animation-delay="0.5s">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    <div class="main_content">
        
        <!-- START SECTION CATEGORIES -->
        <div class="section pt-0 small_pb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cat_overlap radius_all_5">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-4">
                                    <div class="text-center text-md-left">
                                        <h4>{!! __('Top Categories') !!}</h4>
                                        <p class="mb-2">There are many variations of passages of Lorem</p>
                                        <a href="#" class="btn btn-line-fill btn-sm">View All</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <div class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                       
                                        @foreach (\App\Category::get() as $category)
                                            <div class="item">
                                                <div class="categories_box">
                                                    <a href="{{ route('products.category', $category->id) }}">
                                                        <img src="{{ asset($category->icon) }}"> 
                                                        <span>{!! __($category->name) !!}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CATEGORIES -->

        <!-- START SECTION A -->
        <div class="promo-box-area ptb--30 ptb-md--30">
            <div class="container">
                <div class="row">
                    @foreach (\App\Dynamicbanner::where([['banner_section', '=', '2'],['status','=','Active']])->limit(2)->get() as $key => $section_a)
                        <div class="col-md-6 mb-sm--30">
                            <a href="{{ route('productsgroup', $section_a->product_group) }}"><img src="{{ asset($section_a->banner_path) }}" class="img-fluid"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END SECTION A -->
       
        <!-- START Collection  Section-->
        <div class="section pb_20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s4 text-center">
                            <a href="{{ route('our_collection', 'see') }}">
                                <h2>{!! __('Our Collection') !!}</h2>
                            </a>
                        </div>
                        <p class="text-center leads"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach (\App\Dynamicbanner::where([['banner_section', '=', '3']])->limit(6)->get() as $key => $single)
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
        <!-- END  Collection  Section --> 

        <!-- START NEW Arraival-->
        @foreach (\App\Dynamicbanner::where([['banner_section', '=', '10'],['status','=','Active']])->get() as $key => $new_arrival)
            <div class="section pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s4 text-center">
                                <a href="{{ route('productsgroup', $new_arrival->product_group) }}">
                                    <h2>{{$new_arrival->$banner_title}}</h2>
                                </a>
                            </div>
                            <p class="text-center leads"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                @php
                                    $product_group_id = $new_arrival->product_group;
                                    $group_products = (\App\ProductGroup::whereid($product_group_id)->first());
                                    $group_product  = json_decode($group_products->group_products);
                                @endphp
                                @foreach($group_product as $groupKey => $single_id)
                                    @if($groupKey < 10)
                                        @php
                                            $product = (\App\Product::whereid($single_id)->first());
                                        @endphp
                                        @if(!empty($product))
                                            @php
                                                $brand = (\App\Brand::whereid($product->brand_id)->first());
                                            @endphp
                                            @include('frontend.single_product')
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        @endforeach
        <!-- END  NEW Arraival -->

        <!-- Start Flash Deal Section --> 
        @php 
            $FlashDeal = \App\FlashDeal::where([['status', '=', '1']])->get();  
        @endphp
        @if(!empty($FlashDeal))
            <div class="heading_s4 text-center">
                <h2>{!! __('Deals') !!}</h2>
            </div>
            @foreach ($FlashDeal as $key => $deals)
            @php
                $end_date     =  $deals->end_date;
                $current_date = date('Y-m-d-H-i');
                if($end_date < strtotime($current_date))
                {
                    continue;
                }
            @endphp
                <div class="section background_bg" data-img-src="{{ asset($deals->banner_path) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9">
                                <div class="furniture_banner">
                                    <h3 class="single_bn_title">{{ $deals->title }}</h3>
                                    <h4 class="single_bn_title1 text_default">{{ $deals->description }}</h4>
                                    <div class="countdown_time countdown_style3 mb-4" data-time="{{date('Y/m/d H:i:s', $end_date)}}"></div>
                                    <a href="{{ route('productsgroup', $deals->product_group) }}" class="btn btn-fill-out">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <!-- End  Flash Deal Section --> 

        <!-- Start Banner area  -->
        @php 
            $Dynamicbanner8 = \App\Dynamicbanner::where([['banner_section', '=', '8'],['status','=','Active']])->get();
        @endphp
        @if(!empty($Dynamicbanner8))
            @foreach ($Dynamicbanner8 as $key => $sectionb)
                <div class="section background_bg mt-3" data-img-src="{{ asset($sectionb->banner_path) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9">
                                <div class="furniture_banner">
                                    <h3 class="single_bn_title">{{ $sectionb->banner_title }}</h3>
                                    <h4 class="single_bn_title1 text_default">{{ $sectionb->description }}</h4>
                                    <div class="mb-4"></div>
                                    <a href="{{ route('productsgroup', $sectionb->product_group) }}" class="btn btn-fill-out">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <!-- End Banner area  -->
        
        <!-- START Offer Section -->
        @foreach (\App\Dynamicbanner::where([['banner_section', '=', '6'],['status','=','Active']])->get() as $key => $feature_product_group)
            @php
                $product_group_id = $feature_product_group->product_group;
            @endphp
            <div class="section pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s4 text-center">
                                <a href="{{ route('productsgroup', $product_group_id) }}">
                                    <h2>{{$feature_product_group->$banner_title}}</h2>
                                </a>
                            </div>
                            <p class="text-center leads"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                @php
                                    $group_products = (\App\ProductGroup::whereid($product_group_id)->first());
                                    $group_product  = json_decode($group_products->group_products);
                                @endphp
                                @foreach($group_product as $groupKey => $single_id)
                                    @if($groupKey < 10)
                                        @php
                                            $product = (\App\Product::whereid($single_id)->first());
                                        @endphp
                                        @if(!empty($product))
                                            @php
                                                $brand = (\App\Brand::whereid($product->brand_id)->first());
                                            @endphp
                                            @include('frontend.single_product')
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        @endforeach
        <!-- END  Offer Section -->
        
        <!-- Start Banner section c  -->
        @php 
            $Dynamicbanner9 = \App\Dynamicbanner::where([['banner_section', '=', '9'],['status','=','Active']])->get();
        @endphp
        @if(!empty($Dynamicbanner9))
            @foreach ($Dynamicbanner9 as $key => $sectionc)
                <div class="section background_bg" data-img-src="{{ asset($sectionc->banner_path) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9">
                                <div class="furniture_banner">
                                    <h3 class="single_bn_title">{{ $sectionc->banner_title }}</h3>
                                    <h4 class="single_bn_title1 text_default">{{ $sectionc->description }}</h4>
                                    <!-- <div class="mb-4"></div> -->
                                    <a href="{{ route('productsgroup', $sectionc->product_group) }}" class="btn btn-fill-out">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <!-- End Banner section c  -->

        <!-- START Most Visited Section -->
        @foreach (\App\Dynamicbanner::where([['banner_section', '=', '7'],['status','=','Active']])->get() as $key => $feature_product_group)
            @php
                $product_group_id = $feature_product_group->product_group;
            @endphp
            <div class="section pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s4 text-center">
                                <a href="{{ route('productsgroup', $product_group_id) }}">
                                    <h2>{{$feature_product_group->$banner_title}}</h2>
                                </a>
                            </div>
                            <p class="text-center leads"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                @php
                                    $group_products = (\App\ProductGroup::whereid($product_group_id)->first());
                                    $group_product  = json_decode($group_products->group_products);
                                @endphp
                                @foreach($group_product as $groupKey => $single_id)
                                    @if($groupKey < 10)
                                        @php
                                            $product = (\App\Product::whereid($single_id)->first());
                                        @endphp
                                        @if(!empty($product))
                                            @php
                                                $brand = (\App\Brand::whereid($product->brand_id)->first());
                                            @endphp
                                            @include('frontend.single_product')
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        @endforeach
        <!-- END  Most Visited Section -->

        <!-- START Brand Section -->
        @php 
            $FeatureBrand = \App\FeatureBrand::where([['is_enable', '=', '0']])->get();
        @endphp
        @if(!empty($FeatureBrand))
            <div class="section pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s4 text-center">
                                <a href="{{ route('our_collection', 'see') }}">
                                    <h2>{!! __('Popular Top Brands') !!}</h2>
                                </a>
                            </div>
                            <p class="text-center leads"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                @foreach ($FeatureBrand as $key => $popularbrand)
                                    <div class="item">
                                        <div class="product_box text-center">
                                            <a href="{{ route('products.brand', $popularbrand->id) }}">
                                                <div class="product_img">
                                                    <img src="{{ asset($popularbrand->image) }}" alt="product">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> 
                </div>
            </div>   
        @endif
        <!-- End Brand Section -->
        
    </div>
    <!-- END MAIN CONTENT -->

@endsection