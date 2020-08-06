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
<div class="slider-area">
    <div class="homepage-slider"> 
        @foreach (\App\Dynamicbanner::where([['banner_section', '=', '1'],['status','=','Active']])->get() as $key => $banner)
        <div class="single-slider content-v-center" style="background-image: url({{ asset($banner->banner_path) }}); {{ $css_banner }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content" style="{{ $css_banner }}">
                            <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s" style="margin-top:170px"> <a href="{{ route('productsgroup', $banner->product_group) }}" class="btn btn-bordered btn-style-1">{!! __('Shop Now') !!}</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="promo-box-area ptb--30 ptb-md--30">

  <div class="container">

    <div class="row">

        @foreach (\App\Dynamicbanner::where([['banner_section', '=', '2'],['status','=','Active']])->get() as $key => $section_a)

        <div class="col-md-6 mb-sm--30">

            <a href="{{ route('productsgroup', $section_a->product_group) }}"><img src="{{ asset($section_a->banner_path) }}" class="img-fluid" alt="{{ $banner->$banner_title }}"></a>

        </div>

        @endforeach

    </div>

  </div>

</div>

  

<section class="mostviewed-product-area pt--20 pb--60 pt-md--60 pb-md--50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb--35">
                    <h2>{!! __('Our Collection') !!}</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="product-carousel nav-top js-collction-carousel-2">

                    @foreach (\App\Dynamicbanner::where([['banner_section', '=', '3']])->limit(6)->get() as $key => $single)

                    <a href="{{ route('productsgroup', $single->product_group) }}">

                        <div class="mirora-product collction-product">

                            <div class="product-img"> 

                                <img src="{{ asset($single->banner_path) }}" alt="Product" class="primary-image" /> 

                                <img src="{{ asset($single->mouse_over_banner) }}" alt="Product" class="secondary-image" />

                            </div>

                            <div class="product-content text-center">

                                <h4 style="color:#fff">{{ $single->$banner_title }}</h4>

                            </div>

                        </div>

                    </a>

                    @endforeach</div>
            </div>

            <div class="col-sm-12 text-center" style="margin-top:15px;">
                <a href="{{ route('our_collection', 'see') }}" class="btn see-all">SEE ALL</a>
            </div>

        </div>
    </div>
</section>

  

<section class="mostviewed-product-area pt--20 pb--60 pt-md--60 pb-md--50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title mb--35">
            <h2>{!! __('New Arrivals') !!}</h2>
        </div>
      </div>
    </div>
    <div class="row no-gutters">
        <div class="col-12">
            <div class="product-carousel nav-top js-product-carousel-2">
            <?php $new = 1 ?>
            @foreach (\App\Product::where([['newarrival', '=', '1']])->paginate(6) as $key => $product)
                <?php $brand = (\App\Brand::whereid($product->brand_id)->first()); ?>
                @include('frontend.single_product')
            @endforeach
            </div>
        </div>
        <div class="col-sm-12 text-center" style="margin-top:15px;">
            <a href="{{ route('search', 'newarrival=1') }}" class="btn see-all">SEE ALL</a>
        </div>
    </div>
  </div>

</section>

 

<section class="mostviewed-product-area pt--20 pb--60 pt-md--60 pb-md--50">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-title mb--35">

                    <h2>{!! __('Deals') !!}</h2>
                </div>

            </div>

        </div>

        <div class="row no-gutters">

            <div class="col-12">

                <div class="product-carousel nav-top js-deal-carousel-1">

                    <?php $d = 1; ?>

                    @foreach (\App\FlashDeal::where([['status', '=', '1']])->get() as $key => $deals)
                    <?php
                    $end_date     =  $deals->end_date;
                    $current_date = date('Y-m-d-H-i');
                    if($end_date < strtotime($current_date))
                    {
                        continue;
                    }
                    ?>
                    <a href="{{ route('productsgroup', $deals->product_group) }}">

                        <div class="dealwrap clearfix">

                            <div class="row">

                                <div class="col-sm-6">


                                    <div class="watch-title mb--30">{{ $deals->title }}</div>

                                    <div class="watchtxt mb--40">{{ $deals->description }}</div>

                                    <div id="simple-timer<?= $d; ?>"></div>                                    

                                </div>

                                <div class="col-sm-6 mobile-hide">

                                    <center><img src="{{ asset($deals->banner_path) }}" alt="Deal"></center>

                                </div>

                            </div>

                        </div>

                    </a>

                    <?php $d++; ?>

                    @endforeach

                    

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Banner area Start -->

<section class="banner-area mb--30">

    @foreach (\App\Dynamicbanner::where([['banner_section', '=', '8'],['status','=','Active']])->get() as $key => $sectionb)

        <a href="{{ route('productsgroup', $sectionb->product_group) }}"><img src="{{ asset($sectionb->banner_path) }}"  class="img-fluid <?= ($sectionb->device_type == 'Mobile')?'mobile-show':'mobile-hide' ?>" alt="{{ $sectionb->$banner_title }}"></a>

    @endforeach

</section>

<!-- Featured Products area Start -->



<?php

$new = 1;

