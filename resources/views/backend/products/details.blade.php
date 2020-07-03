@extends('backend.layouts.default')
@section('title', 'Product details')
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
                <h3>Product details</h3>
            </div>

            <div class="title_right text-right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <a class="btn btn-outline-info" href="{{ route('admin.products.index') }}"><i class="fa fa-arrow-left"></i> Back To Products</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        @include('backend.includes.alert')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ $product->title }}</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-4 col-sm-4 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive img-fluid avatar-view" src="{{ asset('uploads/products/' . $product->getImage()) }}" alt="Avatar">
                                </div>
                            </div>
                            <h3>{{ $product->title }}</h3>
                            <br/>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($product->prices as $price)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <a href="#" class="editable"
                                               data-type="text" data-name="quantity"
                                               data-pk="{{ $price->id }}"
                                               data-source="{{ $price->quantity }}"
                                               data-value="{{ $price->quantity }}"
                                               data-url="{{ route('admin.products.update.price') }}"
                                               data-original-title="Quantity">
                                                {{ $price->quantity }}
                                            </a>
                                        </td>
                                        <td>
                                            &#8358;<a href="#" class="editable"
                                                      data-type="text" data-name="cost"
                                                      data-pk="{{ $price->id }}"
                                                      data-source="{{ $price->cost }}"
                                                      data-value="{{ $price->cost }}"
                                                      data-url="{{ route('admin.products.update.price') }}"
                                                      data-original-title="Cost">
                                                {{ number_format($price->cost,2) }}
                                            </a>

                                        </td>
                                        <td><a class="text-danger" href="#">Delete <i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"><button type="button" class="btn btn-block">Add Price</button></td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <form action="{{ route('admin.products.create.price', $product) }}" method="post">
                                        @csrf
                                        <td>
                                            <input type="text" placeholder="Quantity" name="quantity" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="number" placeholder="Cost" name="cost" class="form-control" required>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-outline-success">Add <i class="fa fa-check"></i></button>
                                        </td>
                                    </form>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('admin.products.update', $product) }}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label label-align" for="title"> Title <span class="required">*</span>
                                    </label><br/>
                                    <input type="text" id="title" name="title" value="{{ $product->title }}" required="required" class="form-control ">
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
                                                        <input type="checkbox" @if($product->categories->contains($category)) checked @endif name="categories[]" class="flat" value="{{ $category->id }}"> {{ $category->title }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="col-form-label label-align">Description</label>
                                    <textarea name="description" class="summernote">{{ $product->description }}</textarea>
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
