@extends('frontend.layouts.blank')
@section('content')
    <style>
        #scrollUp{
            padding-top: 10px;
        }
        .footer_contact ul li a {
            padding-top: 12px;
        }
        .dash-clr1 h4, .dash-clr1 p { color:#fff !important; }
        .small-box {
    border-radius: .25rem;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    display: block;
    margin-bottom: 20px;
    position: relative;
}
.small-box>.inner {
    padding: 10px;
}
.small-box h3, .small-box p {
    z-index: 5;
    color:#fff;
}
.small-box .icon {
    color: rgba(0,0,0,.15);
    z-index: 0;
}.small-box .icon>i.ion {
    font-size: 70px;
    top: 20px;
}
.small-box>.small-box-footer {
    background: rgba(0,0,0,.1);
    color: rgba(255,255,255,.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
}

.small-box h3 {
    font-weight: 700;
    margin: 0 0 10px 0;
    padding: 0;
    color:#fff;
    white-space: nowrap;
}
</style>
    <!--breadcrumbs area start-->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>My Account</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{!! route('home') !!}">{!! __('Home') !!}</a></li>
                    <li class="breadcrumb-item active">{!! __('My Account') !!}</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="section">
    <div class="container">
         @if ($errors->has('phone'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $errors->first('phone') }}</strong>
                </div>
            @endif

            @if ($errors->has('city'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $errors->first('city') }}</strong>
                </div>
            @endif

            @if ($errors->has('state'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $errors->first('state') }}</strong>
                </div>
            @endif

            @if ($errors->has('address'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $errors->first('address') }}</strong>
                </div>
            @endif

            @if ($errors->has('email'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif

            @if ($errors->has('name'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
            @endif
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="productreview-tab" data-toggle="tab" href="#productreview" role="tab" aria-controls="productreview" aria-selected="false"><i class="ti-shopping-cart-full"></i>My Product Review</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false"><i class="ti-shopping-cart-full"></i>Notification</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My Address</a>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="true"><i class="ti-location-pin"></i>My Wishlist</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="changepassword-tab" data-toggle="tab" href="#changepassword" role="tab" aria-controls="changepassword" aria-selected="true"><i class="ti-location-pin"></i>Change Password</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="wallet-tab" data-toggle="tab" href="#wallet" role="tab" aria-controls="wallet" aria-selected="true"><i class="ti-location-pin"></i>My Wallet</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>Account details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{!! route('logout') !!}"><i class="ti-lock"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content dashboard_content">
                    <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="card-body">
                                <p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent orders</a>, manage your <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and billing addresses</a> and <a href="javascript:void(0);" onclick="$('#account-detail-tab').trigger('click')">edit your password and account details.</a></p>
                                <div class="tab-pane fade show active" id="dashboard">
                                
                                <div class="row nav">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>Your Cart</h3>
                                                @if(Session::has('cart'))
                                                    <p>{{ count(Session::get('cart'))}} Product(s)</p>
                                                @else
                                                    <p>0 Product</p>
                                                @endif
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="{{ route('cart') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-sm-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>Your Wishlist</h3>
                                                <p>{{ count(Auth::user()->wishlists)}} Product(s)</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#view_wishlist" data-toggle="pill" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-sm-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            @php
                                                $orders = \App\Order::where('user_id', Auth::user()->id)->get();
                                                $total = 0;
                                                foreach ($orders as $key => $order) {
                                                    $total += count($order->orderDetails);
                                                }
                                            @endphp
                                            <h3>You Ordered</h3>
                                            <p>{{ $total }} Product(s)</p>
                                          </div>
                                          <div class="icon">
                                            <i class="ion ion-bag"></i>
                                          </div>
                                          <a href="#orders" data-toggle="pill" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                </div>                               
                                
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        <div class="card">
                            <div class="card-header">
                                 <h3>Orders</h3>
                                
                            </div>
                            <div class="card-body">
                                @include('frontend.purchase_history')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="productreview" role="tabpanel" aria-labelledby="productreview-tab">
                        <div class="card">
                            <div class="card-header">
                                 <h3>Product Review</h3>
                                
                            </div>
                            <div class="card-body">
                                @include('frontend.customer.reviews')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                        <div class="card">
                            <div class="card-header">
                                 <h3>Notification</h3>
                                
                            </div>
                            <div class="card-body">
                                @include('frontend.customer.notifications')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                        <div class="card">
                            <div class="card-header">
                                 <h3>Wishlist</h3>
                                
                            </div>
                            <div class="card-body">
                                @include('frontend.partials.wishlist')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
                        <div class="card">
                            <div class="card-header">
                                 <h3>Change Password</h3>
                                
                            </div>
                            <div class="card-body">
                                @include('frontend.customer.password')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
                        <div class="card">
                            <div class="card-header">
                                 <h3>Wallet</h3>
                                
                            </div>
                            <div class="card-body">
                                @include('frontend.customer.wallet')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-3 mb-lg-0">
                                    <div class="card-header">
                                        <h3>Billing Address</h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href="#" class="btn btn-fill-out">Edit</a> -->
                                        @include('frontend.customer.addresses')
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Shipping Address</h3>
                                    </div>
                                    <div class="card-body">
                                        <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href="#" class="btn btn-fill-out">Edit</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                        @include('frontend.customer.profile')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--breadcrumbs area end-->
@endsection
<script>
    //for wallet
    function show_wallet_modal(){
        $('#wallet_modal').modal('show');
    }
</script>

@section('script')
<script type="text/javascript">
    var hash = document.location.hash;
    if (hash) {
        $('.nav-link a[href='+hash+']').tab('show');
    }


</script>
@endsection
