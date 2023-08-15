@extends('frontend.layouts.master')
@section('title', '/Contact')
@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/contact.css">
@endsection
@section('content')
    <section id="Contact">
        <div class="container">
            <h1>@lang('messages.contact')</h1>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact_left">
                        <h4>@lang('messages.contact forum')</h4>
                        <div class="cont"><span><img src="{{ asset('assets/frontend') }}/img/MapPin.svg" alt=""></span>
                            <span>{{ $settings['unvan'] }}</span>
                        </div>
                        <div class="cont cont2">
                            <img src="{{ asset('assets/frontend') }}/img/Vector3.svg" alt="">
                            <span>
                                    <span>{{ $settings['footer_tel'] }} </span><br>

                                </span>
                        </div>

                        <div class="social">
                            <ul>
                                <li><a href="#"><img src="{{ asset('assets/frontend') }}/img/facebook 1.svg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/frontend') }}//img/instagram 2.svg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/frontend') }}/img/youtube 1.svg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/frontend') }}/img/linkedin 1.svg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact_right">
                        <form action="{{ route('frontend.contact.submit') }}" method="POST">
                            @csrf
                            <div class="Text_input">
                                <div class="form-group"> <label for="name">@lang('messages.fullname')</label>
                                    <input type="text" id="name" name="name" class=" form-control " placeholder="" >
                                    <div class="invalid-feedback">Text</div>
                                </div>

                                <div class="form-group"> <label for="email">@lang('messages.e-mail')</label>
                                    <input type="text" id="email" name="email" class="email Input" placeholder="">
                                </div>

                                <div class="form-group"><label for="basliq">@lang('messages.subject title')</label>
                                    <input type="text" id="subject" name="subject" class="basliq Input" placeholder="">
                                </div>

                                <div class="form-group"> <label for="">@lang('messages.message')</label>
                                    <textarea name="message"></textarea>
                                </div>

                            </div>
                            <div class="Submit">
                                <input type="submit" value="@lang('messages.send')">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')


    <script src="{{ asset('assets/frontend/js/contact_form_validation.js') }}"></script>
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection

