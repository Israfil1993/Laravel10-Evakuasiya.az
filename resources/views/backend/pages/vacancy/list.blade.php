@extends('backend.layouts.app')
@section('title', 'Admin | Vacancy')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Vakansiyaların Siyahsı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-xl-9"></div>
                                <div class="col-xl-3">
                                    <ul class="nav nav-pills nav-justified" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#az" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Az</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">En</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Ru</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content p-3 text-muted">
                                <!-- Azerbaijani (Az) Tab -->
                                <div class="tab-pane active" id="az" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title">Vakansiyalar (Az)</h4>
                                            <table id="datatableAz" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Başlıq</th>
                                                    <th>Təhsil Səviyyəsi</th>
                                                    <th>Müqavilə Növü</th>
                                                    <th>Müraciət Emaili</th>
                                                    <th>Status</th>
                                                    <th>Əməliyyat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($vacanciesAz as $vacancy)
                                                    <tr>
                                                        <td>{{ $vacancy->id }}</td>
                                                        <td>{{ $vacancy->title_az }}</td>
                                                        <td>{{ $vacancy->education_level_az }}</td>
                                                        <td>{{ $vacancy->contract_type_az }}</td>
                                                        <td>{{ $vacancy->application_email_az }}</td>
                                                        <td>{{ $vacancy->status }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.vacancy.show', $vacancy->id) }}" class="btn btn-dark sm m-2" title="show">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('admin.vacancy.edit', $vacancy->id) }}" class="btn btn-info sm m-2" title="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('admin.vacancy.delete', $vacancy->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- English (En) Tab -->
                                <div class="tab-pane" id="en" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title">Vakansiyalar (En)</h4>
                                            <table id="datatableEn" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Education Level</th>
                                                    <th>Contract Type</th>
                                                    <th>Application Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($vacanciesEn as $vacancy)
                                                    <tr>
                                                        <td>{{ $vacancy->id }}</td>
                                                        <td>{{ $vacancy->title }}</td>
                                                        <td>{{ $vacancy->education_level }}</td>
                                                        <td>{{ $vacancy->contract_type }}</td>
                                                        <td>{{ $vacancy->application_email }}</td>
                                                        <td>{{ $vacancy->status }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.vacancy.show', $vacancy->id) }}" class="btn btn-dark sm m-2" title="show">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('admin.vacancy.edit', $vacancy->id) }}" class="btn btn-info sm m-2" title="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('admin.vacancy.delete', $vacancy->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Russian (Ru) Tab -->
                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title">Vakansiyalar (Ru)</h4>
                                            <table id="datatableRu" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Education Level</th>
                                                    <th>Contract Type</th>
                                                    <th>Application Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($vacanciesRu as $vacancy)
                                                    <tr>
                                                        <td>{{ $vacancy->id }}</td>
                                                        <td>{{ $vacancy->title }}</td>
                                                        <td>{{ $vacancy->education_level }}</td>
                                                        <td>{{ $vacancy->contract_type }}</td>
                                                        <td>{{ $vacancy->application_email }}</td>
                                                        <td>{{ $vacancy->status }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.vacancy.show', $vacancy->id) }}" class="btn btn-dark sm m-2" title="show">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('admin.vacancy.edit', $vacancy->id) }}" class="btn btn-info sm m-2" title="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('admin.vacancy.delete', $vacancy->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- İlgili JS kodlarını burada ekleyebilirsiniz -->
@endsection
