@extends('layouts.printshop')

@section('content')
    <div class="container">
        <h2>Customer Details</h2>
        <hr>
        <div class="row">
            <form action="{{route('orders.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <input type="hidden" name="category_id" value="{{$order->category_id}}">
                        <input type="hidden" name="quantity" value="{{$order->quantity}}">
                        <input type="hidden" name="total" value="{{$order->total}}">
                        <input type="hidden" name="image" value="{{$order->image}}">
                        <div class="row">
                            <div class="col-md-6">
                                <label name="name">Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label name="email">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label name="phone_number">Phone Number:</label>
                                <input type="text" name="phone_number" class="form-control">
                            </div>
                        </div>

                        <h2>Shipping Details</h2>
                        <hr>

                        <div>
                            <label for="street">Address:</label>
                            <input type="text" name="street" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="city">City:</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="state">State:</label>
                                <input type="text" name="state" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-offset-1">
                        <div class="well">
                            <div class="dl-horizontal">
                                <h2>Order Summary</h2>
                                <div class="row">
                                    <p class="col-md-6">Items</p>
                                    <p class="col-md-6 text-right">1</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-6">Cost</p>
                                    <p class="col-md-6 text-right">&#8358; {{$order->cost}}</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-6">Shipping</p>
                                    <p class="col-md-6 text-right">&#8358; 0.00</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-6">VAT</p>
                                    <p class="col-md-6 text-right">&#8358; {{$vat}}</p>
                                </div>

                                <hr>

                                <div class="row">
                                    <p class="col-md-6"><strong>TOTAL</strong></p>
                                    <p class="col-md-6 text-right">&#8358; {{$total}}</p>
                                    <input type="hidden" name="total" value="{{$total}}">
                                </div>
                            </div>

                            <div class="row">
                                <input type="submit" value="PROCEED" class="btn btn-large btn-block btn-success">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection