@extends('backend.layouts.default')
@section('title', 'Products')
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
                <h3>Products</h3>
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
                        <h2>Products List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="home" aria-selected="true">Product List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#add" role="tab" aria-controls="profile" aria-selected="false">Add Product</a>
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
                                                    <th>Categories</th>
                                                    <th>Slug</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($products as $product)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $product->title }}</td>
                                                        <td>
                                                            @forelse($product->categories as $category)
                                                                [{{$loop->iteration}}] {{ $category->title }}@if(!$loop->last), @else. @endif
                                                            @empty
                                                                <p>No Category</p>
                                                            @endforelse
                                                        </td>
                                                        <td>{{ $product->slug }}</td>
                                                        <td><a href="{{ route('admin.products.details', $product) }}" class="btn btn-sm btn-info">Details <i class="fa fa-arrow-right"></i></a> </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-default btn-block">No record found</button></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show fade" id="add" role="tabpanel" aria-labelledby="home-tab">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('admin.products.create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label label-align" for="title"> Title <span class="required">*</span>
                                        </label><br/>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}" required="required" class="form-control ">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label label-align" for="image">Image (Optional)
                                        </label>
                                        <input type="file" id="image" name="image" class="form-control">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label label-align" for="categories">Categories
                                        </label>
                                        <div class="row">
                                            @foreach($categories as $category)
                                                <div class="col-md-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" class="flat" value="{{ $category->id }}"> {{ $category->title }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="col-form-label label-align">Description</label>
                                        <textarea name="description" class="summernote">{{ old('description') }}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
