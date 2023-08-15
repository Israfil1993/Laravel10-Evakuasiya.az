<!-- backend/vacancies/show.blade.php -->
@extends('backend.layouts.app')
@section('title', 'Vakansiya Təfərrüatlar')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vakansiya Təfərrüatlar</h4>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td><strong>ID</strong></td>
                            <td>{{ $vacancy->id }}</td>
                        </tr>
                        <tr>
                            <td><strong>Title</strong></td>
                            <td>{{ $vacancy->title_az }}</td>
                        </tr>
                        <tr>
                            <td><strong>Salary Min</strong></td>
                            <td>{{ $vacancy->salary_min }}</td>
                        </tr>
                        <tr>
                            <td><strong>Salary Max</strong></td>
                            <td>{{ $vacancy->salary_max }}</td>
                        </tr>
                        <tr>
                            <td><strong>Responsibilities</strong></td>
                            <td>{!! $vacancy->responsibilities_az !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Requirements</strong></td>
                            <td>{!! $vacancy->requirements_az !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Sharing Date</strong></td>
                            <td>{{ $vacancy->sharing_date }}</td>
                        </tr>
                        <tr>
                            <td><strong>Duration</strong></td>
                            <td>{{ $vacancy->duration }}</td>
                        </tr>
                        <tr>
                            <td><strong>Age Limit</strong></td>
                            <td>{{ $vacancy->age_limit }}</td>
                        </tr>
                        <tr>
                            <td><strong>Education Level</strong></td>
                            <td>{{ $vacancy->education_level_az }}</td>
                        </tr>
                        <tr>
                            <td><strong>Work Schedule</strong></td>
                            <td>{{ $vacancy->work_schedule_az }}</td>
                        </tr>
                        <tr>
                            <td><strong>Contract Type</strong></td>
                            <td>{{ $vacancy->contract_type_az }}</td>
                        </tr>
                        <tr>
                            <td><strong>Application Email</strong></td>
                            <td>{{ $vacancy->application_email_az }}</td>
                        </tr>
                        <tr>
                            <td><strong>Status</strong></td>
                            <td>{{ $vacancy->status }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('admin.vacancy.list') }}" class="btn btn-primary">Geri</a>
                </div>
            </div>
        </div>
    </div>
@endsection
