@extends('backend.layouts.default')
@section('title', 'Post')
@push('custom-script')
    <script>
        $('.summernote').summernote({
            // placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 400
        });
    </script>
@endpush
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Post</h3>
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
                        <h2>Post</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="home" aria-selected="true">Post List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#add" role="tab" aria-controls="profile" aria-selected="false">Add Post</a>
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
                                                    <th>SN</th>
                                                    <th>Title</th>
                                                    <th>Caption</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($posts as $post)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ Str::limit($post->title,30) }}</td>
                                                        <td>{{ Str::limit($post->caption,100) }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.posts.update', ['post' => $post]) }}" class="btn btn-sm btn-info">Details <i class="fa fa-arrow-right"></i></a>
                                                            <a href="{{ route('admin.posts.delete', ['post' => $post]) }}" class="btn pull-right btn-sm btn-danger">Delete <i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
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
                                <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="{{ route('admin.posts.create') }}">
                                    @csrf
                                    <div class="item form-group row">
                                        <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="title">Title
                                            <span class="text-danger required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10">
                                            <input type="text" id="title" name="title" value="{{ old('title') }}" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="caption">
                                            Caption <span class="text-danger required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10">
                                            <input type="text" id="caption" name="caption" value="{{ old('caption') }}" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="image">
                                            Image (optional)
                                        </label>
                                        <div class="col-md-10 col-sm-10">
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="p_content">
                                            Content <span class="text-danger required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10">
                                            <textarea class="summernote" name="p_content"> {{ old('p_content') }} </textarea>
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
