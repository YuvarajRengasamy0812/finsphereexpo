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
					<!-- <li class="item" rel="tab1">all</li>
					<li class="item" rel="tab2">Type 1</li>
					<li class="item" rel="tab3">Type 2</li> -->
					 @if(isset($categories) && count($categories) > 0)
                    @foreach($categories as $category)
                        <button class="item" data-filter="{{ $category['slug'] }}" class="{{ $loop->first ? 'active' : '' }}">
                            {{ $category['title'] }}
                        </button>
                    @endforeach
                @else
                    <button data-filter="*" class="active">All</button>
                @endif
				</ul>
				<div class="tabs-content">
					<div class="tab tab1" data-total-items="{{ $totalItems ?? 0 }}"
                 data-current-page="{{ $currentPage ?? 1 }}"
                 data-per-page="{{ $perPage ?? 10 }}"
                 data-has-more="{{ $hasMore ?? false ? 'true' : 'false' }}">
						<div class="row-gallery">
							<div class="gallery-cover">
								@foreach($galleryItems as $item)
								<div class="gallery-item" {{ $item['filter_class'] }}
								 >


									<a href="{{ asset($item['link']) }}" data-gallery="gallery-main">
										<div class="gal-open"><span>+</span></div>
										<img src="src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}">
										<div class="gal-item">
											<h4 class="title">Image #1</h4>
											<p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
										</div>
									</a>
								</div>
								 @endforeach
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--================== S-GALLERY END ==================-->
<script>
    (function() {
        'use strict';
        function initInfiniteScroll() {
            if (typeof jQuery === 'undefined') {
                setTimeout(initInfiniteScroll, 100);
                return;
            }
            var $ = jQuery;

            $(document).ready(function() {
                let isLoading = false;
                let $container = $('#gallery-items-container');
                let hasMore = $container.data('has-more') === true || $container.data('has-more') === 'true';
                let currentPage = parseInt($container.data('current-page')) || 1;
                const perPage = parseInt($container.data('per-page')) || 9;
                let currentCategory = '{{ $categoryFilter ?? "all" }}';

                // Category Filter Click
                $('.filter-menu1 button[data-filter]').on('click', function() {
                    $('.filter-menu1 button').removeClass('active');
                    $(this).addClass('active');

                    const filterValue = $(this).data('filter');
                    currentCategory = (filterValue === '*' ? 'all' : filterValue.replace('.', ''));

                    currentPage = 1;
                    hasMore = true;
                    $container.html('');
                    loadMoreItems(true);
                });

                // Infinite Scroll
                $(window).on('scroll', function() {
                    if (isLoading || !hasMore) return;
                    const scrollBottom = $(window).scrollTop() + $(window).height();
                    const containerBottom = $container.offset().top + $container.outerHeight();
                    if (containerBottom - scrollBottom < 300) {
                        loadMoreItems();
                    }
                });

                function loadMoreItems(resetPage = false) {
                    if (isLoading || !hasMore) return;
                    isLoading = true;
                    if (!resetPage) currentPage++;

                    $('#gallery-loading').show();

                    $.ajax({
                        url: '{{ url("/gallery") }}',
                        method: 'GET',
                        data: { page: currentPage, category: currentCategory },
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        success: function(response) {
                            if (response.success && response.items.length > 0) {
                                let html = '';
                                response.items.forEach(function(item) {
                                    html += `
                                        <div class="col-lg-4 col-md-6 filter-item ${item.filter_class}">
                                            <div class="gallery-style1">
                                                <div class="overlay"></div>
                                                <a href="{{ asset('') }}${item.link}" class="glightbox" data-gallery="gallery-main">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ asset('') }}${item.image}" alt="${item.alt}">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    `;
                                });
                                if (resetPage) $container.html(html);
                                else $container.append(html);

                                hasMore = response.hasMore;
                                $container.data('has-more', hasMore);
                                $container.data('current-page', currentPage);

                                // Reinitialize GLightbox
                                if (typeof GLightbox !== 'undefined') {
                                    GLightbox({ selector: '.glightbox' });
                                }
                            } else {
                                hasMore = false;
                            }
                            $('#gallery-loading').hide();
                            isLoading = false;
                        },
                        error: function() {
                            $('#gallery-loading').hide();
                            currentPage--;
                            isLoading = false;
                        }
                    });
                }
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initInfiniteScroll);
        } else {
            initInfiniteScroll();
        }
    })();
</script>
@endsection