@extends('layouts.frontend')
@section('title') Blogs | Hi-Tech Enterprises @endsection
@section('content')
<!-- Start main-content -->
	<section class="page-title" style="background-image: url(/frontend/my-img/bredcrum.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Blogs</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Blogs</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

    <section class="news-section pb-70">
    <div class="auto-container">
			<div class="row">
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/blog-details"><img src="/frontend/images/resource/news-1.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa fa-user-circle"></i> Sowat A</li>
								<li><i class="fa fa-comments"></i> 256 Comments</li>
							</ul>
							<h4 class="title"><a href="/blog-details">How Sustainable Practices Are Reshaping the...</a></h4>
							<a href="/blog-details" class="read-more">Read More <i class="fa fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/blog-details"><img src="/frontend/images/resource/news-2.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa fa-user-circle"></i> Sowat A</li>
								<li><i class="fa fa-comments"></i> 256 Comments</li>
							</ul>
							<h4 class="title"><a href="/blog-details">How Sustainable Practices Are Reshaping the...</a></h4>
							<a href="/blog-details" class="read-more">Read More <i class="fa fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/blog-details"><img src="/frontend/images/resource/news-3.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa fa-user-circle"></i> Sowat A</li>
								<li><i class="fa fa-comments"></i> 256 Comments</li>
							</ul>
							<h4 class="title"><a href="/blog-details">How Sustainable Practices Are Reshaping the...</a></h4>
							<a href="/blog-details" class="read-more">Read More <i class="fa fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
    </div>
  </section>
@endsection