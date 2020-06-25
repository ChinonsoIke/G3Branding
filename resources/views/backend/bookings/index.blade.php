@extends('backend.layouts.default')
@section('title', 'Bookings')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Bookings</h3>
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
                        <h2>Bookings</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Caption</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($bookings as $booking)
                                            <tr>
                                                <td>{{ Str::limit($booking->title,30) }}</td>
                                                <td>{{ Str::limit($booking->caption,100) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.booking.details', ['booking' => $booking]) }}" class="btn btn-sm btn-info">Details <i class="fa fa-arrow-right"></i></a>
                                                    <a href="{{ route('admin.booking.delete', ['booking' => $booking]) }}" class="btn pull-right btn-sm btn-danger">Delete <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">No Booking</td>
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
@endsection
