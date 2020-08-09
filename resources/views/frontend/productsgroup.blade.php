@extends('frontend.layouts.app')
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
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <!-- STRART CONTAINER -->
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>{{$page_title}}</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">{{__('Shop')}}</a></li>
                    <li class="breadcrumb-item active">{{$page_title}}</li>
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
                <div class="col-12">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <form id="search-form" method="get">
                                        <input type="hidden" name="q" value="{{ isset($query) ? $query : '' }}">
                                        <div class="custom_select">
                                            <select name ="orderby" onchange="filter()" id="sort" class="form-control form-control-sm">
                                                <option  disabled="">{{__('Sort By')}}</option>
                                                <option value="1" {{isset ($_GET['orderby']) && $_GET['orderby'] == 1 ? 'selected' : '' }}>Newness</option>
                                                <option value="2" {{isset ($_GET['orderby']) && $_GET['orderby'] == 2 ? 'selected' : '' }}>Oldest</option>
                                                <option value="3" {{isset ($_GET['orderby']) && $_GET['orderby'] == 3 ? 'selected' : '' }}>Price: low to high</option>
                                                <option value="4" {{isset ($_GET['orderby']) && $_GET['orderby'] == 4 ? 'selected' : '' }}>Price: high to low</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:Void(0);" class="shorting_icon grid"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:Void(0);" class="shorting_icon list active"><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <!-- <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row shop_container list">
                        @if(count($products) > 0)
                            @include('frontend.productgrouplst')
                        @else
                            <div class="products-box-bar p-3 bg-white"><p>{{__('No items found.')}}</p></div>
                        @endif
                    </div>
                    @if(count($products) > 0)
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination mt-3 justify-content-center pagination_style1">
                                    @if($products->currentPage() > 1)
                                        <li class="page-item"><a class="page-link" href="?page={{$products->currentPage()-1}}"><i class="linearicons-arrow-left"></i></a></li>
                                    @endif
                                        @for($pageInt=1; $pageInt <= $products->lastPage(); $pageInt++)
                                            <li class="page-item {{$pageInt == $products->currentPage() ? 'active':''}}"><a class="page-link" href="?page={{$pageInt}}">{{$pageInt}}</a></li>
                                        @endfor
                                    @if($products->currentPage() < $products->lastPage())
                                        <li class="page-item"><a class="page-link" href="?page={{ $products->currentPage()+1 }}"><i class="linearicons-arrow-right"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
</div>
<!-- END MAIN CONTENT -->


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