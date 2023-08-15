@extends('backend.layouts.app')
@section('title', 'Admin | Xəbərlər')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Xəbərlərin Siyahsı</h4>
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
                                    <h4 class="card-title">Xəbərlər (Az)</h4>
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
                                        @foreach($postsAz as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title_az }}</td>
                                                <td>{!! Str::limit($post->description_az, 50) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($post->image))? url('uploads/posts/'.$post->image): url('uploads/default.jpg') }}" style="height: 50px; width: 50px">
                                                </td>
                                                <td>{{ $post->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-info sm m-2" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.post.delete', $post->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $postsAz->links() }}
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
                                    <h4 class="card-title">Xəbərlər (En)</h4>
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
                                        @foreach($postsEn as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title_en }}</td>
                                                <td>{!! Str::limit($post->description_en, 50) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($post->image))? url('uploads/posts/'.$post->image): url('uploads/default.jpg') }}" style="height: 50px; width: 50px">
                                                </td>
                                                <td>{{ $post->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-info sm m-2" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.post.delete', $post->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $postsEn->links() }}
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
                                    <h4 class="card-title">Xəbərlər (Ru)</h4>
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
                                        @foreach($postsRu as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title_ru }}</td>
                                                <td>{!! Str::limit($post->description_ru, 50) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($post->image))? url('uploads/posts/'.$post->image): url('uploads/default.jpg') }}" style="height: 50px; width: 50px">
                                                </td>
                                                <td>{{ $post->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-info sm m-2" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.post.delete', $post->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $postsRu->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
