@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol style="background:lightblue; border:2px solid white;" class="breadcrumb mb-4">
            <li style="color:black;" class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Stock</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('all.product') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Sold Products</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('sold.products') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Available Products</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('available.products') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Pending Orders</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('pending.orders') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                        Selling Chart
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Purchase Bar
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div  style="background:lightblue; border:2px solid white; class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Product Selling Detail
            </div>
            <div  class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Sold date</th>
                                <th>Customer Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($data) && count($data) > 0)
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->product_code }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->customer_name }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">No data available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
