@extends('backend.layouts.default')
@section('title', 'Help Desks')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Help Desks</h3>
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

        <div class="row">
            @include('backend.includes.alert')
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Help Desks List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="home" aria-selected="true">Help Desk List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#add" role="tab" aria-controls="profile" aria-selected="false">Add Help Desk</a>
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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Position</th>
                                                    <th>Phone</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($helpDesks as $helpDesk)
                                                    <tr>
                                                        <td>{{ $helpDesk->getName() }}</td>
                                                        <td>{{ $helpDesk->email }}</td>
                                                        <td>{{ $helpDesk->phone ?? 'Not provided' }}</td>
                                                        <td>{{ $helpDesk->code ?? 'Not provided' }}</td>
                                                        <td>
                                                            <a href="#editModal{{ $helpDesk->id }}" data-toggle="modal" class="btn btn-sm btn-info">Details <i class="fa fa-arrow-right"></i></a>
                                                            <a href="{{ route('admin.help-desk.delete', ['helpDesk' => $helpDesk]) }}" class="btn pull-right btn-sm btn-danger">Delete <i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="editModal{{ $helpDesk->id }}" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog modal-lg">
                                                            <form action="{{ route('admin.help-desk.update',[ 'helpDesk' => $helpDesk]) }}" method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Edit Help Desk</h4>
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <div class="item form-group row">
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="firstname">Firstname <span class="text-danger required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" id="firstname" name="firstname" value="{{ $helpDesk->firstname }}" required class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="lastname">Last name <span class="text-danger required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" id="lastname" name="lastname" value="{{ $helpDesk->lastname }}" required class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="text-danger required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="email" id="email" name="email" value="{{ $helpDesk->email }}" required class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group row">
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone"> Phone <span class="text-danger required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" id="phone" name="phone" required value="{{ $helpDesk->phone }}" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="facebook">Facebook (optional)</label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" id="facebook" name="facebook" value="{{ $helpDesk->facebook }}" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="skype">Skype (optional)</label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" id="skype" name="skype" class="form-control" value="{{ $helpDesk->skype }}">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="item form-group row">
                                                                        <div class="col-md-4">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">Whatsapp (optional)</label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" id="whatsapp" name="whatsapp" value="{{ $helpDesk->whatsapp }}" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="biography">Biography (optional)</label>
                                                                            <div class="col-md-10 col-sm-10">
                                                                                <textarea name="biography" class="form-control">{{ $helpDesk->biography }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>

                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                @empty
                                                    <tr>
                                                        <td colspan="5">No record found</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="home-tab">
                                <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ route('admin.help-desk.create') }}">
                                    @csrf
                                    <div class="item form-group row">
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="firstname">Firstname <span class="text-danger required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="lastname">Last name <span class="text-danger required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="text-danger required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone"> Phone <span class="text-danger required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" id="phone" name="phone" required value="{{ old('phone') }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="facebook">Facebook (optional)</label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" id="facebook" name="facebook" value="{{ old('facebook') }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="skype">Skype (optional)</label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" id="skype" name="skype" class="form-control" value="{{ old('skype') }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item form-group row">
                                        <div class="col-md-4">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">Whatsapp (optional)</label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="biography">Biography (optional)</label>
                                            <div class="col-md-10 col-sm-10">
                                                <textarea name="biography" class="form-control">{{ old('biography') }}</textarea>
                                            </div>
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
