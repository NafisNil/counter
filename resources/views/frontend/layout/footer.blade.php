<div class="container">
    <div class="row">
        <div class="col-md-4" id="contact">
            <img class="" style="height: 44px;" src="{{asset('frontend')}}/assets/images/logo.png" alt="">
            {!!
                $location->desc    
            !!}
        </div>
        <div class="col-md-4">
            <h3>Other Links</h3>
            <ul>
                <li>
                    <a href="{{route('about')}}">About us</a>
                </li>
                <li>
                    <a href="{{route('index')}}#contact">Contact us</a>
                </li>
                <li>
                    <a href="{{route('privacy_policy')}}">Privacy Policy</a>
                </li>
                <li>
                    <a href="{{route('terms')}}">Terms & Condition</a>
                </li>
                <li>
                    <a href="{{route('refund')}}">Refund Policy</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr style="background: #000; margin: 100px 0px 60px 0;">
<div class="container">
    <div class="text-center">
        <h3>counters.com </h3>
    </div>
</div>