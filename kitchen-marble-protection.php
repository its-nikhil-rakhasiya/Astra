<?php
$pageTitle = "Kitchen Marble Shield";
include 'include/header.php';
?>
<style>

    @media (min-width: 1200px) {
        .main-slider__enquiry-form-box {
            margin-right: -60px;
            /* Moves the Enquiry Form to the right on desktop */
        }
    }

    /* Constraint for Before & After comparison slider to prevent vertical stretching and keep columns aligned */
    #wrinkle-before-after img {
        height: 560px !important;
        object-fit: cover !important;
        width: 100% !important;
    }

    /* Constraints for About section images to keep them compact and symmetrical */
    .about-three__img img {
        height: 450px !important;
        object-fit: cover !important;
        width: 100% !important;
    }

    .about-three__img-2 {
        right: -60px !important; /* Shifted left */
    }

    .about-three__img-2 img {
        height: 290px !important;
        width: 260px !important;
        object-fit: cover !important;
    }

    /* Unique subpage styles */

    .service-details__img img {
        height: 380px !important;
        object-fit: cover !important;
        width: 100% !important;
        border-radius: 12px !important;
    }
    .service-details__img-box-img img {
        height: 220px !important;
        object-fit: cover !important;
        width: 100% !important;
        border-radius: 8px !important;
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
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-slider__content">
                                <h4 class="main-slider__sub-title">PREMIUM SURFACE PROTECTION</h4>
                                <h2 class="main-slider__title">Luxury Protection <br> for Elegant <span>Dining
                                        Tables.</span>
                                </h2>
                                <p class="main-slider__text">Protect your exquisite imported marble and premium wooden
                                    dining tables from scratches, stains, and high heat while retaining 100% of their
                                    natural finish and gloss.</p>
                                <div class="main-slider__btn-and-review-box">
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn" href="about.php">Discover More
                                            <i class="fal fa-long-arrow-right"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </a>
                                    </div>
                                    <div class="main-slider__review-box">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-1.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-2.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-3.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="text-box">
                                            <h4>Customer Satisfied</h4>
                                            <p>4.8 (15k Reviews)</p>
                                        </div>
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
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-slider__content">
                                <h4 class="main-slider__sub-title">HIGH-END KITCHEN CARE</h4>
                                <h2 class="main-slider__title">Shield Premium <br> Countertops &
                                    <span>Appliances.</span>
                                </h2>
                                <p class="main-slider__text">Our advanced protection films guard luxury modular kitchen
                                    countertops and premium metallic double-door refrigerators against acid spills,
                                    fingerprint smudges, and deep scratches.</p>
                                <div class="main-slider__btn-and-review-box">
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn" href="about.php">Discover More
                                            <i class="fal fa-long-arrow-right"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </a>
                                    </div>
                                    <div class="main-slider__review-box">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-1.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-2.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-3.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="text-box">
                                            <h4>Customer Satisfied</h4>
                                            <p>4.8 (15k Reviews)</p>
                                        </div>
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
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-slider__content">
                                <h4 class="main-slider__sub-title">DESIGNER FURNITURE CARE</h4>
                                <h2 class="main-slider__title">Maintain Pristine <br> Glass & Marble
                                    <span>Consoles.</span>
                                </h2>
                                <p class="main-slider__text">Prevent micro-scratches and smudges on your living room
                                    center glass tables, coffee tables, and designer marble console tables with our
                                    premium, self-healing invisible films.</p>
                                <div class="main-slider__btn-and-review-box">
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn" href="about.php">Discover More
                                            <i class="fal fa-long-arrow-right"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </a>
                                    </div>
                                    <div class="main-slider__review-box">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-1.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-2.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box"><img
                                                        src="assets/images/resources/main-slider-review-1-3.avif"
                                                        alt="#">
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="text-box">
                                            <h4>Customer Satisfied</h4>
                                            <p>4.8 (15k Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Static Enquiry Form Overlay -->
        <div class="main-slider__enquiry-form-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="main-slider__enquiry-form-box wow fadeInRight" data-wow-delay="500ms">
                            <h3 class="main-slider__enquiry-title">Enquiry Now</h3>
                            <p class="main-slider__enquiry-text">Looking for premium surface protection? Send us a quick
                                enquiry!</p>
                            <form id="banner-enquiry-form" class="contact-form-validated main-slider__enquiry-form"
                                action="https://dreamlayout.mnsithub.com/php/cleanonphp/assets/inc/sendemail.php"
                                method="POST">
                                <input type="hidden" name="_token"
                                    value="5fe9ed6d9e1de26a60411b5759d09447d391da4ae9f6fa8bb6a78391f1e80973">
                                <div class="main-slider__enquiry-input-box">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="main-slider__enquiry-input-box">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="main-slider__enquiry-input-box">
                                    <input type="text" name="number" placeholder="Phone Number">
                                </div>
                                <div class="main-slider__enquiry-input-box select-box">
                                    <select class="nice-select" name="company" required>
                                        <option value="" disabled selected>Select Service</option>
                                        <option value="Dining Table Protection">Dining Table Protection</option>
                                        <option value="Kitchen Marble Shield">Kitchen Marble Shield</option>
                                        <option value="Exterior Marble Wrap">Exterior Marble Wrap</option>
                                        <option value="Fabric Upholstery Wrap">Fabric Upholstery Wrap</option>
                                        <option value="Center Glass Tables">Center Glass Tables</option>
                                        <option value="Fridge Protection Shield">Fridge Protection Shield</option>
                                        <option value="Marble Console Shield">Marble Console Shield</option>
                                        <option value="Door SS Strip Wrap">Door SS Strip Wrap</option>
                                    </select>
                                </div>
                                <div class="main-slider__enquiry-btn-box">
                                    <button type="submit" class="thm-btn main-slider__enquiry-btn">
                                        Send Request
                                        <i class="fal fa-long-arrow-right"></i>
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </button>
                                </div>
                                <p class="ajax-response mb-0 mt-3 result"
                                    style="color: var(--cleanon-base); font-weight: 600;"></p>
                            </form>
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
<!--About Three Start -->
<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-three__img-box">
                        <div class="about-three__img">
                            <img src="assets/images/resources/ss-about-1.avif" alt="Surface Shield Invisible Protection">
                        </div>
                        <div class="about-three__img-2">
                            <img src="assets/images/resources/ss-about-2.avif" alt="Luxury Stone Surface Care">
                        </div>
                        <div class="about-three__experience-box">
                            <div class="about-three__experience-count">
                                <h3 class="odometer" data-count="10">00</h3>
                                <span>+</span>
                            </div>
                            <p class="about-three__experience-count-text">Years Of Excellence</p>
                        </div>
                        <div class="about-three__video-link">
                            <a href="https://www.youtube.com/watch?v=rbFoRH2deeY" class="video-popup">
                                <div class="about-three__video-icon">
                                    <span class="fas fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="about-three__cleaning-gurante">
                        <div class="about-three__cleaning-gurante-bg-shape"
                            style="background-image: url(assets/images/shapes/about-three-cleaning-gurante-bg-shape.png);">
                        </div>
                        <div class="about-three__cleaning-gurante-icon">
                            <img src="assets/images/icon/about-three-cleaning-gurante-icon.avif" alt="">
                        </div>
                        <h4>100%</h4>
                        <p> Protection Guaranteed</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-three__right">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">About Us</span>
                        </div>
                        <h2 class="section-title__title title-animation">Invisible Protection
                            <br>For Luxury Surfaces
                        </h2>
                    </div>
                    <p class="about-three__text">We believe premium home interiors deserve flawless, invisible
                        protection. Our high-end optical films preserve your imported stone, glass, and luxury furniture
                        without altering their natural texture or shine.</p>
                    <div class="about-three__points-list-box">
                        <ul class="about-three__points-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-money-bag"></span>
                                </div>
                                <div class="content">
                                    <h3>Premium Film & Perfect Fit</h3>
                                    <p>advanced self-healing, heat-resistant films.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-customer-support"></span>
                                </div>
                                <div class="content">
                                    <h3>5+ Years Warranty Support</h3>
                                    <p>full manufacturer warranty on all services.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="about-three__point-and-review-box">
                        <ul class="about-three__point">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>100% Invisible Protection</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Heat & Stain Resistant</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>5+ Years Surface Warranty</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Self-Healing Technology</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-three__review-box">
                            <ul class="list-unstyled about-three__review-list">
                                <li>
                                    <div class="about-three__review-img">
                                        <img src="assets/images/resources/about-three-review-img-1-1.avif" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-three__review-img">
                                        <img src="assets/images/resources/about-three-review-img-1-2.avif" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-three__review-img">
                                        <img src="assets/images/resources/about-three-review-img-1-3.avif" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-three__review-img">
                                        <img src="assets/images/resources/about-three-review-img-1-4.avif" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="about-three__review-star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                            <p class="about-three__review-text">Clients 4.8 (3,567 Reviews)</p>
                        </div>
                    </div>
                    <div class="about-three__btn-and-author-box">
                        <div class="about-three__btn-box">
                            <a href="about.php" class="thm-btn">Read More
                                <i class="fal fa-long-arrow-right"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                        <div class="about-three__author-box">
                            <div class="about-three__author-details">
                                <div class="about-three__author-img-box">
                                    <div class="about-three__author-img">
                                        <img src="assets/images/resources/about-three-author-img-1.avif" alt="">
                                    </div>
                                </div>
                                <div class="about-three__author-content">
                                    <h4>Naresh Kumar</h4>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                            <div class="about-three__author-sign">
                                <img src="assets/images/resources/about-three-author-sign.avif" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End -->
<!--Services Four Start -->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">
                    <div class="service-details__services-box">
                        <h3 class="service-details__services-title">Our Services</h3>
                        <ul class="service-details__services-list list-unstyled">
                            <li>
                                <a href="exterior-marble-wall-protection.php">Exterior Marble Wall Protection<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li class="active">
                                <a href="kitchen-marble-protection.php">Kitchen Marble Shield<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="center-glass-tables.php">Center Glass Tables<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="dining-table-protection.php">Dining Table Protection<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="fridge-protection.php">Fridge Protection<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="marble-console-table.php">Marble Console Table<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="fabric-nano-coating.php">Fabric Nano Coating<span class="fas fa-arrow-right"></span></a>
                            </li>
                            <li>
                                <a href="door-ss-strip-protection.php">Door SS Strip Wrap<span class="fas fa-arrow-right"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="service-details__sidebar-contact">
                        <div class="service-details__sidebar-contact-bg"
                            style="background-image: url(assets/images/resources/about-one-image-1.png);">
                        </div>
                        <div class="service-details__sidebar-contact-content">
                            <div class="icon">
                                <span class="icon-call"></span>
                            </div>
                            <h2>
                                <a href="tel:+919154814401">+91 91548 14401</a>
                                <a href="mailto:surfaceshieldindia@gmail.com">surfaceshieldindia@gmail.com</a>
                            </h2>
                            <p>If You Need Any Help<br> Contact Us</p>
                            <div class="service-details__sidebar-contact-btn-box">
                                <a class="thm-btn" href="contact.php">Contact Us
                                    <i class="fal fa-long-arrow-right"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-details__sidebar-download-box">
                        <h3 class="service-details__services-title">Download</h3>
                        <div class="service-details__sidebar-single-download">
                            <ul class="clearfix list-unstyled">
                                <li>
                                    <div class="content-box">
                                        <div class="icon">
                                            <span class="far fa-file-pdf"></span>
                                        </div>
                                        <div class="text-box">
                                            <h2><a href="#">Download Brochure</a></h2>
                                            <p><a href="#">Download</a></p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="#"><span class="far fa-cloud-download"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="content-box">
                                        <div class="icon">
                                            <span class="far fa-file-pdf"></span>
                                        </div>
                                        <div class="text-box">
                                            <h2><a href="#">Maintenance Guide</a></h2>
                                            <p><a href="#">Download</a></p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="#"><span class="far fa-cloud-download"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__left">
                    <div class="service-details__img">
                        <img src="assets/images/project/project-1-2.avif" alt="Kitchen Marble Shield">
                    </div>
                    <h3 class="service-details__title-1">Kitchen Marble Shield Countertop Protection</h3>
                    <p class="service-details__text-1">Luxury kitchen countertops are the focal point of meal preparation, but they are constantly exposed to spills from acidic ingredients (lemon, vinegar, wine), cooking oils, hot cookware, and heavy metallic utensils. Natural marble, quartz, and granite surfaces easily suffer from chemical etching, deep stains, and scratch marks. Our specialized Kitchen Marble Shield offers a seamless, premium barrier.</p>
                    <p class="service-details__text-2">Engineered using high-tensile, heat-resistant, and stain-repellent self-healing technology, our clear protective films seal the stone completely. It prevents food pigmentation absorption, rejects acidic corrosions, and preserves the gorgeous original look and texture of your modular kitchen countertops.</p>
                    <ul class="service-details__points-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>100% spill-proof defense against acidic juices, wine, oil, and spices</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Exceptional heat resistance protecting stone from direct hot cookware</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Premium anti-scratch defense against knifes, pans, and kitchen tools</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Certified food-safe, non-porous, and hygienic protective barrier</p>
                        </li>
                    </ul>
                    <div class="service-details__img-box">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service-details__img-box-single">
                                    <div class="service-details__img-box-img">
                                        <img src="assets/images/services/ss-service-2-2.avif" alt="Hygienic & Food Safe">
                                    </div>
                                    <div class="service-details__img-box-content">
                                        <div class="service-details__img-box-content-icon-and-title">
                                            <div class="service-details__img-box-content-icon">
                                                <span class="icon-cleaning-service"></span>
                                            </div>
                                            <h3 class="service-details__img-box-content-title">Hygienic & Safe</h3>
                                        </div>
                                        <p class="service-details__img-box-content-text">Creates a completely non-porous layer that blocks bacteria, viruses, and molds from growing inside stone pores.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service-details__img-box-single">
                                    <div class="service-details__img-box-img">
                                        <img src="assets/images/services/services-2-2.avif" alt="Stain Resistant Properties">
                                    </div>
                                    <div class="service-details__img-box-content">
                                        <div class="service-details__img-box-content-icon-and-title">
                                            <div class="service-details__img-box-content-icon">
                                                <span class="icon-review"></span>
                                            </div>
                                            <h3 class="service-details__img-box-content-title">Stain Resistant</h3>
                                        </div>
                                        <p class="service-details__img-box-content-text">Highly hydrophobic coating that prevents tough stains like turmeric, curry, and coffee from leaving residue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-page__single">
                        <div class="faq-two__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Is the film food-safe and hygienic for kitchen counters?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, absolutely. Our kitchen protective films are certified non-toxic, non-porous, and food-safe. It acts as an ultra-hygienic layer that prevents bacterial growth in natural stone pores, making it entirely safe for direct food contact.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Can it withstand direct heat from hot serving pans?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our Kitchen Marble Shield is engineered to tolerate direct heat up to 120°C. While it protects from hot serving dishes and pots, we always recommend placing extremely hot cookware straight from the stove onto a trivet to preserve both the film and your luxury stone underneath.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Will pigments like turmeric, curry, or red wine stain the film?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>No. The outer layer of the film is coated with a high-density, hydrophobic top coat that actively repels organic pigments. Turmeric, citrus juice, tea, coffee, and red wine won't penetrate. They can be effortlessly wiped away with a damp microfiber cloth.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Details End-->

<!--Services Four End -->
<!--Start Project Three-->
<section class="project-three">
    <div class="auto-container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-icon">
                    <span class="icon-star-1"></span>
                </div>
                <span class="section-title__tagline">Our Projects</span>
            </div>
            <h2 class="section-title__title title-animation">Showcase Of Our Luxury
                <br>Protection Projects
            </h2>
        </div>
        <div class="project-three__inner">
            <div class="project-three__carousel owl-carousel owl-theme">
                <!--Start Project Three Single-->
                <div class="project-three__outer-box">
                    <ul class="project-three__single-box">
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-1.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Bengaluru, India</p>
                                        <h3><a href="dining-table-protection.php">Dining Table Shield</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-1.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-2.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Hyderabad, India</p>
                                        <h3><a href="kitchen-marble-protection.php">Kitchen Marble Shield</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-2.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-3.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Chennai, India</p>
                                        <h3><a href="marble-console-table.php">Marble Console Shield</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-3.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-4.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Coimbatore, India</p>
                                        <h3><a href="fridge-protection.php">Fridge Protection</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-4.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Project Three Single-->
                <!--Start Project Three Single-->
                <div class="project-three__outer-box">
                    <ul class="project-three__single-box">
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-5.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Bengaluru, India</p>
                                        <h3><a href="center-glass-tables.php">Center Glass Shield</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-5.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-6.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Hyderabad, India</p>
                                        <h3><a href="fabric-nano-coating.php">Fabric Sofa Coating</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-6.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-7.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Chennai, India</p>
                                        <h3><a href="exterior-marble-wall-protection.php">Exterior Marble Wrap</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-7.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-three__single-inner">
                                <div class="project-three__single-bg"
                                    style="background: url(assets/images/project/project-1-8.png);"></div>
                                <div class="project-three__single-content">
                                    <div class="text-box">
                                        <p>Coimbatore, India</p>
                                        <h3><a href="door-ss-strip-protection.php">Door SS Strip Wrap</a>
                                        </h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="assets/images/project/project-1-8.avif" class="img-popup"><span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Project Three Single-->
            </div>
        </div>
    </div>
</section>
<!--End Project Three-->
<!--Why Choose Two Start-->
<section class="why-choose-two">
    <div class="why-choose-two__bg" style="background-image: url(assets/images/backgrounds/why-choose-two-bg.jpg);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="why-choose-two__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">Why Choose US</span>
                        </div>
                        <h2 class="section-title__title title-animation">Why Choose Us for Kitchen Countertop Protection</h2>
                    </div>
                    <p class="why-choose-two__text">Food-safe, highly hygienic, and stain-repelling shields for luxury kitchen stone.</p>
                    <div class="why-choose-two__btn-box">
                        <a class="thm-btn" href="about.php">Discover Why
                            <i class="fal fa-long-arrow-right"></i>
                            <span class="hover-btn hover-bx"></span>
                            <span class="hover-btn hover-bx2"></span>
                            <span class="hover-btn hover-bx3"></span>
                            <span class="hover-btn hover-bx4"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="why-choose-two__right wow fadeInRight" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-employee"></span>
                                </div>
                                <h3 class="why-choose-two__title">100% Food Safe</h3>
                                <p class="why-choose-two__single-text">Hygienic, non-porous layer certified for food contact.</p>
                            </div>
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-vacuum"></span>
                                </div>
                                <h3 class="why-choose-two__title">Turmeric Guard</h3>
                                <p class="why-choose-two__single-text">Rejects organic pigmentation from yellow turmeric and curry.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="why-choose-two__single-img">
                                <div class="why-choose-two__single-img-shape"></div>
                                <img src="assets/images/services/ss-service-2-2.avif" alt="" style="border-radius: 12px; object-fit: cover; height: 350px; width: 100%;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-cleaning-service"></span>
                                </div>
                                <h3 class="why-choose-two__title">Acid Spill Proof</h3>
                                <p class="why-choose-two__single-text">Prevents corrosive chemical etching from lemons and vinegars.</p>
                            </div>
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-customer-review"></span>
                                </div>
                                <h3 class="why-choose-two__title">Utensil Defense</h3>
                                <p class="why-choose-two__single-text">Absorbs impacts from heavy pans, knives, and cast-iron.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why Choose Two End-->
<!--Before And After Start-->
<section class="before-and-after">
    <div class="before-and-after__shape-1 float-bob-x">
        <img src="assets/images/shapes/before-after-shape-1.avif" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="before-and-after__left">
                    <div class="before-and-after__img-box">
                        <div class="before-after">
                            <div class="before-after-twentytwenty" id="wrinkle-before-after">
                                <img src="assets/images/resources/ss-before-after-1.avif"
                                    alt="Before Surface Protection">
                                <img src="assets/images/resources/ss-before-after-2.avif"
                                    alt="After Surface Shield Protection">
                            </div>
                        </div>
                        <div class="before-and-after__tag"><span>Before</span></div>
                        <div class="before-and-after__tag before-and-after__tag-2">
                            <span>AFTER</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="before-and-after__right">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <span class="section-title__tagline">Before After</span>
                        </div>
                        <h2 class="section-title__title title-animation">Recent
                            Shield Installations
                        </h2>
                    </div>
                    <p class="before-and-after__text">Discover the details of our most recent surface protection
                        projects, showcasing our expertise in invisible shielding.</p>
                    <ul class="before-and-after__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <p>Flawless Invisible Protection Film</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <p>Expert Precision Edge-to-Edge Fit</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-star-1"></span>
                            </div>
                            <p>Advanced Self-Healing TPU Layers</p>
                        </li>
                    </ul>
                    <ul class="before-and-after__img-list list-unstyled">
                        <li>
                            <div class="before-and-after__img-list-img">
                                <img src="assets/images/project/project-1-1.avif" alt="Dining Table protection"
                                    style="height: 85px; object-fit: cover; width: 85px; border-radius: 6px;">
                            </div>
                        </li>
                        <li>
                            <div class="before-and-after__img-list-img">
                                <img src="assets/images/project/project-1-2.avif" alt="Kitchen Marble wrap"
                                    style="height: 85px; object-fit: cover; width: 85px; border-radius: 6px;">
                            </div>
                        </li>
                        <li>
                            <div class="before-and-after__img-list-img">
                                <img src="assets/images/project/project-1-3.avif" alt="Console Table protection"
                                    style="height: 85px; object-fit: cover; width: 85px; border-radius: 6px;">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Before And After End-->

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
<!-- Blog Three Start -->
<section class="blog-three">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-icon">
                    <span class="icon-star-1"></span>
                </div>
                <span class="section-title__tagline">Our Blog</span>
            </div>
            <h2 class="section-title__title title-animation">Latest News & Articles
            </h2>
        </div>
        <div class="row">
            <!-- Blog Three Single Start -->
            <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-three__single">
                    <div class="blog-three__img">
                        <img src="assets/images/blog/blog-1-1.avif" alt="Nano Coating Sofa Care"
                            style="height: 250px; object-fit: cover; width: 100%;">
                        <div class="blog-three__plus">
                            <a href="articles.php"><i class="icon-plus"></i></a>
                        </div>
                        <div class="blog-three__tag">
                            <a href="articles.php">Nano Coating</a>
                        </div>
                    </div>
                    <div class="blog-three__content">
                        <ul class="blog-three__meta list-unstyled">
                            <li>
                                <a href="articles.php">
                                    <span class="fas fa-calendar-alt"></span>April 5, 2026
                                </a>
                            </li>
                            <li>
                                <a href="articles.php">
                                    <span class="fas fa-comments"></span>80 Comments
                                </a>
                            </li>
                        </ul>
                        <h3 class="blog-three__title"><a href="articles.php">Nano Coating for Sofas: Care Guide</a></h3>
                        <div class="blog-three__author-and-btn">
                            <div class="blog-three__author-info">
                                <div class="blog-three__author-img-box">
                                    <div class="blog-three__author-img">
                                        <img src="assets/images/blog/blog-three-author-img-1.avif" alt="">
                                    </div>
                                </div>
                                <div class="blog-three__author-content">
                                    <h5>Naresh Kumar</h5>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                            <div class="blog-three__arrow-box">
                                <a href="articles.php" class="blog-three__arrow"><span
                                        class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Three Single End -->
            <!-- Blog Three Single Start -->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="blog-three__single">
                    <div class="blog-three__img">
                        <img src="assets/images/blog/blog-1-2.avif" alt="Kitchen Marble Protection Benefits"
                            style="height: 250px; object-fit: cover; width: 100%;">
                        <div class="blog-three__plus">
                            <a href="articles.php"><i class="icon-plus"></i></a>
                        </div>
                        <div class="blog-three__tag">
                            <a href="articles.php">Kitchen Marble</a>
                        </div>
                    </div>
                    <div class="blog-three__content">
                        <ul class="blog-three__meta list-unstyled">
                            <li>
                                <a href="articles.php">
                                    <span class="fas fa-calendar-alt"></span>Feb 25, 2026
                                </a>
                            </li>
                            <li>
                                <a href="articles.php">
                                    <span class="fas fa-comments"></span>22 Comments
                                </a>
                            </li>
                        </ul>
                        <h3 class="blog-three__title"><a href="articles.php">Kitchen Marble Protection Benefits</a></h3>
                        <div class="blog-three__author-and-btn">
                            <div class="blog-three__author-info">
                                <div class="blog-three__author-img-box">
                                    <div class="blog-three__author-img">
                                        <img src="assets/images/blog/blog-three-author-img-2.avif" alt="">
                                    </div>
                                </div>
                                <div class="blog-three__author-content">
                                    <h5>Naresh Kumar</h5>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                            <div class="blog-three__arrow-box">
                                <a href="articles.php" class="blog-three__arrow"><span
                                        class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Three Single End -->
            <!-- Blog Three Single Start -->
            <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="500ms">
                <div class="blog-three__single">
                    <div class="blog-three__img">
                        <img src="assets/images/blog/blog-1-3.avif" alt="Dining Table Protection"
                            style="height: 250px; object-fit: cover; width: 100%;">
                        <div class="blog-three__plus">
                            <a href="articles.php"><i class="icon-plus"></i></a>
                        </div>
                        <div class="blog-three__tag">
                            <a href="articles.php">Dining Table</a>
                        </div>
                    </div>
                    <div class="blog-three__content">
                        <ul class="blog-three__meta list-unstyled">
                            <li>
                                <a href="articles.php">
                                    <span class="fas fa-calendar-alt"></span>May 19, 2026
                                </a>
                            </li>
                            <li>
                                <a href="articles.php">
                                    <span class="fas fa-comments"></span>15 Comments
                                </a>
                            </li>
                        </ul>
                        <h3 class="blog-three__title"><a href="articles.php">How to Protect Dining Table Marble</a></h3>
                        <div class="blog-three__author-and-btn">
                            <div class="blog-three__author-info">
                                <div class="blog-three__author-img-box">
                                    <div class="blog-three__author-img">
                                        <img src="assets/images/blog/blog-three-author-img-3.avif" alt="">
                                    </div>
                                </div>
                                <div class="blog-three__author-content">
                                    <h5>Naresh Kumar</h5>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                            <div class="blog-three__arrow-box">
                                <a href="articles.php" class="blog-three__arrow"><span
                                        class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Three Single End -->
        </div>
    </div>
</section>
<!-- Blog Three End -->

<?php include 'include/footer.php'; ?>