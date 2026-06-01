<?php
// Auto-copier for premium visual assets to run on page load
$assets_to_copy = [
    "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/ultra-realistic-luxury-dining-room-interior-with-imported-marble-dining-table.jpg" => "assets/images/services/ss-service-2-1.avif",
    "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/Luxury-modular-kitchen-with-quartz-countertop.jpg" => "assets/images/services/ss-service-2-2.avif",
    "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/luxury-modern-living-room-interior-with-backlit-onyx-marble-wall-panel-glowing-softly.jpg" => "assets/images/services/ss-service-2-3.avif",
    "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/Luxury-lounge-interior-with-designer-sofa.jpg" => "assets/images/services/ss-service-2-4.avif",
    "C:/Users/meetb/.gemini/antigravity-ide/brain/f21d41ae-c1c3-4084-ad07-451a3a738a9a/about_us_main_1780126839072.png" => "assets/images/resources/about-one-image-1.avif",
    "C:/Users/meetb/.gemini/antigravity-ide/brain/f21d41ae-c1c3-4084-ad07-451a3a738a9a/about_us_video_1780126859750.png" => "assets/images/resources/about-one-img-2.avif",
    "C:/Users/meetb/.gemini/antigravity-ide/brain/f21d41ae-c1c3-4084-ad07-451a3a738a9a/who_we_serve_main_1780127536951.png" => "assets/images/resources/who-we-serve-img-1.avif"
];

foreach ($assets_to_copy as $src => $dest) {
    if (!file_exists($dest) || filesize($dest) === 0) {
        $dir = dirname($dest);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        @copy($src, $dest);
    }
}

$pageTitle = "Home One";
include 'include/header.php';
?>
<style>
/* Custom overrides to optimize heights, ratios, and dynamic animations of images in the About Us section */
.about-one__img, .about-one__img-2 {
    overflow: hidden;
    position: relative;
    border-radius: var(--cleanon-bdr-radius, 12px) !important;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    transition: all 0.5s ease-in-out;
}

.about-one__img img, .about-one__img-2 img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1) !important;
}

.about-one__img:hover img, .about-one__img-2:hover img {
    transform: scale(1.05) !important;
}

.about-one__img:hover, .about-one__img-2:hover {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

@media (min-width: 1200px) {
    .about-one__img {
        height: 510px !important; /* Premium tall layout to balance the right column */
    }
    .about-one__img-2 {
        height: 300px !important; /* Increased height to make the image stand out and balance beautifully */
    }
}

@media (max-width: 1199px) {
    .about-one__img {
        height: 420px !important;
    }
    .about-one__img-2 {
        height: 360px !important; /* Increased height for visual prominence on smaller screens */
    }
}

/* Premium spacing, alignment, and styling for map popups */
.office-location__popup-inner {
    padding: 15px !important;
    background: #ffffff !important;
    border-radius: 10px !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12) !important;
    display: flex !important;
    align-items: center !important;
    gap: 15px !important;
    border: 1px solid rgba(246, 175, 33, 0.15) !important;
}

.office-location__popup-img {
    width: 60px !important;
    height: 60px !important;
    border-radius: 6px !important;
    overflow: hidden !important;
    flex-shrink: 0 !important;
    margin: 0 !important;
}

.office-location__popup-img img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

.office-location__popup-content {
    text-align: left !important;
    padding: 0 !important;
}

.office-location__popup-content p {
    font-family: 'Poppins', sans-serif !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    color: #1a1a1a !important;
    line-height: 1.3 !important;
    margin: 0 0 4px 0 !important;
}

.office-location__popup-content span {
    font-family: 'Rubik', sans-serif !important;
    font-size: 12px !important;
    color: #f6af21 !important;
    font-weight: 500 !important;
    display: block !important;
    margin: 0 !important;
    text-transform: none !important;
}

/* Expand Office Location section padding and overall map height */
.office-location {
    padding: 150px 0 !important;
}

@media (min-width: 1200px) {
    .office-location__map-box {
        height: 600px !important;
    }
    .office-location__map-img img {
        height: 600px !important;
        object-fit: cover !important;
    }
}

/* Expand Cost Calculator section padding */
.contact-one {
    padding: 160px 0 !important;
}

