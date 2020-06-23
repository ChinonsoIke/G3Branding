@extends('backend.layouts.default')
@section('title', 'Update Post')
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
                        <h2>Faq List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="{{ route('admin.posts.update', ['post' => $post]) }}">
                            @csrf
                            <div class="item form-group row">
                                <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="title">Title
                                    <span class="text-danger required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <input type="text" id="title" name="title" value="{{ $post->title }}" required class="form-control">
                                </div>
                            </div>
                            <div class="item form-group row">
                                <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="caption">
                                    Caption <span class="text-danger required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <input type="text" id="caption" name="caption" value="{{ $post->caption }}" required class="form-control">
                                </div>
                            </div>
                            <div class="item form-group row">
                                <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="image">
                                    Image (optional)
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    @if ($post->image)
                                        <img src="{{ asset('uploads/posts/' . $post->image) }}" style="max-height: 150px; width: auto;" class="img-fluid"/>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group row">
                                <label class="text-left col-form-label col-md-2 col-sm-2 label-align" for="p_content">
                                    Content <span class="text-danger required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <textarea class="summernote" name="p_content"> {{ $post->p_content }} </textarea>
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
@endsection
