@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az')
@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500;600;700;800&display=swap"
          rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/gallery.css">
@endsection
@section('content')
    <section id="Gallery">
        <div class="container">
            <h1>@lang('messages.our achievements')</h1>
            <h4>@lang('messages.get to know our company')</h4>
            <div class="gallery-container">
                @foreach($staticticsCounters as $gallery)

                <div class="gallery-item" data-index="1">
                    <img
                        src="{{ asset('uploads/statistics_counters/'.$gallery->image) }}">
                    <div class="overlay ">
                        <div>
                            <h5>Evakuasiya.az</h5>
                            <img src="{{ asset('uploads/statistics_counters/'.$gallery->image) }}" alt="">
                        </div>
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