/* Premium styling for Cost Calculator contact info card to ensure normal-sized email fits beautifully without wrapping */
@media (min-width: 1200px) {
    .contact-one__contact-info-box {
        width: 380px !important;
        max-width: 380px !important;
        left: -240px !important;
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .contact-one__contact-info-box {
        width: 360px !important;
        max-width: 360px !important;
        left: -220px !important;
    }
}
</style>
<!--Main Slider Start-->
<section class="main-slider">
    <div class="swiper-container main-slider__carousel">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="main-slider__bg" style="background-image: url(assets/images/backgrounds/ss-slider-1.png);">
                </div>
                <div class="main-slider__shape-1"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h4 class="main-slider__sub-title">PREMIUM SURFACE PROTECTION</h4>
                                <h2 class="main-slider__title">Luxury Protection <br> for Elegant <span>Dining
                                        Tables.</span>
                                </h2>
                                <p class="main-slider__text">Protect your exquisite imported marble and premium wooden
                                    dining tables from scratches, <br> stains, and high heat while retaining 100% of
                                    their natural finish and gloss.</p>
                                <div class="main-slider__btn-and-review-box">
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn" href="services.php">Explore Solutions
                                            <i class="fal fa-long-arrow-right"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="main-slider__bg" style="background-image: url(assets/images/backgrounds/ss-slider-2.png);">
                </div>
                <div class="main-slider__shape-1"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h4 class="main-slider__sub-title">HIGH-END KITCHEN CARE</h4>
                                <h2 class="main-slider__title">Shield Premium <br> Countertops &
                                    <span>Appliances.</span>
                                </h2>
                                <p class="main-slider__text">Our advanced protection films guard luxury modular kitchen
                                    countertops and premium <br> metallic double-door refrigerators against acid spills,
                                    fingerprint smudges, and deep scratches.</p>
                                <div class="main-slider__btn-and-review-box">
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn" href="services.php">Explore Solutions
                                            <i class="fal fa-long-arrow-right"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="main-slider__bg" style="background-image: url(assets/images/backgrounds/ss-slider-3.png);">
                </div>
                <div class="main-slider__shape-1"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h4 class="main-slider__sub-title">DESIGNER FURNITURE CARE</h4>
                                <h2 class="main-slider__title">Maintain Pristine <br> Glass & Marble
                                    <span>Consoles.</span>
                                </h2>
                                <p class="main-slider__text">Prevent micro-scratches and smudges on your living room
                                    center glass tables, coffee <br> tables, and designer marble console tables with our
                                    premium, self-healing invisible films.</p>
                                <div class="main-slider__btn-and-review-box">
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn" href="services.php">Explore Solutions
                                            <i class="fal fa-long-arrow-right"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <!-- If we need navigation buttons -->

    </div>
</section>
<!--Main Slider End-->
<!--Services One Start -->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-icon">
                    <span class="icon-star-1"></span>
                </div>
                <span class="section-title__tagline">Services</span>
            </div>
            <h2 class="section-title__title title-animation">Protect Your Premium Surfaces</h2>
        </div>
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__count"></div>
                    <div class="services-one__sub-title">
                        <h3>Marble Wall</h3>
                    </div>
                    <div class="services-one__content">
                        <div class="services-one__icon">
                            <span class="icon-house"></span>
                            <div class="services-one__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                        <h3 class="services-one__title"><a href="exterior-marble-wall-protection.php">Exterior
                                Marble Care</a>
                        </h3>
                        <p class="services-one__text">Premium weather-proof protection film to preserve natural marble
                            wall panels.</p>
                        <div class="services-one__read-more">
                            <a href="exterior-marble-wall-protection.php">Read More<span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                <div class="services-one__single">
                    <div class="services-one__count"></div>
                    <div class="services-one__sub-title">
                        <h3>Glass Tables</h3>
                    </div>
                    <div class="services-one__content">
                        <div class="services-one__icon">
                            <span class="icon-house-cleaning"></span>
                            <div class="services-one__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                        <h3 class="services-one__title"><a
                                href="center-glass-tables.php">Center Glass Shield</a>
                        </h3>
                        <p class="services-one__text">Invisible, high-gloss scratch protection for luxury center glass
                            tables.</p>
                        <div class="services-one__read-more">
                            <a href="center-glass-tables.php">Read More<span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__count"></div>
                    <div class="services-one__sub-title">
                        <h3>Dining Tables</h3>
                    </div>
                    <div class="services-one__content">
                        <div class="services-one__icon">
                            <span class="icon-bed"></span>
                            <div class="services-one__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                        <h3 class="services-one__title"><a href="dining-table-protection.php">Dining
                                Table Shield</a>
                        </h3>
                        <p class="services-one__text">Heat and stain-resistant film shield for imported marble dining
                            tables.</p>
                        <div class="services-one__read-more">
                            <a href="dining-table-protection.php">Read More<span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="services-one__single">
                    <div class="services-one__count"></div>
                    <div class="services-one__sub-title">
                        <h3>Appliances</h3>
                    </div>
                    <div class="services-one__content">
                        <div class="services-one__icon">
                            <span class="icon-vacuum"></span>
                            <div class="services-one__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                        <h3 class="services-one__title"><a href="fridge-protection.php">Premium Fridge
                                Film</a>
                        </h3>
                        <p class="services-one__text">Fingerprint-free, glossy protection for luxury metallic
                            double-door fridges.</p>
                        <div class="services-one__read-more">
                            <a href="fridge-protection.php">Read More<span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__count"></div>
                    <div class="services-one__sub-title">
                        <h3>Consoles</h3>
                    </div>
                    <div class="services-one__content">
                        <div class="services-one__icon">
                            <span class="icon-window"></span>
                            <div class="services-one__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                        <h3 class="services-one__title"><a
                                href="marble-console-table.php">Marble Console Shield</a>
                        </h3>
                        <p class="services-one__text">Premium invisible scratch defense for delicate statement console
                            tables.</p>
                        <div class="services-one__read-more">
                            <a href="marble-console-table.php">Read More<span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="services-one__single">
                    <div class="services-one__count"></div>
                    <div class="services-one__sub-title">
                        <h3>Nano Coating</h3>
                    </div>
                    <div class="services-one__content">
                        <div class="services-one__icon">
                            <span class="icon-cleaning-service"></span>
                            <div class="services-one__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                        <h3 class="services-one__title"><a href="fabric-nano-coating.php">Fabric
                                Nano Coating</a>
                        </h3>
                        <p class="services-one__text">Hydrophobic nano barrier to resist spills, dust, and stains on
                            sofas.</p>
                        <div class="services-one__read-more">
                            <a href="fabric-nano-coating.php">Read More<span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
        </div>
    </div>
</section>
<!--Services One End -->
<!--About One Start -->
<section class="about-one">
    <h2 class="about-one__big-text">About Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 wow fadeInLeft" data-wow-delay="100ms">
                <div class="about-one__left">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="assets/images/resources/about-one-image-1.avif" alt="">
                        </div>
                        <div class="about-one__experience-box">
                            <div class="about-one__experience-box-shape"
                                style="background-image: url(assets/images/shapes/about-one-experience-box-shape.png);">
                            </div>
                            <div class="about-one__experience-count">
                                <h3 class="odometer" data-count="12">00</h3>
                                <span>+</span>
                            </div>
                            <p class="about-one__experience-count-text">Years Of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="about-one__right">
                    <div class="about-one__right-bg-shape"
                        style="background-image: url(assets/images/shapes/about-one-right-bg-shape.png);"></div>
                    <div class="about-one__right-shape-1">
                        <img src="" alt="">
                    </div>
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">About Us</span>
                        </div>
                        <h2 class="section-title__title title-animation">Focused by Care, Crafted for Perfection
                        </h2>
                    </div>
                    <p class="about-one__text">At Surface Shield we believe premium interiors deserve flawless
                        preservation. From delicate marble to fine fabrics, our advanced invisible
                        films shield your luxury surfaces without changing their texture, color, or shine.</p>
                    <ul class="about-one__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Eco-friendly, ultra-pure polyurethane films.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Self-healing scratch and stain repellent properties.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Preserves the exact texture, gloss, and color.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Long-term 5 to 10 year warranty protection.</p>
                        </li>
                    </ul>
                    <div class="about-one__btn-and-review">
                        <div class="about-one__btn-box">
                            <a class="thm-btn" href="about.php">More About Us
                                <i class="fal fa-long-arrow-right"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                        <div class="about-one__review-box">
                            <ul class="clearfix">
                                <li>
                                    <div class="img-box"><img src="assets/images/resources/main-slider-review-1-1.avif"
                                            alt="#">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box"><img src="assets/images/resources/main-slider-review-1-2.avif"
                                            alt="#">
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box"><img src="assets/images/resources/main-slider-review-1-3.avif"
                                            alt="#">
                                    </div>
                                </li>
                            </ul>
                            <div class="text-box">
                                <h2>Customer Satisfied</h2>
                                <p>4.8 (15k Reviews)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 wow fadeInRight" data-wow-delay="300ms">
                <div class="about-one__end">
                    <div class="about-one__img-box-2">
                        <div class="about-one__img-2">
                            <img src="assets/images/resources/about-one-img-2.avif" alt="">
                        </div>
                        <div class="about-one__video-link">
                            <a href="https://www.youtube.com/watch?v=rbFoRH2deeY" class="video-popup">
                                <div class="about-one__video-icon">
                                    <span class="fas fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="about-one__active-staff">
                        <div class="icon">
                            <span class="icon-completed-task"></span>
                        </div>
                        <div class="about-one__active-staff-count-box">
                            <div class="about-one__active-staff-count">
                                <h3 class="odometer" data-count="12">00</h3>
                                <span>+</span>
                            </div>
                            <p class="about-one__active-staff-count-text">Years of Expertise</p>
                        </div>
                    </div>
                    <div class="about-one__award-box">
                        <div class="about-one__award-box-bg"
                            style="background-image: url(assets/images/resources/about-one-image-1.png);">
                        </div>
                        <div class="about-one__award-img-1">
                            <img src="assets/images/resources/about-one-award-img-1.avif" alt="">
                        </div>
                        <span class="about-one__award-year">2012</span>
                        <h3 class="about-one__award-title">Top-Rated Luxury Surface Protection Brand</h3>
                        <p class="about-one__award-sub-title">by Architecture Association</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End -->
<!--Services Two Start -->
<section class="services-two">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-icon">
                    <span class="icon-star-1"></span>
                </div>
                <span class="section-title__tagline">Our Service</span>
            </div>
            <h2 class="section-title__title title-animation">Premium Surface Protection
            </h2>
        </div>
        <div class="row">
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/ss-service-2-1.avif" alt="">
                        </div>
                    </div>
                    <div class="services-two__content">
                        <h3 class="services-two__title"><a href="dining-table-protection.php">Dining Table Shield</a>
                        </h3>
                        <p class="services-two__text">Protects premium imported dining tables from stains, heat plates,
                            and scratches.</p>
                        <div class="services-two__btn-box">
                            <a href="dining-table-protection.php">Read More <span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-house"></span>
                            <div class="services-two__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/ss-service-2-2.avif" alt="">
                        </div>
                    </div>
                    <div class="services-two__content">
                        <h3 class="services-two__title"><a href="kitchen-marble-protection.php">Kitchen Marble
                                Shield</a>
                        </h3>
                        <p class="services-two__text">Advanced oil and acid repellent shield designed for luxury quartz
                            countertops.</p>
                        <div class="services-two__btn-box">
                            <a href="kitchen-marble-protection.php">Read More <span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-clean"></span>
                            <div class="services-two__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/ss-service-2-3.avif" alt="">
                        </div>
                    </div>
                    <div class="services-two__content">
                        <h3 class="services-two__title"><a href="exterior-marble-wall-protection.php">Exterior Marble
                                Wrap</a></h3>
                        <p class="services-two__text">Weatherproof and UV-resistant film shield for exterior stone
                            cladding walls.</p>
                        <div class="services-two__btn-box">
                            <a href="exterior-marble-wall-protection.php">Read More <span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-cleaning-service"></span>
                            <div class="services-two__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/ss-service-2-4.avif" alt="">
                        </div>
                    </div>
                    <div class="services-two__content">
                        <h3 class="services-two__title"><a href="fabric-nano-coating.php">Fabric Upholstery Wrap</a>
                        </h3>
                        <p class="services-two__text">Hydrophobic nano barrier coating to shield designer sofas against
                            liquid spills.</p>
                        <div class="services-two__btn-box">
                            <a href="fabric-nano-coating.php">Read More <span
                                    class="fas fa-long-arrow-right"></span></a>
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-window"></span>
                            <div class="services-two__icon-2">
                                <i class="icon-star-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--Services Two End -->
<!--Who We Serve Start -->
<section class="who-we-serve">
    <div class="who-we-serve__bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="who-we-serve__left">
                    <div class="row align-items-stretch">
                        <div class="col-xl-4 col-lg-5 col-md-5 d-flex align-items-stretch">
                            <div class="who-we-serve__img-1 w-100 h-100 d-flex">
                                <img src="assets/images/resources/who-we-serve-img-1.avif" alt=""
                                    style="width: 88%; height: 100%; object-fit: cover; border-radius: var(--cleanon-bdr-radius);">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-7">
                            <div class="who-we-serve__form-inner">
                                <div class="who-we-serve__from-text">
                                    <h5>Get <br> A Free <br> Quote</h5>
                                </div>
                                <div class="who-we-serve__form-inner-wrap">
                                    <div class="who-we-serve__form-inner-bg-shape"
                                        style="background-image: url(assets/images/shapes/who-we-serve-form-inner-bg-shape.png);">
                                    </div>
                                    <form class="contact-form-validated who-we-serve__form"
                                        action="https://dreamlayout.mnsithub.com/php/cleanonphp/assets/inc/sendemail.php"
                                        method="post" novalidate="novalidate">
                                        <input type="hidden" name="_token"
                                            value="5fe9ed6d9e1de26a60411b5759d09447d391da4ae9f6fa8bb6a78391f1e80973">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="who-we-serve__input-box">
                                                    <input type="text" name="name" placeholder="Full Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="who-we-serve__input-box">
                                                    <input type="text" name="phone" placeholder="Phone Number"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="who-we-serve__input-box">
                                                    <input type="text" placeholder="Date" name="date" id="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="who-we-serve__input-box">
                                                    <input type="text" name="time" placeholder="Chose A Time">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="who-we-serve__input-box">
                                                    <div class="select-box">
                                                        <select class="selectmenu wide">
                                                            <option selected="selected">Choose Protection Type</option>
                                                            <option>High-Gloss Invisible Film</option>
                                                            <option>Premium Matte Finish Film</option>
                                                            <option>Hydrophobic Fabric Coating</option>
                                                            <option>Appliance Shield Wrap</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="who-we-serve__input-box text-message-box">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                </div>
                                                <div class="who-we-serve__btn-box">
                                                    <button type="submit" class="thm-btn">Request a Call<i
                                                            class="fal fa-long-arrow-right"></i>
                                                        <span class="hover-btn hover-bx"></span>
                                                        <span class="hover-btn hover-bx2"></span>
                                                        <span class="hover-btn hover-bx3"></span>
                                                        <span class="hover-btn hover-bx4"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="who-we-serve__right">
                    <div class="who-we-serve__right-bg-shape"
                        style="background-image: url(assets/images/shapes/who-we-serve-right-bg-shape.png);">
                    </div>
                    <div class="row">
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-1.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-house-1"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a href="dining-table-protection.php">Dining
                                            Tables</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-2.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a
                                            href="kitchen-marble-protection.php">Kitchen
                                            Marbles</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-3.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-house-cleaning"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a href="center-glass-tables.php">Center
                                            Tables</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-4.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-cleaning-1"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a href="marble-console-table.php">Console
                                            Tables</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-5.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-bed"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a
                                            href="fridge-protection.php">Appliances</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-6.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-household"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a href="fabric-nano-coating.php">Fabric
                                            Sofas</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-7.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-achievement"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a
                                            href="exterior-marble-wall-protection.php">Exterior Marbles</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                        <!--Who We Serve Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="who-we-serve__single">
                                <div class="who-we-serve__single-img-box">
                                    <div class="who-we-serve__single-img">
                                        <img src="assets/images/resources/who-we-serve-single-img-1-8.avif" alt="">
                                    </div>
                                </div>
                                <div class="who-we-serve__icon-and-title">
                                    <div class="who-we-serve__icon">
                                        <span class="icon-window-cleaner"></span>
                                    </div>
                                    <h4 class="who-we-serve__single-title"><a href="dining-table-protection.php">Premium
                                            Chairs</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--Who We Serve Single End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Who We Serve End -->
<!--Counter One Start -->
<section class="counter-one">
    <div class="counter-one__shape-1">
        <img src="assets/images/shapes/counter-one-shape-1.avif" alt="">
    </div>
    <div class="container">
        <div class="counter-one__wrap">
            <ul class="counter-one__inner list-unstyled">
                <li class="wow fadeInLeft" data-wow-delay="100ms">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-bed"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="5.2">00</h3>
                                <span>K</span>
                            </div>
                            <p class="counter-one__count-text">Spaces Cleaned</p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInLeft" data-wow-delay="200ms">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-employee"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="75">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Trained Professionals</p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInRight" data-wow-delay="100ms">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-customer-review"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="100">00</h3>
                                <span>%</span>
                            </div>
                            <p class="counter-one__count-text">Happy Customers</p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInRight" data-wow-delay="200ms">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-trophy"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="500">00</h3>
                                <span>K+</span>
                            </div>
                            <p class="counter-one__count-text">Awards Win</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Counter One End -->
<!--Why Choose One Start -->
<section class="why-choose-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-one__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">Why Choose us?</span>
                        </div>
                        <h2 class="section-title__title title-animation">Delivering Surface Protection With Precision &
                            Integrity.
                        </h2>
                    </div>
                    <p class="why-choose-one__text">At Surface Shield, we go beyond simple protection—we preserve the
                        elegance, value, and style of your high-end furniture and interior installations. Our advanced
                        self-healing films and fabric nano-coatings ensure long-lasting durability, clarity, and peace
                        of mind. Choose us and feel the difference of premium surface care.</p>
                    <div class="why-choose-one__points-box">
                        <ul class="why-choose-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check-1"></span>
                                </div>
                                <h5>Certified & Trained Installers</h5>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check-1"></span>
                                </div>
                                <h5>High-Grade Self-Healing Films</h5>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check-1"></span>
                                </div>
                                <h5>Custom-Tailored Surface Wrapping</h5>
                            </li>
                        </ul>
                        <ul class="why-choose-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check-1"></span>
                                </div>
                                <h5>Spill-Proof & Heat-Resistant Shield</h5>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check-1"></span>
                                </div>
                                <h5>Long-Lasting Optical Clarity</h5>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check-1"></span>
                                </div>
                                <h5>5+ Years Product Warranty</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="why-choose-one__btn-and-client-box">
                        <div class="why-choose-one__btn-box">
                            <a class="thm-btn" href="about.php">Discover Why
                                <i class="fal fa-long-arrow-right"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                        <div class="why-choose-one__client-info">
                            <div class="why-choose-one__client-img">
                                <img src="assets/images/resources/why-choose-one-client-img.avif" alt="">
                            </div>
                            <div class="why-choose-one__client-content">
                                <p>Need assistance? Reach out to <span>Naresh Kumar</span></p>
                                <h5><a href="tel:+919154814401">+91 91548 14401</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="why-choose-one__right">
                    <div class="why-choose-one__right-shape-1 float-bob-x">
                        <img src="" alt="">
                    </div>
                    <div class="why-choose-one__img-box">
                        <div class="why-choose-one__img">
                            <img src="assets/images/resources/why-choose-one-img-1.avif" alt="">
                        </div>
                        <div class="why-choose-one__img-shape-1">
                            <img src="assets/images/shapes/why-choose-one-img-shape-1.avif" alt="">
                        </div>
                        <div class="why-choose-one__img-shape-2 rotate-me">
                            <img src="assets/images/shapes/why-choose-one-img-shape-2.avif" alt="">
                        </div>
                        <div class="why-choose-one__img-shape-3 rotate-me">
                            <img src="assets/images/shapes/why-choose-one-img-shape-3.avif" alt="">
                        </div>
                        <div class="why-choose-one__img-shape-4 rotate-me">
                            <img src="assets/images/shapes/why-choose-one-img-shape-4.avif" alt="">
                        </div>
                    </div>
                    <div class="why-choose-one__img-2">
                        <img src="assets/images/resources/why-choose-one-img-2.avif" alt="">
                    </div>
                    <div class="why-choose-one__img-3">
                        <img src="assets/images/resources/why-choose-one-img-3.avif" alt="">
                    </div>
                    <div class="why-choose-one__img-4">
                        <img src="assets/images/resources/why-choose-one-img-4.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why Choose One End -->
<!--Process One Start -->
<section class="process-one">
    <div class="process-one__bg-shape" style="background-image: url(assets/images/shapes/process-one-bg-shape.png);">
    </div>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-icon">
                    <span class="icon-star-1"></span>
                </div>
                <span class="section-title__tagline">Our Process</span>
            </div>
            <h2 class="section-title__title title-animation">Transparent & Effective Steps
            </h2>
        </div>
        <div class="process-one__inner">
            <div class="process-one__shape-1"></div>
            <ul class="row list-unstyled">
                <!--Process One Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="process-one__single">
                        <div class="process-one__icon-inner-wrap">
                            <div class="process-one__icon-inner">
                                <div class="process-one__icon">
                                    <div class="process-one__icon-bg"
                                        style="background-image: url(assets/images/backgrounds/process-one-icon-bg.jpg);">
                                    </div>
                                    <span class="icon-task-complete"></span>
                                </div>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__count"></div>
                            <h3 class="process-one__title">Surface Assessment</h3>
                            <p class="process-one__text">Our specialists inspect your marble, glass, or wooden surfaces
                                for any minor imperfections before wrapping.</p>
                        </div>
                    </div>
                </li>
                <!--Process One Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="process-one__single">
                        <div class="process-one__icon-inner-wrap">
                            <div class="process-one__icon-inner">
                                <div class="process-one__icon">
                                    <div class="process-one__icon-bg"
                                        style="background-image: url(assets/images/backgrounds/process-one-icon-bg.jpg);">
                                    </div>
                                    <span class="icon-stop-watch"></span>
                                </div>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__count"></div>
                            <h3 class="process-one__title">Precision Prepping</h3>
                            <p class="process-one__text">The target surface is thoroughly cleaned and prepped to ensure
                                100% dust-free, bubble-free film adhesion.</p>
                        </div>
                    </div>
                </li>
                <!--Process One Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="process-one__single">
                        <div class="process-one__icon-inner-wrap">
                            <div class="process-one__icon-inner">
                                <div class="process-one__icon">
                                    <div class="process-one__icon-bg"
                                        style="background-image: url(assets/images/backgrounds/process-one-icon-bg.jpg);">
                                    </div>
                                    <span class="icon-cleaning-service"></span>
                                </div>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__count"></div>
                            <h3 class="process-one__title">Expert Installation</h3>
                            <p class="process-one__text">Our certified installers lay down the self-healing protective
                                film using precise cutting and heat sealing tools.</p>
                        </div>
                    </div>
                </li>
                <!--Process One Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="process-one__single">
                        <div class="process-one__icon-inner-wrap">
                            <div class="process-one__icon-inner">
                                <div class="process-one__icon">
                                    <div class="process-one__icon-bg"
                                        style="background-image: url(assets/images/backgrounds/process-one-icon-bg.jpg);">
                                    </div>
                                    <span class="icon-completed-task"></span>
                                </div>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__count"></div>
                            <h3 class="process-one__title">Quality Inspection</h3>
                            <p class="process-one__text">A meticulous review is conducted to ensure the edges are
                                completely locked and the optical finish is immaculate.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Process One End -->
<!--Sliding Text Start-->
<section class="sliding-text">
    <div class="sliding-text__inner">
        <ul class="sliding-text__list marquee_mode list-unstyled">
            <li>
                <div class="icon rotate-me">
                    <img src="assets/images/shapes/sliding-text-icon-1.avif" alt="">
                </div>
                <p data-hover="Fast and Reliable Cleaning">Fast and Reliable Cleaning</p>
            </li>
            <li>
                <div class="icon rotate-me">
                    <img src="assets/images/shapes/sliding-text-icon-1.avif" alt="">
                </div>
                <p data-hover="Need an appointment for Cleaning Service">Need an appointment for Cleaning
                    Service</p>
            </li>
            <li>
                <div class="icon rotate-me">
                    <img src="assets/images/shapes/sliding-text-icon-1.avif" alt="">
                </div>
                <p data-hover="24/7 Customer Service">24/7 Customer Service</p>
            </li>
            <li>
                <div class="icon rotate-me">
                    <img src="assets/images/shapes/sliding-text-icon-1.avif" alt="">
                </div>
                <p data-hover="100% Satisfied Customer">100% Satisfied Customer</p>
            </li>
            <li>
                <div class="icon rotate-me">
                    <img src="assets/images/shapes/sliding-text-icon-1.avif" alt="">
                </div>
                <p data-hover="Modern Cleaning Equipments">Modern Cleaning Equipments</p>
            </li>
        </ul>
    </div>
</section>
<!--Sliding Text End-->
<!--Project One Start-->
<style>
    .project-one__img img {
        width: 100% !important;
        height: 400px !important;
        object-fit: cover !important;
    }
</style>
<section class="project-one">
    <div class="container">
        <div class="project-one__top">
            <div class="section-title text-left sec-title-animation animation-style2">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-icon">
                        <span class="icon-star-1"></span>
                    </div>
                    <span class="section-title__tagline">Our Projects</span>
                </div>
                <h2 class="section-title__title title-animation">Keep Your Vision to Our <br> Latest
                    Projects
                </h2>
            </div>
            <div class="project-one__btn-box">
                <a class="thm-btn" href="projects.html">View All Projects
                    <i class="fal fa-long-arrow-right"></i>
                    <span class="hover-btn hover-bx"></span>
                    <span class="hover-btn hover-bx2"></span>
                    <span class="hover-btn hover-bx3"></span>
                    <span class="hover-btn hover-bx4"></span>
                </a>
            </div>
        </div>
        <div class="swiper-container project-one__carousel">
            <div class="swiper-wrapper">
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-1.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-1.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="dining-table-protection.php">Dining Table Wrap</a>
                            </h3>
                            <p class="project-one__sub-title">Bengaluru Residence</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-2.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-2.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="exterior-marble-wall-protection.php">Kitchen Marble
                                    Wrap</a>
                            </h3>
                            <p class="project-one__sub-title">Hyderabad Apartment</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-3.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-3.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="marble-console-table.php">Console Table Shield</a>
                            </h3>
                            <p class="project-one__sub-title">Chennai Premium Villa</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-4.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-4.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="fridge-protection.php">Fridge Metallic Film</a>
                            </h3>
                            <p class="project-one__sub-title">Coimbatore Kitchen</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-5.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-5.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="center-glass-tables.php">Glass Table Protection</a>
                            </h3>
                            <p class="project-one__sub-title">Bengaluru Modern Home</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-6.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-6.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="fabric-nano-coating.php">Fabric Sofa Coating</a>
                            </h3>
                            <p class="project-one__sub-title">Hyderabad Lounge</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-7.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-7.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="exterior-marble-wall-protection.php">Exterior Marble
                                    Wrapping</a>
                            </h3>
                            <p class="project-one__sub-title">Chennai Luxury Office</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="swiper-slide">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-1-8.avif" alt="">
                            </div>
                        </div>
                        <div class="project-one__content">
                            <div class="project-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/project-one-content-bg-shape.png);">
                            </div>
                            <div class="project-one__arrow">
                                <a class="img-popup" href="assets/images/project/project-1-8.avif"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                            <h3 class="project-one__title"><a href="marble-console-table.php">Designer Console Film</a>
                            </h3>
                            <p class="project-one__sub-title">Coimbatore Showroom</p>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-nav-style-one">
                <div class="project-one-dot-style1"></div>
            </div>
        </div>
    </div>
</section>
<!--Project One End-->
<!--Office Location Start-->
<section class="office-location">
    <div class="office-location__bg" style="background-image: url(assets/images/backgrounds/ss-slider-1.png);">
    </div>
    <div class="office-location__shape-1 float-bob-x">
        <img src="" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="office-location__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">OUR Offices</span>
                        </div>
                        <h2 class="section-title__title title-animation">Discover Our Service Locations & Get Premium
                            Care Today
                        </h2>
                    </div>
                    <div class="office-location__contact-box">
                        <div class="office-location__contact-shape float-bob-x">
                            <img src="assets/images/shapes/office-location-contact-shape.avif" alt="">
                        </div>
                        <div class="office-location__contact-content">
                            <div class="office-location__contact-content-bg-shape"
                                style="background-image: url(assets/images/shapes/office-location-contact-content-bg-shape.png);">
                            </div>
                            <h3 class="office-location__contact-title">We're Here</h3>
                            <p class="office-location__contact-text">Mon - Sun : 9am to 9pm</p>
                            <p class="office-location__contact-text-2">Bengaluru | Hyderabad | Chennai | Coimbatore</p>
                            <div class="office-location__contact-number">
                                <p><span class="icon-phone-call"></span><a href="tel:9154814401">+91 91548 14401</a></p>
                                <p><span class="icon-envelope"></span><a
                                        href="mailto:surfaceshieldindia@gmail.com">surfaceshieldindia@gmail.com</a></p>
                            </div>
                            <div class="office-location__btn-box">
                                <a class="thm-btn" href="contact.php">Send a Mail
                                    <i class="fal fa-long-arrow-right"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="office-location__right">
                    <div class="office-location__right-bg-shape"
                        style="background-image: url(assets/images/shapes/office-location-right-bg-shape.png);">
                    </div>
                    <div class="office-location__map-box">
                        <div class="office-location__map-img">
                            <img src="assets/images/shapes/office-location-map.avif" alt="">
                        </div>
                        <div class="office-location__point-1">
                            <div class="office-location__markar">
                                <i class="ripple"></i>
                            </div>
                            <div class="office-location__popup-box">
                                <div class="office-location__popup">
                                    <div class="office-location__popup-inner">
                                        <div class="office-location__popup-img">
                                            <img src="assets/images/project/project-1-1.avif" alt="">
                                        </div>
                                        <div class="office-location__popup-content">
                                            <p>Bengaluru Office <br> Indiranagar</p>
                                            <span>Bengaluru, Karnataka</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="office-location__point-1 office-location__point-2">
                            <div class="office-location__markar office-location__markar-2">
                                <i class="ripple"></i>
                            </div>
                            <div class="office-location__popup-box">
                                <div class="office-location__popup">
                                    <div class="office-location__popup-inner">
                                        <div class="office-location__popup-img">
                                            <img src="assets/images/project/project-1-2.avif" alt="">
                                        </div>
                                        <div class="office-location__popup-content">
                                            <p>Hyderabad Office <br> Jubilee Hills</p>
                                            <span>Hyderabad, Telangana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="office-location__point-1 office-location__point-3">
                            <div class="office-location__markar office-location__markar-3">
                                <i class="ripple"></i>
                            </div>
                            <div class="office-location__popup-box">
                                <div class="office-location__popup">
                                    <div class="office-location__popup-inner">
                                        <div class="office-location__popup-img">
                                            <img src="assets/images/project/project-1-3.avif" alt="">
                                        </div>
                                        <div class="office-location__popup-content">
                                            <p>Chennai Office <br> Adyar</p>
                                            <span>Chennai, Tamil Nadu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bubbleContainer">
        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
        <div class="bubble-3"></div>
    </div>
</section>
<!--Office Location End-->
<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="section-title text-center sec-title-animation animation-style1">
        <div class="section-title__tagline-box">
            <div class="section-title__tagline-icon">
                <span class="icon-star-1"></span>
            </div>
            <span class="section-title__tagline">Testimonials</span>
        </div>
        <h2 class="section-title__title title-animation">Our Customer’s Feedback
        </h2>
    </div>
    <div class="container">
        <div class="swiper-container testimonial-one__carousel">
            <div class="swiper-wrapper">
                <!--Testimonial One Single Start-->
                <div class="swiper-slide">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__img-box">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-1-1.avif" alt="">
                            </div>
                            <div class="testimonial-one__img-shape-1"></div>
                            <div class="testimonial-one__img-shape-2"></div>
                        </div>
                        <div class="testimonial-one__content">
                            <div class="testimonial-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/testimonial-one-content-bg-shape.png);">
                            </div>
                            <div class="testimonial-one__content-bg-shape-2"
                                style="background-image: url(assets/images/shapes/testimonial-one-content-bg-shape-2.png);">
                            </div>
                            <div class="testimonial-one__quote">
                                <span class="icon-left1"></span>
                            </div>
                            <h3 class="testimonial-one__client-name"><a href="testimonials.html">Adam Smith</a>
                            </h3>
                            <p class="testimonial-one__sub-title">Chicago</p>
                            <p class="testimonial-one__text">Our clients are at the heart of everything we do.
                                From residential homes to corporate offices, each project we complete leaves
                                behind a trail of satisfaction and trust.</p>
                            <div class="testimonial-one__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="swiper-slide">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__img-box">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-1-2.avif" alt="">
                            </div>
                            <div class="testimonial-one__img-shape-1"></div>
                            <div class="testimonial-one__img-shape-2"></div>
                        </div>
                        <div class="testimonial-one__content">
                            <div class="testimonial-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/testimonial-one-content-bg-shape.png);">
                            </div>
                            <div class="testimonial-one__content-bg-shape-2"
                                style="background-image: url(assets/images/shapes/testimonial-one-content-bg-shape-2.png);">
                            </div>
                            <div class="testimonial-one__quote">
                                <span class="icon-left1"></span>
                            </div>
                            <h3 class="testimonial-one__client-name"><a href="testimonials.html">Daniel
                                    Smith</a>
                            </h3>
                            <p class="testimonial-one__sub-title">San Antonio</p>
                            <p class="testimonial-one__text">Our clients are at the heart of everything we do.
                                From residential homes to corporate offices, each project we complete leaves
                                behind a trail of satisfaction and trust.</p>
                            <div class="testimonial-one__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="swiper-slide">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__img-box">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-1-3.avif" alt="">
                            </div>
                            <div class="testimonial-one__img-shape-1"></div>
                            <div class="testimonial-one__img-shape-2"></div>
                        </div>
                        <div class="testimonial-one__content">
                            <div class="testimonial-one__content-bg-shape"
                                style="background-image: url(assets/images/shapes/testimonial-one-content-bg-shape.png);">
                            </div>
                            <div class="testimonial-one__content-bg-shape-2"
                                style="background-image: url(assets/images/shapes/testimonial-one-content-bg-shape-2.png);">
                            </div>
                            <div class="testimonial-one__quote">
                                <span class="icon-left1"></span>
                            </div>
                            <h3 class="testimonial-one__client-name"><a href="testimonials.html">Felicia
                                    Roth</a>
                            </h3>
                            <p class="testimonial-one__sub-title">Los Angeles</p>
                            <p class="testimonial-one__text">Our clients are at the heart of everything we do.
                                From residential homes to corporate offices, each project we complete leaves
                                behind a trail of satisfaction and trust.</p>
                            <div class="testimonial-one__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-nav-style-one">
                <div class="testimonial-one-dot-style1"></div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->
<!--Video One Start-->
<section class="video-one">
    <div class="video-one__bg-color">
        <div class="video-one__bg-shape" style="background-image: url(assets/images/shapes/video-one-bg-shape.png);">
        </div>
    </div>
    <div class="container">
        <div class="video-one__inner-wrap">
            <div class="video-one__inner" style="background-image: url(assets/images/backgrounds/video-one-bg.png);">
                <div class="video-one__video-box">
                    <a href="https://www.youtube.com/watch?v=06dV9txztKY" class="video-popup">
                        <div class="video-one__icon">
                            <span class="icon-play-button-arrowhead"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                    <span class="border-animation border-1"></span>
                    <span class="border-animation border-2"></span>
                    <span class="border-animation border-3"></span>
                </div>
                <div class="video-one__inner-shape-1"></div>
            </div>
            <div class="video-one__round-text">
                <div class="video-one__curved-circle">
                    100% Surface Protection — Perfect & Invisible Care.
                </div>
            </div>
            <p class="video-one__text-2">Welcome To Surface Shield</p>
            <h2 class="video-one__title">Preserve & Protect</h2>
            <p class="video-one__sub-title">Self-Healing Optical Surface Films.....</p>
            <div class="video-one__btn-box">
                <a class="thm-btn" href="about.php">Get Protected
                    <i class="fal fa-long-arrow-right"></i>
                    <span class="hover-btn hover-bx"></span>
                    <span class="hover-btn hover-bx2"></span>
                    <span class="hover-btn hover-bx3"></span>
                    <span class="hover-btn hover-bx4"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->
<!--FAQ Two Start-->
<section class="faq-two" style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-two__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">Got Questions?</span>
                        </div>
                        <h2 class="section-title__title title-animation">We’ve Got The Answers
                            You Need.
                        </h2>
                    </div>
                    <p class="faq-two__text-1">We provide invisible, self-healing surface protection
                        films for marble, glass & premium surfaces. Expert
                        <br>application with lasting results guaranteed.
                    </p>
                    <div class="faq-two__contact-box">
                        <div class="faq-two__img-1">
                            <img src="assets/images/resources/about-one-image-1.avif" alt="">
                        </div>
                        <div class="faq-two__contact-list-inner">
                            <ul class="faq-two__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-call-1"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Phone</h4>
                                        <p><a href="tel:+919154814401">+91 91548 14401</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-mail"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Email Address</h4>
                                        <p><a href="mailto:surfaceshieldindia@gmail.com">surfaceshieldindia@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Address</h4>
                                        <p>Bengaluru | Hyderabad | Chennai</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="faq-two__social">
                                <a href="faq.html"><span class="fab fa-facebook-f"></span></a>
                                <a href="faq.html"><span class="fab fa-twitter"></span></a>
                                <a href="faq.html"><span class="fab fa-pinterest-p"></span></a>
                                <a href="faq.html"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-two__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>What surfaces can Surface Shield protect?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We protect marble dining tables, glass center tables, kitchen
                                        countertops, refrigerators, console tables, and
                                        fabric sofas with nano coating...
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion active wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Is the protective film truly invisible?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! Our self-healing optical film is 100% transparent once
                                        applied. It does not alter the look, texture, or
                                        colour of your surface in any way...
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>How long does the protection last?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our surface protection films are designed to last 3–5 years
                                        with normal usage. Nano coatings for fabric
                                        and glass last 1–2 years depending on care...</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Will it damage my surface when removed?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>No. Our films are residue-free and can be cleanly removed
                                        without scratching or staining your original
                                        surface underneath in any way...</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Do you offer a warranty on the protection?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! We offer a manufacturer-backed warranty on all our
                                        protection films. Visit our Warranty page or
                                        contact us for full warranty details...</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>How do I book a Surface Shield appointment?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Simply call us, email, or fill out the Get a Free Quote
                                        form on our website. Our team will visit
                                        and assess your surfaces at no charge...</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Two End-->
<!--Contact One Start-->
<section class="contact-one">
    <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/ss-slider-1.avif);">
    </div>
    <div class="contact-one__big-title">
        <h2>Shield</h2>
    </div>
    <div class="container clearfix">
        <div class="contact-one__inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="contact-one__form-box">
                <div class="contact-one__form-box-bg-shape"
                    style="background-image: url(assets/images/shapes/contact-one-form-box-bg-shape.png);">
                </div>
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <span class="icon-star-1"></span>
                        </div>
                        <span class="section-title__tagline">Cost Calculator</span>
                    </div>
                    <h2 class="section-title__title title-animation">Get Your Free Estimate!
                    </h2>
                </div>
                <form class="contact-form-validated contact-one__form"
                    action="https://dreamlayout.mnsithub.com/php/cleanonphp/assets/inc/sendemail.php" method="post"
                    novalidate="novalidate">
                    <input type="hidden" name="_token"
                        value="5fe9ed6d9e1de26a60411b5759d09447d391da4ae9f6fa8bb6a78391f1e80973">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-one__input-box">
                                <input type="text" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-one__input-box">
                                <input type="email" name="Repair" placeholder="Email Address" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-one__input-box">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Choose a Service">Choose a Service
                                        </option>
                                        <option value="1">Dining Table Protection</option>
                                        <option value="2">Kitchen Countertop Protection</option>
                                        <option value="3">Center Glass Table Protection</option>
                                        <option value="4">Marble Console Table Protection</option>
                                        <option value="5">Sofa & Fabric Nano Coating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-one__input-box">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Choose a Finish">Choose a Finish
                                        </option>
                                        <option value="1">High-Gloss Invisible Film</option>
                                        <option value="2">Matte Finish Protection</option>
                                        <option value="3">Self-Healing Clear Film</option>
                                        <option value="4">Fabric Hydrophobic Shield</option>
                                        <option value="5">Premium Nano-Coating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-one__input-box">
                                <input type="text" name="Floor-Area" placeholder="Total Surface Area (sq ft)"
                                    required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-one__btn-box">
                                <button type="submit" class="thm-btn">
                                    Get estimate
                                    <i class="fal fa-long-arrow-right"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
            <div class="contact-one__contact-info-box">
                <h3 class="contact-one__contact-info-title">Contact Us</h3>
                <ul class="contact-one__contact-info-list list-unstyled">
                    <li>
                        <div class="contact-one__contact-info-list-shape-1"></div>
                        <div class="icon">
                            <span class="icon-location"></span>
                        </div>
                        <p>Bengaluru | Hyderabad | Chennai</p>
                    </li>
                    <li>
                        <div class="contact-one__contact-info-list-shape-1"></div>
                        <div class="icon">
                            <span class="icon-envelope"></span>
                        </div>
                        <p><a href="mailto:surfaceshieldindia@gmail.com">surfaceshieldindia@gmail.com</a></p>
                    </li>
                    <li>
                        <div class="contact-one__contact-info-list-shape-1"></div>
                        <div class="icon">
                            <span class="icon-call"></span>
                        </div>
                        <p><a href="tel:+919154814401">+91 91548 14401</a> <span>or</span></p>
                    </li>
                    <li>
                        <div class="contact-one__contact-info-list-shape-1"></div>
                        <div class="icon">
                            <span class="icon-call"></span>
                        </div>
                        <p><a href="tel:+918977606336">+91 89776 06336</a></p>
                    </li>
                </ul>
                <div class="contact-one__social-box">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->
