@extends('frontend.layouts.master')
@section('title', 'Evakuasiya.az/Xidmətlər')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/services.css">
@endsection
@section('content')

    <div id="Services">
        <div class="container">
            <h1>@lang('messages.our services')</h1>

            <ul class="nav nav-pills mb-3 services_nav" id="pills-tab" role="tablist">
                @foreach($services as $service)
                    <li class="nav-item">
                        <a class="nav-link @if($loop->index==0) active @endif" id="pills-home-tab" data-toggle="pill" href="#pills-home{{$service->id}}" role="tab"
                           aria-controls="pills-home" aria-selected="true">
                            <div class="xidmet_nav"><i class="{{$service->icon_class}}"></i><span>{{$service->title}}</span></div>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" id="pills-tabContent">
                @foreach($services as $service)
                    <div class="tab-pane fade @if($loop->index==0)show active @endif" id="pills-home{{$service->id}}" role="tabpanel" aria-labelledby="pills-home-tab">
                        {!! $service->text !!}

                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"

@endsection
