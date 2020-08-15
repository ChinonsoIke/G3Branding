@extends('layouts.printshop')
@push('page-script') 
@endpush
@section('content')
	<main class="main category grid">
		<section class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<h1 class="mh-title">{{$category->title}}</h1>
					</div>
					<div class="breadcrumb-w col-sm-9">
						<span class="hidden-xs">You are here:</span>
						<ul class="breadcrumb">
							<li>
                            <a href="{{route('index')}}">Home</a>
							</li>
							<li>
								<span>{{$category->title}}</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="category-w parten-bg">
			<div class="container">
				<div class="row">
					<aside id="sidebar_cate" class="col-md-3 col-sm-3 hidden-xs">
						<h3 class="sidebar-title">Categories</h3>
						<ul id="cate_list" class="cate_list">
                            @if (count($categories)>0)
                            @foreach ($categories as $item)
                            <li class="level0">
								<a href="{{route('category.index', $item->id)}}" title="Postcards">
									{{$item->title}}
								</a>
							</li>
                            @endforeach
                            
                            @endif
						</ul>
						<div class= "visible-md visible-lg">
							<div class="category-left-banner">
								<a href="#" title="category left banner">
									<img src="{{asset('image/sidecard5.png')}}" alt="Left banner 2">
								</a>
							</div>
							<div class="category-left-banner">
								<a href="#" title="category left banner">
									<img src="{{asset('image/sidecard6.png')}}" alt="Left banner 3">
								</a>
							</div>
						</div>
					</aside>
					<!--Category product grid : Begin -->
					<section class="category grid col-sm-9 col-xs-12">
						<div class="row">
							<div class="col-xs-12 category-image visible-md visible-lg">
                                @inlineEditor( 'products_category_image',null,null,null,null,null,true,'image' )
                                <a href="#" title="category image">
									<img src="{{asset('image/topbanner1.png')}}" alt="Business card">
								</a>
                                @endInlineEditor
								
							</div>
							{{-- <div class="col-xs-12 category-image visible-sm">
								<a href="#" title="category image">
									<img src="{{asset('images/banner/category/top-business-card-medium.jpg')}}" alt="Business card">
								</a>
							</div>
							<div class="col-xs-12 category-image visible-xs mobile">
								<a href="#" title="category image">
									<img src="{{asset('images/banner/category/top-business-card-large.jpg')}}" alt="Business card">
								</a>
							</div> --}}
						</div>

						<div class="products-list category-product">
							<ul>
                                @forelse ($category->products as $item)
                                <li class="pro-item col-md-4 col-sm-6 col-xs-12">
									<div class="product-image-action">
										<img src="{{asset('uploads/products/' .$item->image)}}" class="img-fluid" alt="Grouper Business Card">
									</div>
									<div class="product-info">
										<a href="{{route('productsdetails',['id'=>$item->id])}}" class="product-name" title="Grouper Business card">{{$item->title}}</a>

										<div class="short-description">
											<p class="visible-sm visible-md visible-lg">
												{!! $item->description  !!}
											</p>
										</div>

										<a href="{{route('productsdetails',['id'=>$item->id])}}" class="btn-readmore" title="Order">order now</a>
									</div>
								</li>
                                @empty
                                    "No Product available at the moment"
                                @endforelse
							</ul>			
						</div>
					</section><!-- Category product grid : End -->
				</div>
				<div class="row">
					<div class="col-md-12 visible-md visible-lg cate-bottom-banner">
						<a href="#" title="category bottom banner">
                            @inlineEditor( 'products_cate_bottom_banner',null,null,null,null,null,true,'image' )
                            <img src="{{asset('image/banner7.png')}}" alt="Business card">
						    @endInlineEditor
						</a>
					</div>
					{{-- <div class="col-sm-12 visible-sm cate-bottom-banner">
						<a href="#" title="category bottom banner">
							<img src="{{asset('images/banner/category/category-bottom-banner-medium.jpg')}}" alt="Business card">
						</a>
					</div>
					<div class="col-xs-12 visible-xs cate-bottom-banner">
						<a href="#" title="category bottom banner">
							<img src="{{asset('images/banner/category/category-bottom-banner-small.jpg')}}" alt="Business card">
						</a>
					</div> --}}
				</div>
			</div>
		</section>
	</main><!-- Main Category: End -->
@endsection
