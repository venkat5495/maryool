<!-- START MAIN CONTENT -->
{{--<div class="main_content">
    <!-- START SECTION CART -->  
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" class="form cart-form">
                        @if(Session::has('cart'))
                            <div class="table-responsive shop_cart_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">{{__('Images')}}</th>
                                            <th class="product-name">{{__('Product')}}</th>
                                            <th class="product-price">{{__('Unit Price')}}</th>
                                            <th class="product-quantity">{{__('Quantity')}}</th>
                                            <th class="product-subtotal">{{__('Total')}}</th>
                                            <th class="product-remove">{{__('Delete')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach (Session::get('cart') as $key => $cartItem)
                                            @php
                                                $product = \App\Product::find($cartItem['id']);
                                                $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                $product_name_with_choice = $product->name;
                                                if(isset($cartItem['color'])){
                                                    $product_name_with_choice .= ' - '.\App\Color::where('code', $cartItem['color'])->first()->name;
                                                }
                                                foreach (json_decode($product->choice_options) as $choice){
                                                    $str = $choice->name; // example $str =  choice_0
                                                    $product_name_with_choice .= ' - '.$cartItem[$str];
                                                }
                                            @endphp
                                            <tr>
                                                <td class="product-thumbnail"><a href="javascript:void(0);"><img src="{{ asset($product->thumbnail_img) }}" alt="product"></a></td>
                                                <td class="product-name" data-title="Product"><a href="javascript:void(0);">{{ $product_name_with_choice }}</a></td>
                                                <td class="product-price" data-title="Price">{{ single_price($cartItem['price']) }}</td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <div class="quantity-container">
                                                            <div class="button-container">
                                                                <input type="button" value="-" class="minus cart-qty-minus">
                                                                <input readonly min="{{ generalsettingdata('min_qty') }}" max="{{ generalsettingdata('max_qty') }}" data-min="{{ generalsettingdata('min_qty') }}" type="text" name="qty" data-key="{{ $key }}" value="{{ $cartItem['quantity'] }}" title="Qty" class="qty" onchange="updateQuantity({{ $key }}, this);" />
                                                                <input type="button" value="+" class="plus cart-qty-plus">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart-product-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</td>
                                                <td><a class="delete" href="javascript:void(0)" onclick="removeFromCartView(event, {{ $key }})"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @if(count(Session::get('cart')) <= 0)
                                    <tbody>
                                        <tr class="cart-item">
                                            <td class="product-image" colspan="6">
                                                <p style="font-size: 15px; color: #e62e04;">{{__('No items found.')}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endif
                                </table>
                            </div>

                            @if(count(Session::get('cart')) > 0)
                            <div class="coupon_area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="coupon_code left apply-coupon-wrapper" style="margin:0">
                                            <div class="coupon_inner">
                                                <input type="text" name="coupon_code" id="coupon_code" class="form__input form__input--2" placeholder="{{__('Enter coupon code')}}">
                                                <button type="button" id="apply_cart_coupon" class="btn btn-medium btn-style-3">{{__('Apply Coupon')}}</button>
                                                <p class="coupon_error_message" style="color:red;"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @include('frontend.partials.cart_summary')
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- END MAIN CONTENT -->

<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION CART -->  
    <form action="#" class="form cart-form">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if(Session::has('cart'))
                            <div class="table-responsive shop_cart_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">{{__('Images')}}</th>
                                            <th class="product-name">{{__('Product')}}</th>
                                            <th class="product-price">{{__('Unit Price')}}</th>
                                            <th class="product-quantity">{{__('Quantity')}}</th>
                                            <th class="product-subtotal">{{__('Total')}}</th>
                                            <th class="product-remove">{{__('Delete')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach (Session::get('cart') as $key => $cartItem)
                                            @php
                                                $product = \App\Product::find($cartItem['id']);
                                                $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                $product_name_with_choice = $product->name;
                                                if(isset($cartItem['color'])){
                                                    $product_name_with_choice .= ' - '.\App\Color::where('code', $cartItem['color'])->first()->name;
                                                }
                                                foreach (json_decode($product->choice_options) as $choice){
                                                    $str = $choice->name; // example $str =  choice_0
                                                    $product_name_with_choice .= ' - '.$cartItem[$str];
                                                }
                                            @endphp
                                            <tr>
                                                <td class="product-thumbnail"><a href="javascript:void(0);"><img src="{{ asset($product->thumbnail_img) }}" alt="product"></a></td>
                                                <td class="product-name" data-title="Product"><a href="javascript:void(0);">{{ $product_name_with_choice }}</a></td>
                                                <td class="product-price" data-title="Price">{{ single_price($cartItem['price']) }}</td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <div class="quantity-container">
                                                            <div class="button-container">
                                                                <input type="button" value="-" class="minus cart-qty-minus">
                                                                <input readonly min="{{ generalsettingdata('min_qty') }}" max="{{ generalsettingdata('max_qty') }}" data-min="{{ generalsettingdata('min_qty') }}" type="text" name="qty" data-key="{{ $key }}" value="{{ $cartItem['quantity'] }}" title="Qty" class="qty" onchange="updateQuantity({{ $key }}, this);" />
                                                                <input type="button" value="+" class="plus cart-qty-plus">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total"> {{ single_price($cartItem['price']*$cartItem['quantity']) }}</td>
                                                <td class="delete" href="javascript:void(0)" onclick="removeFromCartView(event, {{ $key }})"><a href="#"><i class="ti-close"></i></a></td>
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                        <div class="coupon field_form input-group">
                            <input type="text" name="coupon_code" id="coupon_code" value="" class="form-control form-control-sm" placeholder="{{__('Enter coupon code')}}">
                            <div class="input-group-append">
                                <button class="btn btn-fill-out btn-sm" type="submit" id="apply_cart_coupon">{{__('Apply Coupon')}}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    @include('frontend.partials.cart_summary')
                </div> 
            </div>
        </div>
    <!-- END SECTION CART --> 
    </form>
</div>  
<!-- END MAIN CONTENT -->