<!-- Blog One Start -->
<section class="blog-one">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-icon">
                    <span class="icon-star-1"></span>
                </div>
                <span class="section-title__tagline">Our Blogs</span>
            </div>
            <h2 class="section-title__title title-animation">Get Latest News & Updates
            </h2>
        </div>
        <div class="row">
            <!--Blog One Single Start-->
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/blog/blog-1-1.avif" alt="" style="height: 380px; object-fit: cover; width: 100%;">
                        <div class="blog-one__tags">
                            <span>Nano Coating</span>
                            <span>Sofa Care</span>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <div class="blog-one__user">
                            <div class="blog-one__user-img">
                                <img src="assets/images/blog/blog-one-user-1.avif" alt="">
                            </div>
                            <p class="blog-one__user-title">Naresh Kumar</p>
                        </div>
                        <ul class="blog-one__meta list-unstyled">
                            <li>
                                <a href="blog-details.html"><span class="far fa-calendar-alt"></span>April 5,
                                    2026</a>
                            </li>
                            <li>
                                <a href="blog-details.html"><span class="fal fa-comments"></span>80
                                    Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title"><a href="blog-details.html">Nano Coating for Sofas: Sofa Care
                                Guide</a></h3>
                        <p class="blog-one__text">Learn how advanced hydrophobic coatings protect your luxury sofas and
                            designer chairs from spills and dust.</p>
                        <div class="blog-one__btn-box">
                            <a href="blog-details.html" class="thm-btn">Read More
                                <i class="fal fa-long-arrow-right"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog One Single End-->
            <div class="col-xl-6">
                <!-- Blog One Single Two Start -->
                <div class="blog-one__single-two wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__img-two">
                        <img src="assets/images/blog/blog-1-2.avif" alt="">
                        <div class="blog-one__tags-two">
                            <span>Kitchen Marble</span>
                        </div>
                    </div>
                    <div class="blog-one__content-two">
                        <div class="blog-one__user">
                            <div class="blog-one__user-img">
                                <img src="assets/images/blog/blog-one-user-2.avif" alt="">
                            </div>
                            <p class="blog-one__user-title">Naresh Kumar</p>
                        </div>
                        <ul class="blog-one__meta-two list-unstyled">
                            <li>
                                <a href="blog-details.html"><span class="far fa-calendar-alt"></span>Feb 25,
                                    2026</a>
                            </li>
                            <li>
                                <a href="blog-details.html"><span class="fal fa-comments"></span>22
                                    Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title-two"><a href="blog-details.html">Kitchen Marble Protection Film
                                Benefits</a></h3>
                        <p class="blog-one__text-two">Shield your premium quartz and marble from tough turmeric stains.
                        </p>
                        <div class="blog-one__btn-box-two">
                            <a href="blog-details.html" class="thm-btn">Read More
                                <i class="fal fa-long-arrow-right"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Two End -->
                <!-- Blog One Single Two Start -->
                <div class="blog-one__single-two wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-one__img-two">
                        <img src="assets/images/blog/blog-1-3.avif" alt="">
                        <div class="blog-one__tags-two">
                            <span>Dining Table</span>
                        </div>
                    </div>
                    <div class="blog-one__content-two">
                        <div class="blog-one__user">
                            <div class="blog-one__user-img">
                                <img src="assets/images/blog/blog-one-user-3.avif" alt="">
                            </div>
                            <p class="blog-one__user-title">Naresh Kumar</p>
                        </div>
                        <ul class="blog-one__meta-two list-unstyled">
                            <li>
                                <a href="blog-details.html"><span class="far fa-calendar-alt"></span>May 19,
                                    2026</a>
                            </li>
                            <li>
                                <a href="blog-details.html"><span class="fal fa-comments"></span>15
                                    Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title-two"><a href="blog-details.html">Preserve Marble Dining Table
                                Shine</a></h3>
                        <p class="blog-one__text-two">Keep imported tables looking brand-new with invisible films.</p>
                        <div class="blog-one__btn-box-two">
                            <a href="blog-details.html" class="thm-btn">Read More
                                <i class="fal fa-long-arrow-right"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Two End -->
            </div>
        </div>
    </div>
</section>
<!-- Blog One End -->
<!--Site Footer Start-->
<?php include 'include/footer.php'; ?>