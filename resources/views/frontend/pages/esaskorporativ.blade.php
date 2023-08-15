@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az | Haqqımızda')
@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500;600;700;800&display=swap"
          rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/about.css" />



@endsection
@section('content')
    <section id="About">
        <div class="container">
            @foreach($corporatives as $corporative)
            <div class="aboutTop">
                <h4>{{ $corporative->title }}</h4>
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="aboutText">
                            <p>{!! $corporative->description !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <img src="{{ url('uploads/corporative/'.$corporative->image)}}" class="aboutImg" alt="">
                    </div>
                    @endforeach

                </div>
            </div>




        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection
