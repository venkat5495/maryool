<?php
$TaxSetting = (\App\TaxSetting::first());

if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
{    
    $brand->name        = $brand->name_arabic;
    $product->name      = $product->ar_name;
    $product->description = $product->ar_description;
}
$new = "";
if ($product->todays_deal == 1) {
    $new = "New";
}
?>

<div class="item">
<div class="product">
<div class="product_img">
	<a href="{!! route('product',$product->slug) !!}">
		<img src="{{ asset($product->thumbnail_img) }}" alt="{{ $product->name }}">
	</a>
	<div class="product_action_box">
		<ul class="list_none pr_action_btn">
			<li class="add-to-cart"><a href="{!! route('product',$product->slug) !!}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
			<li><a href="javascript:void(0)" onclick="addToCompare({{ $product->id }})"><i class="icon-shuffle"></i></a></li>                                        
			<li><a href="javascript:void(0)" onclick="addToWishList({{ $product->id }})"><i class="icon-heart"></i></a></li>
		</ul>
	</div>
</div>
<div class="product_info">
	<h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
	<div class="product_price">
		 @if (home_price($product) != home_discounted_price($product))
			<span style="color: #332f2f;">-{!! floor($product->discount) !!}% |</span>
		@endif
		<span class="money">{!! home_discounted_price($product)  !!}</span>
		@if (home_price($product) != home_discounted_price($product))
			| <span class="product-price-old"> <span class="money">{!! home_price($product) !!}</span> </span>
		@endif
	</div>
	<div class="rating_wrap">
		<div class="rating">
			<div class="product_rate" style="width:80%"></div>
		</div>
		<span class="rating_num">(21)</span>
	</div>
	<div class="pr_desc">
		<p> 
		<?php
			$p = strip_tags($product->description);
			$p = explode(' ', $p);
			$dots = "";
			if(count($p) > 15) { 
				$dots = "...";
			}
			echo implode(' ', array_slice($p, 0, 15)).$dots; 
		?>
		</p>
	</div>
	<div class="pr_switch_wrap">
		<div class="product_color_switch">
			<span class="active" data-color="#87554B"></span>
			<span data-color="#333333"></span>
			<span data-color="#DA323F"></span>
		</div>
	</div>
</div>
</div>
</div>
