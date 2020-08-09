
@php
    //$generalsetting = Cache::get('GeneralSetting')->first();
    $policies = Cache::get('Policy');
@endphp

<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pb-4 mb-4 mb-md-5 border_bottom_tran">
                        <div class="row align-items-center justify-content-between">    
                            <div class="col-lg-5 col-md-6">
                                <div class="heading_s1">
                                    <h3>Join Our Newsletters Now</h3>
                                </div>
                                <p>Contrary to popular belief of lorem Ipsm Latin amet ltin from industry. Phasellus blandit massa enim varius nunc. </p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="newsletter_form">
                                    <form action="{{ route('subscribers.store') }}" id="mc-embedded-newsletter-form" name="mc-embedded-newsletter-form" target="_blank" novalidate>
                                        @csrf
										<input type="text" required="" class="form-control" type="email" name="email" id="sub_email" placeholder="{!! __('Enter your email address here...') !!}">
                                        <button type="submit" class="btn-send2" name="submit" value="Submit"><i class="icon-envelope-letter"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">{!! __('Contact') !!} {{ $generalsetting->site_name }}</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>{!! $generalsetting->address !!}</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:{!! $generalsetting->email !!}">{!! $generalsetting->email !!}</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $generalsetting->phone }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <ul class="social_icons rounded_social">
                          @if ($generalsetting->facebook != null)
                            <li><a class="sc_facebook" href="{!! $generalsetting->facebook !!}" target="_blank"  title="facebook"><i class="ion-social-facebook"></i></a></li>
                          @endif

                          @if ($generalsetting->instagram != null)
                            <li><a class="sc_instagram" href="{!! $generalsetting->instagram !!}" target="_blank" title="instagram"><i class="ion-social-instagram-outline"></i></a></li>
                          @endif

                          @if ($generalsetting->twitter != null)
                            <li><a class="sc_twitter" href="{!! $generalsetting->twitter !!}" target="_blank" title="twitter"><i class="ion-social-twitter"></i></a></li>
                          @endif

                          @if ($generalsetting->youtube != null)
                            <li><a class="sc_youtube" href="{!! $generalsetting->youtube !!}" target="_blank" title="youtube"><i class="ion-social-youtube-outline"></i></a></li>
                          @endif

                          @if ($generalsetting->google_plus != null)
                            <li><a class="sc_google" href="{!! $generalsetting->google_plus !!}" target="_blank" title="google plus"><i class="ion-social-googleplus"></i></a></li>
                          @endif
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">{!! __('Information') !!}</h6>
                        <ul class="widget_links">
                          @foreach ($policies as $cms)
                            <li><a href="{!! route('front_cms',$cms->slug) !!}">{!! __($cms->name) !!}</a></li>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">{!! __('Extras') !!}</h6>
                        <ul class="widget_links">
                          <li><a href="">{!! __('Brands') !!}</a></li>
                          <li><a href="">{!! __('Affiliate') !!}</a></li>
                          <li><a href="">{!! __('Specials') !!}</a></li>
                          <li><a href="">{!! __('My Account') !!}</a></li>
                          <li><a href="">{!! __('Returns') !!}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">{!! __('Download App') !!}</h6>
                        <div class="row">
                            <div class="col-6"><img src="{{ asset('frontend/assets/img/others/g-store.png')}}" alt="Google Playstore"></div>
                            <div class="col-6"><img src="{{ asset('frontend/assets/img/others/app-store.png')}}" alt="App Store"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer bg_dark4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left text-light">Copyright &copy; 2020 <a href="#" class="text-light">Maryool</a> .All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-md-right">
                        <li><a href="#"><img src="{{ asset('frontend/assets/images/visa.png')}}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend/assets/images/discover.png')}}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend/assets/images/master_card.png')}}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend/assets/images/paypal.png')}}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend/assets/images/amarican_express.png')}}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade added-to-cart-wrapper" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" id="modal-size" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div id="addToCart-modal-body" class="modal_body"></div>
    </div>
  </div>
