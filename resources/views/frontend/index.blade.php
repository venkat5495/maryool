@extends('frontend.layouts.app')
@section('content')
<?php
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
?>

<div class="banner_section full_screen staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
        <div class="carousel-inner">
		@foreach (\App\Dynamicbanner::where([['banner_section', '=', '1'],['status','=','Active']])->get() as $key => $banner)
            <div class="carousel-item active background_bg overlay_bg_50" data-img-src="{{ asset($banner->banner_path) }}">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="banner_content text_white text-center">
                                    <h5 class="mb-3 bg_strip staggered-animation text-uppercase" data-animation="fadeInDown" data-animation-delay="0.2s">Starting $90.00</h5>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Unique Furniture Style</h2>
                                    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
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
                                <h4>Top Categories</h4>
                                <p class="mb-2">There are many variations of passages of Lorem</p>
                                <a href="#" class="btn btn-line-fill btn-sm">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <i class="flaticon-bed"></i>
                                            <span>Bedroom</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <i class="flaticon-table"></i>
                                            <span>Dining Table</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <i class="flaticon-sofa"></i>
                                            <span>Sofa</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <i class="flaticon-armchair"></i>
                                            <span>Armchair</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <i class="flaticon-chair"></i>
                                            <span>chair</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <i class="flaticon-desk-lamp"></i>
                                            <span>desk lamp</span>
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
<!-- END SECTION CATEGORIES -->
<div class="promo-box-area ptb--30 ptb-md--30">

  <div class="container">

    <div class="row">

        @foreach (\App\Dynamicbanner::where([['banner_section', '=', '2'],['status','=','Active']])->get() as $key => $section_a)

        <div class="col-md-6 mb-sm--30">

            <a href="{{ route('productsgroup', $section_a->product_group) }}"><img src="{{ asset($section_a->banner_path) }}" class="img-fluid"></a>

        </div>

        @endforeach

    </div>

  </div>

</div>

<!-- START SECTION SHOP -->
<div class="section small_pt pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Our Top Products</h2>
                </div>
                
            </div>
        </div>
        <div class="row shop_container">
			@foreach ($newarrival as $key => $new_arrival)
				<div class="col-lg-3 col-md-4 col-6">
					<div class="product_box text-center">
						<div class="product_img">
							<a href="">
								<img src="{{ asset($new_arrival->thumbnail_img) }}" alt="{{$new_arrival->name}}" style="width:253px;height:253px;">
							</a>
							<div class="product_action_box">
								<ul class="list_none pr_action_btn">
									<li><a href="javascript:void(0)" onclick="addToCompare({{ $new_arrival->id }})"  class="popup-ajax"><i class="icon-shuffle"></i></a></li>
									<li><a href="javascript:void(0)" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
									<li><a href="javascript:void(0)" onclick="addToWishList({{ $new_arrival->id }})"><i class="icon-heart"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product_info">
							<h6 class="product_title"><a href="">{{$new_arrival->name}}</a></h6>
							<div class="product_price">
								<span class="price">SRL{{$new_arrival->unit_price}}</span>								
								<del>{{$new_arrival->discount}}</del>
							</div>
							<div class="rating_wrap">
								<div class="rating">
									<div class="product_rate" style="width:80%"></div>
								</div>
								<span class="rating_num">(21)</span>
							</div>
							<div class="pr_desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
							</div>
							<div class="add-to-cart">
								<a href="{!! route('product',$new_arrival->slug) !!}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
							</div>
						</div>
						
					</div>
				</div>
			@endforeach
        </div> 
    </div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION BANNER --> 

<?php 
$FlashDeal = \App\FlashDeal::where([['status', '=', '1']])->get();
if(!empty($FlashDeal))
{ 
 foreach($FlashDeal as $key=>$deals)
 {
?>
<div class="section background_bg" data-img-src="{{ asset($deals->banner_path) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="furniture_banner">
                    <h3 class="single_bn_title">{!! __('Big Sale Deal') !!}</h3>
                    <h4 class="single_bn_title1 text_default">{{ $deals->title }}</h4>					
                    <div class="countdown_time countdown_style3 mb-4" data-time="{{ date('Y/m/d H:i:s',$deals->end_date) }}"></div>
                    <a href="{{ route('productsgroup', $deals->product_group) }}" class="btn btn-fill-out">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php } } ?>
<!-- END SECTION BANNER -->

<!-- START SECTION SHOP -->
<?php
$new = 1;
$feature_product_group;
foreach (\App\Dynamicbanner::where([['banner_section', '=', '1'],['status','=','Active']])->get() as $key => $feature_product_group)
{
	$product_group_id = $feature_product_group->product_group;
?>

<section class="mostviewed-product-area pt--20 pb--60 pt-md--60 pb-md--50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb--35">
                    <a href="{{ route('productsgroup', $product_group_id) }}"><h2><?=$feature_product_group->$banner_title." >>" ?></h2></a>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="product-carousel nav-top js-product-carousel-2">
                <?php
                    $group_products = (\App\ProductGroup::whereid($product_group_id)->first());
                    $group_product  = json_decode($group_products->group_products);
                    foreach($group_product as $single_id)
                    {
                        $product = (\App\Product::whereid($single_id)->first());
                        if(!empty($product))
                        { 
                            $brand = (\App\Brand::whereid($product->brand_id)->first());
                        ?>
                        @include('frontend.single_product')
                    <?php } 
                    }  ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- END SECTION SHOP -->

<!-- START SECTION BLOG -->
@endsection