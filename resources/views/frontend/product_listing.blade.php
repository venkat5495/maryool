@extends('frontend.layouts.blank')
@section('content')
    @php
    if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    {
        $current_language="arabic";
        $page_title = "متجر";
    } else {
        $current_language="english";
        $page_title = "Shop";
    }
    $brands = array();
    @endphp

<style type="text/css">
    .product-loader {
        color: #333;
        content: "";
        padding: 15px;
        background: #fff;
        z-index: 9999;
        display: inline-block;
        width: 100%;
        text-align: center;
    }
    
    .product-loader i {
        font-size: 30px;
    }
</style>
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1><?= $page_title ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('products')}}">{{__('Shop')}}</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">

<div class="container-fluid">
<div class="row" style="margin-top:20px">
 <div class="col-md-12">
 <div class="shop-toolbar">
	<div class="product-view-mode" data-default="list">
		<a class="grid-2" data-target="gridview-2" data-toggle="tooltip" data-placement="top" title="2"></a>
		<a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="3"></a>
		<a class="grid-4 active" data-target="gridview-4" data-toggle="tooltip" data-placement="top" title="4"></a>
		<a class="grid-5" data-target="gridview-5" data-toggle="tooltip" data-placement="top" title="5"></a>
	</div>
	<!--<span class="product-pages"><p>Showing  {{($products->currentpage()-1)*$products->perpage()+1}} - {{$products->currentpage()*$products->perpage()}} of  {{$products->total()}} results</p></span>-->
	<form id="search-form" method="get">
			<input type="hidden" name="q" value="{{ isset($query) ? $query : '' }}">
			<div class="product-short">
				<label class="select-label">Sort By:</label>
				<select name="orderby" onchange="filter()" id="sort" class="form-control" style="font-size: 14px;height: 40px;width: 150px;">
					<option disabled="">{{__('Sort By')}}</option>
					<option value="1" {{isset ($_GET['orderby']) && $_GET['orderby'] == 1 ? 'selected' : '' }}>Newness</option>
					<option value="2" {{isset ($_GET['orderby']) && $_GET['orderby'] == 2 ? 'selected' : '' }}>Oldest</option>
					<option value="3" {{isset ($_GET['orderby']) && $_GET['orderby'] == 3 ? 'selected' : '' }}>Price: low to high</option>
					<option value="4" {{isset ($_GET['orderby']) && $_GET['orderby'] == 4 ? 'selected' : '' }}>Price: high to low</option>
				</select>
			</div>
		</form>
    </div>
 </div>
 </div>
</div>
<!-- START LOGIN SECTION -->
<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-md-10">
                @if(count($products) > 0)
				<div id="js_produc_list_div">
					<div class="shop-product-wrap gridview-4 row no-gutters">
					   @include('frontend.partials.product_list')
					</div>
				</div>
				<div class="row">
					<div class="product-loader" style="display: none;"><i class="fa fa-spin fa-spinner"></i></div>
				</div>
				@else
					<div class="alert alert-danger"><p>{{__('No items found.')}}</p></div>
				@endif
            </div>
        </div>
    </div>
<!-- END LOGIN SECTION -->
</div>
<!-- Main Content Wrapper Start -->

<script type="text/javascript">
    function filter() {
        $('#search-form').submit();
    }
    var processing;
    function load_products() {
        if($('#js_produc_list_div > .row').find('a').hasClass('next_page_url')){
            $('.product-loader').show();
            append_in = $('#js_produc_list_div').find('.row');
            next_page_link = $('#js_produc_list_div').find('.next_page_url');
            next_url = next_page_link.attr('href');
            next_page_link.remove();
            $.get(next_url, function(data){
                html = $.parseHTML(data);
                $.each(html, function( index, value ) {
                    append_in.append(value);   
                });
                processing = false;
                $('.product-loader').hide();
            });
        }
    }
    $("body").on('click','.next_page_url',function(e){
        e.preventDefault();
        load_products();
    })
</script>
@endsection