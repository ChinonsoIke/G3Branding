@extends('layouts.printshop')
@push('page-script') 
@endpush
@section('content')
	<main class="main category grid">
		<section class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<h1 class="mh-title">Business Cards</h1>
					</div>
					<div class="breadcrumb-w col-sm-9">
						<span class="hidden-xs">You are here:</span>
						<ul class="breadcrumb">
							<li>
                            <a href="{{route('index')}}">Home</a>
							</li>
							<li>
								<span>Business Cards</span>
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
						<h3 class="sidebar-title">Category</h3>
						<ul id="cate_list" class="cate_list">
                            @if (count($categories)>0)
                            @foreach ($categories as $item)
                            <li class="level0">
								<a href="#" title="Postcards">
									{{$item->title}}
									{{-- <span class="count-item">(81)</span> --}}
								</a>
							</li>
                            @endforeach
                            
                            @endif
						</ul>
						<div class="category-left-banner">
							<a href="#" title="category left banner">
								<img src="images/banner/category/left-banner-2.jpg" alt="Left banner 2">
							</a>
						</div>
						<div class="category-left-banner">
							<a href="#" title="category left banner">
								<img src="images/banner/category/left-banner-3.jpg" alt="Left banner 3">
							</a>
						</div>
					</aside>
					<!--Category product grid : Begin -->
					<section class="category grid col-sm-9 col-xs-12">
						<div class="row">
							<div class="col-xs-12 category-image visible-md visible-lg">
                                @inlineEditor( 'products_category_image',null,null,null,null,null,true,'image' )
                                <a href="#" title="category image">
									<img src="images/banner/category/top-business-card-large.jpg" alt="Business card">
								</a>
                                @endInlineEditor
								
							</div>
							{{-- <div class="col-xs-12 category-image visible-sm">
								<a href="#" title="category image">
									<img src="images/banner/category/top-business-card-medium.jpg" alt="Business card">
								</a>
							</div>
							<div class="col-xs-12 category-image visible-xs mobile">
								<a href="#" title="category image">
									<img src="images/banner/category/top-business-card-large.jpg" alt="Business card">
								</a>
							</div> --}}
						</div>
						<div class="top-toolbar row">
							<div class="col-md-3 col-sm-4 col-xs-4 type-filter">
								<span class="cate-filter-title hidden-xs">Product Type:</span>
								<div class="cate-filter-content">
									<span class="current-filter hidden-xs">Business<i class="fa fa-angle-down"></i></span>
									<span class="current-filter visible-xs">Type: <i class="fa fa-angle-down"></i></span>
									<ul class="product-type-filter">
										<li>
											<span>Flyers & Leaflets</span>
										</li>
										<li class="selected">
											<span>Business Cards</span>
										</li>
										<li>
											<span>Poster Prints</span>
										</li>
										<li>
											<span>Card & Invites</span>
										</li>
										<li>
											<span>Banner & POS</span>
										</li>
										<li>
											<span>Stationery</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 industry-filter">
								<span class="cate-filter-title hidden-xs">Type/Industry:</span>
								<div class="cate-filter-content">
									<span class="current-filter hidden-xs">Art <i class="fa fa-angle-down"></i></span>
									<span class="current-filter visible-xs">Industry: <i class="fa fa-angle-down"></i></span>
									<ul class="product-type-filter">
										<li>
											<span>Animals</span>
										</li>
										<li class="selected">
											<span>Art</span>
										</li>
										<li>
											<span>Automotive</span>
										</li>
										<li>
											<span>Beauty</span>
										</li>
										<li>
											<span>Beverage</span>
										</li>
										<li>
											<span>Child Care</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-5 col-sm-4 col-xs-4 view-mode">
								<a href="category_grid.html" class="view-grid">
									<i class="fa fa-th"></i>
								</a>
								<a href="#" class="active view-list">
									<i class="fa fa-th-list"></i>
								</a>
							</div>
						</div>
						<div class="products-list category-product">
							<ul>
                                @forelse ($products as $item)
                                <li class="pro-item row">
									<div class="product-image-action col-sm-4 col-xs-12">
										<a href="#" title="Grouper Business card">
											{{-- <img src="images/product/263x263/cate-list-business-card-01.jpg" alt="Grouper Business card"> --}}
                                        <img src="uploads/products/{{$item->image}}" alt="Grouper Business card">
										</a>
									</div>
									<div class="product-info col-sm-8 col-xs-12">
										<div class="pro-name-rate clearfix">
											<h3 class="product-name">
												<a href="#" title="Grouper Business card">{{$item->title}}</a>
											</h3>
											<div class="rating-box">  
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											  	<i class="fa fa-star-half-o"></i>
											  	<i class="fa fa-star-o"></i>
											  	<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="price-box">
											<span class="normal-price">&#8358; {{$item->prices[0]->cost}}/{{$item->prices[0]->quantity}}</span>
										</div>
										<div class="short-description">
											<p class="visible-sm visible-md visible-lg">
												{!! $item->description  !!}
											</p>
											
										</div>
										<div class="action">
											<button type="button" class="add-to-cart gbtn" title="Order">
												
												<span>Make your Request</span>
											</button>
											{{-- <a href="#" title="Add to Wishlist" class="add-to-wishlist">
												<i class="fa fa-heart"></i>
											</a>
											<a class="add-to-compare" title="add-to-compare">
												<i class="fa fa-refresh"></i> 
											</a>
											<a class="quick-view" title="">
												<i class="fa fa-eye"></i>
											</a> --}}
										</div>
									</div>
								</li>
                                @empty
                                    "No Product available at the moment"
                                @endforelse
							</ul>			
						</div>
						<div class="bottom-toolbar row">
							<div class="col-md-12 pager">
								@php
                                    echo $products->render()
                                @endphp
							</div>
						</div>
					</section><!-- Category product grid : End -->
				</div>
				<div class="row">
					<div class="col-md-12 visible-md visible-lg cate-bottom-banner">
						<a href="#" title="category bottom banner">
                            @inlineEditor( 'products_cate_bottom_banner',null,null,null,null,null,true,'image' )
                            <img src="images/banner/category/category-bottom-banner-large.jpg" alt="Business card">
						    @endInlineEditor
						</a>
					</div>
					{{-- <div class="col-sm-12 visible-sm cate-bottom-banner">
						<a href="#" title="category bottom banner">
							<img src="images/banner/category/category-bottom-banner-medium.jpg" alt="Business card">
						</a>
					</div>
					<div class="col-xs-12 visible-xs cate-bottom-banner">
						<a href="#" title="category bottom banner">
							<img src="images/banner/category/category-bottom-banner-small.jpg" alt="Business card">
						</a>
					</div> --}}
				</div>
			</div>
		</section>
	</main><!-- Main Category: End -->
@endsection
