@extends('backend.layouts.default')
@section('title', 'Add Destination')
@push('custom-script')
    <script>
        $('.summernote').summernote({
            // placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 400
        });
        $('.itinerary').summernote({
            // placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 200
        });
        $('.terms').summernote({
            // placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 300
        });
        $('.datePicker').datetimepicker({
            format: 'Y:MM:D'
        });
    </script>
@endpush
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Destination</h3>
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
                        <h2>Add Destination</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="{{ route('admin.destinations.create') }}">
                            @csrf
                            <div class="item form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="title">Title
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" id="title" name="title" required="required" class="form-control" value="{{ old('title') }}">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="caption">Caption
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" id="title" name="caption" required="required" class="form-control" value="{{ old('caption') }}">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="country">
                                        Image: <span class="text-danger">(You can select multiple images at a time)</span>
                                    </label>
                                    <input type="file" multiple name="image[]" class="form-control">
                                </div>
                                <div class="col-md-6 col-sm-12  form-group has-feedback">
                                    <label class="col-form-label label-align" for="price">
                                        Price:
                                    </label>
                                    <input type="number" class="form-control" id="price" placeholder="Price" value="{{ old('price') }}">
                                </div>
                            </div>
                            <hr/>
                            <h3>Location</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="address">Address
                                        <span class="required">*</span>
                                    </label>
                                    <textarea class="form-control" name="address" id="address" required>{{ old('address') }}</textarea>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="city">City
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" id="city" name="city" required="required" class="form-control" value="{{ old('city') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="state">State
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" id="state" name="state" required="required" class="form-control" value="{{ old('state') }}">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="country_id">Country
                                        <span class="required">*</span>
                                    </label>
                                    <select name="country_id" class="form-control" required>
                                        @foreach($countries as $country)
                                            <option @if((!old('country_id')) && ($country->name === 'Nigeria'))
                                                    selected
                                                    @endif
                                                    @if (old('country_id') && old('country_id') === $country->id)
                                                    selected
                                                    @endif
                                                    value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label class="col-form-label label-align" for="country_id">Itinerary
                                        <span class="required">*</span>
                                    </label>
                                    <textarea class="itinerary" name="itinerary" required> {{ old('itinerary') }} </textarea>
                                </div>
                            </div>
                            <hr/>
                            <h3>Facilities</h3>
                            <div class="row">

                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input  name="facilities[]" value="1"
                                                        type="checkbox" class="flat">
                                               Wireless
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <hr/>
                            <div class="item form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label label-align" for="country">
                                                Layout Template
                                            </label>
                                            <select id="layout" name="layout" class="form-control">
                                                <option value="default">Default</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="row d-flex">
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="col-form-label label-align" for="start_date">
                                                        Date From
                                                    </label>
                                                    <div class='input-group date datePicker'>
                                                        <input type='text' name="start_date" value="{{ old('start_date') }}" id="start_date" class="form-control" required/>
                                                        <span class="input-group-addon">
                                                           <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="col-form-label label-align" for="end_date">
                                                       Date To
                                                    </label>
                                                    <div class='input-group date datePicker'>
                                                        <input type='text' name="end_date" value="{{ old('end_date') }}" id="end_date" class="form-control" required/>
                                                        <span class="input-group-addon">
                                                           <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="col-form-label label-align" for="settings">
                                        Settings
                                    </label>
                                    <ul class="list-group">
                                        @forelse($destinationFeatures as $feature)
                                        <li class="list-group-item">
                                            <label>
                                                <input type="checkbox"  id="{{$feature->title}}" name="features[]" value="{{$feature->title}}" class="flat">
                                                {{$feature->title}}
                                            </label>
                                        </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            <hr/>
                            <div class="item form-group row">
                                <div class="col-md-12">
                                    <label class="col-form-label label-align" for="content">
                                        Description <span class="required">*</span>
                                    </label>
                                    <textarea class="summernote" name="description" required> {{ old('description') }} </textarea>
                                </div>
                            </div>

                            <div class="item form-group row">
                                <div class="col-md-12">
                                    <label class="col-form-label label-align" for="content">
                                        Terms
                                    </label>
                                    <textarea class="terms" name="terms"> {{ old('terms') }} </textarea>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success">Add Destination <i class="fa fa-check"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