</div>
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Script -->
<!-- Latest jQuery --> 
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script> 
<!-- popper min js -->
<script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script> 
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script> 
<!-- owl-carousel min js  --> 
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script> 
<!-- magnific-popup min js  -->
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script> 
<!-- waypoints min js  --> 
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script> 
<!-- parallax js  --> 
<script src="{{ asset('frontend/assets/js/parallax.js') }}"></script> 
<!-- countdown js  -->
<script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script> 
<!-- imagesloaded js -->
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script> 
<!-- isotope min js --> 
<script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script> 
<!-- jquery.dd.min js -->
<script src="{{ asset('frontend/assets/js/jquery.dd.min.js') }}"></script> 
<!-- slick js -->
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script> 
<!-- elevatezoom js -->
<script src="{{ asset('frontend/assets/js/jquery.elevatezoom.js') }}"></script> 
 

@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    <!-- scripts js --> 
    <script src="{{ asset('frontend/assets/arabic/js/maryool-scripts.js') }}"></script>
@else
    <!-- scripts js --> 
    <script src="{{ asset('frontend/assets/js/maryool-scripts.js') }}"></script>
@endif

<script src="{{ asset('frontend/assets/js/all.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>
<script>
    //$('body').on("wheel", "form input[type=text]", function (e) { e.preventDefault(); }, { passive: false });
        function showFrontendAlert(type, message) {
            swal({
                buttons: false,
                timer: 3000,
                position: 'top-end',
                type: type,
                title: message,
            });
        }
        $('body #GuestCheckout').on('click','#js_login_button', function() {
            $('.error').html('');
            my_form   = $("#GuestCheckout").find("#js_login_form");
            form_data     = my_form.serialize();
            url = $("#GuestCheckout").find("#js_login_form").attr('action');
            $.ajax({
                type:'POST',
                url : url,
                data : form_data,
                beforeSend: function(){$('.js_loader').show();},
                success : function(result){
                    if (result.status) {
                        $("#js_login_div").html('');
                        $(".js_guest").hide();
                        $('#GuestCheckout').modal('hide');
                        window.location.href = "{{ route('checkout.shipping_info') }}";
                    } else {
                        $.each(result.errors, function( k, v ){
                            my_form.find('#'+k).parent().next('div').html(v);
                        });
                    }
                    $('.js_loader').hide();
                }
            });
        });
        $('body #GuestCheckout').on('click','#js_submit_otp', function() {
            $('.error').html('');
            my_form   = $("#GuestCheckout").find("#js_otp_form");
            form_data     = my_form.serialize();
            url = $("#GuestCheckout").find("#js_otp_form").attr('action');
            $.ajax({
                type:'POST',
                url : url,
                data : form_data,
                beforeSend: function(){$('.js_loader').show();},
                success : function(result){
                    if (result.status) {
                        $("#GuestCheckout").modal('hide');
                        window.location.href = "{{ route('checkout.shipping_info') }}";
                    }else{
                        $('#otp_error').html(result.error);
                    }
                    $('.js_loader').hide();
                }
            });
        });
        $(document).on("input", "input#coupon_code" , function() {
            var code = $('input#coupon_code').val();
            if(code.length > 0) {
                $('input#coupon_code').css({"border-color": "#e6e6e6"});
                $('p.coupon_error_message').html('');
            } else {
                $('input#coupon_code').css({"border-color": "#FF5D5E"});
                $('p.coupon_error_message').html('');
            }
            return false;
        });
        function removeFromCartView(e, key){
            e.preventDefault();
            removeFromCart(key);
        }
        function showCheckoutModal() {
            $('#GuestCheckout').modal();
        }
        $('#apply_cart_coupon').click(function() {
            var code = $('input#coupon_code').val();
            if(code !== undefined && code !== null && code !== "") {
                $.post('{{ route('cart.applypromo') }}', { _token:'{{ csrf_token() }}', code:code}, function(data){
                    if(data.success == false) {
                        // $('#cart-summary').html(data);
                        $('p.coupon_error_message').html(data.message);
                    } else {
                        $('#cart-summary').html(data);
                    }
                });
            } else {
                $('input#coupon_code').css({"border-color": "#FF5D5E"});
                return false;
            }
        });
        // $('#option-choice-form input,#option-choice-form select').on('change', function() {
        //     var colorname = $(this).data('colorname');
        //     $('#display_colorname').text(colorname);
        //     getVariantPrice();
        // });
        /* function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                    type:"POST",
                    url: '{{ route('products.variant_price') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){
                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#availability_div').html(data.stock);
                        if(data.color_image != null) {
                            $('.'+data.color_image).siblings().hide();
                            $('.'+data.color_image).show();
                            $('#'+data.color_image).click();
                        }
                    }
                });
            }
        } */
        /* function getVariantPrice(selector_qunatity){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                    type:"POST",
                    url: '{{ route('products.variant_price') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){
                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('body .product-price > .piece').prev('strong').html(data.per_unit);
                        $('body .discount-info > .post-card__offers-offer ').html(data.variation_discount!=undefined?data.variation_discount:0 +'% off');
                        $('body .product-price-old > del').html(data.variation_price);
                        $('body .avialable-amount').html('('+data.avialable_quantity+' available)');
                        var max_quantity = "{{generalsettingdata('max_qty')}}";
                        // $('#qty_status').html(data.stock);
                        var addStockColor = '';
                        var removeStockColor = '';
                        if(data.stock == 'Out Of Stock'){
                            addStockColor = 'bg-red';
                            removeStockColor = 'bg-green';
                            $('#add_to_cart_btn').prop('disabled',true);
                        }else{
                            addStockColor = 'bg-green';
                            removeStockColor = 'bg-red';
                            $('#add_to_cart_btn').removeAttr('disabled');
                        }
                        $('#qty_status').removeClass(removeStockColor);
                        $('#qty_status').addClass(addStockColor);
                        if(selector_qunatity != 'quantity'){
                            if(data.avialable_quantity < parseInt(max_quantity)){
                                $('#option-choice-form input[name=quantity]').attr('data-max',data.avialable_quantity);
                                $('#option-choice-form input[name=quantity]').attr('max',data.avialable_quantity);
                                $('#option-choice-form input[name=quantity]').val(1);
                                $('#option-choice-form').find('.btn-number').removeAttr('disabled');
                            }else{
                                $('#option-choice-form input[name=quantity]').attr('data-max',max_quantity);
                                $('#option-choice-form input[name=quantity]').attr('max',max_quantity);
                                // $('#option-choice-form input[name=quantity]').val(1);
                                $('#option-choice-form').find('.btn-number').removeAttr('disabled');
                            }
                        }
                    }
            });
            }
        } */
        function getVariantPrice(key = '',value = ''){
            // if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
            if($('#option-choice-form input[name=quantity]').val() > 0){
                var postData = $('#option-choice-form').serializeArray();
                
                var postJson = $.grep(postData, function(e){ 
                    return e.name != key; 
                });
                if(key != ''){
                    postJson.push({'name':key,'value':value});
                }

                $.ajax({
                    type:"POST",
                    url: '{{ route('products.variant_price') }}',
                    data: postJson,
                    success: function(data){
                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('body .product-price > .piece').prev('strong').html(data.per_unit);
                        $('body .discount-info > .post-card__offers-offer ').html(data.variation_discount!=undefined?data.variation_discount:0 +'% off');
                        $('body .product-price-old > del').html(data.variation_price);
                        $('body .avialable-amount').html('('+data.avialable_quantity+' available)');
                        var max_quantity = "{{generalsettingdata('max_qty')}}";
                        $('#qty_status').html(data.stock);
                        var addStockColor = '';
                        var removeStockColor = '';
                        if(data.stock == 'Out Of Stock'){
                            addStockColor = 'badge-danger';
                            removeStockColor = 'badge-success';
                            $('#add_to_cart_btn').prop('disabled',true);
                        }else{
                            addStockColor = 'badge-success';
                            removeStockColor = 'badge-danger';
                            $('#add_to_cart_btn').removeAttr('disabled');
                        }
                        $('#qty_status').removeClass(removeStockColor);
                        $('#qty_status').addClass(addStockColor);
                        if(selector_qunatity != 'quantity'){
                            if(data.avialable_quantity < parseInt(max_quantity)){
                                $('#option-choice-form input[name=quantity]').attr('data-max',data.avialable_quantity);
                                $('#option-choice-form input[name=quantity]').attr('max',data.avialable_quantity);
                                $('#option-choice-form input[name=quantity]').val(1);
                                $('#option-choice-form').find('.btn-number').removeAttr('disabled');
                            }else{
                                $('#option-choice-form input[name=quantity]').attr('data-max',max_quantity);
                                $('#option-choice-form input[name=quantity]').attr('max',max_quantity);
                                // $('#option-choice-form input[name=quantity]').val(1);
                                $('#option-choice-form').find('.btn-number').removeAttr('disabled');
                            }
                        }
                    }
                });
            }
        }
        function getColorPrice(key,pId,skey){
            var value = '';
            value = $('#'+pId+'-'+key+'-'+skey).val();
            $('#'+pId+'-'+key+'-org').val(value);
            getVariantPrice(key,value);
        }
        $('#option-choice-form input,#option-choice-form select').on('change', function() {
            var colorname = $(this).data('colorname');
            $('#display_colorname').text(colorname);
            getVariantPrice();
        });
        /* $('#option-choice-form input').on('change', function(){
            color_code = $(this).val();
            var color_code = color_code.replace('#','');
            if($(this).attr('name') == 'color'){
                $("#js_default").hide();
                $(".js_color_img").hide();
                $("#js_"+color_code).show();
                $("#js_"+color_code).find('a:first').click();
                color_text = $(this).next('label').data('original-title');
                $("#js_color_text").text(color_text);
            }
            selector_qunatity = '';
            if($(this).attr('name') == 'quantity'){
                selector_qunatity = 'quantity';
            }else{
                $('#option-choice-form input[name=quantity]').val(1);
            }

            if($('input:radio:checked').length == 0){
                $('#option-choice-form').find('.btn-number').removeAttr('disabled');
            }

            getVariantPrice(selector_qunatity);
        }); */
        $(document).on('keyup','#search', function(){
            search($(this).val());
        });
        $(document).on('focus','#search', function(){
            search($(this).val());
        });
        function search(val){
            var search = val;
            if(search.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', { _token: '{{ @csrf_token() }}', search:search}, function(data){
                    if(data == '0'){
                        $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+search+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }
        function initialization() {
            $('.select_option').niceSelect();
            function i() {
                return !!$("html").hasClass("rtl")
            }
            $(".product_navactive").owlCarousel({
                autoplay: !0,
                loop: !0,
                nav: !0,
                rtl: i(),
                autoplayTimeout: 8e3,
                items: 4,
                dots: !1,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsiveClass: !0,
                responsive: {0: {items: 1}, 250: {items: 2}, 480: {items: 3}, 768: {items: 4}}
            });
            $(".product_navactive").resize();
            $(".modal").on("shown.bs.modal", function (t) {
                $(".product_navactive").resize();
            });
            $(".product_navactive a").on("click", function (t) {
                t.preventDefault();
                var i = $(this).attr("href");
                $(".product_navactive a").removeClass("active"), $(this).addClass("active"), $(".product-details-large .tab-pane").removeClass("active show"), $(".product-details-large " + i).addClass("active show")
            });
        }
        
        function changeProduct()
        {
            
        }
        function showAddToCartModal(id,offer_id = null){
            //$('#modal-size').addClass('modal-lg');
            $('#productModal').modal();
            //$('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id,offer_id:offer_id}, function(data) {
                $('#addToCart-modal-body').html(data);
                initialization();
            });
        }
        function updateQuantity(key, element) {
                console.log(key,element);
                $.post('{{ route('cart.updateQuantity') }}', { _token:'{{ csrf_token() }}', key:key, quantity: element}, function(data){
                    updateNavCart();
                    $('#cart-summary').html(data);
                });
        }
        function updateNavCart() {
            $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data) {
                $('#cart_items').html(data);
                $('#cart_items_canv').html(data);
            });
        }
        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });
            if($('input:radio:checked').length == count){
                return true;
            }
        }
        function cartDropdown() {
            $(".mini-cart__dropdown-menu").toggle();
        }
        function addToCart(){
            if(checkAddToCartValidity() && $("#quantity").val() ) {
                $('#modal_box').modal();
                $('.c-preloader').show();
                $.ajax({
                type:"POST",
                url: '{{ route('cart.addToCart') }}',
                data: $('#option-choice-form').serializeArray(),
                success: function(data){
                    $('#addToCart-modal-body').html(null);
                    $('.c-preloader').hide();
                    $('#modal-size').removeClass('modal-lg');
                    $('#addToCart-modal-body').html(data);
                    updateNavCart();
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                }
            });
            }
            else{
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }
        function removeFromCart(key){
            $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
                updateNavCart();
                $('#cart-summary').html(data);
                showFrontendAlert('success', 'Item has been removed from cart');
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
            });
        }
        function addToWishList(id){
            @if (Auth::check())
            $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                if(data != 0){
                    if ($('[id=add_to_whishlist_'+id+']').children().hasClass('fa fa-heart')) {
                        $('[id=add_to_whishlist_'+id+']').children().removeClass('fa fa-heart');
                        $('[id=add_to_whishlist_'+id+']').children().addClass('fa fa-heart-o');
                        // $('#add_to_whishlist_'+id).parent().parent().parent().removeClass('active');
                        showFrontendAlert('warning', 'Item has been removed from wishlist');
                    } else {
                        $('[id=add_to_whishlist_'+id+']').children().removeClass('fa fa-heart-o');
                        $('[id=add_to_whishlist_'+id+']').children().addClass('fa fa-heart');
                        // $('#add_to_whishlist_'+id).parent().parent().parent().addClass('active');
                        showFrontendAlert('success', 'Item has been added to wishlist');
                    }
                    $('#wishlist').html(data);
                }
                else{
                    showFrontendAlert('warning', 'Please login first');
                }
            });
            @else
            showFrontendAlert('warning', 'Please login first');
            @endif
        }
        function addToCompare(id){
            if (localStorage.comparecount) {
                localStorage.comparecount = Number(localStorage.comparecount)+1;
            } else {
                localStorage.comparecount = 1;
            }
            if(localStorage.comparecount < 50) {
                $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    //$('#compare').html(data);
                    showFrontendAlert('success', 'Item has been added to compare list');
                    $('#compare').html(parseInt($('#compare').html())+1);
                });
            } else {
                showFrontendAlert('warning', 'You can not add more than 50 product in compare list.');
            }
        }
        function show_purchase_history_details(order_id){
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }
        function show_order_details(order_id) {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }
        function cartQuantityInitialize(){
            $('.btn-number').click(function(e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());

                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });

            $('.input-number').focusin(function() {
                $(this).data('oldValue', $(this).val());
            });

            $('.input-number').change(function() {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            /*$(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });*/
        }
        $(".complete_order").click(function () {
            $(".complete_order .fa-spinner").show();
        });
        $("#edit-address").prop('disabled',true);
        function getPaymentInfo(){
            $('#phone_error').html('');
            var isValid = true;
            $('.card-body input').each(function() {
                if ( this.value == '' ){
                    isValid = false;
                }
            });

            if($('input[name=user_address]').is(':checked')){
                var isValid = true;
            } else {
                if($('#state').val() == '') {
                    var isValid = false;
                }
                if($('#city_ids').val() == '') {
                    var isValid = false;
                }
            }
            if(isValid) {
                $('.js_loader').css("display","inline-block");
                $.ajax({
                    type:"POST",
                    url:'{{ route('checkout.payment_info') }}',
                    data: $('#shipping_form').serialize(),
                    success: function(data) {
                        $('.js_loader').hide();
                        if(data.status == 'otp_screen') {
                            $('#Mobileverify').modal();
                        }
                        if(!data.status && data.error != null) {
                            $('#city_error').html(data.error);
                            if(data.error == null)
                            {
                                $('#city_error').html(data.city_error);
                            }
                            return false;
                        }
                        @if (\Auth::check())
                            $('#js_address_div').html(data);
                            $(".user-actions").remove();
                            get_cod_charge('cash_on_delivery');
                        @endif
                    }
                });
            }
            else{
                @if (Auth::check())
                    showFrontendAlert('warning', 'Please choose one address');
                @else
                    showFrontendAlert('warning', 'Please fill all the fields');
                @endif
            }
        }
        $('body #Mobileverify').on('click','#js_submit_otp', function() {
            $('.error').html('');
            my_form   = $("#Mobileverify").find("#js_otp_form");
            form_data     = my_form.serialize();
            url = $("#Mobileverify").find("#js_otp_form").attr('action');
            $.ajax({
                type:'POST',
                url : url,
                data : form_data,
                beforeSend: function(){$('.js_loader').show();},
                success : function(result){
                    if (result.status) {
                        $("#Mobileverify").modal('hide');
                        $('#js_address_div').html(result.html);
                    }else{
                        $('#otp_error').html(result.error);
                    }
                    $('.js_loader').hide();
                }
            });
        });
        function get_cities(selected_city_id = null){
            var selected_city_id = selected_city_id;
            var state_id = $('#state').val();
            if (state_id !== undefined){
                $.get('{{ route('cities_list') }}',{_token:'{{ csrf_token() }}', state_id:state_id, city_id:selected_city_id}, function(data){
                    $('#city_ids').html(data);
                    $('.demo-select2').select2();
                });
            }
        }
        $(document).on('change','#state', function() {
            get_cities();
        });
        function get_cities_profile(selected_city_id = null){
            var selected_city_id = selected_city_id;
            var state_id = $('#profile_state').val();
            if (state_id !== undefined){
                $.get('{{ route('cities_list') }}',{_token:'{{ csrf_token() }}', state_id:state_id, city_id:selected_city_id}, function(data) {
                    $('#profile_city').html(data);
                });
            }
        }
        
        function getajaxproduct(slug)
        {
            $.get('{{ route('ajaxproduct') }}',{_token:'{{ csrf_token() }}', slug:slug}, function(data) {
                $('.product-details-top').html(data);
            });
        }
        
        $(document).on('change','#profile_state', function() {
            get_cities_profile();
        });
        function edit_address(val) {
            $(".edit_address").removeAttr('id');
            $(".edit_address_state"+val).attr('id','state');
            $(".edit_address_city"+val).attr('id','city_ids');
        }
        $('.js_user_address').on('change', function() {
            address_id = $(this).val();
            $('#edit-address').prop('disabled',false);
            $("#billing_details_field").hide();
            if($('input[name=user_address]').is(':checked')){
                get_cart_summary(address_id);
            }
        });
        function get_cart_summary(user_address=null) {
            var city_id = $('#city_ids').val();
            $.get('{{ route('cart_summary_ajax') }}',{_token:'{{ csrf_token() }}', city_id:city_id,user_address:user_address}, function(data){
                if(data != ''){
                    $('#js_car_summary_div').html(data);
                }
            });
        }
        $('#city_ids').on('change', function() {
            get_cart_summary();
        });
        $('body').on('click','.js_payment_option',function(){
            payment_option = $(this).val();
            if (payment_option == 'cash_on_delivery') {
                payment_option = 'cash_on_delivery';
                get_cod_charge(payment_option);
            }else{
                get_cod_charge();
            }
        })
        function get_cod_charge(payment_option=null) {
            $.get('{{ route('cod_charge_ajax') }}',{payment_option:payment_option}, function(data){
                if(data != ''){
                    $('#js_car_summary_div').html(data);
                }
            });
        }
        $(document).on('click',"#edit-address",function () {
            var userAddressId = $("input[name='user_address']:checked").val();
            $.get('{{route('get_address_data')}}',{user_address:userAddressId},function (data) {
                if(data != ''){
                    $("#billing_details_field").html(data);
                    $("#billing_details_field").show();
                    $('.niceselect_option').niceSelect();
                    var selected_city_id = $('input[name="selected_city_id"]').val();
                    get_cities(selected_city_id);
                }
            });
        });
        function edit_address_billing(userAddressId) {
            $.get('{{route('get_address_data')}}',{user_address:userAddressId},function (data) {
                if(data != '') {
                    $("#billing_details_field").html(data);
                    $("#billing_details_field").show();
                    $("#js_address_div").show();
                    $(".submit").show();
                    $('.demo-select2-placeholder').select2();
                    var selected_city_id = $('input[name="selected_city_id"]').val();
                    get_cities(selected_city_id);
                }
            });
        }
        function add_address_billing() {
            $("#js_address_div").show();
            $("#billing_details_field").show();
        }
        // $('.select_option').niceSelect();
        function filter(){
            $('#search-form').submit();
        }
        $("#filter").click(function (){
            var arg = $("#amount").val().split('-');
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        });
        $(".nice-select > ul > li").click(function(e){
            var val = $(this).data('value');
            $('input[name=sort_by]').val(val);
            filter();
        });
        //$("#amount").val($( "#slider-range" ).slider( "values", 0 ) + "-" + $( "#slider-range" ).slider( "values", 1 ) );
        $(".demo-select2-placeholder").select2({
            placeholder: "Select an option",
            allowClear: true
        });
        $(".edit_address").select2({
            placeholder: "Select an option",
            allowClear: true
        });
        function clearcomparelist() {
            localStorage.removeItem("comparecount");
            window.location.href = '{{ route('compare.reset') }}';
        }
        /*$(document).keydown(function (event) {
            if (event.keyCode == 40) {
                // event.preventDefault();
                if (processing)
                    return false;
        
                if ($(window).scrollTop() >= $(document).height() - $(window).height() - 700){
                    processing = true;
                    load_products();
                }
            }
        });

        var processing;
            $("body").on('touchmove scroll mousewheel keydown','.container',function(){
                if (processing)
                    return false;
                if ($(window).scrollTop() >= $(document).height() - $(window).height() - 700){
                    processing = true;
                    load_products();
                }
            })*/
        /*function load_products(){
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
        }*/
        $(".select2-container").css("width","100%");
        $(".select2-container .select2-selection--single").css("height","40px");
        $(".select2-container--default .select2-selection--single .select2-selection__rendered").css("line-height","40px");
        $(".select2-selection__arrow").css("line-height","40px");
        
        

        /*$(document).ready(function() {
            setTimeout(function(){ $(".wsshopwp").css("height","auto"); }, 1000);
        })*/
    $("#languageID").click(function(){
        $("#languagewrapper").toggle();
    })
    $("#userID").click(function(){
        $("#userwrapper").toggle();
    })

</script>
</div>

</body>
</html>