<style>
    /* ===== Carousel Wrapper ===== */
    .fk-card-carousel {
        width: 100%;
        max-width: 1400px;
        position: relative;
        overflow: hidden;
    }

    /* ===== Track ===== */
    .fk-card-track {
        display: flex;
        gap: 24px;
        transition: transform 0.6s ease;
    }

    /* ===== Card ===== */
    .fk-card {
        flex: 0 0 calc(33.333% - 16px);
        /* 3 cards desktop */
        height: 420px;
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        cursor: pointer;
    }

    .fk-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .fk-card:hover img {
        transform: scale(1.08);
    }

    /* ===== Overlay ===== */
    .fk-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top,
                rgba(0, 0, 0, 0.9),
                rgba(0, 0, 0, 0.3),
                transparent);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 24px;
        transition: 0.4s ease;
    }

    /* Always show heading */
    .fk-card h3 {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    /* Hide subheading normally */
    .fk-card p {
        color: #ddd;
        font-size: 15px;
        line-height: 1.5;
        opacity: 0;
        max-height: 0;
        transition: 0.4s ease;
    }

    /* Hover reveal */
    .fk-card:hover p {
        opacity: 1;
        max-height: 120px;
    }

    /* ===== Arrows ===== */
    .fk-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        z-index: 10;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.5);
    }

    .fk-prev {
        left: 7px;
    }

    .fk-next {
        right: 7px;
    }

    .fk-nav:hover {
        transform: translateY(-50%) scale(1.1);
    }

    /* ===== Responsive ===== */

    /* Medium screen → 2 cards */
    @media(max-width:1024px) {
        .fk-card {
            flex: 0 0 calc(50% - 12px);
        }
    }

    /* Small screen → 1 card */
    @media(max-width:600px) {
        .fk-card {
            flex: 0 0 100%;
        }
    }
</style>

<section class="IS-section">
    <div class="container">

        <div class="IS-header text-center">
            <span class="IS-eyebrow"><b>FINSPHERE EXPO KUWAIT</b></span>
            <h2 class="IS-title">Industries & Sectors Covered</h2>
            <p class="IS-subtitle">
                A focused showcase of the most influential financial, trading, and technology sectors shaping global
                markets.
            </p>
        </div>

        <div class="fk-card-carousel">
            <button class="fk-nav fk-prev" id="prevBtn">‹</button>
            <button class="fk-nav fk-next" id="nextBtn">›</button>


            <div class="fk-card-track" id="track">

                <!-- Card 1 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/forex-cfd.png') }}">
                    <div class="fk-card-overlay">
                        <h3>Forex & CFD Trading</h3>
                        <p>Global brokers, multi-asset trading firms, and advanced execution models.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/digital-assets.png') }}">
                    <div class="fk-card-overlay">
                        <h3>Digital Assets</h3>
                        <p>Exchanges, custodians, wallets, and institutional digital asset solutions.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/financial-expo.png') }}">
                    <div class="fk-card-overlay">
                        <h3>Financial Expo</h3>
                        <p>Infrastructure, smart contracts, Web3 platforms, and tokenization.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/fintech-payment.png') }}">
                    <div class="fk-card-overlay">
                        <h3>Fintech & Payment Solutions</h3>
                        <p>Digital payments, banking innovation, compliance, and financial APIs.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/trading-expo.png') }}">
                    <div class="fk-card-overlay">
                        <h3>Trading Platforms & Technology</h3>
                        <p>MT, proprietary platforms, analytics, and trading infrastructure.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/liquidity.png') }}">
                    <div class="fk-card-overlay">
                        <h3>Liquidity, CRM & Brokerage</h3>
                        <p>Prime liquidity, risk management, back-office, and CRM systems.</p>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="fk-card">
                    <img src="{{ asset('assets/frontend/img/resources/automation.png') }}">
                    <div class="fk-card-overlay">
                        <h3>AI, Automation & Analytics</h3>
                        <p>Machine learning, algorithmic trading, predictive analytics, and automation tools.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@push('scripts')
   <script>
    const track = document.getElementById('track');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const carousel = document.querySelector('.fk-card-carousel');

    let index = 0;
    let autoplayInterval = null;
    const autoplayDelay = 3500;

    function getCardsPerView() {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
    }

    function moveCarousel() {
        const cardWidth = document.querySelector('.fk-card').offsetWidth + 24;
        track.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    function nextSlide() {
        const cards = document.querySelectorAll('.fk-card').length;
        const perView = getCardsPerView();

        if (index < cards - perView) {
            index++;
        } else {
            index = 0; // loop back
        }
        moveCarousel();
    }

    function startAutoplay() {
        stopAutoplay();
        autoplayInterval = setInterval(nextSlide, autoplayDelay);
    }

    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }

    nextBtn.onclick = () => {
        stopAutoplay();
        nextSlide();
        startAutoplay();
    };

    prevBtn.onclick = () => {
        stopAutoplay();
        if (index > 0) {
            index--;
        } else {
            const cards = document.querySelectorAll('.fk-card').length;
            index = cards - getCardsPerView();
        }
        moveCarousel();
        startAutoplay();
    };

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);

    window.addEventListener('resize', () => {
        index = 0;
        moveCarousel();
    });

    // Init
    startAutoplay();
</script>

@endpush
