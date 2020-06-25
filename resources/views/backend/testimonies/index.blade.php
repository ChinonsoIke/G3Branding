@extends('backend.layouts.default')
@section('title', 'Testimonies')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Testimonies</h3>
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
                        <h2>Testimony List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="home" aria-selected="true">Testimony List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#add" role="tab" aria-controls="profile" aria-selected="false">Add Testimony</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Fullname</th>
                                                    <th>Testimony</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($testimonies as $testimony)
                                                    <tr>
                                                        <td>{{ $testimony->fullname }}</td>
                                                        <td>{{ $testimony->testimony }}</td>
                                                        <td>
                                                            <a href="#editModal{{$testimony->id}}" data-toggle="modal" class="btn btn-sm btn-info">Edit <i class="fa fa-arrow-right"></i></a>
                                                            <a href="{{ route('admin.testimonies.delete',['testimony' => $testimony]) }}" class="btn btn-sm btn-outline-danger">Delete <i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="editModal{{$testimony->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <form action="{{ route('admin.testimonies.update', ['testimony' =>$testimony]) }}" method="post">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Edit Testimony</h4>
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Fullname <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <input type="text" id="title" name="fullname" required="required" class="form-control" value="{{ $testimony->fullname }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Caption <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <input type="text" id="title" name="caption" required="required" class="form-control" value="{{ $testimony->caption }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Testimony <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <textarea class="form-control" name="testimony"> {{ $testimony->testimony }} </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Save changes <i class="fa fa-check"></i></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">No record found</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="profile-tab">
                                <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ route('admin.testimonies.create') }}">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Fullname <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="title" name="fullname" required="required" class="form-control" value="{{ old('fullname') }}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Caption <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="title" name="caption" required="required" class="form-control" value="{{ old('caption') }}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Testimony <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea class="form-control" name="testimony"> {{ old('testimony') }} </textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-success">Submit <i class="fa fa-check"></i></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
