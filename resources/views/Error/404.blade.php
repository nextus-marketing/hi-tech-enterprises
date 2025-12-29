@extends('layouts.frontend')

@section('title')
    404 Not Found |Hi-Tech Enterprises
@endsection

@section('content')

<section class="">
		<div class="auto-container pt-120 pb-70">
			<div class="row">
				<div class="col-xl-12">
					<div class="error-page__inner">
						<div class="error-page__title-box">
							<img src="/frontend/images/resource/404.jpg" alt="">
							<h3 class="error-page__sub-title">Page not found!</h3>
						</div>
						<p class="error-page__text">Sorry we can't find that page! The page you are looking <br> for
							was never existed.</p>
						<a href="/" class="theme-btn btn-style-one shop-now"><span class="btn-title">Back to Home</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
