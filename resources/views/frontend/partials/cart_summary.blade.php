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
<div class="cart-page-total right">
    <?php 
    $tax = applytax($subtotal);
    $TaxSetting = (\App\TaxSetting::first());
    ?>
    <h3 class="text-right">{{__('Cart')}} {{__('Total')}}</h3>
    <div class="cart-calculator-table table-content table-responsive">
        @php $discount_amount = 0; @endphp
        @if(Session::has('coupon_discount'))
            @php $discount_amount = Session::get('coupon_discount') @endphp
        @endif
        <table class="table">
           <!-- Cart Summary  -->
            @if(\App\TaxSetting::value('is_product_price_incl_tax')=="Yes")
            <tbody>
                <tr class="cart-subtotal">
                    <th>{{__('Total before tax')}}</th>
                    <td><span class="price-ammount">
                       @php 
                       $calculation=(\App\TaxSetting::value('tax_setting')*1/100)+1;
                       $total_before_taxt=$subtotal/$calculation;
                       @endphp
                       {{  single_price($total_before_taxt) }}
                        
                        </span></td>
                </tr>
                <tr class="shipping">
                    <th>{{__('Tax')}}</th>
                    <td><span class="price-ammount">{{ single_price($subtotal-$total_before_taxt)}}</span></td>
                </tr>
                <tr class="shipping">
                    <th>{{__('Vat')}}</th>
                    <td><span class="price-ammount">{{ $TaxSetting->tax_setting }}%</span></td>
                </tr>
                <tr>    
                    <th>{{__('Coupon Discount')}}</th>
                    <td class="cart_amount">
                        {{ number_format($discount_amount, 2) }}
                    </td>
                </tr>
                <tr class="cart-total">
                    <th>{{__('Total')}}</th>
                    <td>{{ single_price($subtotal) }}</td>
                </tr>
            </tbody>
            @else
            <tbody>
                <tr class="cart-subtotal">
                    <th>{{__('Sub Total')}}</th>
                    <td><span class="price-ammount">{{ single_price($subtotal) }}</span></td>
                </tr>
                <tr class="shipping">
                    <th>{{__('Tax')}}</th>
                    <td><span class="price-ammount">{{ single_price($tax) }}</span></td>
                </tr>
                <tr>    
                    <th>{{__('Coupon Discount')}}</th>
                    <td class="cart_amount">
                        @php $discount_amount = 0; @endphp
                        @if(Session::has('coupon_discount'))
                            @php $discount_amount = Session::get('coupon_discount') @endphp
                        @endif
                        {{ number_format($discount_amount, 2) }}
                    </td>
                </tr>
                <tr class="cart-total">
                    <th>{{__('Total')}}</th>
                    <td>{{ single_price($subtotal+$tax+$discount_amount) }}</td>
                </tr>
            </tbody>



            @endif
             <!-- Cart Summary  -->
        </table>
       <div class="checkout_btn">
            @php
                if(Auth::check() && (Auth::user()->user_type == 'admin' || Auth::user()->user_type == 'staff')){
                    Auth::logout();
                }
            @endphp
             @if(Auth::check())
                <a href="{{ route('checkout.shipping_info') }}" class="btn btn-medium btn-style-3">{{__('Proceed to Checkout')}}</a>
            @else
                <a href="javascript:void(0);" class="btn btn-medium btn-style-3" onclick="showCheckoutModal()">{{__('Proceed to Checkout')}}</a>
            @endif
       </div>
    </div>
</div>