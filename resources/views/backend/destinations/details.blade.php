@extends('backend.layouts.default')
@section('title', 'Destination details')
@push('custom-script')
@endpush
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{ $destination->title }}</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 text-right form-group pull-right top_search">
                    <a href="{{ route('admin.destinations.index') }}" class="btn btn-outline-success"> <i class="fa fa-arrow-left"></i> Back to destinations</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('backend.includes.alert')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Destination details</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive img-fluid avatar-view" src="" alt="Hotel thumbnail" title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{ $destination->title }}</h3>

                            <ul class="list-unstyled user_data">
                                <li class="m-top-xs">
                                    <h4 class="title">Location: </h4>
                                    <h4 class="title">{{ $destination->getFullLocation() }}</h4>

                                </li>
                            </ul>

                            <a href="{{ route('admin.destinations.update', ['destination' => $destination]) }}" class="btn btn-outline-success"><i class="fa fa-edit m-right-xs"></i> Edit Destination</a>
                            <br>
                        </div>
                        <div class="col-md-9 col-sm-9 ">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation"  class="active"><a href="#details" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Destination details</a>
                                    </li>
                                    <li role="presentation"><a href="#gallery" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Gallery</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="details" aria-labelledby="home-tab">
                                        <!-- start hotel details -->
                                        <div class="dashboard-widget-content">

                                            <ul class="list-unstyled timeline widget">
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Check in time</a>
                                                            </h2>
                                                            <p class="excerpt">{{ $destination->check_in_time }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Check out time</a>
                                                            </h2>

                                                            <p class="excerpt">{{ $destination->check_out_time }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Visible</a>
                                                            </h2>
                                                            <p class="excerpt">{{ $destination->visible ? 'Yes' : 'No' }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Enabled</a>
                                                            </h2>
                                                            <p class="excerpt">{{ $destination->enabled ? 'Yes' : 'No' }} </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Published</a>
                                                            </h2>
                                                            <p class="excerpt">{{ $destination->published ? 'Yes' : 'No' }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Facilities</a>
                                                            </h2>
                                                            <div class="row">
                                                                @if ($destination->features)
                                                                    @php $featuresArray = json_decode($destination->features); @endphp
                                                                    @foreach($featuresArray as $feature)
                                                                        <div class="col-md-3">
                                                                            <div class="checkbox">
                                                                                <label>
                                                                                    <input type="checkbox" class="flat" checked disabled>
                                                                                    {{ ucwords($feature) }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <p>No Feature</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <div class="block_content">
                                                            <h2 class="title">
                                                                <a>Description</a>
                                                            </h2>
                                                            <p class="excerpt">{!! $destination->description !!}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end hotel details -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="gallery" aria-labelledby="profile-tab">
                                        <div class="row">
                                        </div>
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
