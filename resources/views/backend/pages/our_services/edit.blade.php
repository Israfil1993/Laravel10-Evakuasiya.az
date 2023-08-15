@extends('backend.layouts.app')
@section('title', 'Admin | Xidmətləri Düzəlt')
@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.our_services.update', $services->id) }}" method="POST">
                    @csrf

                    <!-- Language Tabs -->
                    <div class="col-xl-12">
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
                    </div>

                    <!-- Tab Content for Azerbaijani (Az) -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="az" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Xidmətləri Düzəlt (Az)</h4>
                                            <div class="row mb-3">
                                                <label for="title_az" class="col-sm-2 col-form-label">Başlıq</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="title_az"
                                                           value="{{ $services->title_az }}"
                                                           id="title_az">
                                                    @error('title_az')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="editor_az" class="col-sm-2 col-form-label">Mətn</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control"
                                                          name="text_az"
                                                          id="editor_az"
                                                          cols="30"
                                                          rows="10">{{ $services->text_az }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="icon" class="col-sm-2 col-form-label">Simge</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="icon"
                                                           value="{{ $services->icon }}"
                                                           id="icon">
                                                    @error('icon')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option value="0" {{ $services->status == 0 ? 'selected' : '' }}>Aktiv deyil</option>
                                                        <option value="1" {{ $services->status == 1 ? 'selected' : '' }}>Aktiv</option>
                                                    </select>
                                                    @error('status_az')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
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
                                            <h4 class="card-title">Xidmətləri Düzəlt (En)</h4>
                                            <div class="row mb-3">
                                                <label for="title_en" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="title_en"
                                                           value="{{ $services->title_en }}"
                                                           id="title_en">
                                                    @error('title_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="editor_en" class="col-sm-2 col-form-label">Text</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control"
                                                          name="text_en"
                                                          id="editor_en"
                                                          cols="30"
                                                          rows="10">{{ $services->text_en }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option value="0" {{ $services->status == 0 ? 'selected' : '' }}>Aktiv deyil</option>
                                                        <option value="1" {{ $services->status == 1 ? 'selected' : '' }}>Aktiv</option>
                                                    </select>
                                                    @error('status_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
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
                                            <h4 class="card-title">Xidmətləri Düzəlt (Ru)</h4>
                                            <div class="row mb-3">
                                                <label for="title_ru" class="col-sm-2 col-form-label">Заголовок</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="title_ru"
                                                           value="{{ $services->title_ru }}"
                                                           id="title_ru">
                                                    @error('title_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="editor_ru" class="col-sm-2 col-form-label">Текст</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control"
                                                          name="text_ru"
                                                          id="editor_ru"
                                                          cols="30"
                                                          rows="10">{{ $services->text_ru }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Статус</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option value="0" {{ $services->status == 0 ? 'selected' : '' }}>Не активно</option>
                                                        <option value="1" {{ $services->status == 1 ? 'selected' : '' }}>Активно</option>
                                                    </select>
                                                    @error('status_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="row mt-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-info bg-success" value="Yadda Saxla">
                                <a href="{{ route('admin.our_services.list') }}" class="btn btn-danger">Geri</a>
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
    @endsection
@endsection
