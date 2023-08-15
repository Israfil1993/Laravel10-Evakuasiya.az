@extends('backend.layouts.app')
@section('title', 'Admin | Order Details')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Order Təfərrüatlar</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Order Information</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Order ID:</th>
                                        <td>{{ $order->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $order->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Surname:</th>
                                        <td>{{ $order->surname }}</td>
                                    </tr>
                                    <tr>
                                        <th>First Address:</th>
                                        <td>{{ $order->first_address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Address:</th>
                                        <td>{{ $order->last_address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td>{{ $order->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Time:</th>
                                        <td>{{ $order->time }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('admin.order.list') }}" class="btn btn-danger">Geri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
