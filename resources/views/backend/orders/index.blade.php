@extends('backend.layouts.default')
@section('title', 'Orders')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Orders</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('backend.includes.alert')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Order List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($orders as $order)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->name }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->status }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>{{ $order->created_at->format('M jS, Y') }}</td>
                                                    <td><a href="{{ route('admin.orders.details', $order) }}" class="btn btn-sm btn-info">Details <i class="fa fa-arrow-right"></i></a> </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="2"><button type="button" class="btn btn-default btn-block">No record found</button></td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
