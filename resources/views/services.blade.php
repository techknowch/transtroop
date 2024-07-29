@extends('layouts.frontend')

@section('content')

<!-- ST Breadcumb Area -->
<div class="st-breadcumb-area pt-150" style="background: url(assets/images/breadcumb/breadcumb.jpg) no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb__top__content text-center wow fadeInUpBig">
					<span> Business Models you can Consider </span>
					<h2> Service </h2>
				</div>
				<div class="breadcumb__links">
					<ul>
						<li><a href="index.html"> Home </a></li>
						<li><a href="#"> / </a></li>
						<li><a href="#"> Service </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ST Service Area -->
<div class="st-service-area pt-100 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="st__section__title mb-50 text-center wow fadeInUp">
					<h5> Types of Loglstice </h5>
					<span class="circle"></span>
					<h1>Popular Logistics Services</h1>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="st__service__box wow fadeInUp p-relative">
					<div class="st__service__thumb">
						<img src="assets/images/service/service1.jpg" alt="">
						<div class="st__service__icon">
							<img src="assets/images/service/icon1.png" alt="">
						</div>
					</div>
					<div class="st__service__content">
						<span> Tracking </span>
						<h2> <a href="service-details.html"> Transport by Road </a> </h2>
						<div class="st__service__btn">
							<a href="#"> <i class="bi bi-arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__service__box wow fadeInUp p-relative">
					<div class="st__service__thumb">
						<img src="assets/images/service/service2.jpg" alt="">
						<div class="st__service__icon">
							<img src="assets/images/service/icon2.png" alt="">
						</div>
					</div>
					<div class="st__service__content">
						<span> Tracking </span>
						<h2> <a href="service-details.html"> Safety Garunteed </a> </h2>
						<div class="st__service__btn">
							<a href="#"> <i class="bi bi-arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__service__box wow fadeInUp p-relative">
					<div class="st__service__thumb">
						<img src="assets/images/service/service3.jpg" alt="">
						<div class="st__service__icon">
							<img src="assets/images/service/icon3.png" alt="">
						</div>
					</div>
					<div class="st__service__content">
						<span> Tracking </span>
						<h2> <a href="service-details.html"> Managing logistics for </a> </h2>
						<div class="st__service__btn">
							<a href="#"> <i class="bi bi-arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ST Appointment Area -->
<div class="st-appointment-area pt-100 p-relative">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="st__contact__inner">
					<div class="st__contact__position">
						<div class="st__section__title mb-50 wow fadeInUp">
							<h5 class="text-white"> Booking Appointment </h5>
							<h1 class="text-white">Book Transport & Logistics</h1>
						</div>
						<form action="https://formspree.io/f/maygbqwa" method="post">
							<div class="row">
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="text" name="name" placeholder="Full Name*">
										<i class="bi bi-person-fill"></i>
									</div>
								</div>
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="email" name="email" placeholder="Email Here*">
										<i class="bi bi-envelope-open"></i>
									</div>
								</div>					
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="text" name="text" placeholder="Weight. Kg*">
										<i class="bi bi-bag"></i>
									</div>
								</div>					
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="text" name="text" placeholder="Distance. km*">
										<i class="bi bi-geo-alt-fill"></i>
									</div>
								</div>					
								<div class="col-lg-12 wow fadeInUp">
									<div class="st__form__box p-relative">
										<select>
											<option value="1">Select Freight</option>
											<option value="2">Air Freight</option>
											<option value="3">Sea Freight</option>
											<option value="4">Road Freight</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 wow fadeInUp mt-50">
									<div class="st__form__box">
										<button class="st__btn" type="submit"> Request Quote <i class="bi bi-arrow-right"></i> </button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
	<div class="st__appointment__bg wow fadeInUp">
		<img class="a__bg" src="assets/images/appointment/bg.jpg" alt="">
	</div>
	<div class="st__appointment__shape1 wow fadeInUp">
		<img src="assets/images/appointment/shape.png" alt="">
	</div>
	<div class="st__appointment__video wow fadeInUp">
		<a class="video-vemo-icon st__video venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
			<i class="bi bi-play"></i>
		</a>
	</div>
</div>
<!-- ST Testimonial Area -->
<div class="st-testimonial-area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="st__section__title mb-50 text-center wow fadeInUp">
					<h5> What Our Clients </h5>
					<span class="circle"></span>
					<h1>Stories From Our Users</h1>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="st__testimonial__box wow fadeInUp p-relative">
					<div class="st__testi__inner d-flex align-items-center">
						<div class="st__testi__thumb">
							<img src="assets/images/testimonial/t1.png" alt="">
						</div>
						<div class="st__testi__content">
							<h2>Sahinur Islam</h2>
							<span>Dramatically enhance</span>
						</div>
					</div>
					<div class="st__testi__desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
					</div>
					<div class="st__testi_quote">
						<i class="bi bi-quote"></i>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__testimonial__box wow fadeInUp p-relative">
					<div class="st__testi__inner d-flex align-items-center">
						<div class="st__testi__thumb">
							<img src="assets/images/testimonial/t2.png" alt="">
						</div>
						<div class="st__testi__content">
							<h2>Madriya Merin</h2>
							<span>Dramatically enhance</span>
						</div>
					</div>
					<div class="st__testi__desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
					</div>
					<div class="st__testi_quote">
						<i class="bi bi-quote"></i>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__testimonial__box wow fadeInUp p-relative">
					<div class="st__testi__inner d-flex align-items-center">
						<div class="st__testi__thumb">
							<img src="assets/images/testimonial/t3.png" alt="">
						</div>
						<div class="st__testi__content">
							<h2>Darrell Steward</h2>
							<span>Dramatically enhance</span>
						</div>
					</div>
					<div class="st__testi__desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
					</div>
					<div class="st__testi_quote">
						<i class="bi bi-quote"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection