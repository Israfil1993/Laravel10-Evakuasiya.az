@extends('backend.layouts.app')
@section('title', 'Admin | Cv')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Cv Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cv</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Cv</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cv_file as $cv)
                                    <tr>
                                        <td>{{ $cv->id }}</td>
                                        <td>
                                            @if (pathinfo($cv->cv_file, PATHINFO_EXTENSION) === 'pdf')
                                                <a href="{{ url('uploads/cv/'.$cv->cv_file) }}" target="_blank">
                                                    PDF-ə Baxın
                                                </a>
                                            @else
                                                <img src="{{ (!empty($cv->cv_file))? url('uploads/cv/'.$cv->cv_file): url('uploads/default.jpg') }}"
                                                     style="height: 50px; width: 50px">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.cv.show', $cv->id) }}" class="btn btn-info sm m-2" title="show">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.cv.delete', $cv->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $cv_file->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('js')
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#imageShow').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });
            </script>
@endsection
@endsection
