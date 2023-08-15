@extends('backend.layouts.app')
@section('title', 'Admin | Müşteri Rəyləri')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-xl-9"></div>
                    <div class="col-xl-3">
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-bs-toggle="tab" href="#az" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Az</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">En</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">Ru</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="az" role="tabpanel">
                        <div class="row">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Müştəri Rəyləri Siyahı (Az)</h4>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Müştəri Rəyləri</h4>
                                        <table class="table table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Fullname</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($testimonialAz as $testimonial)
                                                <tr>
                                                    <td>{{ $testimonial->id }}</td>
                                                    <td>{{ $testimonial->fullname_az }}</td>
                                                    <td>
                                                        <img src="{{ (!empty($testimonial->image)) ? url('uploads/testimonials/' . $testimonial->image) : url('uploads/default.jpg') }}"
                                                             style="height: 50px; width: 50px">
                                                    </td>
                                                    <td>{{ $testimonial->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.testimonial.show', $testimonial->id) }}"
                                                           class="btn btn-dark sm m-2" title="show">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                           class="btn btn-info sm m-2" title="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.testimonial.delete', $testimonial->id) }}"
                                                           class="btn btn-danger sm" title="delete" id="delete">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $testimonialAz->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="en" role="tabpanel">
                        <div class="row">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Müştəri Rəyləri Siyahı (En)</h4>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Müştəri Rəyləri</h4>
                                        <table class="table table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Fullname</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($testimonialEn as $testimonial)
                                                <tr>
                                                    <td>{{ $testimonial->id }}</td>
                                                    <td>{{ $testimonial->fullname_en }}</td>
                                                    <td>
                                                        <img src="{{ (!empty($testimonial->image)) ? url('uploads/testimonials/' . $testimonial->image) : url('uploads/default.jpg') }}"
                                                             style="height: 50px; width: 50px">
                                                    </td>
                                                    <td>{{ $testimonial->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.testimonial.show', $testimonial->id) }}"
                                                           class="btn btn-dark sm m-2" title="show">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                           class="btn btn-info sm m-2" title="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.testimonial.delete', $testimonial->id) }}"
                                                           class="btn btn-danger sm" title="delete" id="delete">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $testimonialEn->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="ru" role="tabpanel">
                        <div class="row">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Müştəri Rəyləri Siyahı (Ru)</h4>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Müştəri Rəyləri</h4>
                                        <table class="table table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Fullname</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($testimonialRu as $testimonial)
                                                <tr>
                                                    <td>{{ $testimonial->id }}</td>
                                                    <td>{{ $testimonial->fullname_ru }}</td>
                                                    <td>
                                                        <img src="{{ (!empty($testimonial->image)) ? url('uploads/testimonials/' . $testimonial->image) : url('uploads/default.jpg') }}"
                                                             style="height: 50px; width: 50px">
                                                    </td>
                                                    <td>{{ $testimonial->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.testimonial.show', $testimonial->id) }}"
                                                           class="btn btn-dark sm m-2" title="show">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                           class="btn btn-info sm m-2" title="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.testimonial.delete', $testimonial->id) }}"
                                                           class="btn btn-danger sm" title="delete" id="delete">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $testimonialRu->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
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
