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

    <section class="s-gallery page-gallery">
        <div class="container">

            <!-- Category Filter -->
            <ul class="tab-nav gallery-tabs filter-menu1 mb-4 d-flex flex-wrap gap-2 justify-content-center">
                @foreach ($categories ?? [] as $category)
                    <li class="item px-3 py-1 {{ $loop->first ? 'active' : '' }}" data-filter="{{ $category['slug'] }}">
                        {{ $category['title'] }}
                    </li>
                @endforeach
            </ul>

            <!-- Gallery -->
            <div id="gallery-items" data-current-page="{{ $currentPage ?? 1 }}"
                data-has-more="{{ $hasMore ? 'true' : 'false' }}" class="row gx-3 gy-4">

                @foreach ($galleryItems as $item)
                    <div class="col-lg-4 col-md-6 filter-item {{ $item['filter_class'] }}">
                        <div class="gallery-card shadow-sm rounded-3">
                            <div class="gallery-thumb" data-src="{{ asset($item['link']) }}" data-alt="{{ $item['alt'] }}">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}"
                                    class="w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Loader -->
            <div id="gallery-loading" class="text-center mt-4" style="display:none;">
                <i class="fas fa-spinner fa-spin fa-2x"></i>
                <p class="mt-2">Loading more images…</p>
            </div>

        </div>
    </section>

    <!-- ================= LIGHTBOX ================= -->
    <div id="lightbox">
        <div class="lightbox-toolbar">
            <button data-action="zoom-in"><i data-lucide="zoom-in"></i></button>
            <button data-action="zoom-out"><i data-lucide="zoom-out"></i></button>
            <button data-action="download"><i data-lucide="download"></i></button>
            <button data-action="share"><i data-lucide="share-2"></i></button>
            <button data-action="close"><i data-lucide="x"></i></button>
        </div>

        <div class="lightbox-content">
            <img id="lightbox-img" src="" alt="">
        </div>
    </div>

    <!-- ================= STYLES ================= -->
    <style>
        .page-gallery .row {
            margin-left: -10px;
            margin-right: -10px;
        }

        .page-gallery .row>[class*="col-"] {
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 20px;
        }


        .gallery-card {
            border-radius: 14px;
            overflow: hidden;
            transition: transform .25s ease;
        }

        .gallery-card:hover {
            transform: translateY(-3px);
        }

        .gallery-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            /* keeps grid clean */
            overflow: hidden;
            cursor: zoom-in;
        }


        .gallery-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Lightbox */
        #lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .92);
            display: none;
            z-index: 9999;
        }

        #lightbox.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .lightbox-toolbar {
            position: absolute;
            top: 16px;
            right: 24px;
            display: flex;
            gap: 12px;
            z-index: 2;
        }


        .lightbox-toolbar button {
            background: rgba(255, 255, 255, .12);
            border: none;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
        }

        .lightbox-content {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            max-height: 100%;
        }

        #lightbox-img {
            max-width: 90vw;
            max-height: 85vh;
            object-fit: contain;
            transform-origin: center center;
        }
    </style>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        lucide.createIcons();

        let scale = 1;
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');

        /* OPEN (delegated – works for AJAX) */
        document.addEventListener('click', e => {
            const thumb = e.target.closest('.gallery-thumb');
            if (!thumb) return;

            scale = 1;
            img.src = thumb.dataset.src;
            img.alt = thumb.dataset.alt || '';
            img.style.transform = 'scale(1)';
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        /* TOOLBAR */
        document.querySelectorAll('.lightbox-toolbar button').forEach(btn => {
            btn.onclick = () => {
                const action = btn.dataset.action;

                if (action === 'zoom-in') scale += 0.2;
                if (action === 'zoom-out') scale = Math.max(0.6, scale - 0.2);
                if (action === 'download') {
                    const a = document.createElement('a');
                    a.href = img.src;
                    a.download = '';
                    a.click();
                }
                if (action === 'share') navigator.share?.({
                    url: img.src
                });
                if (action === 'close') closeLightbox();

                img.style.transform = `scale(${scale})`;
            };
        });

        /* CLOSE */
        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeLightbox();
        });

        lightbox.addEventListener('click', e => {
            if (e.target === lightbox) closeLightbox();
        });
    </script>

    <script>
        (function($) {
            let loading = false;
            let page = parseInt($('#gallery-items').data('current-page'));
            let hasMore = $('#gallery-items').data('has-more') === 'true';
            let category = 'all';

            $('.filter-menu1 li').on('click', function() {
                if (loading) return;

                $('.filter-menu1 li').removeClass('active');
                $(this).addClass('active');

                category = $(this).data('filter');
                page = 1;
                hasMore = true;

                $('#gallery-items').empty();
                loadMore(true);
            });


            $(window).on('scroll', function() {
                if (!hasMore || loading) return;
                if ($(window).scrollTop() + $(window).height() >
                    $('#gallery-items').offset().top + $('#gallery-items').outerHeight() - 200)

            });

            function loadMore(reset = false) {
                loading = true;
                if (!reset) page++;

                $('#gallery-loading').show();

                $.get('{{ url('/gallery') }}', {
                    page,
                    category
                }, function(res) {
                    if (!res.success || !res.items.length) {
                        hasMore = false;
                    } else {
                        let html = '';
                        res.items.forEach(item => {
                            html += `
                    <div class="col-lg-4 col-md-6 filter-item ${item.filter_class}">
                        <div class="gallery-card">
                            <div class="gallery-thumb"
                                 data-src="{{ asset('') }}${item.link}"
                                 data-alt="${item.alt}">
                                <img src="{{ asset('') }}${item.image}" alt="${item.alt}">
                            </div>
                        </div>
                    </div>`;
                        });
                        $('#gallery-items').append(html);
                    }
                    $('#gallery-loading').hide();
                    loading = false;
                });
            }
        })(jQuery);
    </script>

@endsection 

