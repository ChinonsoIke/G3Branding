@extends('backend.layouts.default')
@section('title', 'Order details')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small>Order details</small></h3>
            </div>
            <div class="title_right text-right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-info"><i class="fa fa-arrow-left"></i> Back To Orders</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        @include('backend.includes.alert')
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ $order->name }}</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <div class="col-md-9 col-sm-9  ">

                            <ul class="stats-overview">
                                <li>
                                    <span class="name">Current Status</span>
                                    <span class="value text-success">{{ $order->status }}</span>
                                </li>
                                <li>
                                    <span class="name">Mark as Processing</span><br/>
                                    <a href="{{ route('admin.orders.update.status', ['order' => $order, 'status' => 'processing']) }}" class="btn btn-sm btn-outline-info">Processing <i class="fa fa-refresh"></i></a>
                                </li>
                                <li>
                                    <span class="name">Mark as Delivered</span><br/>
                                    <a href="{{ route('admin.orders.update.status', ['order' => $order, 'status' => 'delivered']) }}" class="btn btn-sm btn-outline-success">Delivered <i class="fa fa-check"></i></a>
                                </li>
                            </ul>
                            <br />

                            <div class="row">
                                <div class="col-md-6">
                                    <div id="" style="min-height:200px;">
                                        <img class="img-fluid" src="{{ asset('uploads/orders/' . $order->getImage()) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item">Ordered date: <span class="float-right"> {{ $order->created_at->format('M jS, Y') }}</span></li>
                                        <li class="list-group-item">Category: <span class="float-right"> {{ $order->category->title }}</span></li>
                                        <li class="list-group-item">Current status: <span class="float-right"> {{ $order->status }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>More Information About Order</h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">Quantity: <span class="float-right">{{$order->quantity}}</span></li>
                                        <li class="list-group-item">Total: <span class="float-right">&#8358; {{$order->total}}</span></li>
                                    </ul>
                                    {!! $order->additional_information !!}
                                </div>
                            </div>
                        </div>
                        <!-- start project-detail sidebar -->
                        <div class="col-md-3 col-sm-3  ">

                            <section class="panel">

                                <div class="x_title">
                                    <h2>User Details</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <h3 class="green">{{ $order->name }}</h3>

                                    <div class="project_detail">

                                        <p class="title">Phone Number :</p>
                                        <p>{{ $order->phone_number }}</p>
                                        <p class="title">Email :</p>
                                        <p>{{ $order->email }}</p>
                                        <p class="title">Address :</p>
                                        <p>{{ $order->street  }}</p>
                                        <p class="title">City :</p>
                                        <p>{{ $order->city  }}</p>
                                        <p class="title">State :</p>
                                        <p>{{ $order->state  }}</p>
                                        <p class="title">Country :</p>
                                        <p>{{ $order->country  }}</p>

                                    </div>
                                </div>

                            </section>

                        </div>
                        <!-- end project-detail sidebar -->
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
