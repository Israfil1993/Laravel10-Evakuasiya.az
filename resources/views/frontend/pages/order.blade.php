@extends('frontend.layouts.master')
@section('title', 'Evakuasiya/Vacancy')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/order.css?v=1677517729">

@endsection
@section('content')
    <div id="Xeber_Blog">
        <div class="container">
            <h1 class="main-title">Sifariş et!</h1>

        </div>
    </div>
    <div class="container">
        <div class="order-container">
            <div class="msg"></div>
            <form  action="{{ route('forntend.order.submit', ['lang' => app()->getLocale()]) }}"  method="POST" id="order_form">
                @csrf
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="name">Ad</label>
                        <input type="text" id="name" name="name" class="form-control name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-feedback d-none"></div>
                    </div>

                    <div class="col-lg-6 form-group">
                        <label for="surname">Soyad</label>
                        <input type="text" id="surname" name="surname" class="form-control surname">
                        @error('surname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-feedback d-none"></div>
                    </div>

                    <div class="col-lg-12 form-group">
                        <label for="first_address">Ünvan A</label>
                        <input type="text" id="first_address" name="first_address" class="form-control first_address">
                        @error('first_address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-feedback d-none"></div>
                    </div>

                    <div class="col-lg-12 form-group">
                        <label for="last_address">Ünvan B</label>
                        <input type="text" id="last_address" name="last_address" class="form-control last_address">
                        @error('last_address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-feedback d-none"></div>
                    </div>

                    <div class="col-lg-6 form-group">
                        <label for="phone">Nömrə</label>
                        <input type="phone" id="phone" name="phone" class="form-control phone">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-feedback d-none"></div>
                    </div>

                    <div class="col-lg-6 form-group">
                        <label for="time">Saat</label>
                        <input type="datetime-local" id="time" name="time" class="form-control time">
                        @error('time')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-feedback d-none"></div>
                    </div>

                    <!-- <div class="col-lg-6">
                        <label for="">Saat</label>
                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                        <input type="text" class="form-control" value="13:14">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="calendar" name="min_date"></div>
                    </div> -->

                </div>
                <div class="msg" style="border-color: green; color: rgb(0, 128, 0); margin-bottom: 15px; display: none">Müraciətiniz uğurla qeydiyyata alınmışdır təşəkkür edirik.</div>

                <div class="centerBtnOrder">
                    <button type="submit">Sifariş et</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<!-- ... (HTML code) ... -->
@section('js')
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection



