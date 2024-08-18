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
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="st__section__title mb-50 text-center wow fadeInUp">
          <h5> Types of Trucks </h5>
          <span class="circle"></span>
          <h1>Popular Trucks We Deal in</h1>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="st__service__box wow fadeInUp p-relative">
          <div class="st__service__thumb">
            <img src="assets/images/service/trucks 1.jpeg" alt="">
            <div class="st__service__icon">
              <img src="assets/images/service/icon1.png" alt="">
            </div>
          </div>
          <div class="st__service__content">
            <span> Dry Van </span>
            <h2>
              <a href="#"> Dry van : Weekly gross upto $10k </a>
            </h2>
            <div class="st__service__btn">
              <a href="#">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="st__service__box wow fadeInUp p-relative">
          <div class="st__service__thumb">
            <img src="assets/images/service/trucks 2.jpeg" alt="">
            <div class="st__service__icon">
              <img src="assets/images/service/icon1.png" alt="">
            </div>
          </div>
          <div class="st__service__content">
            <span> Reefer </span>
            <h2>
              <a href="#"> Reefer: Weekly gross upto $10k </a>
            </h2>
            <div class="st__service__btn">
              <a href="#">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="st__service__box wow fadeInUp p-relative">
          <div class="st__service__thumb">
            <img src="assets/images/service/trucks 4.jpeg" alt="">
            <div class="st__service__icon">
              <img src="assets/images/service/icon2.png" alt="">
            </div>
          </div>
          <div class="st__service__content">
            <span> Power Only </span>
            <h2>
              <a href="#"> Power only : Weekly gross upto $8k </a>
            </h2>
            <div class="st__service__btn">
              <a href="#">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="st__service__box wow fadeInUp p-relative">
          <div class="st__service__thumb">
            <img src="assets/images/service/trucks 3.jpeg" alt="">
            <div class="st__service__icon">
              <img src="assets/images/service/icon3.png" alt="">
            </div>
          </div>
          <div class="st__service__content">
            <span> Flatbed </span>
            <h2>
              <a href="#"> Flatbed/ hotshot : Weekly gross upto $8k </a>
            </h2>
            <div class="st__service__btn">
              <a href="service-details.html">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="st__service__box wow fadeInUp p-relative">
          <div class="st__service__thumb">
            <img src="assets/images/service/trucks 5.jpeg" alt="">
            <div class="st__service__icon">
              <img src="assets/images/service/icon3.png" alt="">
            </div>
          </div>
          <div class="st__service__content">
            <span> Box Truck </span>
            <h2>
              <a href="#"> Box truck : Weekly gross upto $6k </a>
            </h2>
            <div class="st__service__btn">
              <a href="#">
                <i class="bi bi-arrow-right"></i>
              </a>
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
            <span> RGN </span>
            <h2>
              <a href="#"> RGN: Weekly gross upto $10k </a>
            </h2>
            <div class="st__service__btn">
              <a href="service-details.html">
                <i class="bi bi-arrow-right"></i>
              </a>
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
              <h1 class="text-white">Request Quote for your Truck</h1>
            </div>
            <form action="#" method="post">
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
                    <input type="number" name="text" placeholder="Number">
                    <i class="bi bi-bag"></i>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp">
                  <div class="st__form__box p-relative">
                    <input type="number" name="text" placeholder="MC Number">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                </div>
                <div class="col-lg-12 wow fadeInUp">
                  <div class="st__form__box p-relative">
                    <select>
                      <option value="1">Truck Type</option>
                      <option value="2">Dry Van</option>
                      <option value="3">Reefer</option>
                      <option value="4">Flatbed / Hotshot</option>
                      <option value="4">Stepdeck</option>
                      <option value="4">RGN</option>
                      <option value="4">Power Only</option>
                      <option value="4">Box Truck</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 wow fadeInUp mt-50">
                  <div class="st__form__box">
                    <button class="st__btn" type="submit"> Request Quote <i class="bi bi-arrow-right"></i>
                    </button>
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
          <h1>Stories From Our Clinets</h1>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="st__testimonial__box wow fadeInUp p-relative">
          <div class="st__testi__inner d-flex align-items-center">
            <div class="st__testi__thumb">
              <img src="assets/images/testimonial/clients 1.jpeg" alt="">
            </div>
            <div class="st__testi__content">
              <h2>Lucas Bennett</h2>
              <!-- <span>Dramatically enhance</span> -->
            </div>
          </div>
          <div class="st__testi__desc">
            <p>I am an owner-operator with a very picky personality, and I want the best loads all the time. I’ve worked with Trans Troop for over a year now, and they continue to deliver the best Dispatching service. I always have loads ready to pick right after my morning drops. If it wasn’t for them, I would still be stressed out trying to book my own loads. Highly recommend them!</p>
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
              <img src="assets/images/testimonial/clients 4.jpeg" alt="">
            </div>
            <div class="st__testi__content">
              <h2>Bill Duzen</h2>
              <!-- <span>Dramatically enhance</span> -->
            </div>
          </div>
          <div class="st__testi__desc">
            <p>They know how to pick and choose the best loads for my drivers. I've worked with many truck dispatch service companies, and none of them cared for my company as much as Trans Troop. They reduced so much stress and headaches for me. My drivers are happy with these guys. They are getting me amazing rates and lanes. Even in this tough market, we're still making good gross. Wish I had found them sooner!</p>
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
              <img src="assets/images/testimonial/clients 3.jpeg" alt="">
            </div>
            <div class="st__testi__content">
              <h2>Ethan Parker</h2>
              <!-- <span>Dramatically enhance</span> -->
            </div>
          </div>
          <div class="st__testi__desc">
            <p>If it wasn't for Trans Troop, my trucking business wouldn't be where it is today. Their dispatch service makes my business run smoothly. They consistently book $3+ per mile loads for my OTR drivers. I highly recommend their services to anyone looking to outsource their Dispatching.</p>
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
              <img src="assets/images/testimonial/clients 5.jpeg" alt="">
            </div>
            <div class="st__testi__content">
              <h2>James Mitchell</h2>
              <!-- <span>Dramatically enhance</span> -->
            </div>
          </div>
          <div class="st__testi__desc">
            <p>These guys are doing an amazing job. I started working with them two years ago with just one truck, and thanks to their hard work, I now have a fleet of four. They keep my trucks booked in advance with great rates. Their negotiation skills are exceptional. If things had stayed the same, I might have been adding another truck this year.</p>
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
              <img src="assets/images/testimonial/clients 2.jpeg" alt="">
            </div>
            <div class="st__testi__content">
              <h2>Benjamin Hayes</h2>
              <!-- <span>Dramatically enhance</span> -->
            </div>
          </div>
          <div class="st__testi__desc">
            <p>I’m an owner-operator with a 26 ft box truck, and I’ve been working with Trans Troop for over a year. I’ve tried many dispatch services, but the Trans Troop team is top-notch. Even in this tough market, they consistently secure $2 per mile. Highly recommend!</p>
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
              <img src="assets/images/testimonial/clients 7.jpeg" alt="">
            </div>
            <div class="st__testi__content">
              <h2>Olivia Carter</h2>
              <!-- <span>Dramatically enhance</span> -->
            </div>
          </div>
          <div class="st__testi__desc">
            <p>As a woman running my company, I don't have time to book loads myself. That's where Trans Troop comes in, and I couldn’t be happier with their services. They handle everything for my reefer, consistently securing loads at $3 per mile. Their efficiency and reliability have been a game-changer for me. Highly recommend it!</p>
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