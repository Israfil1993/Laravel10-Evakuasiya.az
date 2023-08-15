@extends('backend.layouts.app')
@section('title', 'Admin | Xidmətlərimiz')
@section('content')

    <div class="col-xl-12">
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
                    @foreach($services as $lang => $langServices)
                        <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="{{ $lang }}" role="tabpanel">
                            <div class="row">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Xidmətlər ({{ strtoupper($lang) }})</h4>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Xidmətlərimiz</h4>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Başlıq</th>
                                                    <th>Açıqlama</th>
                                                    <th>Simge</th>
                                                    <th>Status</th>
                                                    <th>Əməliyyat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($langServices as $service)
                                                    <tr>
                                                        <td>{{ $service->id }}</td>
                                                        <td>{{ $service->title_.$lang }}</td>
                                                        <td>{!! Str::limit($service->text_.$lang, 30) !!}</td>
                                                        <td>{{ $service->icon }}</td>
                                                        <td>{{ $service->status }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.our_services.edit', $service->id) }}" class="btn btn-info sm m-2" title="Düzənlə">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('admin.our_services.delete', $service->id) }}" class="btn btn-danger sm" title="Sil" id="delete">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            {{ $langServices->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
