@extends('backend.layouts.app')
@section('title', 'Admin | Seo Edit')
@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.seo.update', $seo->id) }}" method="POST">
                        @csrf
                        <h4 class="card-title">Seo Yenilə</h4>
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control"
                                       type="text"
                                       name="title"
                                       placeholder="Title"
                                       id="title"
                                       value="{{ old('title', $seo->title) }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="editor" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="editor" cols="30" rows="10">{{ old('description', $seo->description) }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="keywords" class="col-sm-2 col-form-label">Keywords</label>
                            <div class="col-sm-10">
                                <input class="form-control"
                                       type="text"
                                       name="keywords"
                                       placeholder="Keywords"
                                       id="keywords"
                                       value="{{ old('keywords', $seo->keywords) }}">
                                @error('keywords')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="0" {{ $seo->status === 0 ? 'selected' : '' }}>No Aktiv</option>
                                    <option value="1" {{ $seo->status === 1 ? 'selected' : '' }}>Aktiv</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-info bg-success" value="Yadda Saxla">
                                <a href="{{ route('admin.seo.list') }}" class="btn btn-danger">Geri</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
