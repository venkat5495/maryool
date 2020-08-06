<?php 
    $general_setting = (\App\GeneralSetting::first());
    $brands = (\App\Brand::all());
    if($general_setting->logo)
    {
        $logo = asset($general_setting->logo);
    } else {
        $logo = asset('frontend/assets/img/logo/logo.png');
    }
    if($current_language=='arabic') {
        $name           = "name_arabic";
        $catname        = "ar_name";
    } else {
        $name           = "name";
        $catname        = "name";
    }
	$total=0;
?>
<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="language-selector header-top-nav__item">
						<div class="dropdown header-top__dropdown"> 
							<a class="dropdown-toggle" id="languageID"> EN-AR</a>
							<div class="dropdown-menu" id="languagewrapper"> 
								@php
									if(Session::has('locale')){
										$locale = Session::get('locale', Config::get('app.locale'));
									}
									else{
										$locale = 'en';
									}
								@endphp
								@foreach(\App\Language::all() as $language)
									<a class="dropdown-item" href="{!! route('language.change',['locale' => $language->code ]) !!}" data-flag="{!! $language->code !!}"><img src="{!! asset('frontend/images/icons/flags/'.$language->code.'.png') !!}" alt="language images"> {!! $language->name !!}</a>
								@endforeach
							</div>
						</div>
					  </div>
                        <div class="mr-3">
                            &nbsp;
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>{{ $generalsetting->phone }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-right">
					
                        <ul class="header_list">
						@auth
                            <li><a href="{!! route('dashboard') !!}"><i class="fa fa-user"></i><span>{!! __('View Profile') !!}</span></a></li>
                            <li><a href="{!! route('logout') !!}"><i class="fa fa-sign-out"></i><span>{!! __('Logout') !!}</span></a></li>                            
						@else
							<li><a href="{!! route('user.registration') !!}"><i class="fa fa-registered"></i><span>{!! __('Register Now') !!}</span></a></li>
                            <li><a href="{!! route('user.login') !!}"><i class="fa fa-sign-in"></i><span>{!! __('Login') !!}</span></a></li>
						@endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="{!! route('home') !!}">                    
                    <img class="logo_dark" src="{{ $logo }}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a class="nav-link" href="{!! route('home') !!}">Home</a>
                            
                        </li>
                        
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
								@foreach ($categories as $category)
                                    <li class="mega-menu-col col-lg-4">
                                        <ul>
                                            <li class="dropdown-header">{!! __($category->$catname) !!}</li>
											@if (count($category->subcategories) > 0)
												@foreach($category->subcategories as $subcategories)
													<li><a class="dropdown-item nav-link nav_item" href="{{ route('products.subcategory', $subcategories->id) }}">{!! __($subcategories->$catname) !!}</a></li>
												@endforeach
                                            @endif											
										</ul>
                                    </li>
								@endforeach
                                </ul>                               
                            </div>
                        </li>                       
                        
                        <li><a class="nav-link nav_item" href="{!! route('enquiry') !!}">Contact Us</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form action="{!! route('search') !!}">
                                <input type="text" name="q" placeholder="Search" class="form-control" id="search">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">   {{Session::has('cart') ? count(Session::get('cart')) : 0}}</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @if(Session::has('cart'))
                                @if(count($cart = Session::get('cart')) > 0)
									
                                @foreach($cart as $key => $cartItem)
                                    @php
                                        $product = \App\Product::find($cartItem['id']);
                                        $total = $total + $cartItem['price']*$cartItem['quantity'];
                                        if (!empty($cartItem['color'])){
                                            $colorname = \App\Color::where('code',$cartItem['color'])->pluck('name')->first();
                                        }
                                    @endphp
                                <li>
                                    <a href="javascript:void(0)" class="item_remove" onclick="removeFromCart({{ $key }})"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset($product->thumbnail_img) }}" alt="cart_thumb1">{{ __($product->$catname) }}</a>
                                    <span class="cart_quantity"> {{ $cartItem['quantity'] }} x <span class="cart_amount"> <span class="price_symbole">SAR</span></span>{{single_price($cartItem['price']) }}</span>
                                </li>
                               @endforeach
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">SAR</span></span> {{ single_price($total) }}</p>
                                <p class="cart_buttons"><a href="{{ route('cart') }}" class="btn btn-fill-line view-cart">View Cart</a><a href="{{ route('checkout.shipping_info') }}" class="btn btn-fill-out checkout">Checkout</a></p>
                                 @else
                                <div style="padding:5px;margin:5px">{{__('Your Cart is empty')}}</div>
                            @endif
                            @else
                                <div style="padding:5px;margin:5px">{{__('Your Cart is empty')}}</div>
                            @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
