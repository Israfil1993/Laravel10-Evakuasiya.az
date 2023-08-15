


@extends('backend.layouts.app')
@section('title', 'Admin | Settings')
@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.setting.update', $settings->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="previous_image" value="{{ $settings->image }}">

                        <h4 class="card-title">Settings Yenilə </h4>

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
                                <div class="row mb-3">
                                    <label for="key_az" class="col-sm-2 col-form-label">Key (Az)</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"
                                               type="text"
                                               value="{{$settings->key_az}}"
                                               name="key_az"
                                               placeholder="Key"
                                               id="key">
                                        @error('key_az')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="value_az" class="col-sm-2 col-form-label">Value(Az)</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"
                                               type="text"
                                               value="{{$settings->value_az}}"
                                               name="value_az"
                                               placeholder="Value"
                                               id="value_az">
                                        @error('value_az')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>


                                <!-- Tab Content for English (En) -->
                                <div class="tab-pane" id="en" role="tabpanel">

                                    <div class="row mb-3">
                                        <label for="key_en" class="col-sm-2 col-form-label">Key ((En)</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="text"
                                                   value="{{$settings->key_en}}"
                                                   name="key_en"
                                                   placeholder="Key"
                                                   id="key_en">
                                            @error('key_en')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="value_en" class="col-sm-2 col-form-label">Value(En)</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="text"
                                                   name="value_en"
                                                   value="{{$settings->value_en}}"
                                                   placeholder="Value"
                                                   id="value_en">
                                            @error('value_en')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>


                                    <!-- Tab Content for Russian (Ru) -->
                                    <div class="tab-pane" id="ru" role="tabpanel">
                                        <div class="row mb-3">
                                            <label for="key_ru" class="col-sm-2 col-form-label">Key (Ru)</label>
                                            <div class="col-sm-10">
                                                <input class="form-control"
                                                       type="text"
                                                       value="{{$settings->key_ru}}"
                                                       name="key_ru"
                                                       placeholder="Key"
                                                       id="key_ru">
                                                @error('key_ru')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="value_en" class="col-sm-2 col-form-label">Value(Ru)</label>
                                            <div class="col-sm-10">
                                                <input class="form-control"
                                                       type="text"
                                                       value="{{$settings->value_ru}}"
                                                       name="value_ru"
                                                       placeholder="Value"
                                                       id="value_ru">
                                                @error('value_ru')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

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
                                                    <option value="0" {{ $settings->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                    <option value="1" {{ $settings->status == 1 ? 'selected' : '' }}>Aktiv</option>
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
                                                <a href="{{ route('admin.setting.list') }}" class="btn btn-danger">Geri</a>
                                            </div>
                                        </div>

                                    </div>

                    </form>
                </div>
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











