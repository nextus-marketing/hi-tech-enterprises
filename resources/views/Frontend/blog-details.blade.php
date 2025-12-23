@extends('layouts.frontend')
@section('title') Blog Details | Hi Tech Enterprises @endsection
@section('content')
<!-- Start main-content -->
	<section class="page-title" style="background-image: url(/frontend/my-img/bredcrum.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Blog Details</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Blog Details</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="blog-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="blog-details__left">
						<div class="blog-details__img">
							<img src="/frontend/images/resource/news-details.jpg" alt="">
							<div class="blog-details__date">
								<span class="day">28</span>
								<span class="month">Aug</span>
							</div>
						</div>
						<div class="blog-details__content">
							<ul class="list-unstyled blog-details__meta">
								<li><a href="#0"><i class="fas fa-user-circle"></i> Admin</a> </li>
							</ul>
							<h3 class="blog-details__title">Transport & Logistics Services</h3>
							<p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
								amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
								nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
								interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
								pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
							</p>
							<p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
								amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
								nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
								interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
								pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
							</p>
							<p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
								amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
								nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
								interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
								pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="sidebar">
						<div class="sidebar__single sidebar__post">
							<h3 class="sidebar__title">Latest Posts</h3>
							<ul class="sidebar__post-list list-unstyled">
								<li>
									<div class="sidebar__post-image"> <img src="/frontend/images/resource/news-1.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="#0">Top crypto exchange influencers</a>
										</h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="/frontend/images/resource/news-2.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="#0">Necessity may give us best virtual court</a> </h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="/frontend/images/resource/news-3.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="#0">You should know about business plan</a> </h3>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection