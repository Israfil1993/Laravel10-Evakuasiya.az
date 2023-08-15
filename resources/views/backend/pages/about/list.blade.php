@extends('backend.layouts.app')
@section('title', 'Admin | Haqqımızda')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Haqqımızda Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-9"></div>
                <div class="col-xl-3">
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#az" role="tab">
                                <span class="d-block d-sm-none">Az</span>
                                <span class="d-none d-sm-block">Az</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">
                                <span class="d-block d-sm-none">En</span>
                                <span class="d-none d-sm-block">En</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">
                                <span class="d-block d-sm-none">Ru</span>
                                <span class="d-none d-sm-block">Ру</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="az" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Haqqımızda (Az)</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Başlıq</th>
                                                <th>Təsvir</th>
                                                <th>Şəkil</th>
                                                <th>Status</th>
                                                <th>Əməliyyat</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($aboutsAz as $about)
                                                <tr>
                                                    <td>{{ $about->id }}</td>
                                                    <td>{{ $about->title_az }}</td>
                                                    <td>{!! Str::limit($about->description_az, 50) !!}</td>
                                                    <td>
                                                        <img src="{{ (!empty($about->image))? url('uploads/about/'.$about->image): url('uploads/default.jpg') }}"
                                                             style="height: 50px; width: 50px">
                                                    </td>
                                                    <td>{{ $about->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.about.delete', $about->id) }}" class="btn btn-danger" title="Delete" id="delete">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $aboutsAz->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="en" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">About (En)</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($aboutsEn as $about)
                                                <tr>
                                                    <td>{{ $about->id }}</td>
                                                    <td>{{ $about->title_en }}</td>
                                                    <td>{!! Str::limit($about->description_en, 50) !!}</td>
                                                    <td>
                                                        <img src="{{ (!empty($about->image))? url('uploads/about/'.$about->image): url('uploads/default.jpg') }}"
                                                             style="height: 50px; width: 50px">
                                                    </td>
                                                    <td>{{ $about->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.about.delete', $about->id) }}" class="btn btn-danger" title="Delete" id="delete">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $aboutsEn->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="ru" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">О нас (Ru)</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Заголовок</th>
                                                <th>Описание</th>
                                                <th>Изображение</th>
                                                <th>Статус</th>
                                                <th>Действие</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($aboutsRu as $about)
                                                <tr>
                                                    <td>{{ $about->id }}</td>
                                                    <td>{{ $about->title_ru }}</td>
                                                    <td>{!! Str::limit($about->description_ru, 50) !!}</td>
                                                    <td>
                                                        <img src="{{ (!empty($about->image))? url('uploads/about/'.$about->image): url('uploads/default.jpg') }}"
                                                             style="height: 50px; width: 50px">
                                                    </td>
                                                    <td>{{ $about->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.about.delete', $about->id) }}" class="btn btn-danger" title="Delete" id="delete">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $aboutsRu->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
