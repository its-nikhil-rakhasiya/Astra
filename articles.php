<?php
$pageTitle = "Blog / Articles";
$noBanner = true;
include 'include/header.php';
?>

<!--Blog Two Start-->
<section class="blog-two blog-page">
    <div class="container">
        
        <!-- Dated Blog Filter Start -->
        <style>
        /* Dated Blog Filter Styles */
        .blog-two__filter-bar {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(247, 244, 241, 0.6));
            padding: 24px 30px;
            border-radius: 16px;
            border: 1px solid rgba(222, 216, 207, 0.4);
            box-shadow: 0 15px 35px rgba(12, 52, 47, 0.04);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 15;
        }

        .blog-two__filter-subtitle {
            color: var(--cleanon-base);
            text-transform: uppercase;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 0.15em;
            font-family: var(--cleanon-font-two);
            display: inline-block;
            position: relative;
            padding-left: 20px;
        }

        .blog-two__filter-subtitle::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 12px;
            height: 2px;
            background-color: var(--cleanon-base);
        }

        /* Dated Blog Dropdown Styles */
        .dated-blog-dropdown {
            position: relative;
            display: inline-block;
        }

        .dated-dropdown-trigger {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #ffffff;
            border: 1px solid rgba(222, 216, 207, 0.7);
            padding: 12px 24px;
            border-radius: 30px;
            font-family: var(--cleanon-font);
            font-weight: 600;
            font-size: 14px;
            color: var(--cleanon-black);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(12, 52, 47, 0.03);
            outline: none !important;
        }

        .dated-dropdown-trigger:hover {
            border-color: var(--cleanon-base);
            box-shadow: 0 6px 20px rgba(241, 171, 33, 0.15);
            transform: translateY(-2px);
        }

        .dated-dropdown-trigger .dropdown-arrow {
            font-size: 11px;
            transition: transform 0.3s ease;
            color: var(--cleanon-gray);
        }

        .dated-blog-dropdown.open .dated-dropdown-trigger {
            border-color: var(--cleanon-base);
            background-color: var(--cleanon-primary);
        }

        .dated-blog-dropdown.open .dropdown-arrow {
            transform: rotate(180deg);
            color: var(--cleanon-base);
        }

        .dated-dropdown-menu {
            position: absolute;
            top: calc(100% + 12px);
            right: 0;
            min-width: 320px;
            background: rgba(255, 255, 255, 0.98);
            border: 1px solid rgba(222, 216, 207, 0.5);
            border-radius: 16px;
            box-shadow: 0 20px 50px rgba(12, 52, 47, 0.12);
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-12px) scale(0.95);
            transform-origin: top right;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 9999;
            backdrop-filter: blur(15px);
            max-height: 420px;
            overflow-y: auto;
        }

        .dated-dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }
        
        .dated-dropdown-menu::-webkit-scrollbar-track {
            background: transparent;
        }
        
        .dated-dropdown-menu::-webkit-scrollbar-thumb {
            background-color: rgba(12, 52, 47, 0.15);
            border-radius: 10px;
        }

        .dated-blog-dropdown.open .dated-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        .dropdown-section {
            margin-bottom: 16px;
        }

        .dropdown-section:last-child {
            margin-bottom: 0;
        }

        .dropdown-year-header {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--cleanon-base);
            letter-spacing: 0.15em;
            margin-bottom: 10px;
            border-bottom: 1px solid rgba(222, 216, 207, 0.4);
            padding-bottom: 6px;
            font-family: var(--cleanon-font-two);
        }

        .dropdown-months-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }

        .dropdown-filter-item {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: 1px solid rgba(222, 216, 207, 0.5);
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            color: var(--cleanon-gray);
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
            font-family: var(--cleanon-font);
            outline: none !important;
        }

        .dropdown-filter-item:hover {
            border-color: var(--cleanon-base);
            color: var(--cleanon-black);
            background-color: rgba(241, 171, 33, 0.05);
        }

        .dropdown-filter-item.active {
            background-color: var(--cleanon-base) !important;
            border-color: var(--cleanon-base) !important;
            color: #ffffff !important;
            box-shadow: 0 4px 12px rgba(241, 171, 33, 0.25);
            font-weight: 600;
        }

        .dropdown-filter-item.full-width {
            grid-column: span 3;
            justify-content: flex-start;
            padding-left: 16px;
        }

        /* Card Filtering Animations */
        .blog-item-col {
            transition: opacity 0.35s ease, transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: center;
        }

        .blog-item-col.fade-out {
            opacity: 0;
            transform: scale(0.9) translateY(15px);
            pointer-events: none;
        }

        .blog-item-col.fade-in {
            visibility: visible !important;
            animation: fadeInUpCard 0.45s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        @keyframes fadeInUpCard {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        /* Blog Search Box Styles */
        .blog-search-box {
            position: relative;
            max-width: 250px;
            width: 100%;
            margin-right: 15px;
        }

        .blog-search-box input {
            width: 100%;
            border: 1px solid rgba(222, 216, 207, 0.7);
            padding: 12px 20px 12px 45px;
            border-radius: 30px;
            font-family: var(--cleanon-font);
            font-size: 14px;
            color: var(--cleanon-black);
            outline: none;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(12, 52, 47, 0.03);
        }

        .blog-search-box input:focus {
            border-color: var(--cleanon-base);
            box-shadow: 0 6px 20px rgba(241, 171, 33, 0.12);
        }

        .blog-search-box .search-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--cleanon-gray);
            font-size: 14px;
            pointer-events: none;
            transition: color 0.3s ease;
        }

        .blog-search-box input:focus + .search-icon {
            color: var(--cleanon-base);
        }

        /* Responsive adjustment */
        @media (max-width: 767px) {
            .blog-two__filter-bar {
                padding: 20px;
            }
            .blog-search-box {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 12px;
            }
            .dated-blog-dropdown {
                width: 100%;
            }
            .dated-dropdown-trigger {
                width: 100%;
                justify-content: space-between;
            }
            .dated-dropdown-menu {
                width: 100%;
                left: 0;
                right: 0;
                transform-origin: top center;
            }
        }
        </style>

        <div class="blog-two__filter-bar wow fadeInUp" data-wow-delay="100ms" style="margin-bottom: 40px;">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="blog-two__filter-title">
                        <span class="blog-two__filter-subtitle">Explore Our Journal</span>
                        <h2 style="font-family: var(--cleanon-font-two); font-weight: 700; color: var(--cleanon-black); font-size: 32px; margin-top: 5px;">Latest Publications</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 d-flex justify-content-md-end justify-content-start align-items-center flex-wrap mt-3 mt-md-0">
                    <!-- Search Input Start -->
                    <div class="blog-search-box">
                        <input type="text" id="blogSearchInput" placeholder="Search publications...">
                        <span class="fas fa-search search-icon"></span>
                    </div>
                    <!-- Search Input End -->

                    <div class="dated-blog-dropdown">
                        <button class="dated-dropdown-trigger" id="datedDropdownTrigger">
                            <span class="fas fa-calendar-alt" style="color: var(--cleanon-base);"></span>
                            <span class="selected-filter-label">All Publications</span>
                            <span class="fas fa-chevron-down dropdown-arrow"></span>
                        </button>
                        
                        <div class="dated-dropdown-menu">
                            <div class="dropdown-section">
                                <div class="dropdown-year-header">General</div>
                                <div class="dropdown-months-grid">
                                    <button class="dropdown-filter-item active full-width" data-filter="all" data-label="All Publications">All Publications</button>
                                </div>
                            </div>
                            
                            <div class="dropdown-section">
                                <div class="dropdown-year-header">2026</div>
                                <div class="dropdown-months-grid">
                                    <button class="dropdown-filter-item" data-filter="2026-05" data-label="May 2026">May</button>
                                    <button class="dropdown-filter-item" data-filter="2026-06" data-label="June 2026">June</button>
                                    <button class="dropdown-filter-item" data-filter="2026-08" data-label="August 2026">August</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dated Blog Filter End -->

        <div class="row">
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft blog-item-col" data-date="2026-05" data-wow-delay="100ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="assets/images/blog/blog-1-1.avif" alt="Nano Coating Sofa Care" style="height: 250px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="blog-two__tags">
                            <span>Nano Coating</span>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                                <p>May 10, 2026</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-comments"></span>
                                </div>
                                <p>80 comments</p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="articles-details.php?article=sofa-nano-coating">Nano Coating for Sofas: Care Guide</a></h3>
                        <p class="blog-two__text">Advanced hydrophobic nano coatings protect your luxury fabric sofas from spills.</p>
                        <div class="blog-two__author-and-read-more">
                            <div class="blog-two__author-box">
                                <div class="blog-two__author-img">
                                    <img src="assets/images/blog/blog-three-author-img-1.avif" alt="">
                                </div>
                                <div class="blog-two__author-content">
                                    <h4 class="blog-two__author-name">Naresh Kumar</h4>
                                    <p class="blog-two__author-sub-title">May 10, 2026</p>
                                </div>
                            </div>
                            <div class="blog-two__read-more">
                                <a href="articles-details.php?article=sofa-nano-coating"><span class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp blog-item-col" data-date="2026-08" data-wow-delay="200ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="assets/images/blog/blog-1-2.avif" alt="Kitchen Marble Protection" style="height: 250px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="blog-two__tags">
                            <span>Kitchen Shield</span>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                                <p>Aug 19, 2026</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-comments"></span>
                                </div>
                                <p>22 comments</p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="articles-details.php?article=kitchen-marble">Kitchen Marble Protection Benefits</a></h3>
                        <p class="blog-two__text">Shield your premium modular kitchen countertops and quartz from tough stains.</p>
                        <div class="blog-two__author-and-read-more">
                            <div class="blog-two__author-box">
                                <div class="blog-two__author-img">
                                    <img src="assets/images/blog/blog-three-author-img-2.avif" alt="">
                                </div>
                                <div class="blog-two__author-content">
                                    <h4 class="blog-two__author-name">Naresh Kumar</h4>
                                    <p class="blog-two__author-sub-title">May 10, 2026</p>
                                </div>
                            </div>
                            <div class="blog-two__read-more">
                                <a href="articles-details.php?article=kitchen-marble"><span class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight blog-item-col" data-date="2026-06" data-wow-delay="300ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="assets/images/blog/blog-1-3.avif" alt="Dining Table Protection" style="height: 250px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="blog-two__tags">
                            <span>Dining Care</span>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                                <p>Jun 12, 2026</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-comments"></span>
                                </div>
                                <p>15 comments</p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="articles-details.php?article=dining-table">How to Protect Dining Table Marble</a></h3>
                        <p class="blog-two__text">Learn about optical-clear TPU overlays that preserve your imported stone finish.</p>
                        <div class="blog-two__author-and-read-more">
                            <div class="blog-two__author-box">
                                <div class="blog-two__author-img">
                                    <img src="assets/images/blog/blog-three-author-img-3.avif" alt="">
                                </div>
                                <div class="blog-two__author-content">
                                    <h4 class="blog-two__author-name">Naresh Kumar</h4>
                                    <p class="blog-two__author-sub-title">May 10, 2026</p>
                                </div>
                            </div>
                            <div class="blog-two__read-more">
                                <a href="articles-details.php?article=dining-table"><span class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft blog-item-col" data-date="2026-05" data-wow-delay="100ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="assets/images/project/project-1-4.avif" alt="Fridge Film Wrap" style="height: 250px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="blog-two__tags">
                            <span>Appliance Wrap</span>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                                <p>May 10, 2026</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-comments"></span>
                                </div>
                                <p>08 comments</p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="articles-details.php?article=fridge-protection">Metallic Film for Luxury Fridges</a></h3>
                        <p class="blog-two__text">Defend high-end fridges from finger smudges, stains, and scuff marks.</p>
                        <div class="blog-two__author-and-read-more">
                            <div class="blog-two__author-box">
                                <div class="blog-two__author-img">
                                    <img src="assets/images/blog/blog-three-author-img-1.avif" alt="">
                                </div>
                                <div class="blog-two__author-content">
                                    <h4 class="blog-two__author-name">Naresh Kumar</h4>
                                    <p class="blog-two__author-sub-title">May 10, 2026</p>
                                </div>
                            </div>
                            <div class="blog-two__read-more">
                                <a href="articles-details.php?article=fridge-protection"><span class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp blog-item-col" data-date="2026-08" data-wow-delay="200ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="assets/images/project/project-1-5.avif" alt="Glass Table Film" style="height: 250px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="blog-two__tags">
                            <span>Glass Shield</span>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                                <p>Aug 19, 2026</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-comments"></span>
                                </div>
                                <p>12 comments</p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="articles-details.php?article=glass-tables">Invisible Protection for Glass Tables</a></h3>
                        <p class="blog-two__text">A sleek, ultra-clear transparent protection film to keep glass coffee tables scratch-free.</p>
                        <div class="blog-two__author-and-read-more">
                            <div class="blog-two__author-box">
                                <div class="blog-two__author-img">
                                    <img src="assets/images/blog/blog-three-author-img-2.avif" alt="">
                                </div>
                                <div class="blog-two__author-content">
                                    <h4 class="blog-two__author-name">Naresh Kumar</h4>
                                    <p class="blog-two__author-sub-title">May 10, 2026</p>
                                </div>
                            </div>
                            <div class="blog-two__read-more">
                                <a href="articles-details.php?article=glass-tables"><span class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight blog-item-col" data-date="2026-06" data-wow-delay="300ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="assets/images/project/project-1-7.avif" alt="Exterior Stone Panel Wrap" style="height: 250px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="blog-two__tags">
                            <span>Stone Wrapping</span>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                                <p>Jun 12, 2026</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-comments"></span>
                                </div>
                                <p>06 comments</p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="articles-details.php?article=exterior-marble">Preserving Exterior Marble Walls</a></h3>
                        <p class="blog-two__text">Heavy-duty UV-resistant wraps defend outdoor natural stone panels from environmental erosion.</p>
                        <div class="blog-two__author-and-read-more">
                            <div class="blog-two__author-box">
                                <div class="blog-two__author-img">
                                    <img src="assets/images/blog/blog-three-author-img-3.avif" alt="">
                                </div>
                                <div class="blog-two__author-content">
                                    <h4 class="blog-two__author-name">Naresh Kumar</h4>
                                    <p class="blog-two__author-sub-title">May 10, 2026</p>
                                </div>
                            </div>
                            <div class="blog-two__read-more">
                                <a href="articles-details.php?article=exterior-marble"><span class="fal fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
        </div>
    </div>
