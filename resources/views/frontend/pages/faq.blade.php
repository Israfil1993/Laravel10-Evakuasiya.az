@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az | Haqqımızda')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/about.css" />

@endsection
@section('content')
    <section id="Question">
        <div class="container">
            <h3 style="color:#242F9B ;">@lang('messages.frequently asked questions')</h3>

            <div class="tabs">
                @foreach($faqs as $faq)
                <div class="tab">
                    <input type="checkbox" id="{{ $faq->id }}">
                    <label class="tab-label" for="{{ $faq->id }}">{{ $faq->title}}</label>
                    <div class="tab-contentt">{!! $faq->description !!}</div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection
