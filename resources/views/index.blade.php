@extends('layouts.printshop')
@push('page-script')
<script type="text/javascript" src="{{asset("js/theme-home.js")}}"></script>  
@endpush
@section('content')
    <main class="main index">
        @include('includes.slider')
        <!--Home Category-->
        <!--Home Category : Begin-->
		<section class="home-category">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 block block-left">
						<a href="#" class="image">
							<img src="images/banner/category/1.jpg" alt="banner-category"/>
						</a>
						<div class="info">
							<a href="#">CANVAS PRINT</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 block block-center">
						<div class="inner-top">
							<div class="box-left">
								<a href="#" class="image frist">
									<img src="images/banner/category/2.jpg" alt="banner-category"/>
								</a>
								<div class="info">
									<a href="#">BROCHURE</a>
								</div>
							</div>
							<div class="box-right">
								<a href="#" class="image">
									<img src="images/banner/category/3.jpg" alt="banner-category"/>
								</a>
								<div class="info">
									<a href="#">BUSINESS CARD</a>
								</div>
							</div>
						</div>
						<div class="inner-bottom">
							<a href="#" class="image">
								<img src="images/banner/category/4.jpg" alt="banner-category"/>
							</a>
							<div class="info">
								<a href="#">LOGO PRINT</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 block block-right">
						<div class="inner-top">
							<a href="#" class="image">
								<img src="images/banner/category/5.jpg" alt="banner-category"/>
							</a>
							<div class="info">
								<a href="#">ENVELOPE</a>
							</div>
						</div>
						<div class="inner-bottom">
							<a href="#" class="image">
								<img src="images/banner/category/6.jpg" alt="banner-category"/>
							</a>
							<div class="info">
								<a href="#">COVER  PRINT</a>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</section>
		<!--Home Trust : Begin-->
		<section class="trust-w hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
						<div class="tr-icon"><i class="fa fa-thumbs-up"></i></div>
						<div class="tr-text">
							<h3>Quality Printing</h3>
							<span class="tr-line"></span>
							<p>Bright inks. Thick Paper. Precise cuts. We believe that quality printing matters.  That quality printing matters.</p>
							<a href="#" class="btn-readmore" title="Quality Printing">Read more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 block-trust trust-col-time-delivery">
						<div class="tr-icon"><i class="fa fa-paper-plane"></i></div>
						<div class="tr-text">
							<h3>Timely Delivery</h3>
							<span class="tr-line"></span>
							<p>No printer is faster. Order today by 8:00pm EST and you can even get it tomorrow.</p>
							<a href="#" class="btn-readmore" title="Timely Delivery">Read more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 block-trust trust-col-eco-minded">
						<div class="tr-icon"><i class="fa fa-leaf"></i></div>
						<div class="tr-text">
							<h3>Eco-Minded</h3>
							<span class="tr-line"></span>
							<p>
								Overnight Prints is the greenest online printer in the world. See our Waterless technology. 
							</p>
							<a href="#" class="btn-readmore" title="Eco-Minded">Read more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 block-trust trust-col-eco-money">
						<div class="tr-icon"><i class="fa fa-money"></i></div>
						<div class="tr-text">
							<h3>Money Back Guaranteed</h3>
							<span class="tr-line"></span>
							<p>
								Most sellers work with buyers to quickly resolve issues, but if a solution isn't reached, we can help.
							</p>
							<a href="#" class="btn-readmore" title="Eco-Minded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</section><!--Home Trust : End-->
		
		<!--Home blog : Begin -->
		<section class="home-blog">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						<h2 class="block-title">recent blog post</h2> 
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span> 
					</div>
					<div class="blog-content-w" id="blog-content-w">
						<div class="slider">
							<div class="slider-inner">
								<div class="wrap-item"> 
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner"> 
											<a class="image" href="#">
												<img src="images/blog/1.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
										<div class="inner">
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
											<a class="image" href="#">
												<img src="images/blog/2.jpg" alt="blog-01"/>
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner">
											<a class="image" href="#">
												<img src="images/blog/3.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
										<div class="inner">
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
											<a class="image" href="#">
												<img src="images/blog/4.jpg" alt="blog-01"/>
											</a>
										</div>
									</div>
								</div>
								<div class="wrap-item"> 
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner"> 
											<a class="image" href="#">
												<img src="images/blog/1.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
										<div class="inner">
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
											<a class="image" href="#">
												<img src="images/blog/2.jpg" alt="blog-01"/>
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner">
											<a class="image" href="#">
												<img src="images/blog/3.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
										<div class="inner">
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
											<a class="image" href="#">
												<img src="images/blog/4.jpg" alt="blog-01"/>
											</a>
										</div>
									</div>
								</div>
								<div class="wrap-item"> 
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner"> 
											<a class="image" href="#">
												<img src="images/blog/1.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
										<div class="inner">
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
											<a class="image" href="#">
												<img src="images/blog/2.jpg" alt="blog-01"/>
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner">
											<a class="image" href="#">
												<img src="images/blog/3.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
										<div class="inner">
											<div class="info">
												<div class="title">
													<a href="#">Happy Holidays Photo Cards</a>
												</div>
												<div class="sub-title">
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...
													</p>
												</div>
												<a href="#" class="read-more">Read more</a>
											</div>
											<a class="image" href="#">
												<img src="images/blog/4.jpg" alt="blog-01"/>
											</a>
										</div>
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Home make print : Begin -->
		<section class="home-make-print">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						<h2 class="block-title">HOW WE MAKE PRINTING AS EASY</h2> 
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span> 
					</div><!--make print Title : End -->
					<div class="print-content">
						<div class="col-md-4 col-sm-4 print-block print-block-left">
							<div class="w-print-block frist">
								<div class="print-icon">
									<i class="fa fa-hand-o-up"></i>
									<i class="fa fa-newspaper-o"></i>
								</div>
								<div class="print-title">
									<a href="#">Select Options</a>
								</div>
								<div class="print-number">
									<span>01</span>
								</div>
								<div class="print-txt">
									<p>Choose options that you want for your prints.We will make you happy with your choices.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 print-block print-block-center">
							<div class="w-print-block">
								<div class="print-icon">
									<i class="fa fa-file-text-o"></i> 
									<i class="fa fa-arrow-circle-o-up"></i>
								</div>
								<div class="print-title">
									<a href="#">Upload your design</a>
								</div>
								<div class="print-number">
									<span>02</span>
								</div> 
								<div class="print-txt">
									<p>Upload your finished design here and we'll print it for you with your choices</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 print-block print-block-right">
							<div class="w-print-block">
								<div class="print-icon">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="print-title">
									<a href="#">Checkout & Order</a>
								</div>
								<div class="print-number">
									<span>03</span>
								</div> 
								<div class="print-txt">
									<p>Checkout and finish your order very easy with one step checkout extension.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_make_print">
				
			</div>
		</section>
		<!--Home capabilitie : Begin -->
		<section class="home-capabititie">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						<h2 class="block-title">our capabilities</h2> 
						<span class="sub-title">Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</span>
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span> 
					</div>
					<div class="block-capabititie-w">
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut"> </div>
							<h2 class="title">huge quantity</h2>
							<div class="decs">
							<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
							</div>
						</div>
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut2"> </div>
							<h2 class="title">on Time</h2>
							<div class="decs">
							<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
							</div>
						</div>
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut3"> </div>
							<h2 class="title">True Color</h2>
							<div class="decs">
							<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
							</div>
						</div>
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut4"> </div>
							<h2 class="title">fast Delivery</h2>
							<div class="decs">
							<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Home ours service : Begin -->
		<section class="or-service">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						<h2 class="block-title">our services</h2>
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
						<span class="sub-title">Choose the design path that is right before upload file</span>
					</div>
					<div class="or-service-w">
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								<a href="#">
									<img src="images/our_service/1.png" alt="service-01"/>
								</a>
							</div>
							<div class="or-title">
								<a href="#">graphic Design</a>
							</div>
							<div class="or-text">
								<p>
									let us design your next print project!
								</p>
							</div>
							<a href="#" class="btn-readmore order-now">Order now</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								<a href="#">
									<img src="images/our_service/2.png" alt="service-02"/>
								</a>
							</div>
							<div class="or-title">
								<a href="#">Mailing</a>
							</div>
							<div class="or-text">
								<p>
									Delivery, we can hand it all for you!
								</p>
							</div>
							<a href="#" class="btn-readmore order-now">Order now</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								<a href="#">
									<img src="images/our_service/3.png" alt="service-03"/>
								</a>
							</div>
							<div class="or-title">
								<a href="#">custom prints</a>
							</div>
							<div class="or-text">
								<p>
									we'll bring all your creative ideas to life!
								</p>
							</div>
							<a href="#" class="btn-readmore order-now">Order now</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								<a href="#">
									<img src="images/our_service/4.png" alt="service-04"/>
								</a>
							</div>
							<div class="or-title">
								<a href="#">free file check</a>
							</div>
							<div class="or-text">
								<p>
									we'll if your file is ready to print!
								</p>
							</div>
							<a href="#" class="btn-readmore order-now">Order now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Home out recent : Begin -->
		<section class="home-out-recent">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						<h2 class="block-title">OUR RECENT WORKS</h2> 
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
						<ul>
							<li class="active"><a data-toggle="tab" href="#tab11">All projects</a></li>
							<li><a data-toggle="tab" href="#tab21">Leaflets & Flyers</a></li>
							<li><a data-toggle="tab" href="#tab31" class="last">Logo</a></li>
							<li><a data-toggle="tab" href="#tab41" class="last">Stationary</a></li>
							<li><a data-toggle="tab" href="#tab51" class="last">3d product</a></li>
							<li><a data-toggle="tab" href="#tab61" class="last">Presentation</a></li>
							<li><a data-toggle="tab" href="#tab71" class="last">Brochure</a></li>
							<li><a data-toggle="tab" href="#tab81" class="last">Ecommerce</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="tab11">	
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/5.png" alt="service-05"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/6.png" alt="service-06"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/7.png" alt="service-07"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/8.png" alt="service-08"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/9.png" alt="service-09"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/10.png" alt="service-10"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
						</div> 
						<div class="tab-pane" id="tab21">	
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/5.png" alt="service-05"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/6.png" alt="service-06"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/8.png" alt="service-08"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/9.png" alt="service-09"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/10.png" alt="service-10"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/7.png" alt="service-07"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div> 
							</div> 
						<div class="tab-pane" id="tab31">	 
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/6.png" alt="service-06"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div> 
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/8.png" alt="service-08"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/5.png" alt="service-05"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/9.png" alt="service-09"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/10.png" alt="service-10"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/7.png" alt="service-07"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
							</div> 
						<div class="tab-pane" id="tab41">	 
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/6.png" alt="service-06"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/7.png" alt="service-07"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/8.png" alt="service-08"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div> 
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/5.png" alt="service-05"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/10.png" alt="service-10"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
									<div class="w-block-recent">
										<div class="image-recent">
											<a href="#">
												<img src="images/our_service/9.png" alt="service-09"/>
											</a>
										</div>
										<div class="info-recent">
											<h2 class="title">eSliproser Postcards</h2>
											<div class="text-recent">
												<p>
													Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
												</p>
											</div>
											<a href="#" class="read-more">read more</a>
										</div>
									</div>
								</div>
							</div> 
						<div class="tab-pane" id="tab51">	 
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/6.png" alt="service-06"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/7.png" alt="service-07"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div> 
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/5.png" alt="service-05"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/9.png" alt="service-09"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/8.png" alt="service-08"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/10.png" alt="service-10"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
						</div> 
						<div class="tab-pane" id="tab61">	 
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/6.png" alt="service-06"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/7.png" alt="service-07"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/8.png" alt="service-08"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/5.png" alt="service-05"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/9.png" alt="service-09"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/10.png" alt="service-10"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
						</div> 
						<div class="tab-pane" id="tab71">	
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/10.png" alt="service-10"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/5.png" alt="service-05"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div> 
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/7.png" alt="service-07"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/8.png" alt="service-08"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/6.png" alt="service-06"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/9.png" alt="service-09"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div> 
						</div> 
						<div class="tab-pane" id="tab81">	
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/5.png" alt="service-05"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/6.png" alt="service-06"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/7.png" alt="service-07"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/8.png" alt="service-08"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/9.png" alt="service-09"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 block-recent">
								<div class="w-block-recent">
									<div class="image-recent">
										<a href="#">
											<img src="images/our_service/10.png" alt="service-10"/>
										</a>
									</div>
									<div class="info-recent">
										<h2 class="title">eSliproser Postcards</h2>
										<div class="text-recent">
											<p>
												Celebrate 2016 in style with our beloved Mini Photo Wall Calendar. Printed on eggshell paper, make your own calendar in minutes with 12 special photos.
											</p>
										</div>
										<a href="#" class="read-more">read more</a>
									</div>
								</div>
							</div>
						</div> 
						
					</div>
				</div>
			</div>
		</section>
		<!--Home Testimonials : Begin -->
		<section class="home-testimonial">
			<div class="container">
				<div class="row">
					<div class="tes-block" id="testimonial"> 
						<div class="slider-inner">
							<div class="wrap-item">
								<div class="item">
									<div class="inner">
										<div class="image">
											<a href="#"><img src="images/testimonials/1.png" alt="terminal-01"/></a>
										</div>
										<div class="tes-name">
											<a href="#">Sam Ibister</a>
										</div>
										<div class="tes-job">
											<span>Web Designe</span>
										</div>
										<div class="tes-decs">
											<p>This PSD is so well organised - the best Ive ever downloaded from here. The ideas are also really fresh and new - great work. I cant wait to start work with it!</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="inner">
										<div class="image">
											<a href="#"><img src="images/testimonials/2.png" alt="terminal-01"/></a>
										</div>
										<div class="tes-name">
											<a href="#">Sam Ibister</a>
										</div>
										<div class="tes-job">
											<span>Web Designe</span>
										</div>
										<div class="tes-decs">
											<p>This PSD is so well organised - the best Ive ever downloaded from here. The ideas are also really fresh and new - great work. I cant wait to start work with it!</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="inner">
										<div class="image">
											<a href="#"><img src="images/testimonials/3.png" alt="terminal-01"/></a>
										</div>
										<div class="tes-name">
											<a href="#">Sam Ibister</a>
										</div>
										<div class="tes-job">
											<span>Web Designe</span>
										</div>
										<div class="tes-decs">
											<p>This PSD is so well organised - the best Ive ever downloaded from here. The ideas are also really fresh and new - great work. I cant wait to start work with it!</p>
										</div>
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="bran-block">
						<div class="item col-md-2 col-sm-4 col-xs-6">
							<a href="#" class="image">
								<img src="images/brands/1.png" alt="brand-01"/>
							</a>
						</div>
						<div class="item col-md-2 col-sm-4 col-xs-6">
							<a href="#" class="image">
								<img src="images/brands/2.png" alt="brand-02"/>
							</a>
						</div>
						<div class="item col-md-2 col-sm-4 col-xs-6">
							<a href="#" class="image">
								<img src="images/brands/3.png" alt="brand-03"/>
							</a>
						</div>
						<div class="item col-md-2 col-sm-4 col-xs-6">
							<a href="#" class="image">
								<img src="images/brands/4.png" alt="brand-04"/>
							</a>
						</div>
						<div class="item col-md-2 col-sm-4 col-xs-6">
							<a href="#" class="image">
								<img src="images/brands/5.png" alt="brand-05"/>
							</a>
						</div>
						<div class="item col-md-2 col-sm-4 col-xs-6">
							<a href="#" class="image">
								<img src="images/brands/6.png" alt="brand-06"/>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
        
    </main>
@endsection