$feature_product_group;

foreach (\App\Dynamicbanner::where([['banner_section', '=', '6'],['status','=','Active']])->get() as $key => $feature_product_group)
{
$product_group_id = $feature_product_group->product_group;
?>

<section class="mostviewed-product-area pt--20 pb--60 pt-md--60 pb-md--50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb--35">
                    <h2><?= $feature_product_group->$banner_title ?></h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
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

            <div class="col-sm-12 text-center" style="margin-top:15px;">
                <a href="{{ route('productsgroup', $product_group_id) }}" class="btn see-all">SEE ALL</a>
            </div>            
            
        </div>
    </div>

</section>

<?php } ?>



<!-- Banner area Start -->

<section class="banner-area mb--30">
    @foreach (\App\Dynamicbanner::where([['banner_section', '=', '9'],['status','=','Active']])->get() as $key => $sectionc)
        <a href="{{ route('productsgroup', $sectionc->product_group) }}"><img src="{{ asset($sectionc->banner_path) }}" class="img-fluid <?= ($sectionc->device_type == 'Mobile')?'mobile-show':'mobile-hide' ?>" alt="{{ $sectionc->$banner_title }}"></a>
    @endforeach
</section>

<?php

foreach (\App\Dynamicbanner::where([['banner_section', '=', '7'],['status','=','Active']])->get() as $key => $feature_product_group)
{ ?>
<!-- Mostiviewed Products area Start -->
<section class="mostviewed-product-area pt--20 pb--60 pt-md--60 pb-md--50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title mb--35">
          <h2><?= $feature_product_group->$banner_title ?></h2>
        </div>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-12">
        <div class="product-carousel nav-top js-product-carousel-2">
            <?php
                $product_group_id = $feature_product_group->product_group;
                $group_products = (\App\ProductGroup::whereid($product_group_id)->first());
                $group_product  = json_decode($group_products->group_products);
                foreach($group_product as $single_id)
                {

                    $product = (\App\Product::whereid($single_id)->first());

                    if(!empty($product))

                    { 

                        $brand = (\App\Brand::whereid($product->brand_id)->first()); ?>

                        @include('frontend.single_product')

                    <?php 

                    } 

                } 
             ?>
        </div>
      </div>
      
        <div class="col-sm-12 text-center" style="margin-top:15px;">
            <a href="{{ route('productsgroup', $feature_product_group->product_group) }}" class="btn see-all">SEE ALL</a>
        </div>
        
    </div>
  </div>


</section>
<?php } ?>



<!-- Popular Top Brands area Start -->

<section class="blog-area pt--80 pb--40 pt-md--60 pb-md--30">

  

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="mostviewed-product-area section-title mb--35">
                    <h2>{!! __('Popular Top Brands') !!}</h2>
                </div>

            </div>

        </div>



        <div class="row">

            <div class="col-12">

                <div class="blog-carousel nav-top slick-brand">

                    @foreach (\App\FeatureBrand::where([['is_enable', '=', '0']])->get() as $key => $popularbrand)

                    <a href="{{ route('products.brand', $popularbrand->id) }}"><center><img src="{{ asset($popularbrand->image) }}" alt="Brand"></center></a>

                    @endforeach

                </div>

            </div>

        </div>

     </div>

</section>



<!-- Newsletter area End -->



<div class="newsletter-area pt--40 pb--80 pt-md--30 pb-md--60 bg--dark-4">

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-xl-9 col-lg-10">

        <div class="newsletter text-center">

          <h3 class="color--white">{!! __('Join Our Newsletters Now') !!}</h3>

          <p>Typi non habent claritatem insitam est usus legentis in qui facit eorum claritatem, investigationes demonstraverunt lectores legere me lius quod legunt saepius.</p>

          <form class="newsletter-form validate mt--40" method="POST" action="{{ route('subscribers.store') }}" id="mc-embedded-newsletter-form" name="mc-embedded-newsletter-form" target="_blank" novalidate>

            @csrf

            <input type="email" name="email" id="sub_email" placeholder="{!! __('Enter your email address here...') !!}" class="newsletter-form__input">

            <input type="submit" value="{!! __('Subscribe') !!}" class="btn newsletter-btn btn-style-1">

          </form>

        </div>

      </div>

    </div>

  </div>

</div>

<?php $j = 1; ?>

@foreach (\App\FlashDeal::where([['status', '=', '1']])->get() as $key => $deals)

<?php 

$date = date('Y-m-d-H-i', $deals->end_date); 

$arr  = explode("-", $date);

$y    = !empty($arr[0])?$arr[0]:0;

$month= !empty($arr[1])?$arr[1]:0;

$d    = !empty($arr[2])?$arr[2]:0;

$h    = !empty($arr[3])?$arr[3]:0;

$m    = !empty($arr[4])?$arr[4]:0;

?>
<script>
    $("#simple-timer<?= $j; ?>").syotimer({
        year: <?= $y ?>,
        month: <?= $month ?>,
        day: <?= $d ?>,
        hour: 23,
        minute: 59
    });
</script>

<?php $j++; ?>

@endforeach

@endsection

