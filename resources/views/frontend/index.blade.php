@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az')
@section('content')
    @include('frontend.includes.home_slider')
    <main id="mainContent" class="mainContent">
    @include('frontend.includes.company_logos_slider')
    @include('frontend.includes.our_services')
    @include('frontend.includes.fourth_section')
    @include('frontend.includes.statistics_counters')
    @include('frontend.includes.coverage_and_partnership')
    @include('frontend.includes.question')
    @include('frontend.includes.why_us_section')
    @include('frontend.includes.testimonials')
    @include('frontend.includes.xeber_home')
    @include('frontend.includes.contact')

@endsection
@section('js')
            <script src="{{ asset('assets/frontend/js/contact_form_validation.js') }}"></script>
@endsection
