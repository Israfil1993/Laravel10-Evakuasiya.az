@extends('backend.layouts.app')
@section('title', 'Admin | Partnyorlar')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Partnyorların Siyahsı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Partnyorlar</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companyLogoSlider as $companySlider)

                                    <tr>
                                        <td>{{ $companySlider->id }}</td>
                                        <td>{{ $companySlider->name }}</td>
                                        <td>{{ $companySlider->slug }}</td>

                                        <td>
                                            <img src="{{ (!empty($companySlider->image))? url($companySlider->image): url('uploads/default.jpg') }}"
                                                 style ="height: 50px; width: 50px">
                                        </td>
                                        <td>{{ $companySlider->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.partnyorlar.edit', $companySlider->id) }}" class="btn btn-info sm m-2" title="edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.partnyorlar.delete', $companySlider->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $companyLogoSlider->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