</section>
<!--Blog Two End-->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.dated-blog-dropdown');
    const trigger = document.getElementById('datedDropdownTrigger');
    const filterItems = document.querySelectorAll('.dropdown-filter-item');
    const labelSpan = document.querySelector('.selected-filter-label');
    const cards = document.querySelectorAll('.blog-item-col');
    const searchInput = document.getElementById('blogSearchInput');

    let activeFilter = 'all';
    let searchQuery = '';

    if (trigger && dropdown) {
        // Toggle dropdown open/close on click
        trigger.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdown.classList.toggle('open');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('open');
            }
        });
    }

    // Unified filtering function combining Search and Date Filter
    function filterPublications() {
        cards.forEach(function(card) {
            const cardDate = card.getAttribute('data-date');
            const cardTitle = card.querySelector('.blog-two__title').textContent.toLowerCase();
            const cardText = card.querySelector('.blog-two__text').textContent.toLowerCase();
            const cardTags = card.querySelector('.blog-two__tags').textContent.toLowerCase();

            const matchesDate = (activeFilter === 'all' || cardDate === activeFilter);
            const matchesSearch = (
                cardTitle.includes(searchQuery) || 
                cardText.includes(searchQuery) || 
                cardTags.includes(searchQuery)
            );

            if (matchesDate && matchesSearch) {
                if (card.style.display === 'none') {
                    card.style.display = 'block';
                    void card.offsetWidth; // Force layout recalculation
                }
                card.classList.remove('fade-out');
                card.classList.add('fade-in');
            } else {
                card.classList.add('fade-out');
                card.classList.remove('fade-in');
                
                setTimeout(function() {
                    if (card.classList.contains('fade-out')) {
                        card.style.display = 'none';
                    }
                }, 350);
            }
        });
    }

    // Filter cards and update labels on item selection
    filterItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Remove active classes and add to selected
            filterItems.forEach(function(el) { el.classList.remove('active'); });
            this.classList.add('active');

            // Update the trigger button text
            const selectedLabel = this.getAttribute('data-label');
            if (labelSpan) {
                labelSpan.textContent = selectedLabel;
            }

            activeFilter = this.getAttribute('data-filter');
            filterPublications();

            // Close the dropdown cleanly after click
            if (dropdown) {
                dropdown.classList.remove('open');
            }
        });
    });

    // Handle search input events
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            searchQuery = this.value.toLowerCase().trim();
            filterPublications();
        });
    }
});
</script>

<?php include 'include/footer.php'; ?>