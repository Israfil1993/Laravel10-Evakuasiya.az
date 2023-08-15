@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az | Haqqımızda')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/information.css">
@endsection
@section('content')


    <section id="First">
        <div class="container">
            @foreach($informationes as $information)
            <h4>{{ $information->title }}</h4>
            <span class="Tarix">{{ $information->created_at->format('Y-m-d')}}</span>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center rev_1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div> <img src="{{ url('uploads/posts/'.$information->image) }}" alt=""></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <p>{!! $information->description !!} <br>


                            </div>
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
