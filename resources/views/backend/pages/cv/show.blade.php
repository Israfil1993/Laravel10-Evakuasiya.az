@extends('backend.layouts.app')
@section('title', 'Admin | Cv Details')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Cv Details</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cv Təfərrüatlar</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ $cv->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Cv</th>
                                        <td>
                                            @if (!empty($cv->cv_file) && (pathinfo($cv->cv_file, PATHINFO_EXTENSION) === 'pdf'))
                                                <a href="{{ url('uploads/cv/' . $cv->cv_file) }}" target="_blank">Yüklə PDF</a>
                                            @elseif (!empty($cv->cv_file) && (in_array(pathinfo($cv->cv_file, PATHINFO_EXTENSION), ['jpeg', 'jpg', 'png', 'gif'])))
                                                <img src="{{ url('uploads/cv/' . $cv->cv_file) }}" style="height: 100px; width: 100px;" alt="Cv Image">
                                                <br>
                                                <a href="{{ url('uploads/cv/' . $cv->cv_file) }}" download>Şəkil Yüklə</a>
                                            @else
                                                No CV File Available
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('admin.cv.list') }}" class="btn btn-danger">Geri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
