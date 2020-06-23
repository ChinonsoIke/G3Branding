@extends('backend.layouts.default')
@section('title', 'Update Page')
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
                <h3>Page</h3>
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
                        <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ route('admin.pages.update', ['page' => $page]) }}">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-2 label-align" for="title">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <input type="text" id="title" name="title" required="required" class="form-control" value="{{ $page->title }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-2 label-align" for="content">Content <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <textarea class="summernote" name="content"> {{ $page->content }} </textarea>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success">Update <i class="fa fa-check"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
