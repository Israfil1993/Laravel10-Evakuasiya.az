@extends('backend.layouts.app')
@section('title', 'Admin | Nəaliyyətlər ')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Nəaliyyətlər Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Nəaliyyətlər</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($statistics_counters as $statistics)
                                    <tr>
                                        <td>{{ $statistics->id }}</td>
                                        <td>
                                        <img src="{{ (!empty($statistics->image))? url('uploads/statistics_counters/'.$statistics->image): url('uploads/default.jpg') }}"
                                                 style ="height: 50px; width: 50px">
                                        </td>
                                        <td>{{ $statistics->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.statistics_counters.edit', $statistics->id) }}" class="btn btn-info sm m-2" title="edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.statistics_counters.delete', $statistics->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $statistics_counters->links() }}
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
