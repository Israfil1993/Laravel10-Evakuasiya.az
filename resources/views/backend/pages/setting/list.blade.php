@extends('backend.layouts.app')

@section('title', 'Admin | Settings')

@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Settings List</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Settings</h4>
                            <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#az" role="tab">Az</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">En</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">Ru</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="az" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settingsAz as $setting)
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->key }}</td>
                                                <td>{{ Str::limit($setting->value, 30)  }}</td>
                                                <td>
                                                    <img src="{{ (!empty($setting->image))? url('uploads/setting/'.$setting->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $setting->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.setting.delete', $setting->id) }}" class="btn btn-danger" title="Delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $settingsAz->links() }}
                                </div>

                                <div class="tab-pane" id="en" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settingsEn as $setting)
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->key }}</td>
                                                <td>{{ Str::limit($setting->value, 30)  }}</td>
                                                <td>
                                                    <img src="{{ (!empty($setting->image))? url('uploads/setting/'.$setting->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $setting->status }}</td>

                                                <td>
                                                    <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.setting.delete', $setting->id) }}" class="btn btn-danger" title="Delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $settingsEn->links() }}
                                </div>

                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settingsRu as $setting)
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->key }}</td>
                                                <td>{{ Str::limit($setting->value, 30)  }}</td>
                                                <td>
                                                    <img src="{{ (!empty($setting->image))? url('uploads/setting/'.$setting->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $setting->status }}</td>

                                                <td>
                                                    <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.setting.delete', $setting->id) }}" class="btn btn-danger" title="Delete" id="delete">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $settingsRu->links() }}
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
