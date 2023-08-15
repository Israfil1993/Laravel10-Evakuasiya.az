@extends('backend.layouts.app')
@section('title', 'Admin | Contact Details')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact Təfərrüatlar</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Information</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID:</th>
                                        <td>{{ $contact->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ad Soyad:</th>
                                        <td>{{ $contact->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail:</th>
                                        <td>{{ $contact->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mövzu Başlığı:</th>
                                        <td>{{ $contact->subject }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mesajınız:</th>
                                        <td>{{ $contact->message }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('admin.contact.list') }}" class="btn btn-danger">Geri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
