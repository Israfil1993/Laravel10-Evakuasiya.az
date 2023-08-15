@extends('backend.layouts.app')

@section('title', 'Admin | Müştəri Rəyləri Show')

@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Müştəri Rəyləri Göstər</h4>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Fullname</label>
                        <div class="col-sm-10">
                            <p>{{ $testimonial->fullname }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Feedback</label>
                        <div class="col-sm-10">
                            <div>{!! $testimonial->feedback !!}</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            @if($testimonial->image)
                                <img src="{{ (!empty($testimonials->image))? url('uploads/testimonials/'.$testimonials->image): url('uploads/default.jpg') }}" alt="Testimonial Image"
                                     class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <p>{{ $testimonial->status === 1 ? 'Aktiv' : 'No Aktiv' }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                               class="btn btn-info bg-success">Redaktə Et</a>
                            <a href="{{ route('admin.testimonial.list') }}" class="btn btn-danger">Geri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
