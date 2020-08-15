@extends('layouts.printshop')
@push('page-script')
	<script>
		$(document).ready(function() {
			
			$("select").change(function() {
				if (this.value === '100') {
					$('.price').text('30,000.00');
					$('.qty').attr('value', this.value);
					$('.cost').attr('value', '30,000.00');
				} else if (this.value === '200') {
					$('.price').text('55,000.00');
					$('.qty').attr('value', this.value);
					$('.cost').attr('value', '55,000.00');
				} else if (this.value === '300') {
					$('.price').text('80,000.00');
					$('.qty').attr('value', this.value);
					$('.cost').attr('value', '80,000.00');
				} else if (this.value === '400') {
					$('.price').text('110,000.00');
					$('.qty').attr('value', this.value);
					$('.cost').attr('value', '110,000.00');
				} else if (this.value === '500') {
					$('.price').text('135,000.00');
					$('.qty').attr('value', this.value);
					$('.cost').attr('value', '135,000.00');
				}
			})
		})
	</script>
@endpush
@section('content')
	<!--Main Product Detail : Begin-->
	<main class="main" id="product-detail">
		<!--Breadcrumb : Begin-->
		<section class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 hidden-xs">
						<h1 class="mh-title">Classic Business Cards</h1>
					</div>
					<div class="breadcrumb-w col-sm-8">
						<span class="hidden-xs">You are here:</span>
						<ul class="breadcrumb">
							{{-- <li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="category_grid.html">Business Cards</a>
							</li>
							<li>
								<span>Classic Business Cards</span>
							</li> --}}
						</ul>
					</div>
				</div>
			</div>
		</section><!--Breadcrumb : End-->
		<!--Product info : Begin-->
		<section class="product-info-w">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
						    {{-- <li role="presentation"><a href="#ideals" aria-controls="ideals" role="tab" data-toggle="tab">Ideals</a></li> --}}
						    <li role="presentation"><a href="#paper" aria-controls="paper" role="tab" data-toggle="tab">Paper & Specs</a></li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="tab-content clearfix">
					    <div role="tabpanel" class="tab-pane active" id="features">
					    	<div class="product-image v-middle">
						    	<div class="col-sm-12 col-xs-12">
									<img src="{{asset('uploads/products/' . $product->image)}}" width=300 height=300>
						    	</div>
						    </div>
						    <div class="product-shortdescript v-middle">
								<div class="col-sm-12 col-xs-12">
									<div class="v-middle">
									<h3>{{$product->title}}</h3>
							    		{!! $product->description !!}
							    	</div>
								</div>
							</div>
					    </div>
					   {{--  <div role="tabpanel" class="tab-pane" id="ideals">
					    	<div class="col-md-8 col-md-offset-2 col-xs-12 ideals-w">
					    		<div class="ideal">
					    			<img src="images/img-paper.png" alt="ideal 1">
					    		</div>
					    		<div class="ideal">
					    			<img src="images/product/details/ideal-2.jpg" alt="ideal 2">
					    		</div>
					    		<div class="ideal">
					    			<img src="images/product/details/ideal-3.jpg" alt="ideal 3">
					    		</div>
					    		<div class="ideal">
					    			<img src="images/product/details/ideal-4.jpg" alt="ideal 4">
					    		</div>
					    	</div>
					    </div> --}}
					    <div role="tabpanel" class="tab-pane" id="paper">
					    	
					    	<div class="paper-des v-middle">
						    	<div class="col-sm-11 col-sm-offset-1">
						    		<div class="v-middle">
							    		<h3>13 pt. Cardstock, Uncoated Paper</h3>
							    		<ul>
							    			<li><i class="fa fa-check"></i> Lighter weight uncoated cardstock</li>
											<li><i class="fa fa-check"></i> Requires scoring prior to folding</li>
											<li><i class="fa fa-check"></i> Paper from sustainable sources, 30% recycled content</li>
											<li><i class="fa fa-check"></i> Some natural fibers may be visible</li>
											<li><i class="fa fa-check"></i> Excellent writability</li>
											<li><i class="fa fa-check"></i> Recommended for Appointment Cards, Invitations and Note Cards</li>
							    		</ul>
							    	</div>
						    	</div>
						    </div>
                                                <div class="product-image v-middle">
						    	<div class="col-sm-12">
						    		<img src="{{asset("uploads/products")}}/{{$product->image}}" >
						    	</div>
						    </div>
					    </div>
					</div>
				</div>
			</div>
		</section><!--Product info : Begin-->
		<!--Step order : Begin-->
		<section class="product-step-order hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pso-header">
						<i class="fa fa-angle-double-down border-radius-50"></i>
						<h3>Okay, Let’s Get Started.</h3>
						<p>Choose the design path that is right before upload file</p>
					</div>
				</div>
				<div class="pso-content">
					<div class="pso-content-top row">
						<div class="col-md-3 col-md-offset-1 col-sm-4">
							<span class="line-number"></span>
							<span class="pso-number border-radius-50 d-block">1</span>
							<span class="line-number2 d-block"></span>
						</div>
						<div class="col-sm-4">
							<span class="line-number"></span>
							<span class="pso-number border-radius-50 d-block">2</span>
							<span class="line-number2"></span>
						</div>
						<div class="col-md-3 col-sm-4 d-block">
							<span class="line-number"></span>
							<span class="pso-number border-radius-50 d-block">3</span>
							<span class="line-number2 d-block"></span>
						</div>
					</div>
					<div class="pso-content-bottom row">
						<div class="col-md-3 col-md-offset-1 col-sm-4 step-select-option">
							<span class="pso-icon border-radius-50 d-block"></span>
							<h3>Select Option</h3>
							<p class="pso-text">
								Choose options that you want for your prints.We will make you happy with your choices.
							</p>
						</div>
						<div class="col-sm-4 step-upload-design">
							<span class="pso-icon border-radius-50 d-block">
								<i class="fa fa-file-text-o"></i>
								<i class="fa fa-arrow-circle-o-up"></i>
							</span>
							<h3>Upload your design</h3>
							<p class="pso-text">
								Upload your finished design here and we’ll print it for youwith your choices.
							</p>
						</div>
						<div class="col-md-3 col-sm-4 step-checkout">
							<span class="pso-icon border-radius-50 d-block">
								<i class="fa fa-shopping-cart"></i>
							</span>
							<h3>Checkout & Order</h3>
							<p class="pso-text">
								Checkout and finish your order very easy with one step checkout extension.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 pso-footer">
						<i class="fa fa-angle-double-down border-radius-50"></i>
					</div>
				</div>
			</div>
		</section><!--Step order : End-->
		<!--Add to cart : Begin-->
		<section class="add-to-cart-w">
			<div class="container">
				<div class="row">
					<form action="{{route('orders.checkout')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="col-md-12 col-sm-12 product-options">
							<div class="atc-header">
								<span class="number">1</span>
								<h3>Instant Price Calculator</h3>
							</div>

							<div class="col-md-6">
								@foreach($product->categories as $categ)
									<label class="form-control">{{$categ->title}}</label>
									<input type="hidden" name="category_id" value="{{$categ->id}}">
								@endforeach
								<!-- <label class="form-control">Logo Design</label> -->
								<!-- <input type="hidden" name="category_id" value="1"> -->
								<select name="price_calc" id="" class="form-control">
									<option value="select_quantity">Select Quantity</option>
									<option value="100">100</option>
									<option value="200">200</option>
									<option value="300">300</option>
									<option value="400">400</option>
									<option value="500">500</option>
								</select>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 upload-add-cart">
							<div class="row">
								<div class="upload-file col-md-12 col-sm-12 hidden-xs">
									<div class="atc-header">
										<span class="number">2</span>
										<h3>Get Started</h3>
									</div>
									<p class="upload-allow">
										You can only upload files that are allowed as jpg, jpeg, png, txt, doc, docx, xls, xlsx...
									</p>
									<div class="box-upload">
										<span class="icon">
											<i class="fa fa-file-text-o"></i>
											<i class="fa fa-arrow-up border-radius-50"></i>
										</span>
										<p>Upload a complete design</p>
										<div class="upload-btn-wrapper">
											<button class="btn">Upload file</button>
											<input type="file" name="image">
										</div>
									</div>
								</div>
								<div class="add-to-cart col-md-12 col-sm-12 col-xs-12">
									<div class="atc-header">
										<span class="number visible-480 visible-xs">2</span>
										<span class="number hidden-xs">3</span>
										<h3>Add to cart</h3>
									</div>
									<div class="quantity-price-w row">
										<div class="col-xs-6 quantity">
											<label>Quantity</label>
											<input type="text" name="quantity" class="qty" value="0">
										</div>
										<div class="price-total col-xs-6">
											<label>Cost:</label>
											<span class="naira">&#8358;</span><span class="price"> 0.00</span>
											<input type="hidden" name="cost" class="cost" value="0.00">
										</div>
									</div>
								</div>
								<div class="add-cart-btn-w col-xs-12">
									<button type="submit" class="add-cart-btn btn">
										<i class="fa fa-shopping-cart"></i>
										Add To Cart
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section><!--Add to cart : End-->

		<!-- Product upload file: Begin-->
		<section class="upload-file-w d-none">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-offset-md-3">
						<a id="close-upload-popup">
							<i></i>
						</a>
						<div class="row">
							<div class="col-md-12">
								<h4>Upload File</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<span class="btn btn-success fileinput-button">
				                    <i class="glyphicon glyphicon-plus"></i>
				                    <span>Add files...</span>
				                    <input type="file" name="files[]" multiple="">
				                </span>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-primary start">
				                    <span>Upload</span>
				                </button>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-primary cancel">
				                    <span>Cancel</span>
				                </button>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-primary delete">
				                    <span>Delete</span>
				                </button>
							</div>
							<div class="col-md-2">
								<input type="checkbox" class="toggle">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Product upload file: End-->
    </main><!-- Main Product Detail: End -->
@endsection
	