@extends('backend.layouts.app')
@section('title', 'Admin | Faq')
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
                    <div class="tab-pane active" id="az" role="tabpanel">
                        <div class="row">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">FAQ Siyahı (Az)</h4>
                            </div>
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="az-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">FAQ</h4>
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($faqsAz as $faq)
                                                            <tr>
                                                                <td>{{ $faq->id }}</td>
                                                                <td>{{ Str::limit($faq->title_az, 50) }}</td>
                                                                <td>{!! Str::limit($faq->description_az, 30) !!}</td>
                                                                <td>{{ $faq->status }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info sm m-2" title="edit">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                    <a href="{{ route('admin.faq.delete', $faq->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    {{ $faqsAz->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="en" role="tabpanel">
                        <div class="row">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">FAQ Siyahı (En)</h4>
                            </div>
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="en-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">FAQ</h4>
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($faqsEn as $faq)
                                                            <tr>
                                                                <td>{{ $faq->id }}</td>
                                                                <td>{{ Str::limit($faq->title_en, 50) }}</td>
                                                                <td>{!! Str::limit($faq->description_en, 30) !!}</td>
                                                                <td>{{ $faq->status }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info sm m-2" title="edit">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                    <a href="{{ route('admin.faq.delete', $faq->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    {{ $faqsRu->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="ru" role="tabpanel">
                        <div class="row">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">FAQ Siyahı (Ru)</h4>
                            </div>
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="ru-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">FAQ</h4>
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($faqsRu as $faq)
                                                            <tr>
                                                                <td>{{ $faq->id }}</td>
                                                                <td>{{ Str::limit($faq->title_ru, 50) }}</td>
                                                                <td>{!! Str::limit($faq->description_ru, 30) !!}</td>
                                                                <td>{{ $faq->status }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info sm m-2" title="edit">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                    <a href="{{ route('admin.faq.delete', $faq->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    {{ $faqsEn->links() }}
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
        </div>

@endsection
