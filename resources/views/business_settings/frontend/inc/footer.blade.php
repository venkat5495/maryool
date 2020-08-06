@php
    //$generalsetting = Cache::get('GeneralSetting')->first();
    $policies = Cache::get('Policy');
@endphp

<footer class="footer border-top ptb--40 ptb-md--30 bg--dark-4">
<div class="container">
  <div class="row mb--40 mb-md--30">
    <div class="col-lg-4 col-md-6 mb-md--30">
      <div class="footer-widget">
        <h3 class="widget-title">{!! __('About') !!} {{ $generalsetting->site_name }}</h3>
        <div class="widget-content mb--20">
          <p>{!! __('Address') !!}:{!! $generalsetting->address !!}</p>
          <p>{!! __('Phone') !!}: {{ $generalsetting->phone }}</p>
          <p>{!! __('Email') !!}: {!! $generalsetting->email !!}</p>
        </div>
        <ul class="social social-round">

            @if ($generalsetting->facebook != null)
                <li class="social__item"><a class="social__link" href="{!! $generalsetting->facebook !!}" target="_blank"  title="facebook"><i class="fa fa-facebook"></i></a></li>
            @endif

            @if ($generalsetting->instagram != null)
                <li class="social__item"><a class="social__link" href="{!! $generalsetting->instagram !!}" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            @endif

            @if ($generalsetting->twitter != null)
                <li class="social__item"><a class="social__link" href="{!! $generalsetting->twitter !!}" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            @endif

            @if ($generalsetting->youtube != null)
                <li class="social__item"><a class="social__link" href="{!! $generalsetting->youtube !!}" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
            @endif

            @if ($generalsetting->google_plus != null)
                <li class="social__item"><a class="social__link" href="{!! $generalsetting->google_plus !!}" target="_blank" title="google plus"><i class="fa fa-google-plus"></i></a></li>
            @endif
        </ul>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 mb-md--30">
      <div class="footer-widget">
        <h3 class="widget-title">{!! __('Information') !!}</h3>
        <ul class="widget-menu">
            @foreach ($policies as $cms)
                <li><a href="{!! route('front_cms',$cms->slug) !!}">{!! __($cms->name) !!}</a></li>
            @endforeach
        </ul>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 mb-sm--30">
      <div class="footer-widget">
        <h3 class="widget-title">{!! __('Extras') !!}</h3>
        <ul class="widget-menu">
          <li><a href="">{!! __('Brands') !!}</a></li>
          <li><a href="">{!! __('Affiliate') !!}</a></li>
          <li><a href="">{!! __('Specials') !!}</a></li>
          <li><a href="">{!! __('My Account') !!}</a></li>
          <li><a href="">{!! __('Returns') !!}</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="footer-widget">
        <h3 class="widget-title">{!! __('Download App') !!}</h3>
        <div class="widget-product">
           <img src="{{ asset('frontend/assets/img/others/g-store.png')}}" alt="Google Playstore">  <img src="{{ asset('frontend/assets/img/others/app-store.png')}}" alt="App Store"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <p class="copyright-text">Copyright &copy; 2020 <a href="#">Alfahd Watch</a> .All Right Reserved.</p>
      <img src="{{ asset('frontend/assets/img/others/payment.png')}}" alt="payment"> </div>
  </div>
</div>
</footer>
<!-- Footer End --> 

<!-- Scroll To Top Start --> 
<a class="scroll-to-top" href="" style="display:none"><i class="fa fa-angle-double-up"></i></a> 
<!-- Scroll To Top End --> 

<!-- Popup Subscribe Box Start 
<div class="popup-subscribe-box" id="subscribe-popup">
<div class="popup-subscribe-box-content">
  <div class="popup-subscribe-box-body"> <a href="#subscribe-popup" class="popup-close">close</a>
    <h3>NEWSLETTER</h3>
    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
    <form class="popup-subscribe-form validate" action="" method="post">
      <input type="email" name="popup-subscribe-email" id="popup-subscribe-email" placeholder="Enter your email here...">
      <input type="submit" value="Subscribe" class="btn subscribe-btn btn-medium btn-style-1">
      <div class="form-group text-center mt--20">
        <input type="checkbox" name="hide-popup" id="hide-popup">
        <label for="hide-popup"> Don't show this popup again </label>
      </div>
    </form>
  </div>
</div>
</div>-->
<!-- Popup Subscribe Box End --> 

</div>