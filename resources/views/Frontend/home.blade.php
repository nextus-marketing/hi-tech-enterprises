@extends('layouts.frontend')
@section('title') Home | Hi Tech Enterprises @endsection
@section('content')

	<!-- Banner Section One-->
	<section class="banner-section-one">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(/frontend/my-img/slider.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<h2 class="sub-title animate-1"><span>Trusted Machinery Supplier</span></h2>
						<h1 class="title animate-2"><span>Heavy Construction </br> Equipment</span>.</h1>
						</br>
						<div class="btn-box animate-4">
							<a href="#0" class="theme-btn btn-style-one"><i class="icon fa fas fa-plus"></i><span class="btn-title">Get a Quote</span></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(/frontend/my-img/slider-2.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<h2 class="sub-title animate-1"><span>Inspected & Ready to Work</span></h2>
						<h1 class="title animate-2"><span>Reliable </br> Machinery</span>.</h1>
						<div class="text animate-3">Quality-tested machines for construction, mining & industrial projects.</div>
						<div class="btn-box animate-4">
							<a href="#0" class="theme-btn btn-style-one"><i class="icon fa fas fa-plus"></i><span class="btn-title">Get a Quote</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END Banner Section One -->


	
<section class="project-section">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp">
      <span class="sub-title">Available Equipment</span>
      <h2>Explore Our Equipment Categories</h2>
    </div>

    <div class="machine-wrapper">
      <div class="machine-grid" id="machineGrid">

        <!-- ===== VISIBLE ITEMS (8) ===== -->
        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/ariel-platforms.webp" alt="Aerial Platforms">
            <span>Aerial Platforms</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/attachments.webp" alt="Attachments">
            <span>Attachments</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/backhoe-loaders.webp" alt="Backhoe Loaders">
            <span>Backhoe Loaders</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/boom-loader.webp" alt="Boom Loader">
            <span>Boom Loader</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/compactors.webp" alt="Compactors">
            <span>Compactors</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/compressors.webp" alt="Compressors">
            <span>Compressors</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/container-stackers.webp" alt="Container Stackers">
            <span>Container Stackers</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/cranes.webp" alt="Cranes">
            <span>Cranes</span>
          </a>
        </div>

		<div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/crushers.webp" alt="Crushers">
            <span>Crushers</span>
          </a>
        </div>

        <div class="machine-item">
          <a href="#0">
            <img src="/frontend/my-img/items/dozers.webp" alt="Dozers">
            <span>Dozers</span>
          </a>
        </div>

        <!-- ===== HIDDEN ITEMS ===== -->
        

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/excavators.webp" alt="Excavators">
            <span>Excavators</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/forklifts.webp" alt="Forklifts">
            <span>Forklifts</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/generators.webp" alt="Generators">
            <span>Generators</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/motor-graders.webp" alt="Motor Graders">
            <span>Motor Graders</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/other-equipments.webp" alt="Other Equipments">
            <span>Other Equipments</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/skid-steers.webp" alt="Skid Steers">
            <span>Skid Steers</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/trailers.webp" alt="Trailers">
            <span>Trailers</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/trucks.webp" alt="Trucks">
            <span>Trucks</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/vehicle-buses.webp" alt="Buses">
            <span>Buses</span>
          </a>
        </div>

        <div class="machine-item hidden">
          <a href="#0">
            <img src="/frontend/my-img/items/wheel-loaders.webp" alt="Wheel Loaders">
            <span>Wheel Loaders</span>
          </a>
        </div>

      </div>

      <!-- BUTTON (UNCHANGED EXACTLY) -->
      <div style="text-align:center; margin-top:40px;">
        <a href="#0" id="toggleEquipment" class="theme-btn btn-style-one hvr-light">
  <i class="icon fa fas fa-plus"></i>
  <span class="btn-title">Show More</span>
</a>
      </div>

    </div>
  </div>
</section>



	<!-- Work Section -->
	<section class="work-section">
	<div class="anim-icons full-width">
		<span class="icon shape-1 bounce-y"></span>
	</div>
	<div class="auto-container">
		<div class="sec-title style-two text-center wow fadeInUp">
			<span class="sub-title">Our Working Process</span>
			<h2>Delivering Advanced Machinery Solutions <br>With Precision & Performance</h2>
		</div>

		<div class="outer-box">
			<div class="inner-outer">
				<div class="row">
					
					<!-- Work Block -->
					<div class="work-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="icon-box">
								<i class="icon fas fa-search"></i>
							</div>
							<h4 class="title">
								<a href="#0">Requirement Analysis</a>
							</h4>
							<div class="text">
								We understand your project needs to recommend the right machinery
								for maximum efficiency and performance.
							</div>
						</div>
					</div>
					
					<!-- Work Block -->
					<div class="work-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
						<div class="inner-box">
							<div class="icon-box">
								<i class="icon fas fa-industry"></i>
							</div>
							<h4 class="title">
								<a href="#0">Machinery Manufacturing</a>
							</h4>
							<div class="text">
								High-quality machinery engineered using advanced technology,
								strict standards, and precision manufacturing.
							</div>
						</div>
					</div>
					
					<!-- Work Block -->
					<div class="work-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
						<div class="inner-box">
							<div class="icon-box">
								<i class="icon flaticon-checklist"></i>
							</div>
							<h4 class="title">
								<a href="#0">Quality Testing</a>
							</h4>
							<div class="text">
								Every machine undergoes rigorous testing to ensure safety,
								reliability, and long-term operational excellence.
							</div>
						</div>
					</div>
					
					<!-- Work Block -->
					<div class="work-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
						<div class="inner-box">
							<div class="icon-box">
								<i class="icon flaticon-settings"></i>
							</div>
							<h4 class="title">
								<a href="#0">Installation & Support</a>
							</h4>
							<div class="text">
								Professional installation, commissioning, and ongoing support
								to keep your operations running smoothly.
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

	<!-- End Work Section-->

	<!-- About Section -->
	<section class="about-section pt-0">
		<div class="anim-icons full-width">
			<span class="icon shape-2 bounce-y"></span>
		</div>
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-7 col-lg-6 col-md-12 order-2 wow fadeInRight"
					data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">More About Us</span>
							<h2>Reliable Machinery Solutions That Power Your Projects</h2>
						</div>

						<div class="text2">Welcome to Hi Tech Enterprises, a forward-thinking engineering and machinery solutions company committed to driving industrial and construction excellence.</div>

						<div class="text">At Hi Tech Enterprises, we specialize in delivering high-performance construction and industrial machinery designed with advanced technology, precision engineering, and uncompromising quality. Our solutions support infrastructure development, manufacturing, and large-scale projects by improving productivity, safety, and operational efficiency.</div>

						<div class="btn-box d-flex align-items-center">
							<a href="#0" class="theme-btn btn-style-one"><i class="icon fa fas fa-plus"></i><span class="btn-title">Our Services</span></a>
							
							<div class="founder-info">
								<div class="thumb"><img src="/frontend/images/resource/thumb-1.jpg" alt=""></div>
								<div class="content">
									<h5 class="name">Marks Daniel</h5>
									<span class="designation">Chairman</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-5 col-lg-6 col-md-12 ">
					<div class="inner-column">
						<div class="image-box">
							<figure class="image mb-0 overlay-anim wow fadeInUp"><img src="/frontend/my-img/about.jpg" alt="" style="width:494px; height:550px;"></figure>
							<div class="experience bounce-y">
								<strong>25+</strong>
								<div class="text">Years of<br>Experience</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->




	<!-- Project Section -->
	<section class="project-section">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp">
				<span class="sub-title">Popular brands</span>
				<h2>Let’s View Our Trusted Brands</h2>
			</div>

			<div class="brand-grid" id="brandGrid">
      <!-- Visible by default -->
      <div class="brand-item"><img src="/frontend/my-img/brands/atlas.webp" alt="Caterpillar"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/bobcat.webp" alt="JCB"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/caterpillar.webp" alt="Volvo"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/demag.webp" alt="Other"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/doosan.webp" alt="Komatsu"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/dynapac.webp" alt="Liebherr"></div>

	  <div class="brand-item"><img src="/frontend/my-img/brands/generac.webp" alt="JLG"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/hyundai.webp" alt="Hyundai"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/jcb.webp" alt="Bobcat"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/jlg.webp" alt="Mercedes"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/kato.webp" alt="Mitsubishi"></div>
      <div class="brand-item"><img src="/frontend/my-img/brands/komatsu.webp" alt="XCMG"></div>

      <!-- Hidden initially -->
      <div class="brand-item extra"><img src="/frontend/my-img/brands/liebherr.webp" alt="JLG"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/mercedes.webp" alt="Hyundai"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/mitsubishi.webp" alt="Bobcat"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/other.webp" alt="Mercedes"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/perkins.webp" alt="Mitsubishi"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/sany.webp" alt="XCMG"></div>

	  <div class="brand-item extra"><img src="/frontend/my-img/brands/tadano.webp" alt="JLG"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/terex.webp" alt="Hyundai"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/toyota.webp" alt="Bobcat"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/volvo.webp" alt="Mercedes"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/xcmg.webp" alt="Mitsubishi"></div>
      <div class="brand-item extra"><img src="/frontend/my-img/brands/zoomlion.webp" alt="XCMG"></div>

      <!-- add more with class="extra" -->
    </div>

    <div style="text-align:center; margin-top:40px;">
        <a href="#0" id="toggleBrandsBtn" class="theme-btn btn-style-one hvr-light">
  <i class="icon fa fas fa-plus"></i>
  <span class="btn-title">Show More</span>
</a>
      </div>
		</div>
	</section>
	<!--End Project Section -->



<section class="news-section pb-10">
    <div class="auto-container">
		<div class="sec-title wow fadeInUp">
				<span class="sub-title">Top Equipment for Sale</span>
				<h2>Premium heavy equipment for sale</h2>
			</div>
			<div class="row">
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<a href="#0">
									<img src="/frontend/my-img/1.webp" alt="" style="width:391px; height:260px; object-fit:cover;">
								</a>
							</figure>

						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa-solid fa-droplet"></i>Disel</li>
								<li><i class="fa-solid fa-truck"></i>Used</li>
								<li><i class="fa-solid fa-calendar"></i>2018</li>
							</ul>
							<h4 class="title"><a href="#0">Motor Grader 740 A</a></h4>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="#0"><img src="/frontend/my-img/2.webp" alt="" style="width:391px; height:260px; object-fit:cover;"></a></figure>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa-solid fa-droplet"></i>Disel</li>
								<li><i class="fa-solid fa-truck"></i>Used</li>
								<li><i class="fa-solid fa-calendar"></i>2020</li>
							</ul>
							<h4 class="title"><a href="#0">Hyundai Chain Excavator 220</a></h4>
						</div>
					</div>
					
				</div>

				<div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="#0"><img src="/frontend/my-img/4.webp" alt="" style="width:391px; height:260px; object-fit:cover;"></a></figure>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa-solid fa-droplet"></i>Disel</li>
								<li><i class="fa-solid fa-truck"></i>Used</li>
								<li><i class="fa-solid fa-calendar"></i>2025</li>
							</ul>
							<h4 class="title"><a href="#0">6 Wheel Tipper Truck</a></h4>
						</div>
					</div>
				</div>
			</div>
    	</div>
</section>



	<!-- Call To Action -->
	<section class="call-to-action">
	<div class="bg bg-image" style="background-image: url(/frontend/images/background/1.jpg);"></div>
	<div class="auto-container">
		<div class="title-box wow zoomIn">
			<div class="logo-box">
				<img src="/frontend/my-img/footer-bg.png" alt="Hi Tech Enterprises Logo" style="width:175px; height:100px;">
			</div>
			<h2 class="title">Driving Innovation in Industrial Machinery</h2>
			<div class="text">
				Hi Tech Enterprises delivers advanced construction and industrial machinery
				engineered for performance, reliability, and long-term productivity.
			</div>
			<a href="/contact-us" class="theme-btn btn-style-one hvr-light">
				<i class="icon fa fas fa-plus"></i>
				<span class="btn-title">Connect With Us</span>
			</a>
		</div>
	</div>
</section>

	<!--End Call To Action -->

{{-- <section class="testimonial-section-two pb-0">
	<div class="auto-container">
		<div class="testimonials">
			<div class="swiper testimonial-two-slider">
				<div class="swiper-wrapper">

					<!-- Testimonial 1 -->
					<div class="swiper-slide">
						<div class="testimonial-block-two">
							<div class="row">
								<div class="image-column col-lg-6 col-md-12">
									<figure class="image">
										<img src="/frontend/my-img/user-2.jpg" alt="Client Review" style="width:551px; zheight:452px; object-fit:cover; object-position:center; display:block;">
									</figure>
								</div>
								<div class="content-column col-lg-6 col-md-12">
									<span class="icon icon-quote"></span>
									<div class="text">
										Hi Tech Enterprises delivered advanced machinery that significantly improved
										our project efficiency. Their technical support and timely delivery were excellent.
									</div>
									<div class="info-box">
										<h4 class="name">Rajesh Mehta</h4>
										<div class="designation">Project Manager at <span>Mehta Infra Projects</span></div>
										<div class="testimonial-pagination"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Testimonial 2 -->
					<div class="swiper-slide">
						<div class="testimonial-block-two">
							<div class="row">
								<div class="image-column col-lg-6 col-md-12">
									<figure class="image">
										<img src="/frontend/my-img/user-1.jpg" alt="Client Review" style="width:551px; zheight:452px; object-fit:cover; object-position:center; display:block;">
									</figure>
								</div>
								<div class="content-column col-lg-6 col-md-12">
									<span class="icon icon-quote"></span>
									<div class="text">
										The machinery quality and performance exceeded our expectations.
										Hi Tech Enterprises understands industrial requirements very well.
									</div>
									<div class="info-box">
										<h4 class="name">Ankit Sharma</h4>
										<div class="designation">Operations Head at <span>Sharma Engineering</span></div>
										<div class="testimonial-pagination"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Testimonial 3 -->
					<div class="swiper-slide">
						<div class="testimonial-block-two">
							<div class="row">
								<div class="image-column col-lg-6 col-md-12">
									<figure class="image">
										<img src="/frontend/my-img/user-3.jpg" alt="Client Review" style="width:551px; zheight:452px; object-fit:cover; object-position:center; display:block;">
									</figure>
								</div>
								<div class="content-column col-lg-6 col-md-12">
									<span class="icon icon-quote"></span>
									<div class="text">
										From consultation to installation, the entire process was smooth.
										Their machines are reliable and built with modern technology.
									</div>
									<div class="info-box">
										<h4 class="name">Suresh Patel</h4>
										<div class="designation">Director at <span>Patel Construction Co.</span></div>
										<div class="testimonial-pagination"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Navigation -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>
	</div>
</section> --}}


<section class="newsletter-section">
		<div class="auto-container">
			<div class="row g-0">
				
				<!-- Contact Block -->
				<div class="contact-block col-lg-6">
					<div class="inner-box">

						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<div class="inner-box2">
								<div class="icon-box">
									<i class="icon fa fa-solid fa-headphones"></i>
								</div>
								<div class="content-box">
									<h5>Help Center</h5>
									<div class="text">24/7 Support<br>+(258) 629-32-238</div>
								</div>
							</div>
						</div>

						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<div class="inner-box2">
								<div class="icon-box">
									<i class="icon fa fa-map-marker-alt"></i>
								</div>
								<div class="content-box">
									<h5>Our Location</h5>
									<div class="text">USA, New York - 1060<br>+Str. First Avenue 1</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Newsletter Block -->
				<div class="newsletter-block col-lg-6 mb-0">
					<div class="inner-box">
						<div class="subscribe-form">
							<h5 class="title">Contact our professional team today.</h5>
							<form method="post" action="#">
								<div class="form-group">
									<button type="button" class="theme-btn btn-style-one dark-bg"><i class="icon fa fas fa-phone"></i><span class="btn-title">Talk to an Expert </span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	
<script>
  // ===== Equipment Section =====
  const equipmentBtn = document.getElementById('toggleEquipment'); // make sure your first button id="toggleEquipment"
  equipmentBtn.addEventListener('click', function(e) {
    e.preventDefault();

    const hiddenItems = document.querySelectorAll('.machine-item.hidden');
    const btnText = this.querySelector('.btn-title');
    const btnIcon = this.querySelector('i');

    // Use computed style for correct initial detection
    const isVisible = window.getComputedStyle(hiddenItems[0]).display !== 'none';

    hiddenItems.forEach(item => {
      item.style.display = isVisible ? 'none' : 'block';
    });

    btnText.innerText = isVisible ? 'Show More' : 'Show Less';
    btnIcon.classList.toggle('fa-plus', isVisible);
    btnIcon.classList.toggle('fa-minus', !isVisible);
  });


  // ===== Brands Section =====
  const brandsBtn = document.getElementById('toggleBrandsBtn'); // make sure your second button id="toggleBrandsBtn"
  const extraBrandItems = document.querySelectorAll('.brand-item.extra');

  brandsBtn.addEventListener('click', function(e) {
    e.preventDefault();

    const btnIcon = this.querySelector('i');
    const btnText = this.querySelector('.btn-title');

    // Check computed style of first extra brand item
    const isVisible = window.getComputedStyle(extraBrandItems[0]).display !== 'none';

    extraBrandItems.forEach(item => {
      item.style.display = isVisible ? 'none' : 'flex'; // brands use flex layout
    });

    btnIcon.className = isVisible ? 'icon fa fas fa-plus' : 'icon fa fas fa-minus';
    btnText.textContent = isVisible ? 'Show More' : 'Show Less';
  });
</script>



@endsection