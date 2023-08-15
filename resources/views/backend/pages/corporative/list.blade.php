@extends('backend.layouts.app')
@section('title', 'Admin | Korporativ')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Korporativlərin Siyahsı</h4>
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
                                    <h4 class="card-title">Korporativlər (Az)</h4>
                                    <table id="datatable_az" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                        @foreach($corporativesAz as $corporative)
                                            <tr>
                                                <td>{{ $corporative->id }}</td>
                                                <td>{{ $corporative->title_az }}</td>
                                                <td>{!! Str::limit($corporative->description_az, 50) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($corporative->image))? url('uploads/corporative/'.$corporative->image): url('uploads/default.jpg') }}" style="height: 50px; width: 50px">
                                                </td>
                                                <td>{{ $corporative->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.corporative.edit', $corporative->id) }}" class="btn btn-info sm m-2" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.corporative.delete', $corporative->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $corporativesAz->links() }}
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
                                    <h4 class="card-title">Korporativlər (En)</h4>
                                    <table id="datatable_en" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                        @foreach($corporativesEn as $corporative)
                                            <tr>
                                                <td>{{ $corporative->id }}</td>
                                                <td>{{ $corporative->title_en }}</td>
                                                <td>{!! Str::limit($corporative->description_en, 50) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($corporative->image))? url('uploads/corporative/'.$corporative->image): url('uploads/default.jpg') }}" style="height: 50px; width: 50px">
                                                </td>
                                                <td>{{ $corporative->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.corporative.edit', $corporative->id) }}" class="btn btn-info sm m-2" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.corporative.delete', $corporative->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $corporativesEn->links() }}
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
                                    <h4 class="card-title">Korporativlər (Ru)</h4>
                                    <table id="datatable_ru" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                        @foreach($corporativesRu as $corporative)
                                            <tr>
                                                <td>{{ $corporative->id }}</td>
                                                <td>{{ $corporative->title_ru }}</td>
                                                <td>{!! Str::limit($corporative->description_ru, 50) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($corporative->image))? url('uploads/corporative/'.$corporative->image): url('uploads/default.jpg') }}" style="height: 50px; width: 50px">
                                                </td>
                                                <td>{{ $corporative->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.corporative.edit', $corporative->id) }}" class="btn btn-info sm m-2" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.corporative.delete', $corporative->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $corporativesRu->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
