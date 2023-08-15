@extends('backend.layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.update.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="previous_image" value="{{ $user->image }}">

                        <h4 class="card-title">Profile Edit</h4>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 ">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}" placeholder="Name" id="name" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 ">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="{{ $user->email }}" placeholder="E-mail" id="email" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 ">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image"  id="image" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 "></label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-lg"
                                     src="{{ (!empty($user->image))? url('assets/backend/images/users/'.$user->image): url('uploads/default.jpg') }}"
                                     alt=""
                                     id="imageShow">
                            </div>
                        </div>
                        <label for="example-text-input" class="col-sm-2"></label>
                        <input type="submit" class="btn btn-info bg-info" value="Save">
                        <label for="example-text-input" class="col-sm-2"></label>
                        <a href="{{ route('admin.index') }}" class="btn btn-danger">Back</a>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
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
