@php
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
    
    $rating = \App\Review::where('product_id',$product->id)->get()->toArray();
    $ratinglen = count($rating);
    $totalRating = 0;
    foreach ($rating as $rKey => $rValue) {
        $totalRating += $rValue['rating'];
    }
    $starReview = 0;
    if($totalRating>0){
        $starReview = ceil($totalRating/$ratinglen);
    }
@endphp
<div class="item">
    <div class="product_box text-center">
        <div class="product_img">
            <a href="{!! route('product',$product->slug) !!}">
                <img src="{{ asset($product->thumbnail_img) }}" alt="Product">
            </a>
            <div class="product_action_box">
                <ul class="list_none pr_action_btn">
                    <li><a href="javascript:void(0);" onclick="addToWishList({{ $product->id }})" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                    <li><a href="{!! route('product',$product->slug) !!}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                    <li><a href="javascript:void(0);" onclick="addToCompare({{ $product->id }})"><i class="icon-heart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_info">
            <span>{{$brand->name}}</span>
            <h6 class="product_title"><a href="{!! route('product',$product->slug) !!}">{{ $product->name }}</a></h6>
            <div class="product_price">
                @if (home_price($product) != home_discounted_price($product))
                    <span class="price">-{!! floor($product->discount) !!}% |</span>
                @endif
                <span class="price">{!! home_discounted_price($product)  !!}</span>
                @if (home_price($product) != home_discounted_price($product))
                    | <del class="price">{!! home_price($product) !!}</del>
                @endif
            </div>
            <div class="rating_wrap">
                <div class="rating">
                    <div class="product_rate" style="width:{{$starReview*20}}%"></div>
                </div>
                <span class="rating_num">({{$ratinglen}})</span>
            </div>
            <div class="pr_desc">
                <p>
                @php
                    $p = strip_tags($product->description);
                    $p = explode(' ', $p);
                    $dots = "";
                    if(count($p) > 15) { 
                        $dots = "...";
                    }
                    echo implode(' ', array_slice($p, 0, 15)).$dots; 
                @endphp
                </p>
            </div>
            <div class="add-to-cart">
                <a href="{!! route('product',$product->slug) !!}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i>{!! __('Add to cart') !!}</a>
            </div>
        </div>
    </div>
</div>