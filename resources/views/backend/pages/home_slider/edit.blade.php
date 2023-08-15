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
                    <form action="{{ route('admin.slider.update', $homeSlider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="previous_image" value="{{ $homeSlider->image }}">
                        <h4 class="card-title">Slayd Yenilə</h4>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-lg"
                                     src="{{ (!empty($homeSlider->image))? url('uploads/sliders/'.$homeSlider->image): url('uploads/default.jpg') }}"
                                     alt=""
                                     id="imageShow">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example " name="status">
                                    <option value="0" {{($homeSlider->status==0) ? 'selected' : ''}}>Non-Active</option>
                                    <option value="1" {{($homeSlider->status==1) ? 'selected' : ''}}>Active</option>

                                </select>
                            </div>
                        </div>
                        <label for="example-text-input" class="col-sm-2"></label>
                        <input type="submit" class="btn btn-info bg-success" value="Yadda saxla">
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
