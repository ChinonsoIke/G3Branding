@extends('backend.layouts.default')
@section('title', 'Roles and Permission')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Roles and Permission</h3>
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
                        <h2>Roles List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="role-list-tab" data-toggle="tab" href="#role-list" role="tab" aria-controls="home" aria-selected="true">Role List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="role-list-tab" data-toggle="tab" href="#add-role" role="tab" aria-controls="profile" aria-selected="false">Add Role</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="permission-list-tab" data-toggle="tab" href="#permission-list" role="tab" aria-controls="profile" aria-selected="false">Permissions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="add-permission-tab" data-toggle="tab" href="#add-permission" role="tab" aria-controls="profile" aria-selected="false">Add Permission</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="role-list" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Role Name</th>
                                                    <th>Guard</th>
                                                    <th>Edit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($roles as $role)
                                                    <tr>
                                                        <td>{{ $role->name }}</td>
                                                        <td>{{ $role->guard_name }}</td>
                                                        @if($role->name !== 'Developer')
                                                            <td>
                                                                <a href="#editRoleModal{{ $role->id }}" data-toggle="modal" class="btn btn-sm btn-info">Edit Role <i class="fa fa-arrow-right"></i></a>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                    <div class="modal fade" id="editRoleModal{{ $role->id }}" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog modal-lg">
                                                            <form action="{{ route('admin.role.update',[ 'role' =>$role]) }}" method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Edit Role</h4>
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-2 col-sm-2 label-align" for="name">Role Name <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-10 col-sm-10">
                                                                                <input type="text" id="name" value="{{ $role->name }}" name="name" required="required" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <h4>Update Permissions</h4>
                                                                        @foreach(auth()->user()->getAllPermissions() as $permission)
                                                                            <div class="col-md-3">
                                                                                <div class="checkbox">
                                                                                    <label>
                                                                                        <input  name="permissions[]" value="{{ $permission->id }}"
                                                                                                type="checkbox" class="flat"
                                                                                                @if($role->hasPermissionTo($permission->name))
                                                                                                checked="checked"
                                                                                            @endif
                                                                                        >
                                                                                        {{ ucwords(str_replace('-',' ',$permission['name'])) }}
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
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
                                                        <td>No record found</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add-role" role="tabpanel" aria-labelledby="profile-tab">
                                <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ route('admin.role.store') }}">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Role Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="name" name="name" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="guard">Guard <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select name="guard" class="form-control" required>
                                                <option value="admin">Admin</option>
                                                <option value="web">Web</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="guard">Permissions <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                @foreach(auth()->user()->getAllPermissions() as $permission)
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input  name="permissions[]" value="{{ $permission->id }}"
                                                                        type="checkbox" class="flat">
                                                                {{ ucwords(str_replace('-',' ',$permission['name'])) }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                            <div class="tab-pane fade " id="permission-list" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Permission Name</th>
                                                    @role('Developer')
                                                        <th>Action</th>
                                                    @endrole
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse(auth()->user()->getAllPermissions() as $permission)
                                                    <tr>
                                                        <td>{{ $permission->name }}</td>
                                                        @role('Developer')
                                                        <td><a class="text-danger" href="{{ route('admin.permission.delete',['permission' => $permission->id]) }}">
                                                                Delete <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                        @endrole
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td>No Permission</td>
                                                    </tr>
                                                @endforelse
                                                    <tr>
                                                        <td colspan="2">
                                                            <span class="text-danger">If you delete a permission, you must delete it usage in
                                                                your code to prevent error.
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add-permission" role="tabpanel" aria-labelledby="profile-tab">
                                <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ route('admin.permission.store') }}">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Permission Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="name" name="name" required="required" class="form-control">
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
