@extends('frontend.layouts.master')
@section('title', 'Evakuasiya/Vacancy')
@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet"
    />


    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/vacancy.css">
@endsection
@section('content')
    <section id="Vacancy">
        <div class="container">
            <h1>@lang('messages.career')</h1>
            <h4>@lang('messages.increase your chances with us')</h4>
            <div class="row">
                @foreach($vacances as $vacancy)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vacancyBox">
                        <div class="vacancyTop">
                            <p>@lang('messages.programming')</p>
                            <span>{{ $vacancy->created_at->format('Y-m-d') }}</span>
                        </div>
                        <div class="vacancyMiddle">
                            <h4>{{ $vacancy->title }}</h4>
                            <p>{!! Str::limit($vacancy->responsibilities, 70)!!}</p>
                        </div>
                        <div class="vacancyBottom">
                            <div>
                                <img class="manat" src="{{ asset('assets/frontend') }}/img//manatv.svg" alt="">
                                <span>{{ $vacancy->salary_min }}-{{ $vacancy->salary_max }}</span>
                            </div>
                            <a href="{{ route('frontend.vacancy.detail', ['lang' => app()->getLocale(), 'id' => $vacancy->id]) }}">

                            @lang('messages.more')
                                <img class="right" src="{{ asset('assets/frontend') }}/img/ArrowRight.svg" alt="">
                            </a>
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

