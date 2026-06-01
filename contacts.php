<?php
$pageTitle = "Contact Us";
$noBanner = true;
include 'include/header.php';
?>

<!--Contact Info Start-->
<section class="contact-info">
    <div class="container">
        <div class="row">
            <!--Contact Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-call"></span>
                    </div>
                    <p>Contact Us</p>
                    <h3><a href="tel:+919154814401">+91 91548 14401</a></h3>
                </div>
            </div>
            <!--Contact Two Single End-->
            <!--Contact Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-email"></span>
                    </div>
                    <p>Mail Us</p>
                    <h3><a href="mailto:surfaceshieldindia@gmail.com">surfaceshieldindia@gmail.com</a></h3>
                </div>
            </div>
            <!--Contact Two Single End-->
            <!--Contact Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-location"></span>
                    </div>
                    <p>Our Office Location</p>
                    <h3>Hyderabad | Bengaluru | Chennai</h3>
                </div>
            </div>
            <!--Contact Two Single End-->
        </div>
    </div>
</section>
<!--Contact Info End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="contact-page__inner">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-page__left">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.757833075253!2d78.4042878!3d17.4233777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d0b0000001%3A0x1d4a04771c5ef9a3!2sJubilee+Hills%2C+Hyderabad%2C+Telangana!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin"
                            class="google-map__one" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-page__right">
                        <h3 class="contact-page__form-title">Get A Free Quote</h3>
                        <form id="contact-form" class="contact-form-validated contact-page__form"
                            action="https://dreamlayout.mnsithub.com/php/cleanonphp/assets/inc/sendemail.php"
                            method="POST">
                            <input type="hidden" name="_token"
                                value="5fe9ed6d9e1de26a60411b5759d09447d391da4ae9f6fa8bb6a78391f1e80973">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" name="email" placeholder="Your Email" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Mobile" name="number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Company" name="company">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Messege"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="thm-btn contact-page__btn"
                                            data-loading-text="Please wait...">
                                            Send A Message
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
                        <p class="ajax-response mb-0 result"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->
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
<?php include 'include/footer.php'; ?>