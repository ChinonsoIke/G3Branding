@extends('layouts.printshop')
@push('page-script')
<script type="text/javascript" src="{{asset("js/theme-home.js")}}"></script>  
@endpush
@section('content')
    <main class="main index">
		<section class="home-slidershow">
			<div class="slide-show">
				<div class="vt-slideshow">
					<ul>
						<li class="slide1" data-transition="random" ><img src="{{asset("image/homeflier2.png")}}" alt="" />
							<div class="tp-caption lfr" data-x="right"  data-hoffset="-56" data-y="170" data-start="800" data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">Flyers</span> & Leaflets</span></div> 
							<div class="tp-caption lfb" data-x="right"  data-hoffset="-15" data-y="225" data-start="800" data-speed="2000" data-endspeed="300">
								<span class="style2">
									Our A5 flyers and leaflets are our bestselling size.<br> 
									This is because they're perfect for potential prospects<br>  
									to carry around and are extremely cost effective.<br> 
								</span>
							</div>
							<div class="tp-caption lfr" data-x="right" data-hoffset="-315" data-y="375" data-start="1300" data-speed="2000" data-easing="easeInOutQuint" data-endspeed="300"><a class="btn-sn" href="categories/2">order now</a></div> 
						</li>
						<li class="slide1" data-transition="random" ><img src="{{asset("image/card5.png")}}" alt="" />
							<div class="tp-caption lfr" data-x="right"  data-hoffset="-56" data-y="170" data-start="800" data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">business</span> cards</span></div> 
							<div class="tp-caption lfb" data-x="right"  data-hoffset="-15" data-y="225" data-start="800" data-speed="2000" data-endspeed="300"
							>
								<span class="style2">
									Your business card is a key part of your brand identity<br>
									Define your brand identity with G3Branding.<br>
								</span>
							</div>
							<div class="tp-caption lfr" data-x="right" data-hoffset="-315" data-y="375" data-start="1300" data-speed="2000" data-easing="easeInOutQuint" data-endspeed="300"><a class="btn-sn" href="categories/17">order now</a></div> 
						</li>
						<li class="slide2" data-transition="random" ><img src="{{asset("image/homeshirt1.png")}}" alt="" />
							<div class="tp-caption lfr" data-x="left"  data-hoffset="" data-y="170" data-start="800" data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">High Pressure</span> Printing </span></div> 
							<div class="tp-caption lfb" data-x="left"  data-hoffset="" data-y="225" data-start="800" data-speed="2000" data-endspeed="300">
								<span class="style2">
									We can print directly on your T-Shirts and other fabrics.<br> 
									We make use of quality machines that ensure the design is to your taste<br>
								</span>
							</div>
							<div class="tp-caption lfr" data-x="left" data-y="367" data-start="1300" data-speed="2000" data-easing="easeInOutQuint" data-endspeed="300"><a class="btn-sn" href="categories/15">order now</a></div> 
						</li>
						<li class="slide3" data-transition="random" ><img src="{{asset("image/gift2.png")}}" alt="" />
							<div class="tp-caption lft" data-x="left"  data-hoffset="" data-y="170" data-start="800" data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">Gift</span> Items</span></div> 
							<div class="tp-caption lfb" data-x="left"  data-hoffset="" data-y="225" data-start="800" data-speed="2000" data-endspeed="300">
								<span class="style2">
									Get customized gift items for your loved ones today!<br> 
								</span>
							</div>
							<div class="tp-caption lfl" data-x="left" data-hoffset="" data-y="365" data-start="1300" data-speed="2000" data-easing="easeInOutQuint" data-endspeed="300"><a class="btn-sn" href="categories/16">order now</a></div> 
						</li>
					</ul> 
				</div>
			</div>
		</section>
        <!--Home Category-->
        <!--Home Category : Begin-->
		<section class="home-category">
			<div class="container">
				<div class="row"> 
					<div class="block-title-w">
						<h2 class="block-title">CATEGORIES</h2>
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span> 
					</div><!--make print Title : End -->
					<div class="print-content">
						@php
							$count = 0;
						@endphp
						@if (count($categories) >=3)
						
							@foreach ($categories as $item)
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 block block-left cat_section">
								<a href="{{route('category.index', $item->id)}}" class="image">
									<img src="uploads/categories/{{$item->image}}" alt="banner-category"/>
								</a>
								<div class="info">
									<a href="{{route('category.index', $item->id)}}">{{$item->title}}</a>
								</div>
							</div>
							@endforeach
							
					
						@endif
					</div>
				</div>
			</div>
		</section>
		<!--Home Trust : Begin-->
		<section class="trust-w hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 trust-col-quantity">
						<div class="tr-icon"><i class="fa fa-thumbs-up"></i></div>
						<div class="tr-text">
							<h3>Quality Printing</h3>
							<span class="tr-line"></span>
							<p>Bright inks. Thick Paper. Precise cuts. We believe that quality printing matters.  That quality printing matters.</p>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 trust-col-time-delivery">
						<div class="tr-icon"><i class="fa fa-paper-plane"></i></div>
						<div class="tr-text">
							<h3>Timely Delivery</h3>
							<span class="tr-line"></span>
							<p>No printer is faster. Order today and get your items within 3 working days</p>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 trust-col-eco-minded">
						<div class="tr-icon"><i class="fa fa-leaf"></i></div>
						<div class="tr-text">
							<h3>Eco-Minded</h3>
							<span class="tr-line"></span>
							<p>
								At G3Branding, we make use of eco-friendly machines.
							</p>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 trust-col-eco-money">
						<div class="tr-icon"><i class="fa fa-money"></i></div>
						<div class="tr-text">
							<h3>Customer Satisfaction</h3>
							<span class="tr-line"></span>
							<p>
								We keep our customers involved throughout the branding process to ensure the desired result.
							</p>
							
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
									@if ($posts)
									@foreach ($posts as $item)
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
										<div class="inner"> 
											<a class="image" href="#">
												<img src="images/blog/1.jpg" alt="blog-01"/>
											</a>
											<div class="info">
												<div class="title">
													<a href="{{route('blog.show', $item->id)}}">{{$item->title}}</a>
												</div>
												<a href="{{route('blog.show', $item->id)}}" class="read-more">Read more</a>
											</div>
										</div>
									</div>
									@endforeach
									@endif
									
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
						@inlineEditor('home_now_to_make_print_title')
						<h2 class="block-title">HOW WE MAKE PRINTING AS EASY</h2> 
						@endInlineEditor
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
									@inlineEditor('home_print_1_title')
									<a href="#">Select Options</a>
									@endInlineEditor
								</div>
								<div class="print-number">
									@inlineEditor('home_print_1_number')
									<span>01</span>
									@endInlineEditor
								</div>
								<div class="print-txt">
									@inlineEditor('home_print_1_text')
									<p>Choose options that you want for your prints. We will make you happy with your choices.</p>
									@endInlineEditor
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
									@inlineEditor('home_print_2_title')
									<a href="#">Select Options</a>
									@endInlineEditor
								</div>
								<div class="print-number">
									@inlineEditor('home_print_2_number')
									<span>02</span>
									@endInlineEditor
								</div> 
								<div class="print-txt">
									@inlineEditor('home_print_2_text')
									<p>Upload your finished design here and we'll print it for you with your choices</p>
									@endInlineEditor
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 print-block print-block-right">
							<div class="w-print-block">
								<div class="print-icon">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="print-title">
									@inlineEditor('home_print_3_title')
									<a href="#">Checkout & Order</a>
									@endInlineEditor
								</div>
								<div class="print-number">
									@inlineEditor('home_print_3_number')
									<span>03</span>
									@endInlineEditor
								</div> 
								<div class="print-txt">
									@inlineEditor('home_print_3_text')
									<p>Checkout and finish your order very easy with one step checkout extension.</p>
									@endInlineEditor
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="bg_make_print"> -->
				
			</div>
		</section>
		<!--Home capabilitie : Begin -->
		<!-- <section class="home-capabititie">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						@inlineEditor('home_capabilities_title')
						<h2 class="block-title">our capabilities</h2> 
						@endInlineEditor
						@inlineEditor('home_capabilities_sub_title')
						<span class="sub-title">Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</span>
						@endInlineEditor
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span> 
					</div>
					<div class="block-capabititie-w">
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut"> </div>
							@inlineEditor('home_capabilities_widget_1_title')
							<h2 class="title">huge quantity</h2>
							@endInlineEditor
							<div class="decs">
								@inlineEditor('home_capabilities_widget_1_desc')
								<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
							@endInlineEditor
							</div>
						</div>
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut2"> </div>
							@inlineEditor('home_capabilities_widget_2_title')
							<h2 class="title">on Time</h2>
							@endInlineEditor
							<div class="decs">
								@inlineEditor('home_capabilities_widget_2_desc')
								<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
								@endInlineEditor
							</div>
						</div>
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut3"> </div>
							@inlineEditor('home_capabilities_widget_3_title')
							<h2 class="title">True color</h2>
							@endInlineEditor
							<div class="decs">
								@inlineEditor('home_capabilities_widget_3_desc')
								<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
								@endInlineEditor
							</div>
						</div>
						<div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
							<div class="block-mydoughnut" id="myDoughnut4"> </div>
							@inlineEditor('home_capabilities_widget_4_title')
							<h2 class="title">fast Delivery</h2>
							@endInlineEditor
							<div class="decs">
								@inlineEditor('home_capabilities_widget_4_desc')
								<p>Mauris sollicitudin dui quisOrci euismod mattis Integer auctor Aenean id turpis eu est iaculis suscipit.</p>
								@endInlineEditor
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!--Home ours service : Begin -->
		<!-- <section class="or-service">
			<div class="container">
				<div class="row">
					<div class="block-title-w">
						@inlineEditor('home_services_title')
						<h2 class="block-title">our services</h2>
						@endInlineEditor
						<span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
						@inlineEditor('home_services_sub_title')
						<span class="sub-title">Choose the design path that is right before upload file</span>
						@endInlineEditor
					</div>
					<div class="or-service-w">
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								@inlineEditor( 'home_services_widget_1_thumb_image',null,null,null,null,null,true,'image' )
								<a href="#">
									<img src="images/our_service/1.png" alt="service-01"/>
								</a>
								@endInlineEditor
								
							</div>
							<div class="or-title">
								@inlineEditor( 'home_services_widget_1_link')
								<a href="#">graphic Design</a>
								@endInlineEditor
							</div>
							<div class="or-text">
								@inlineEditor( 'home_services_widget_1_desc')
								<p>
									let us design your next print project!
								</p>
								@endInlineEditor
							</div>
							@inlineEditor( 'home_services_widget_1_btn')
							<a href="#" class="btn-readmore order-now">Order now</a>
							@endInlineEditor
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								@inlineEditor( 'home_services_widget_2_thumb_image',null,null,null,null,null,true,'image' )
								<a href="#">
									<img src="images/our_service/2.png" alt="service-02"/>
								</a>
								@endInlineEditor
							</div>
							<div class="or-title">
								@inlineEditor( 'home_services_widget_2_link')
								<a href="#">Mailing</a>
								@endInlineEditor
							</div>
							<div class="or-text">
								@inlineEditor( 'home_services_widget_2_desc')
								<p>
									Delivery, we can hand it all for you!
								</p>
								@endInlineEditor
							</div>
							@inlineEditor( 'home_services_widget_2_btn')
							<a href="#" class="btn-readmore order-now">Order now</a>
							@endInlineEditor
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								@inlineEditor( 'home_services_widget_3_thumb_image',null,null,null,null,null,true,'image' )
								<a href="#">
									<img src="images/our_service/3.png" alt="service-03"/>
								</a>
								@endInlineEditor
							</div>
							<div class="or-title">
								@inlineEditor( 'home_services_widget_3_link')
								<a href="#">custom prints</a>
								@endInlineEditor
							</div>
							<div class="or-text">
								@inlineEditor( 'home_services_widget_3_desc')
								<p>
									we'll bring all your creative ideas to life!
								</p>
								@endInlineEditor
							</div>
							@inlineEditor( 'home_services_widget_3_btn')
							<a href="#" class="btn-readmore order-now">Order now</a>
							@endInlineEditor
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 or-block">
							<div class="or-image">
								@inlineEditor( 'home_services_widget_4_thumb_image',null,null,null,null,null,true,'image' )
								<a href="#">
									<img src="images/our_service/4.png" alt="service-04"/>
								</a>
								@endInlineEditor
							</div>
							<div class="or-title">
								@inlineEditor( 'home_services_widget_4_link')
								<a href="#">free file check</a>
								@endInlineEditor
							</div>
							<div class="or-text">
								@inlineEditor( 'home_services_widget_4_desc')
								<p>
									we'll if your file is ready to print!
								</p>
								@endInlineEditor
							</div>
							@inlineEditor( 'home_services_widget_4_btn')
							<a href="#" class="btn-readmore order-now">Order now</a>
							@endInlineEditor
						</div>
					</div>
				</div>
			</div>
		</section> -->
		{{--<!--Home out recent : Begin -->
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
		</section>--}}
		<!--Home Testimonials : Begin -->
		<!-- <section class="home-testimonial">
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
		</section> -->
        
    </main>
@endsection