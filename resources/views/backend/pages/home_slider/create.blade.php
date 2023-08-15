@extends('backend.layouts.app')
@section('title', 'Admin | Slayd')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slayd Əlavə et</h4>
                    <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 ">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" placeholder="bootstrap@example.com" id="image" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 "></label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-lg"
                                     src="{{ url('uploads/default.jpg') }}"
                                     alt=""
                                     id="imageShow">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected disabled>Status Seç</option>
                                    <option value="0">No Aktiv</option>
                                    <option value="1">Aktiv</option>
                                </select>
                                @error('status_az')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <label for="example-text-input" class="col-sm-2"></label>
                        <input type="submit" class="btn btn-info bg-success" value="Yadda Saxla">
                        <label for="example-text-input" class="col-sm-2"></label>
                        <a href="{{ route('admin.slider.list') }}" class="btn btn-danger">Geri</a>
                    </form>
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
