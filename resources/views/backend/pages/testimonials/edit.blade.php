@extends('backend.layouts.app')

@section('title', 'Admin | Edit Testimonial')

@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="previous_image" value="{{ $testimonial->image }}">

                    <!-- Language Tabs -->
                    <ul class="nav nav-tabs">
                        @foreach(['az' => 'Azerbaijani', 'en' => 'English', 'ru' => 'Russian'] as $lang => $label)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $lang }}">{{ $label }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content p-3 text-muted">
                        @foreach(['az' => 'Azerbaijani', 'en' => 'English', 'ru' => 'Russian'] as $lang => $label)
                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="{{ $lang }}">
                                <h4 class="card-title">Edit Testimonial ({{ $label }})</h4>

                                <div class="mb-3">
                                    <label for="fullname_{{ $lang }}" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" name="fullname_{{ $lang }}" id="fullname_{{ $lang }}" value="{{ $testimonial['fullname_' . $lang] }}">
                                    @error('fullname_' . $lang)
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="feedback_{{ $lang }}" class="form-label">Feedback</label>
                                    <textarea class="form-control" name="feedback_{{ $lang }}" id="editor_{{ $lang }}">{{ $testimonial['feedback_' . $lang] }}</textarea>
                                    @error('feedback_' . $lang)
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <!-- Image Preview -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-lg"
                                     src="{{ !empty($testimonial->image) ? url('uploads/testimonials/'.$testimonial->image) : url('uploads/default.jpg') }}"
                                     alt="testimonial image"
                                     id="imageShow">
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Upload New Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="row mt-3">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.testimonial.list') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('js')
        <script>
            const editors = ['editor_az', 'editor_en', 'editor_ru'];
            editors.forEach(editorID => {
                ClassicEditor
                    .create(document.querySelector(`#${editorID}`))
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    @endsection
@endsection
