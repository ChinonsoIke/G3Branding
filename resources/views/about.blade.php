@extends('layouts.printshop')
@push('page-script')
<script type="text/javascript" src="{{asset("js/theme-home.js")}}"></script>  
@endpush
@section('content')
    <main class="main index">
        <section class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<h1 class="mh-title">About Us</h1>
					</div>
					<div class="breadcrumb-w col-sm-9">
						<span class="hidden-xs">You are here:</span>
						<ul class="breadcrumb">
							<li>
                            <a href="{{url('')}}">Home</a>
							</li>
							<li>
								<span>About Us</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </section>
        <section id="aboutus" class="pr-main">
			<div class="container">			
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="images/about.fw.png">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="top"><h2><span>Welcome at our Agency</span></h2>
					<p>Here at printshop we like to describe ourselves as an easy-to-use online print destination that puts the power back in your hands. You can mix ‘n’ match your size, papers and finishes to suit your designs — because print shouldn’t be one size fits all.</p>
					</div>
					<div class="bottom">
					<h2><span>Our specialization</span></h2>
					</div>
					<div class="progress">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span>CSS</span>
					  </div>
					</div>
					<div class="progress">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						<span>Javascript</span>
					  </div>
					</div>
					<div class="progress">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
						<span>PHP</span>
					  </div>
					</div>
					<div class="progress">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
						<span>HTML</span>
					  </div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h1>MEET THE TEAM</h1>
					<p>We’re passionate about print, but what does that mean for you? It’s a promise that you’ll always receive </p>
					<p>print created on a press that sits at the very forefront of printing technology.</p>
					<div class="col-md-4 col-sm-4 col-xs-12">
					<div>
					<img src="images/abouts/about01.png">
					<h3>Frank Furious</h3>
					<h4>Art Director</h4>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <span>Lorem ipsum dolor</span> sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					</div></div>
					<div class="col-md-4 col-sm-4 col-xs-12">
					<div>
					<img src="images/abouts/about02.png">
					<h3>Kara Kulis</h3>
					<h4>Marketing &amp; Sales</h4>
					<p>
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                        </p>
					</div></div>
					<div class="col-md-4 col-sm-4 col-xs-12">
					<div>
					<img src="images/abouts/about03.png">
					<h3>Andrea Arkov</h3>
					<h4>Public Relations</h4>
					<p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  </p>
					</div></div>
				</div>
			</div>
		</section>

    </main>
@endsection