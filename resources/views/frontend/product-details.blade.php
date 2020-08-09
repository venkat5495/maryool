@extends('frontend.layouts.app')
@php
if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
{
    $attribute_english_name         = "attribute_english_arabic"; 
    $attribute_description_english  = "attribute_description_arabic";
} else {
    $attribute_english_name         = "attribute_english_name"; 
    $attribute_description_english  = "attribute_description_english";
}
@endphp
@section('meta')
    <meta itemprop="name" content="{{ $product->meta_title }}">
    <meta itemprop="description" content="{{ $product->meta_description }}">
    <meta itemprop="image" content="{{ asset($product->meta_img) }}">
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $product->meta_title }}">
    <meta name="twitter:description" content="{{ $product->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset($product->meta_img) }}">
    <meta name="twitter:data1" content="{{ single_price($product->unit_price) }}">
    <meta name="twitter:label1" content="Price">
    <meta property="og:title" content="{{ $product->meta_title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ route('product', $product->slug) }}" />
    <meta property="og:image" content="{{ asset($product->meta_img) }}" />
    <meta property="og:description" content="{{ $product->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="og:price:amount" content="{{ single_price($product->unit_price) }}" />   
@endsection

@section('content')
    
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <!-- STRART CONTAINER -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1><a href="javascript:void(0);" > {{ __('Product Detail') }}</a></h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{ __('Product Detail') }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    
                    <!-- Image Part -->
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image vertical_gallery">
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-vertical="true" data-vertical-swiping="true" data-slides-to-show="5" data-slides-to-scroll="1" data-infinite="false">
                                @if(!empty(json_decode($product->photos)))
                                    @php $firstTime = 1; @endphp
                                    @foreach (json_decode($product->photos) as $photo)
                                        <div class="item">
                                            <a href="#" class="product_gallery_item".{{$firstTime == 1?'active':''}} data-image="{!! asset($photo) !!}" data-zoom-image="{!! asset($photo) !!}">
                                                <img src="{!! asset($photo) !!}" alt="product_small_img".{{$firstTime}} />
                                            </a>
                                        </div>
                                        @php $firstTime++; @endphp
                                    @endforeach
                                @endif
                                @if(!empty(json_decode($product->color_images)))
                                    @foreach(json_decode($product->color_images) as $key => $values)
                                        @foreach($values as $image)
                                            <div class="item {{$key}}">
                                                <a href="#" class="product_gallery_item" data-image="{!! asset($image) !!}" data-zoom-image="{!! asset($image) !!}">
                                                    <img src="{!! asset($image) !!}" alt="product_small_img".{{$firstTime}} />
                                                </a>
                                            </div>
                                        @php $firstTime++; @endphp
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>
                            <div class="product_img_box">
                                @if(!empty(json_decode($product->photos)))
                                    @php $firstTime = 1; @endphp
                                    @foreach (json_decode($product->photos) as $photo)
                                        @if($firstTime == 1)
                                            <img id="product_img" src='{!! asset($photo) !!}' data-zoom-image="{!! asset($photo) !!}" alt="{{$firstTime}}" />
                                            <a href="#" class="product_img_zoom" title="Zoom">
                                                <span class="linearicons-zoom-in"></span>
                                            </a>
                                        @endif
                                        @php $firstTime++; @endphp
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product  Details-->
                    <div class="col-lg-6 col-md-6">
                        <!-- Submit Form -->
                        <form id="option-choice-form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <div class="pr_detail">

                                <div class="product_description">
                                    <!-- Title -->
                                    <h1 class="product_title">
                                        <a href="javascript:void(0);" class="text-dark">{!! __($product->name) !!} {!! __($product->modal_no) !!}</a>
                                    </h1>
                                    <div class="row">
                                        <div class="col-6"></div>
                                        <div class="col-6 text-right">
                                            @php
                                                $maxQty = 1;
                                                if(!empty($product->quantity) && $product->quantity > 0){ 
                                                    $qtyStatus = "In stock";
                                                    $qtyColor = "badge-success ";
                                                    $maxQty = $product->quantity;
                                                }else{
                                                    $qtyStatus = "Out of stock";
                                                    $qtyColor = "badge-danger";    
                                                }
                                            @endphp
                                            
                                            <span class="badge {{$qtyColor}}" id="qty_status">{{__($qtyStatus)}}</span>
                                        </div>
                                    </div>
                                    <!-- Price -->
                                    <div class="product_price">
                                        <span class="price">$ {!! home_discounted_price($product)  !!}</span>
                                        @if (home_price($product) != home_discounted_price($product))
                                            <del>$ {!! home_price($product) !!}</del>
                                        @endif
                                        @if (home_price($product) != home_discounted_price($product))
                                            <div class="on_sale">
                                                <span>{!! floor($product->discount) !!}% Off</span>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Rating Star part-->
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:{{floor($product->avg_rating)*20}}%"></div>
                                        </div>
                                        <span class="rating_num">({{count($product->reviews)}})</span>
                                    </div>

                                    <!-- Description-->
                                    <div class="pr_desc">
                                        @if($product->description != '')
                                            <p>   {!! $product->description !!}</p>
                                        @else
                                            <br>
                                            <br>
                                        @endif
                                    </div>
                                    <div class="product_sort_info">
                                        <ul>
                                            <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                                            <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <!-- Table Part -->
                                    {{--<table class="table table-bordered pb-4">
                                        <!-- Brand -->
                                        <tr>
                                            <th>Brand</th>
                                            <td><a href="{{ route('products.brand', $product->brand->id) }}">{{$product->brand->name}}</a></td>
                                        </tr>
                                        @if(!empty($product->modal_no))
                                            <tr>
                                                <th>Modal no</th>
                                                <td>{{$product->modal_no}}</td>
                                            </tr>
                                        @endif
                                        <!-- Availability -->
                                        <tr>
                                            <th>{!! __('Availability') !!}</th> 
                                            <td> 
                                                <span id="availability_div">
                                                    @if(!empty($product->quantity) && $product->quantity > 0)  
                                                        {!! __('In Stock') !!}
                                                    @else
                                                        {!! __('Out of Stock') !!}
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                        <!-- Size -->
                                        @if(!empty($product->size))
                                            <tr>
                                                <th>Size</th>
                                                <td>{{$product->size}}</td>
                                            </tr>
                                        @endif
                                        @php
                                            if(!empty($product->category_id))
                                            {
                                                $cat_arr = json_decode($product->category_id);
                                                if(!empty($cat_arr))
                                                {
                                                    foreach($cat_arr as $cat) { @endphp
                                                        <tr>
                                                            <th>{!! __('Category') !!}</th>
                                                            <td><a href="{{ route('products.category', $cat) }}">{{ \App\Category::where('id',$cat)->first()->name }}</a></td>
                                                        </tr>
                                                    @php }
                                                }
                                            }
                                        @endphp
                                        @php
                                            if(!empty($product->subcategory_id))
                                            {
                                                $subcat_arr = json_decode($product->subcategory_id);
                                                if(!empty($subcat_arr))
                                                {
                                                    foreach($subcat_arr as $subcat) { @endphp
                                                        <tr>
                                                            <th>{!! __('Sub Category') !!}</th>
                                                            <td><a href="{{ route('products.subcategory', $subcat) }}">{{ \App\Subcategory::where('id',$subcat)->first()->name }}</a></td>
                                                        </tr>
                                                    @php }
                                                }
                                            }
                                        @endphp
                                        <tr>
                                            <td colspan="2">
                                                <div class="product-details-price-wrapper"> 
                                                    @if (home_price($product) != home_discounted_price($product))
                                                        <span style="color: #332f2f;">-{!! floor($product->discount) !!}% |</span>
                                                    @endif
                                                    <span class="money">{!! home_discounted_price($product)  !!}</span>
                                                    @if (home_price($product) != home_discounted_price($product))
                                                        | <span class="product-price-old"> <span class="money">{!! home_price($product) !!}</span> </span>
                                                    @endif
                
                                                </div>
                                            </td>
                                        </tr>
                                    </table>--}}

                                    <!-- Total Price -->
                                    <div class="product-details-price-wrapper d-none" style="margin-bottom: 25px" id="chosen_price_div">
                                        <span class="price" style="color:#222222">{{__('Total Price')}}: </span> <span class="price" id="chosen_price"></span>
                                    </div>

                                    <!-- Color Part -->
                                    @if(!empty($product->colors) && count(json_decode($product->colors)) > 0)
                                        @php $product_color = json_decode($product->colors); @endphp
                                        @if(!empty($product_color) && count($product_color) == 0)
                                            @foreach ($product_color as $key => $color)
                                                <input type="hidden" id="{{ $product->id }}-color-{{ $key }}" name="color" data-colorname="{{json_decode($product->colorname)[$key]}}" value="{{ $color }}" checked>
                                            @endforeach
                                        @else
                                            <div class="pr_switch_wrap">
                                                <span class="switch_lable"> {!! __('Color') !!}</span>
                                                <div class="product_color_switch">
                                                    @php $c = 1; @endphp
                                                    @foreach($product_color as $key => $color)
                                                        <span data-color="{{ $color }}" onclick="getColorPrice('color',{{ $product->id }},{{ $key }})">
                                                            <input type="hidden" id="{{ $product->id }}-color-{{ $key }}" name="color1" data-colorname="{{json_decode($product->colorname)[$key]}}" value="{{ $color }}" >
                                                            <label style="background: {{ $color }};" for="{{ $product->id }}-color-{{ $key }}" data-toggle="tooltip" title="{{json_decode($product->colorname)[$key]}}"></label>
                                                        </span>
                                                        @php $c++; @endphp
                                                    @endforeach
                                                    <input type="hidden" id="{{ $product->id }}-color-org" name="color"  value="" >
                                                </div>
                                            </div>
                                        @endif
                                    @endif

                                    <!-- Size Part -->
                                    @if(!empty($product->choice_options))
                                        @foreach (json_decode($product->choice_options) as $key => $choice)
                                            @if( $choice->title != null &&  $choice->title != '')
                                                <div class="pr_switch_wrap">
                                                    <span class="switch_lable">{{$choice->title}}</span>
                                                    <div class="product_size_switch">
                                                        @foreach ($choice->options as $key => $option)
                                                            <span onclick="getColorPrice('{{ $choice->name }}',{{ $product->id }},{{ $key }})">{!! $option !!}</span>
                                                            <input type="hidden" name="{!! $choice->name !!}1" id="{{$product->id}}-{{$choice->name}}-{{$key}}" value="{!! $option !!}" >
                                                        @endforeach
                                                        <input type="hidden" id="{{ $product->id }}-{{$choice->name}}-org" name="{{$choice->name}}"  value="" >
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <hr />
                                <div class="cart_extra">
                                    <div class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input readonly type="text" min="{{ generalsettingdata('min_qty') }}" max="{{$maxQty}}" name="quantity" value="1" title="Qty" class="qty" id="quantity">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </div>
                                    <div class="cart_btn">
                                        <button class="btn btn-fill-out btn-addtocart" type="button" onclick="addToCart()"  id="add_to_cart_btn" {{$product->quantity > 0?'':'disabled'}} ><i class="icon-basket-loaded"></i>{!! __('Add to cart') !!}</button>
                                        <a class="add_compare"  onclick="addToCompare({{ $product->id }})" href="javascript:void(0);"><i class="icon-shuffle"></i></a>
                                        <a class="add_wishlist" onclick="addToWishList({{ $product->id }})" href="javascript:void(0);"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                                <hr />
                                <ul class="product-meta">
                                    <li>{!! __('Brand') !!}: <a href="{{ route('products.brand', $product->brand->id) }}">{{$product->brand->name}}</a></li>
                                    @php
                                        if(!empty($product->category_id))
                                        {
                                            $cat_arr = json_decode($product->category_id);
                                            if(!empty($cat_arr))
                                            {
                                                foreach($cat_arr as $cat) { @endphp
                                                    <tr>
                                                        <li>{!! __('Category') !!}: <a href="{{ route('products.category', $cat) }}">{{ \App\Category::where('id',$cat)->first()->name }}</a></li>
                                                    </tr>
                                                @php }
                                            }
                                        }
                                    @endphp
                                    @php
                                        if(!empty($product->subcategory_id))
                                        {
                                            $subcat_arr = json_decode($product->subcategory_id);
                                            if(!empty($subcat_arr))
                                            {
                                                foreach($subcat_arr as $subcat) { @endphp
                                                    <tr>
                                                        <li>{!! __('Sub Category') !!} : <a href="{{ route('products.subcategory', $subcat) }}">{{ \App\Subcategory::where('id',$subcat)->first()->name }}</a> </li>
                                                    </tr>
                                                @php }
                                            }
                                        }
                                    @endphp
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews ({{count($product->reviews)}})</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    <p>{!! $product->description !!}</p>
                                </div>
                                <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <div class="comments">
                                        <h2 class="product_tab_title">{{count($product->reviews)}} Review For <span>{!! __($product->name) !!} {!! __($product->modal_no) !!}</span></h2>
                                        <ul class="list_none comment_list mt-4">
                                            @foreach ($product->reviews as $review)
                                                <li>
                                                    <!-- <div class="comment_img">
                                                        <img src="assets/images/user1.jpg" alt="user1"/>
                                                    </div> -->
                                                    <div class="comment_block">
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:{{floor($product->avg_rating)*20}}%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="customer_meta">
                                                            <span class="review_author">{{ isset($review->user->name) ? $review->user->name : 'No User' }}</span>
                                                            <span class="comment-date">{{ date('d-m-Y', strtotime($review->created_at)) }}</span>
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @if(Auth::check())
                                        @php
                                            $commentable = false;
                                        @endphp
                                        @foreach ($product->orderDetails as $key => $orderDetail)
                                            @if(Auth::user()->id)
                                                @php
                                                    $commentable = true;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if ($commentable)
                                            <h2 class="mb--20">Add a Review</h2>
                                            <form class="form form--review">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="form__group clearfix mb--20">
                                                <label class="form__label d-block" >Your Ratings</label>
                                                    <div class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label class = "full" for="star5" title="Awesome - 5 stars"> </label>
                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"> </label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label class = "full" for="star4" title="Pretty good - 4 stars"> </label>
                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                        <label class="half" for="star3half" title="Meh - 3.5 stars"> </label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label class = "full" for="star3" title="Meh - 3 stars"> </label>
                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"> </label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label class = "full" for="star2" title="Kinda bad - 2 stars"> </label>
                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                        <label class="half" for="star1half" title="Meh - 1.5 stars"> </label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label class = "full" for="star1" title="Sucks big time - 1 star"> </label>
                                                        <input type="radio" id="starhalf" name="rating" value="half" />
                                                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"> </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review_name">Name <sup>*</sup></label>
                                                    <input id="author" name="name" value="{{ Auth::user()->name }}"  type="text" disabled required class="form__input">
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review_email">Email <sup>*</sup></label>
                                                    <input id="email" name="email" value="{{ Auth::user()->email }}"  type="text" required disabled class="form__input">
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review">Your Review <sup>*</sup></label>
                                                    <textarea name="comment" id="review_comment" required class="form__input form__input--textarea"></textarea>
                                                    <div class="help-block"> <!--<span>Note: </span> HTML is not translated!--> </div>
                                                </div>
                                                <div class="form__group text-right">
                                                    <button type="submit" class="btn btn-medium btn-style-1">Continue</button>
                                                </div>
                                            </form>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <!-- Related Product -->
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>Releted Products</h3>
                        </div>
                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach (\App\Product::where([['brand_id', '=', $product->brand->id]])->get() as $key => $product)
                                @if( $key < 9)
                                    @php 
                                        $brand = (\App\Brand::whereid($product->brand_id)->first()); 
                                        $TaxSetting = (\App\TaxSetting::first());

                                        if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
                                        {    
                                        // $brand->name        = $brand->name_arabic;
                                            $product->name      = $product->ar_name;
                                        $product->description = $product->ar_description;
                                        }
                                        $new = "";
                                        if ($product->todays_deal == 1) {
                                            $new = "New";
                                        }
                                        $brand_name = "";
                                        if(!empty($brand))
                                        {
                                            $brand_name = $brand->name;
                                        }
                                    @endphp
                                    <div class="item">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="{!! route('product',$product->slug) !!}">
                                                    <img src="{{ asset($product->thumbnail_img) }}" alt="Product">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="{!! route('product',$product->slug) !!}" ><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="javascript:void(0);"><i class="icon-shuffle" onclick="addToCompare({{ $product->id }})"></i></a></li>
                                                        <li><a href="{!! route('product',$product->slug) !!}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="javascript:void(0);" onclick="addToWishList({{ $product->id }})"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{!! route('product',$product->slug) !!}">{{ $product->name }}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$ {!! home_discounted_price($product)  !!}</span>
                                                    @if (home_price($product) != home_discounted_price($product))
                                                        <del>$ {!! home_price($product) !!}</del>
                                                    @endif
                                                    @if (home_price($product) != home_discounted_price($product))
                                                        <div class="on_sale">
                                                            <span>{!! floor($product->discount) !!}% Off</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:{{floor($product->avg_rating)*20}}%"></div>
                                                    </div>
                                                    <span class="rating_num">({{count($product->reviews)}})</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>{!! $product->description !!}</p>
                                                </div>
                                                <!-- <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END SECTION SHOP -->
        
    </div>
    <!-- END MAIN CONTENT -->
@endsection