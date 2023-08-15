@extends('backend.layouts.app')
@section('title', 'Admin | Contact')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Ad Soyad</th>
                                    <th>E-mail</th>
                                    <th>Mövzu başlığı</th>
                                    <th>Mesajınız</th>
                                    <th>Tarix</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message}}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-info sm m-2" title="show">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.contact.delete', $contact->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $contacts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
