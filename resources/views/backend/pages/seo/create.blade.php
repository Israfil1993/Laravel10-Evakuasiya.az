@extends('backend.layouts.app')
@section('title', 'Admin | Seo Create')
@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.seo.store') }}" method="POST">
                        @csrf
                        <h4 class="card-title">Seo Əlavə Et</h4>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control"
                                       type="text"
                                       name="title"
                                       placeholder="Title"
                                       id="title">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="editor" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Keywords</label>
                            <div class="col-sm-10">
                                <input class="form-control"
                                       type="text"
                                       name="keywords"
                                       placeholder="Keywords"
                                       id="Keywords">
                                @error('keywords')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example " name="status">
                                    <option selected="{{ null }}">Status Seç</option>
                                    <option value="0">No Aktiv</option>
                                    <option value="1">Aktiv</option>
                                    @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <label for="example-text-input" class="col-sm-2"></label>
                        <input type="submit" class="btn btn-info bg-success" value="Yadda Saxla">
                        <label for="example-text-input" class="col-sm-2"></label>
                        <a href="{{ route('admin.seo.list') }}" class="btn btn-danger">Geri</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );

            ClassicEditor
                .create( document.querySelector( '#editor2' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endsection
@endsection
