@extends('backend.layouts.app')
@section('title', 'Admin | Vacancy Create')
@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.vacancy.store') }}" method="POST">
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
                                    <h4 class="card-title">Vakansiya Əlavə Et (Az)</h4>
                                    <div class="mb-3">
                                        <label for="title_az" class="form-label">Başlıq</label>
                                        <input type="text" class="form-control" name="title_az" id="title_az" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="salary_min_az" class="form-label">Minimum Maaş</label>
                                        <input type="text" class="form-control" name="salary_min" id="salary_min_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="salary_max_az" class="form-label">Maksimum Maaş</label>
                                        <input type="text" class="form-control" name="salary_max" id="salary_max_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="responsibilities_az" class="form-label">Vəzifə</label>
                                        <textarea class="form-control" name="responsibilities_az" id="responsibilities_az" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="requirements_az" class="form-label">Tələblər</label>
                                        <textarea class="form-control" name="requirements_az" id="requirements_az" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sharing_date_az" class="form-label">Paylaşma Tarixi</label>
                                        <input type="date" class="form-control" name="sharing_date" id="sharing_date_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="duration_az" class="form-label">Müddət</label>
                                        <input type="text" class="form-control" name="duration" id="duration_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="age_limit_az" class="form-label">Yaş Məhdudiyyəti</label>
                                        <input type="text" class="form-control" name="age_limit" id="age_limit_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="education_level_az" class="form-label">Təhsil Dərəcəsi</label>
                                        <input type="text" class="form-control" name="education_level_az" id="education_level_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="work_schedule_az" class="form-label">İş Qrafiki</label>
                                        <input type="text" class="form-control" name="work_schedule_az" id="work_schedule_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contract_type_az" class="form-label">Kontrakt Növü</label>
                                        <input type="text" class="form-control" name="contract_type_az" id="contract_type_az">
                                    </div>
                                    <div class="mb-3">
                                        <label for="application_email_az" class="form-label">Müraciət Emaili</label>
                                        <input type="email" class="form-control" name="application_email_az" id="application_email_az">
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example " name="status">
                                            <option selected disabled>Select Status</option>
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content for English (En) -->
                        <div class="tab-pane" id="en" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="card-title">Add Vacancy (En)</h4>
                                    <div class="mb-3">
                                        <label for="title_en" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title_en" id="title_en">
                                    </div>

                                    <div class="mb-3">
                                        <label for="responsibilities_en" class="form-label">Responsibilities</label>
                                        <textarea class="form-control" name="responsibilities_en" id="responsibilities_en" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="requirements_en" class="form-label">Requirements</label>
                                        <textarea class="form-control" name="requirements_en" id="requirements_en" rows="5"></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <label for="education_level_en" class="form-label">Education Level</label>
                                        <input type="text" class="form-control" name="education_level_en" id="education_level_en">
                                    </div>
                                    <div class="mb-3">
                                        <label for="work_schedule_en" class="form-label">Work Schedule</label>
                                        <input type="text" class="form-control" name="work_schedule_en" id="work_schedule_en">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contract_type_en" class="form-label">Contract Type</label>
                                        <input type="text" class="form-control" name="contract_type_en" id="contract_type_en">
                                    </div>
                                    <div class="mb-3">
                                        <label for="application_email_en" class="form-label">Application Email</label>
                                        <input type="email" class="form-control" name="application_email_en" id="application_email_en">
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example " name="status">
                                            <option selected disabled>Select Status</option>
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content for Russian (Ru) -->
                        <div class="tab-pane" id="ru" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="card-title">Добавить вакансию (Ru)</h4>
                                    <div class="mb-3">
                                        <label for="title_ru" class="form-label">Заголовок</label>
                                        <input type="text" class="form-control" name="title_ru" id="title_ru">
                                    </div>

                                    <div class="mb-3">
                                        <label for="responsibilities_ru" class="form-label">Обязанности</label>
                                        <textarea class="form-control" name="responsibilities_ru" id="responsibilities_ru" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="requirements_ru" class="form-label">Требования</label>
                                        <textarea class="form-control" name="requirements_ru" id="requirements_ru" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="education_level_ru" class="form-label">Уровень образования</label>
                                        <input type="text" class="form-control" name="education_level_ru" id="education_level_ru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="work_schedule_ru" class="form-label">Рабочий график</label>
                                        <input type="text" class="form-control" name="work_schedule_ru" id="work_schedule_ru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contract_type_ru" class="form-label">Тип контракта</label>
                                        <input type="text" class="form-control" name="contract_type_ru" id="contract_type_ru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="application_email_ru" class="form-label">Email для заявок</label>
                                        <input type="email" class="form-control" name="application_email_ru" id="application_email_ru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>

                                        <select class="form-select" aria-label="Default select example " name="status">
                                            <option selected disabled>Select Status</option>
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="row mt-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-info bg-success" value="Yadda Saxla">
                                <a href="{{ route('admin.vacancy.list') }}" class="btn btn-danger">Geri</a>
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
                .create( document.querySelector( '#responsibilities_az' ) )
                .catch( error => {
                    console.error( error );
                } );
            ClassicEditor
                .create( document.querySelector( '#requirements_az' ) )
                .catch( error => {
                    console.error( error );
                } );
            ClassicEditor
                .create( document.querySelector( '#responsibilities_en' ) )
                .catch( error => {
                    console.error( error );
                } );
            ClassicEditor
                .create( document.querySelector( '#requirements_en' ) )
                .catch( error => {
                    console.error( error );
                } );
            ClassicEditor
                .create( document.querySelector( '#responsibilities_ru' ) )
                .catch( error => {
                    console.error( error );
                } );
            ClassicEditor
                .create( document.querySelector( '#requirements_ru' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endsection
@endsection
