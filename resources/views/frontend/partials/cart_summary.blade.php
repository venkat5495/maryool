@php
    $subtotal = 0;
    $tax = 0;
    $shipping = 0;
@endphp
@foreach (Session::get('cart') as $key => $cartItem)
    @php
        $product = \App\Product::find($cartItem['id']);
        $subtotal += $cartItem['price']*$cartItem['quantity'];
        $shipping += $cartItem['shipping']*$cartItem['quantity'];
        $product_name_with_choice = $product->name;
        if(isset($cartItem['color'])) {
            $product_name_with_choice .= ' - '.\App\Color::where('code', $cartItem['color'])->first()->name;
        }
        foreach (json_decode($product->choice_options) as $choice){
            $str = $choice->name; // example $str =  choice_0
            $product_name_with_choice .= ' - '.$cartItem[$str];
        }
    @endphp
@endforeach
@php
    $tax = applytax($subtotal);
    $TaxSetting = (\App\TaxSetting::first());
@endphp
 <div class="col-md-6">
    <div class="border p-3 p-md-4">
        <div class="heading_s1 mb-3">
            <h6>{{__('Cart')}} {{__('Total')}}</h6>
        </div>
        @php $discount_amount = 0; @endphp
        @if(Session::has('coupon_discount'))
            @php $discount_amount = Session::get('coupon_discount') @endphp
        @endif
        <div class="table-responsive">
            
            <table class="table">
                @if(\App\TaxSetting::value('is_product_price_incl_tax')=="Yes")
                    <tbody>
                        <tr>
                            <td class="cart_total_label">{{__('Total before tax')}}</td>
                            <td class="cart_total_amount">
                                @php 
                                    $calculation=(\App\TaxSetting::value('tax_setting')*1/100)+1;
                                    $total_before_taxt=$subtotal/$calculation;
                                @endphp
                                {{  single_price($total_before_taxt) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Tax')}}</td>
                            <td class="cart_total_amount">{{ single_price($subtotal-$total_before_taxt)}}</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Vat')}}</td>
                            <td class="cart_total_amount">{{ $TaxSetting->tax_setting }}%</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Coupon Discount')}}</td>
                            <td class="cart_total_amount"> {{ number_format($discount_amount, 2) }}</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Total')}}</td>
                            <td class="cart_total_amount"> {{ single_price($subtotal) }}</td>
                        </tr>
                    </tbody>
                @else
                    <tbody>
                        <tr>
                            <td class="cart_total_label">{{__('Sub Total')}}</td>
                            <td class="cart_total_amount">{{ single_price($subtotal) }}</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Tax')}}</td>
                            <td class="cart_total_amount">{{ single_price($subtotal-$total_before_taxt)}}</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Coupon Discount')}}</td>
                            <td class="cart_total_amount"> {{ number_format($discount_amount, 2) }}</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">{{__('Total')}}</td>
                            <td class="cart_total_amount"> {{ single_price($subtotal+$tax+$discount_amount) }}</td>
                        </tr>
                    </tbody>
                @endif
            </table>
        </div>
        @if(Auth::check())
                <a href="{{ route('checkout.shipping_info') }}" class="btn btn-fill-out">{{__('Proceed to Checkout')}}</a>
            @else
                <a href="javascript:void(0);" class="btn btn-fill-out" onclick="showCheckoutModal()">{{__('Proceed to Checkout')}}</a>
            @endif
    </div>
</div>
