@extends('frontend.layouts.master')
@section('title', 'Evakuasiya/Vacancy-Detail')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/vacancy.css"/>
@endsection
@section('content')
    <section id="Vacancy-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="detailTop">
                        <h5>#{{ $settings['proqlamlasdirma'] }}</h5>
                        <h1>{{ $vacancy->title }}</h1>
                        <span>{{ $vacancy->salary_min }}-{{ $vacancy->salary_max }}
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9998 18C11.7051 18 11.4225 17.8946 11.2141 17.7071C11.0057 17.5196 10.8887 17.2652 10.8887 17V5C10.8887 4.73478 11.0057 4.48043 11.2141 4.29289C11.4225 4.10536 11.7051 4 11.9998 4C12.2945 4 12.5771 4.10536 12.7855 4.29289C12.9938 4.48043 13.1109 4.73478 13.1109 5V17C13.1109 17.2652 12.9938 17.5196 12.7855 17.7071C12.5771 17.8946 12.2945 18 11.9998 18Z"
                                        fill="#1D0042" />
                                    <path
                                        d="M20.8889 20C20.5942 20 20.3116 19.8946 20.1032 19.7071C19.8948 19.5196 19.7778 19.2652 19.7778 19C19.7778 12.83 16.3556 8 12 8C7.64444 8 4.22222 12.83 4.22222 19C4.22222 19.2652 4.10516 19.5196 3.89679 19.7071C3.68841 19.8946 3.4058 20 3.11111 20C2.81643 20 2.53381 19.8946 2.32544 19.7071C2.11706 19.5196 2 19.2652 2 19C2 11.59 6.3 6 12 6C17.7 6 22 11.59 22 19C22 19.2652 21.8829 19.5196 21.6746 19.7071C21.4662 19.8946 21.1836 20 20.8889 20Z"
                                        fill="#1D0042" />
                                </svg>
                            </span>
                    </div>
                    <div class="row respVacancy">
                        <div class="col-lg-7">
                            <div class="vacancyDetailText">
                                <h4>
                                    {{ $settings['vezife_ohdeliyi'] }}

                                </h4>
                                <ul>
                                    {!! $vacancy->responsibilities!!}

                                </ul>
                            </div>
                            <div class="vacancyDetailText">
                                <h4>
                                    {{ $settings['vezife_telebleri'] }}

                                </h4>
                                <ul>
                                    {!! $vacancy->requirements!!}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="applyBox">
                                <ul>
                                    <li><span>Elanın paylaşılma vaxtı</span><span>{{ $vacancy->created_at->format('Y-m-d') }}</span></li>
                                    <li><span>Staj</span><span>{{ $vacancy->duration}}</span></li>
                                    <li><span>Yaş həddi</span><span>{{ $vacancy->age_limit }}</span></li>
                                    <li><span>Təhsil</span><span>{{ $vacancy->education_level }}</span></li>
                                    <li><span>İş rejimi</span><span>{{ $vacancy->work_schedule }}</span></li>
                                    <li><span>Müqavilə</span><span>{{ $vacancy->contract_type }}</span></li>
                                    <li><span>Email</span><span>{{ $vacancy->application_email }}</span></li>
                                    <form action="{{ route('cv.submit',['lang' => app()->getLocale()]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <li>    <span>Cv yüklə</span>  <input type="file" name="cv_file" id="cv_file">@error('cv_file')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror</li>

                                        <button type="submit">Müraciət et</button>
                                    </form>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://kit.fontawesome.com/2ca186067a.js"></script>
@endsection
