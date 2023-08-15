@extends('backend.layouts.app')
@section('title', 'Admin | About Create')
@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Language Tabs -->
                    <div class="col-xl-12">
                        <div class="row mb-3">
                            <div class="col-xl-9"></div>
                            <div class="col-xl-3">
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#az" role="tab">
                                            <span class="d-block d-sm-none">AZ</span>
                                            <span class="d-none d-sm-block">Az</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">
                                            <span class="d-block d-sm-none">EN</span>
                                            <span class="d-none d-sm-block">En</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">
                                            <span class="d-block d-sm-none">RU</span>
                                            <span class="d-none d-sm-block">Ru</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Content for Azerbaijani (Az) -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="az" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Haqqımızda Əlavə Et (Az)</h4>
                                            <div class="row mb-3">
                                                <label for="title_az" class="col-sm-2 col-form-label">Title (Az)</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="title_az"
                                                           placeholder="Title"
                                                           id="title_az">
                                                    @error('title_az')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="editor_az" class="col-sm-2 col-form-label">Description (Az)</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="description_az"
                                                              id="editor_az"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content for English (En) -->
                        <div class="tab-pane" id="en" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">About Create (En)</h4>
                                            <div class="row mb-3">
                                                <label for="title_en" class="col-sm-2 col-form-label">Title (En)</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="title_en"
                                                           placeholder="Title"
                                                           id="title_en">
                                                    @error('title_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="editor_en" class="col-sm-2 col-form-label">Description (En)</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="description_en"
                                                              id="editor_en"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content for Russian (Ru) -->
                        <div class="tab-pane" id="ru" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">О создании (Ru)</h4>
                                            <div class="row mb-3">
                                                <label for="title_ru" class="col-sm-2 col-form-label">Title (Ru)</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="title_ru"
                                                           placeholder="Title"
                                                           id="title_ru">
                                                    @error('title_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="editor_ru" class="col-sm-2 col-form-label">Description (Ru)</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="description_ru"
                                                              id="editor_ru"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image and Preview -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 ">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control"
                                       type="file"
                                       name="image"
                                       id="image" >
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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

                        <!-- Status -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example " name="status">
                                    <option selected disabled>Status Seç</option>
                                    <option value="0">No Aktiv</option>
                                    <option value="1">Aktiv</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="row mt-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-info bg-success" value="Yadda Saxla">
                                <a href="{{ route('admin.about.list') }}" class="btn btn-danger">Geri</a>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- CKEditor Initialization Script -->
    @section('js')
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor_az' ) )
                .catch( error => {
                    console.error( error );
                } );

            ClassicEditor
                .create( document.querySelector( '#editor_en' ) )
                .catch( error => {
                    console.error( error );
                } );

            ClassicEditor
                .create( document.querySelector( '#editor_ru' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
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
