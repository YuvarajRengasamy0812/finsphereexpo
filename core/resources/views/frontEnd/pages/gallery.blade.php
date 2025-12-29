@extends('frontEnd.layouts.master')

@section('title', 'Gallery - FinSphere Expo Kuwait')

@section('content')

<!--=================== PAGE-TITLE ===================-->
	<div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
		<div class="container">
			<h1 class="title-line-left">Gallery</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->

	<!--==================== S-GALLERY ====================-->
	<section class="s-gallery page-gallery">
		<div class="container">
			<div class="tab-wrap">
				<ul class="tab-nav gallery-tabs">
					<li class="item" rel="tab1">all</li>
					<li class="item" rel="tab2">Type 1</li>
					<li class="item" rel="tab3">Type 2</li>
				</ul>
				<div class="tabs-content">
					<div class="tab tab1">
						<div class="row-gallery">
							<div class="gallery-cover">
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-1.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-1.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #1</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-2.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-2.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #2</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-3.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-3.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #3</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-6.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-6.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #6</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-4.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-4.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #4</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-5.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-5.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #5</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab tab2">
						<div class="row-gallery">
							<div class="gallery-cover">
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-5.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-5.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #1</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-2.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-2.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #2</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-3.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-3.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #3</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-4.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-4.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #6</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-6.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-6.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #4</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-1.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-1.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #5</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab tab3">
						<div class="row-gallery">
							<div class="gallery-cover">
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-3.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-3.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #1</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-2.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-2.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #2</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-5.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-5.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #3</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-6.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-6.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #6</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-4.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-4.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #4</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								<div class="gallery-item">
									<a href="{{ asset('assets/frontend/img/gal-1.jpg') }}" data-fancybox="gallery1">
										<div class="gal-open"><span>+</span></div>
										<img src="{{ asset('assets/frontend/img/gal-1.jpg') }}" alt="img">
										<div class="gal-item">
											<h4 class="title">Image #5</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================== S-GALLERY END ==================-->

@endsection