@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az/Partner')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/partners.css" />
@endsection
@section('content')
<section id="Partner">
    <div class="container">
        <h1>@lang('messages.partners')</h1>
        <div class="partnerTop">
            <h4>@lang('messages.companies')</h4>

        </div>
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="logoBox">
                    <a href="#">
                        <img src="{{url($partner->image)}}" alt="" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('js')
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection
