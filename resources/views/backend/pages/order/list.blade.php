@extends('backend.layouts.app')
@section('title', 'Admin | Order')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Sifariş Siyahi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sifariş et</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>First  Address</th>
                                    <th>Last Address</th>
                                    <th>Phone</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->surname }}</td>
                                        <td>{{ $order->first_address }}</td>
                                        <td>{{ $order->last_address }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->time }}</td>
                                        <td>
                                            <a href="{{ route('admin.order.show', $order->id) }}" class="btn btn-info sm m-2" title="show">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.order.delete', $order->id) }}" class="btn btn-danger sm" title="delete" id="delete">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
