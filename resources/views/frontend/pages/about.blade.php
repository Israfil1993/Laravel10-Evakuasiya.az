@extends('frontend.layouts.master')
@section('title', 'About')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/about.css">
    @endsection
@section('content')
    <section id="About">
        <div class="container">
            <div class="aboutTop">
                <h1>@lang('messages.about')</h1>
                @foreach($abouts as $about)
                <h4>{{ $about->title }}</h4>
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="aboutText">


                            <p>{!! $about->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <img src="{{ url('uploads/about/'.$about->image) }}" class="aboutImg" alt="">
                    </div>

                </div>
            </div>
            @endforeach


        </div>
    </section>
@endsection
@section('js')
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection
