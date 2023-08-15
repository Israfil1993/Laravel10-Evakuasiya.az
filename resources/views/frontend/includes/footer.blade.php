<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="foot_left">
                    <img src="{{ asset('assets/frontend') }}/img/logo.png" alt="">
                    <p class="foot_fp">{{ $settings['footer_text'] }}</p>
                    <div></div>

                    <div class="social">
                        <ul>
                            <li><a href="{{ $settings['facebook'] }}"><img src="{{ asset('assets/frontend') }}/img/facebook 1.svg" alt=""></a></li>
                            <li><a href="{{ $settings['instagram'] }}"><img src="{{ asset('assets/frontend') }}/img/instagram 2.svg" alt=""></a></li>
                            <li><a href=""><img src="{{ asset('assets/frontend') }}/img/youtube 1.svg" alt=""></a></li>
                            <li><a href="{{ $settings['linkedin'] }}"><img src="{{ asset('assets/frontend') }}/img/linkedin 1.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="mid">
                    <h5>{{ $settings['xidmetlerin_siyahisi'] }}</h5>
                    <ul>
                        <li><a href="#">{{ $settings['yukdasima_xidmeti'] }}</a></li>
                        <li><a href="#">{{ $settings['evakuasiya_xidmeti'] }}</a></li>
                        <li><a href="#">{{ $settings['diger_xidmetler'] }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h5>{{ $settings['elaqe_melumatlari'] }}</h5>
                <span>{{ $settings['unvann'] }}</span>
                <p class="foot_lp foot_l">{{ $settings['unvan'] }}</p>

                <span>{{ $settings['telefonn'] }}</span>
                <p class="foot_lp ">{{ $settings['footer_tel'] }}</p>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/frontend') }}/img/whatsapp (1) 1.svg" class="Wp" alt="">

</footer>
