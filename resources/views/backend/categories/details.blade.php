@extends('backend.layouts.default')
@section('title', 'Category details')
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
            <h3>Category details</h3>
        </div>

        <div class="title_right text-right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <a class="btn btn-outline-info" href="{{ route('admin.categories.index') }}"> <i class="fa fa-arrow-left"></i> Back To Categories</a>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    @include('backend.includes.alert')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ $category->title }}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-4 col-sm-4 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive img-fluid avatar-view" src="{{ asset('uploads/categories/' . $category->getImage()) }}" alt="Avatar">
                            </div>
                        </div>
                        <h3>{{ $category->title }}</h3>

                    </div>
                    <div class="col-md-8 col-sm-8">
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('admin.categories.update', $category) }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label label-align" for="title"> Title <span class="required">*</span>
                                </label><br/>
                                <input type="text" id="title" name="title" value="{{ $category->title }}" required="required" class="form-control ">
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
                                <label class="col-form-label label-align" for="products">Products
                                </label>
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" @if($category->products->contains($product)) checked @endif name="products[]" class="flat" value="{{ $product->id }}"> {{ $product->title }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="col-form-label label-align">Description</label>
                                <textarea name="description" class="summernote">{{ $category->description }}</textarea>
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
@endsection
