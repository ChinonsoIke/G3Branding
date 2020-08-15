@extends('layouts.printshop')
@section('content')

	<!--Main index : End-->
	<main class="main">
		<section id="pr-contact" class="pr-main">
			<div class="container"><h1 class="ct-header">Contact us</h1></div>
                <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.9628552770225!2d3.332352226099687!3d6.531066898813219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e7b7a167fdf%3A0x7b444397f2813824!2sIle-Iwe%20Meta%20Bus%20Stop!5e0!3m2!1sen!2sng!4v1569383819658!5m2!1sen!2sng" width="1920" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
                
                <div class="container">
                <div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="address">
                            <i class="fa fa-home"></i>
                            <p>
                            <span>Block 26, Suite 22/23 LASDPC Housing Estate</span><br/>
                            <span>Ilewe Meta Bus-Stop</span><br/>
                            <span>Isolo, Lagos</span><br/>
                            <span>Nigeria</span><br/>
                            </p>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <p>
                            <span>Telephone: +234 08023701606</span>						
                            </p>
                        </div>
                        
                        <div class="website">
                            <i class="fa fa-globe"></i>
                            <p>
                            <span>Website: www.g3branding,com </span>						
                            </p>
                        </div>
                    </div>
                    <form id="contact-form" class="form-validate form-horizontal" method="POST" action="/contact">
                        @csrf
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea aria-required="true" name="message" required="required" class="required invalid" rows="10" cols="50" id="jform_contact_message" aria-invalid="true" placeholder="Message..." ></textarea>
                        </div>
                        
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input class="name" name="name" type="text" placeholder="Enter your name *">
                            <input class="email" name="email" type="text" placeholder="Enter E-mail *">
                            <button type="submit" class="sendmail">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
		</section>
    </main><!--Main index : End-->
    
@endsection

