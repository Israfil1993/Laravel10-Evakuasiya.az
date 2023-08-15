@extends('backend.layouts.app')
@section('title', 'Admin | SEO')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">SEO Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">SEO</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Keywords</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($seos as $seo)

                                    <tr>
                                        <td>{{ $seo->id }}</td>
                                        <td>{{ $seo->title }}</td>
                                        <td>{!! $seo->description !!}</td>
                                        <td>{{ $seo->keywords }}</td>
                                        <td>{{ $seo->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.seo.edit', $seo->id) }}" class="btn btn-info sm m-2" title="edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.seo.delete', $seo->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $seos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
