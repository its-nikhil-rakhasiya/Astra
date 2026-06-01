(function ($) {
  "use strict";


  /*--------------------------------------------------------------
    RegisterPlugin, ScrollTrigger, SplitText
  --------------------------------------------------------------*/
  gsap.registerPlugin(ScrollTrigger, SplitText);
  gsap.config({
    nullTargetWarn: false,
    trialWarn: false
  });









  /*--------------------------------------------------------------
    FullHeight
  --------------------------------------------------------------*/
  function fullHeight() {
    $('.full-height').css("height", $(window).height());
  }



  // Preloader
  $(window).on('load', function (event) {
    $('.js-preloader').delay(200).fadeOut(300);
  });


  // ---------------------------------------------------------------
  // ANIMATION SYSTEM — IntersectionObserver ONLY (zoom-safe, once only)
  // ---------------------------------------------------------------
  // Problem: AOS.init() runs its own internal scroll listener which
  // REMOVES aos-animate when elements leave viewport → elements re-animate
  // on scroll back ("go and come" issue).
  // Solution: Disable AOS engine entirely. Use IntersectionObserver only.
  // unobserve() after first trigger = element animates ONCE, stays visible.
  // ---------------------------------------------------------------

  (function () {

    // ── STEP 1: Shut AOS engine down completely ──
    // We keep AOS CSS (opacity:0, transforms) but kill its scroll logic.
    if (typeof AOS !== 'undefined') {
      AOS.init({ disable: true }); // disables AOS scroll/resize listeners
    }

    // ── STEP 2: Pre-show elements already in viewport on page load ──
    // Without this, elements visible at page load stay hidden until scroll.
    function isInViewport(el) {
      var rect = el.getBoundingClientRect();
      return rect.top < window.innerHeight && rect.bottom > 0;
    }

    // ── STEP 3: Single IntersectionObserver handles ALL animated elements ──
    // rootMargin bottom '250px' = trigger animation when element is still
    // 250px BELOW the screen → animation plays BEFORE element is visible
    // → No blank/empty section when scrolling down ✓
    var animObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var el = entry.target;

          // Handle .wow elements
          if (el.classList.contains('wow')) {
            var delay    = el.getAttribute('data-wow-delay')    || '0s';
            var duration = el.getAttribute('data-wow-duration') || '0.6s';
            el.style.animationDelay    = delay;
            el.style.animationDuration = duration;
            el.style.visibility        = 'visible';
            el.classList.add('animated');
          }

          // Handle [data-aos] elements
          if (el.hasAttribute('data-aos')) {
            el.classList.add('aos-animate');
          }

          // Stop watching — element animates ONCE, stays visible forever
          animObserver.unobserve(el);
        }
      });
    }, {
      threshold: 0,
      // CRITICAL: positive bottom rootMargin triggers elements BEFORE they
      // enter viewport. 250px pre-loads animations so content is already
      // visible when the section scrolls into view → zero blank screen.
      rootMargin: '0px 0px 250px 0px'
    });

    // ── STEP 4: Observe all animated elements ──
    document.querySelectorAll('.wow').forEach(function (el) {
      el.style.visibility = 'hidden'; // hide until observer fires
      if (isInViewport(el)) {
        // Already visible on load — animate immediately, skip observer
        el.style.visibility = 'visible';
        el.classList.add('animated');
      } else {
        animObserver.observe(el);
      }
    });

    document.querySelectorAll('[data-aos]').forEach(function (el) {
      if (isInViewport(el)) {
        // Already on screen — show immediately without animation delay
        el.classList.add('aos-animate');
      } else {
        animObserver.observe(el);
      }
    });

  })();


  // ===Datepicker===
  if ($("#datepicker").length) {
    $("#datepicker").datepicker();
  }


  $('input[name="time"]').ptTimeSelect();


  // Main Slider One
  if ($(".main-slider__carousel").length > 0) {
    const MainSliderCarousel = new Swiper('.main-slider__carousel', {
      "slidesPerView": 1,
      "spaceBetween": 0,
      "effect": 'fade',
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
      },
      "autoplay": {
        "delay": 8000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "992": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "1200": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "1320": {
          "spaceBetween": 0,
          "slidesPerView": 1
        }
      },
    });
  }


  // Main Slider Two
  if ($(".main-slider-two__carousel").length > 0) {
    const MainSliderTwoCarousel = new Swiper('.main-slider-two__carousel', {
      "slidesPerView": 1,
      "spaceBetween": 0,
      "effect": 'fade',
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": "#main-slider-two-pagination",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": "#main-slider-two__swiper-button-next",
        "prevEl": "#main-slider-two__swiper-button-prev"
      },
      "autoplay": {
        "delay": 8000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "992": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "1200": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "1320": {
          "spaceBetween": 0,
          "slidesPerView": 1
        }
      },
    });
  }


  // Main Slider Three
  if ($("#main-slider-three__thumb").length) {
    let mainsliderthreeThumb = new Swiper("#main-slider-three__thumb", {
      slidesPerView: 3,
      spaceBetween: 0,
      speed: 1400,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      slideToClickedSlide: true,
      loopedSlides: 4,
      direction: 'vertical',
      loop: true,
      autoplay: {
        delay: 5000
      },
      breakpoints: {
        0: {
          slidesPerView: 3,
          spaceBetween: 0
        },
        575: {
          slidesPerView: 3,
          spaceBetween: 0
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 0
        },

      }
    });

    let mainsliderthreeCarousel = new Swiper("#main-slider-three__carousel", {
      observer: true,
      observeParents: true,
      loop: true,
      speed: 1400,
      mousewheel: false,
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
        delay: 5000
      },
      thumbs: {
        swiper: mainsliderthreeThumb
      },
      pagination: {
        el: "#main-slider-three__carousel-pagination",
        type: "bullets",
        clickable: true
      },

      navigation: {
        nextEl: "#main-slider-three__swiper-button-next",
        prevEl: "#main-slider-three__swiper-button-prev"
      }
    });
  }




  // Main Slider Three
  if ($(".main-slider-four__carousel").length > 0) {
    const MainSliderTwoCarousel = new Swiper('.main-slider-four__carousel', {
      "slidesPerView": 1,
      "spaceBetween": 0,
      "effect": 'fade',
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": "#main-slider-four-pagination",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": "#main-slider-four__swiper-button-next",
        "prevEl": "#main-slider-four__swiper-button-prev"
      },
      "autoplay": {
        "delay": 8000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "992": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "1200": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "1320": {
          "spaceBetween": 0,
          "slidesPerView": 1
        }
      },
    });
  }









  // Project One
  if ($(".project-one__carousel").length > 0) {
    const swiper = new Swiper('.project-one__carousel', {
      "slidesPerView": 4,
      "spaceBetween": 0,
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": ".project-one-dot-style1",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": ".swiper-button-prev1",
        "prevEl": ".swiper-button-next1"
      },
      "autoplay": {
        "delay": 6000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 20,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 20,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 20,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 30,
          "slidesPerView": 2
        },
        "992": {
          "spaceBetween": 30,
          "slidesPerView": 3
        },
        "1200": {
          "spaceBetween": 30,
          "slidesPerView": 4
        },
        "1320": {
          "spaceBetween": 30,
          "slidesPerView": 4
        }
      },
    });
  }


  // Testimonial One
  if ($(".testimonial-one__carousel").length > 0) {
    const swiper = new Swiper('.testimonial-one__carousel', {
      "slidesPerView": 3,
      "spaceBetween": 0,
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": ".testimonial-one-dot-style1",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": ".swiper-button-prev1",
        "prevEl": ".swiper-button-next1"
      },
      "autoplay": {
        "delay": 6000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 20,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 20,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 20,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 20,
          "slidesPerView": 2
        },
        "992": {
          "spaceBetween": 20,
          "slidesPerView": 3
        },
        "1200": {
          "spaceBetween": 20,
          "slidesPerView": 3
        },
        "1320": {
          "spaceBetween": 20,
          "slidesPerView": 3
        }
      },
    });
  }

  // Testimonial Two Carousel
  if ($(".testimonial-two__carousel").length > 0) {
    const TestimonialTwoCarousel = new Swiper('.testimonial-two__carousel', {
      "slidesPerView": 1,
      "spaceBetween": 30,
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": ".testimonial-three-dot-style1",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": ".swiper-button-prev1",
        "prevEl": ".swiper-button-next1"
      },
      "autoplay": {
        "delay": 6000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 30,
          "slidesPerView": 1
        },
        "992": {
          "spaceBetween": 30,
          "slidesPerView": 1
        },
        "1200": {
          "spaceBetween": 30,
          "slidesPerView": 1
        },
        "1320": {
          "spaceBetween": 30,
          "slidesPerView": 1
        }
      },
    });
  }


  // ===Project Three Carousel===
  if ($(".project-three__carousel").length) {
    $(".project-three__carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: false,
      autoplayTimeout: 7000,
      navText: [
        '<span class="icon-right-arrow"></span>',
        '<span class="icon-right-arrow1"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 1,
        },
        992: {
          items: 1,
        },
        1200: {
          items: 1,
        },
        1320: {
          items: 1,
        },
      },
    });
  }

  // ===Project Three===
  if ($(".project-three__single-box li").length) {
    $(".project-three__single-box li").each(function () {
      let self = $(this);

      self.on("mouseenter", function () {
        console.log($(this));
        $(".project-three__single-box li").removeClass("active");
        $(this).addClass("active");
      });
    });
  }

  // ===Before After TwentyTwenty===
  if ($(".before-after-twentytwenty").length) {
    $(".before-after-twentytwenty").each(function () {
      var Self = $(this);
      var objName = Self.attr("id");
      $("#" + objName).twentytwenty();

      // hack for bs tab
      $(document).on("shown.bs.tab", 'a[data-toggle="tab"]', function (e) {
        var paneTarget = $(e.target).attr("data-target");
        var $thePane = $(".tab-pane" + paneTarget);
        var twentyTwentyContainer = "#" + objName;
        var twentyTwentyHeight = $thePane.find(twentyTwentyContainer).height();
        if (0 === twentyTwentyHeight) {
          $thePane.find(twentyTwentyContainer).trigger("resize");
        }
      });
    });
  }


  // Services Five Carousel
  if ($(".services-five__carousel").length > 0) {
    const TestimonialTwoCarousel = new Swiper('.services-five__carousel', {
      "slidesPerView": 3,
      "spaceBetween": 30,
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": ".services-five-dot-style1",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": ".swiper-button-prev1",
        "prevEl": ".swiper-button-next1"
      },
      "autoplay": {
        "delay": 6000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 0,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 30,
          "slidesPerView": 2
        },
        "992": {
          "spaceBetween": 30,
          "slidesPerView": 3
        },
        "1200": {
          "spaceBetween": 30,
          "slidesPerView": 3
        },
        "1320": {
          "spaceBetween": 30,
          "slidesPerView": 3
        }
      },
    });
  }

  // Project Four Carousel
  if ($(".project-four__carousel").length > 0) {
    const ProjectTwoCarousel = new Swiper('.project-four__carousel', {
      "slidesPerView": 4,
      "spaceBetween": 30,
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": ".swiper-dot-style1",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": ".swiper-button-prev1",
        "prevEl": ".swiper-button-next1"
      },
      "autoplay": {
        "delay": 8000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 30,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 30,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 30,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 30,
          "slidesPerView": 2
        },
        "992": {
          "spaceBetween": 30,
          "slidesPerView": 3
        },
        "1200": {
          "spaceBetween": 30,
          "slidesPerView": 3
        },
        "1320": {
          "spaceBetween": 30,
          "slidesPerView": 4
        },
        "1730": {
          "spaceBetween": 30,
          "slidesPerView": 4
        }
      },
    });
  }

  // Team Four Carousel
  if ($(".team-four__carousel").length > 0) {
    const swiper = new Swiper('.team-four__carousel', {
      "slidesPerView": 3,
      "spaceBetween": 0,
      "speed": 600,
      "loop": true,
      "pagination": {
        "el": ".swiper-dot-style1",
        "type": "bullets",
        "clickable": true
      },

      "navigation": {
        "nextEl": ".swiper-button-prev1",
        "prevEl": ".swiper-button-next1"
      },
      "autoplay": {
        "delay": 6000
      },
      "breakpoints": {
        "0": {
          "spaceBetween": 10,
          "slidesPerView": 1
        },
        "375": {
          "spaceBetween": 10,
          "slidesPerView": 1
        },
        "575": {
          "spaceBetween": 10,
          "slidesPerView": 1
        },
        "768": {
          "spaceBetween": 30,
          "slidesPerView": 2
        },
        "992": {
          "spaceBetween": 30,
          "slidesPerView": 2
        },
        "1200": {
          "spaceBetween": 30,
          "slidesPerView": 3
        },
        "1320": {
          "spaceBetween": 30,
          "slidesPerView": 3
        }
      },
    });
  }

  if ($("#testimonial-three__thumb").length) {
    let testimonialsThumb = new Swiper("#testimonial-three__thumb", {
      slidesPerView: 3,
      spaceBetween: 0,
      speed: 1400,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      slideToClickedSlide: true,
      loopedSlides: 4,
      direction: 'vertical',
      loop: true,
      autoplay: {
        delay: 5000
      },
      breakpoints: {
        0: {
          slidesPerView: 3,
          spaceBetween: 0
        },
        575: {
          slidesPerView: 3,
          spaceBetween: 0
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 0
        },

      }
    });

    let testimonialsCarousel = new Swiper("#testimonial-three__carousel", {
      observer: true,
      observeParents: true,
      loop: true,
      speed: 1400,
      mousewheel: false,
      slidesPerView: 1,
      spaceBetween: 72,
      autoplay: {
        delay: 5000
      },
      thumbs: {
        swiper: testimonialsThumb
      },
      pagination: {
        el: "#testimonial-three__carousel-pagination",
        type: "bullets",
        clickable: true
      },

      navigation: {
        nextEl: "#testimonial-three__swiper-button-next",
        prevEl: "#testimonial-three__swiper-button-prev"
      }
    });
  }


  // ===Brand One Carousel===
  if ($(".brand-one__carousel").length) {
    $(".brand-one__carousel").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: [
        '<span class="icon-right-arrow-1"></span>',
        '<span class="icon-right-arrow-1"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        500: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
        1200: {
          items: 5,
        },
        1320: {
          items: 5,
        },
      },
    });
  }



  // ===Projects Details Carousel===
  if ($(".projects-details__img-carousel").length) {
    $(".projects-details__img-carousel").owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      smartSpeed: 500,
      autoplay: false,
      autoplayTimeout: 7000,
      navText: [
        '<span class="icon-right-arrow"></span>',
        '<span class="icon-right-arrow1"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 1,
        },
        992: {
          items: 1,
        },
        1200: {
          items: 1,
        },
        1320: {
          items: 1,
        },
      },
    });
  }


  // Hover Image
  const link = document.querySelectorAll(".hover-item");
  const linkHoverReveal = document.querySelectorAll(".hover-item__box");
  const linkImages = document.querySelectorAll(".hover-item__box-img");
  for (let i = 0; i < link.length; i++) {
    let rafPending = false;
    let lastClientX = 0;

    link[i].addEventListener("mousemove", (e) => {
      var bodyZoom = window.getComputedStyle(document.body).zoom;
      var scale = 1;
      if (bodyZoom && bodyZoom !== 'normal') {
        scale = parseFloat(bodyZoom);
        if (scale > 1) {
          scale = scale / 100;
        }
      }
      lastClientX = e.clientX / scale;
      if (rafPending) return;
      rafPending = true;
      requestAnimationFrame(() => {
        linkHoverReveal[i].style.opacity = 1;
        linkHoverReveal[i].style.transform = `translate(-100%, -50%) rotate(0deg)`;
        linkImages[i].style.transform = "scale(1, 1)";
        linkHoverReveal[i].style.left = lastClientX + "px";
        rafPending = false;
      });
    });

    link[i].addEventListener("mouseleave", () => {
      rafPending = false;
      linkHoverReveal[i].style.opacity = 0;
      linkHoverReveal[i].style.transform = `translate(-50%, -50%) rotate(0deg)`;
      linkImages[i].style.transform = "scale(0.8, 0.8)";
    });
  }



  // ===Tab One===
  if ($(".tab-box").length) {
    $(".tab-box .tabs-button-box .tab-btn-item").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).hasClass("tab-active")) {
        return false;
      } else {
        $(".tab-box .tabs-button-box .tab-btn-item").removeClass("active-btn");
        $(this).addClass("active-btn");
        $(".tab-box .tabs-content-box .tab").removeClass("tab-active");
        $(target).addClass("tab-active");
      }
    });
  }


  // ===Marquee===
  if ($(".marquee_mode").length) {
    $('.marquee_mode').marquee({
      speed: 20,
      gap: 20,
      delayBeforeStart: 0,
      direction: 'left',
      duplicated: true,
      pauseOnHover: true,
      startVisible: true,
    });
  }


  // ===Marquee Mode 4===
  if ($(".marquee_mode4").length) {
    $('.marquee_mode4').marquee({
      speed: 30,
      gap: 0,
      delayBeforeStart: 0,
      direction: 'right',
      duplicated: true,
      pauseOnHover: true,
      startVisible: true,
    });
  }
  // ===Marquee Mode 5===
  if ($(".marquee_mode5").length) {
    $('.marquee_mode5').marquee({
      speed: 30,
      gap: 0,
      delayBeforeStart: 0,
      direction: 'left',
      duplicated: true,
      pauseOnHover: true,
      startVisible: true,
    });
  }



  // ===Circle Progress Bar===
  if ($(".circle-progress").length) {
    $(".circle-progress").appear(function () {
      let circleProgress = $(".circle-progress");
      circleProgress.each(function () {
        let progress = $(this);
        let progressOptions = progress.data("options");
        progress.circleProgress(progressOptions);
      });
    });
  }


  // ===Round Progress Script===
  if ($('.dial').length) {
    $('.dial').appear(function () {
      var elm = $(this);
      var color = elm.attr('data-fgColor');
      var perc = elm.attr('value');
      elm.knob({
        'value': 0,
        'min': 0,
        'max': 100,
        'skin': 'tron',
        'readOnly': true,
        'thickness': 0.15,
        'dynamicDraw': true,
        'displayInput': false
      });
      $({
        value: 0
      }).animate({
        value: perc
      }, {
        duration: 2000,
        easing: 'swing',
        progress: function () {
          elm.val(Math.ceil(this.value)).trigger('change');
        }
      });
      $(this).append(function () { });
    }, {
      accY: 20
    });
  }


  //Image Reveal Animation
  if ($(".reveal").length) {
    gsap.registerPlugin(ScrollTrigger);
    let revealContainers = document.querySelectorAll(".reveal");
    revealContainers.forEach((container) => {
      let image = container.querySelector("img");
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: container,
          toggleActions: "play none none none",
        },
      });
      tl.set(container, {
        autoAlpha: 1,
      });
      tl.from(container, 1.5, {
        xPercent: -100,
        ease: Power2.out,
      });
      tl.from(image, 1.5, {
        xPercent: 100,
        scale: 1.3,
        delay: -1.5,
        ease: Power2.out,
      });
    });
  }




  // custom coursor
  if ($(".custom-cursor").length) {

    var cursor = document.querySelector('.custom-cursor__cursor');
    var cursorinner = document.querySelector('.custom-cursor__cursor-two');
    var a = document.querySelectorAll('a');

    document.addEventListener('mousemove', function (e) {
      var bodyZoom = window.getComputedStyle(document.body).zoom;
      var scale = 1;
      if (bodyZoom && bodyZoom !== 'normal') {
        scale = parseFloat(bodyZoom);
        if (scale > 1) {
          scale = scale / 100;
        }
      }
      var x = e.clientX / scale;
      var y = e.clientY / scale;
      cursor.style.transform = `translate3d(calc(${x}px - 50%), calc(${y}px - 50%), 0)`;
      cursorinner.style.left = x + 'px';
      cursorinner.style.top = y + 'px';
    });

    document.addEventListener('mousedown', function () {
      cursor.classList.add('click');
      cursorinner.classList.add('custom-cursor__innerhover')
    });

    document.addEventListener('mouseup', function () {
      cursor.classList.remove('click')
      cursorinner.classList.remove('custom-cursor__innerhover')
    });

    a.forEach(item => {
      item.addEventListener('mouseover', () => {
        cursor.classList.add('custom-cursor__hover');
      });
      item.addEventListener('mouseleave', () => {
        cursor.classList.remove('custom-cursor__hover');
      });
    })
  }

  // project style1
  if ($(".project-one__box li").length) {
    $(".project-one__box li").each(function () {
      let self = $(this);

      self.on("mouseenter", function () {
        console.log($(this));
        $(".project-one__box li").removeClass("active");
        $(this).addClass("active");
      });
    });
  }



  //Progress Count Bar
  if ($(".count-bar").length) {
    $(".count-bar").appear(
      function () {
        var el = $(this);
        var percent = el.data("percent");
        $(el).css("width", percent).addClass("counted");
      }, {
      accY: -50
    }
    );
  }

  //Progress Bar / Levels
  if ($(".progress-levels .progress-box .bar-fill").length) {
    $(".progress-box .bar-fill").each(
      function () {
        $(".progress-box .bar-fill").appear(function () {
          var progressWidth = $(this).attr("data-percent");
          $(this).css("width", progressWidth + "%");
        });
      }, {
      accY: 0
    }
    );
  }

  //Fact Counter + Text Count
  if ($(".count-box").length) {
    $(".count-box").appear(
      function () {
        var $t = $(this),
          n = $t.find(".count-text").attr("data-stop"),
          r = parseInt($t.find(".count-text").attr("data-speed"), 10);

        if (!$t.hasClass("counted")) {
          $t.addClass("counted");
          $({
            countNum: $t.find(".count-text").text()
          }).animate({
            countNum: n
          }, {
            duration: r,
            easing: "linear",
            step: function () {
              $t.find(".count-text").text(Math.floor(this.countNum));
            },
            complete: function () {
              $t.find(".count-text").text(this.countNum);
            }
          });
        }
      }, {
      accY: 0
    }
    );
  }



  // Accrodion
  if ($(".accrodion-grp").length) {
    var accrodionGrp = $(".accrodion-grp");
    accrodionGrp.each(function () {
      var accrodionName = $(this).data("grp-name");
      var Self = $(this);
      var accordion = Self.find(".accrodion");
      Self.addClass(accrodionName);
      Self.find(".accrodion .accrodion-content").hide();
      Self.find(".accrodion.active").find(".accrodion-content").show();
      accordion.each(function () {
        $(this)
          .find(".accrodion-title")
          .on("click", function () {
            if ($(this).parent().hasClass("active") === false) {
              $(".accrodion-grp." + accrodionName)
                .find(".accrodion")
                .removeClass("active");
              $(".accrodion-grp." + accrodionName)
                .find(".accrodion")
                .find(".accrodion-content")
                .slideUp();
              $(this).parent().addClass("active");
              $(this).parent().find(".accrodion-content").slideDown();
            }
          });
      });
    });
  }


  // Only email is required; other fields (name, phone, company, message) are optional.
  // This is because of the newsletter integration — it's fine if those fields are empty.
  $(".contact-form-validated").each(function () {
    $(this).validate({
      rules: {
        name: {
          required: false,
          minlength: 2
        },
        email: {
          required: true,
          email: true
        },
        number: {
          required: false,
          digits: true,
          minlength: 7,
          maxlength: 15
        },
        company: {
          required: false,
          minlength: 2
        },
        message: {
          required: false,
          minlength: 10
        }
      },
      messages: {
        name: {
          minlength: "Name must be at least 2 characters"
        },
        email: {
          required: "Email address is required",
          email: "Please enter a valid email address"
        },
        number: {
          digits: "Please enter numbers only",
          minlength: "Phone number must be at least 7 digits",
          maxlength: "Phone number must not exceed 15 digits"
        },
        company: {
          minlength: "Company name must be at least 2 characters"
        },
        message: {
          minlength: "Message must be at least 10 characters"
        }
      },
      submitHandler: function (form) {
        $.post(
          $(form).attr("action"),
          $(form).serialize(),
          function (response) {
            $(form).find(".result").text(response);
            $(form).find('input[type="text"], input[type="email"], textarea').val("");
          }
        );
        return false;
      }
    });
  });



  if ($(".video-popup").length) {
    $(".video-popup").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: true,

      fixedContentPos: false
    });
  }

  if ($(".img-popup").length) {
    var groups = {};
    $(".img-popup").each(function () {
      var id = parseInt($(this).attr("data-group"), 10);

      if (!groups[id]) {
        groups[id] = [];
      }

      groups[id].push(this);
    });

    $.each(groups, function () {
      $(this).magnificPopup({
        type: "image",
        closeOnContentClick: true,
        closeBtnInside: false,
        gallery: {
          enabled: true
        }
      });
    });
  }




  //Chat Popup
  if ($('#chat-popup').length) {

    //Show Popup
    $('.chat-toggler').on('click', function () {
      $('#chat-popup').addClass('popup-visible');
    });
    $(document).keydown(function (e) {
      if (e.keyCode === 27) {
        $('#chat-popup').removeClass('popup-visible');
      }
    });
    //Hide Popup
    $('.close-chat,.chat-popup .overlay-layer').on('click', function () {
      $('#chat-popup').removeClass('popup-visible');
    });
  }


  //=== CountDownTimer===
  if ($('.coming-soon-countdown').length) {
    $('.coming-soon-countdown').each(function () {
      var Self = $(this);
      var countDate = Self.data('countdown-time'); // getting date

      Self.countdown(countDate, function (event) {
        $(this).html('<li> <div class="box"> <span class="days">' + event.strftime('%D') + '</span> <span class="timeRef">days</span> </div> </li> <li> <div class="box"> <span class="hours">' + event.strftime('%H') + '</span> <span class="timeRef clr-1">hrs</span> </div> </li> <li> <div class="box"> <span class="minutes">' + event.strftime('%M') + '</span> <span class="timeRef clr-2">mins</span> </div> </li> <li> <div class="box"> <span class="seconds">' + event.strftime('%S') + '</span> <span class="timeRef clr-3">secs</span> </div> </li>');
      });
    });
  };



  function dynamicCurrentMenuClass(selector) {
    let fileName = window.location.pathname.split("/").pop() || "index.html";

    // Remove all existing 'current' classes
    selector.find("li").removeClass("current");

    // Loop through all <li> elements and match with href
    selector.find("li").each(function () {
      let anchor = $(this).find("a").first();
      if (anchor.length && anchor.attr("href") === fileName) {
        $(this).addClass("current");

        // Traverse all parent <li> and add 'current'
        $(this).parents("li").addClass("current");
      }
    });

    // Default: if no current found, highlight the Home
    if (!selector.find("li.current").length) {
      selector.children("li").first().addClass("current");
    }
  }

  // Initialize
  if ($(".main-menu__list").length) {
    let mainNavUL = $(".main-menu__list");
    dynamicCurrentMenuClass(mainNavUL);
  }


  if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
    let navContent = document.querySelector(".main-menu__list").outerHTML;
    let mobileNavContainer = document.querySelector(".mobile-nav__container");
    mobileNavContainer.innerHTML = navContent;
  }
  if ($(".sticky-header__content").length) {
    let navContent = document.querySelector(".main-menu").innerHTML;
    let mobileNavContainer = document.querySelector(".sticky-header__content");
    mobileNavContainer.innerHTML = navContent;
  }

  if ($(".mobile-nav__container .main-menu__list").length) {
    let dropdownAnchor = $(
      ".mobile-nav__container .main-menu__list .dropdown > a"
    );
    dropdownAnchor.each(function () {
      let self = $(this);
      let toggleBtn = document.createElement("BUTTON");
      toggleBtn.setAttribute("aria-label", "dropdown toggler");
      toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
      self.append(function () {
        return toggleBtn;
      });
      self.find("button").on("click", function (e) {
        e.preventDefault();
        let self = $(this);
        self.toggleClass("expanded");
        self.parent().toggleClass("expanded");
        self.parent().parent().children("ul").slideToggle();
      });
    });
  }

  if ($(".mobile-nav__toggler").length) {
    $(".mobile-nav__toggler").on("click", function (e) {
      e.preventDefault();
      $(".mobile-nav__wrapper").toggleClass("expanded");
      $("body").toggleClass("locked");
    });
  }



  //Header Search
  if ($('.searcher-toggler-box').length) {
    $('.searcher-toggler-box').on('click', function (e) {
      e.preventDefault();
      $('body').addClass('search-active');
    });


    $('.close-search').on('click', function () {
      $('body').removeClass('search-active');
    });


    $('.search-popup .color-layer').on('click', function () {
      $('body').removeClass('search-active');
    });

  }




  if ($(".odometer").length) {
    var odo = $(".odometer");
    odo.each(function () {
      $(this).appear(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
    });
  }

  if ($(".dynamic-year").length) {
    let date = new Date();
    $(".dynamic-year").html(date.getFullYear());
  }

  // Disabled to prevent conflict with our custom, zoom-safe, once-only IntersectionObserver
  // if ($(".wow").length) {
  //   var wow = new WOW({
  //     boxClass: "wow", // animated element css class (default is wow)
  //     animateClass: "animated", // animation css class (default is animated)
  //     mobile: true, // trigger animations on mobile devices (default is true)
  //     live: true // act on asynchronously loaded content (default is true)
  //   });
  //   wow.init();
  // }



  if ($(".tabs-box").length) {
    $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).is(":visible")) {
        return false;
      } else {
        target
          .parents(".tabs-box")
          .find(".tab-buttons")
          .find(".tab-btn")
          .removeClass("active-btn");
        $(this).addClass("active-btn");
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .fadeOut(0);
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .removeClass("active-tab");
        $(target).fadeIn(300);
        $(target).addClass("active-tab");
      }
    });
  }




  // ===Portfolio===
  function projectMasonaryLayout() {
    if ($(".masonary-layout").length) {
      $(".masonary-layout").isotope({
        layoutMode: "masonry"
      });
    }
    if ($(".post-filter").length) {
      $(".post-filter li")
        .children(".filter-text")
        .on("click", function () {
          var Self = $(this);
          var selector = Self.parent().attr("data-filter");
          $(".post-filter li").removeClass("active");
          Self.parent().addClass("active");
          $(".filter-layout").isotope({
            filter: selector,
            animationOptions: {
              duration: 500,
              easing: "linear",
              queue: false
            }
          });
          return false;
        });
    }

    if ($(".post-filter.has-dynamic-filters-counter").length) {
      // var allItem = $('.single-filter-item').length;
      var activeFilterItem = $(".post-filter.has-dynamic-filters-counter").find(
        "li"
      );
      activeFilterItem.each(function () {
        var filterElement = $(this).data("filter");
        var count = $(".filter-layout").find(filterElement).length;
        $(this)
          .children(".filter-text")
          .append('<span class="count">' + count + "</span>");
      });
    }
  }




  function SmoothMenuScroll() {
    // Handle anchor links that have href starting with # or page.php#id
    $('a[href*="#"]').on('click', function(event) {
      // Get the href value
      var href = $(this).attr('href');
      
      // Split into page and anchor
      var hashIndex = href.indexOf('#');
      var page = hashIndex > -1 ? href.substring(0, hashIndex) : '';
      var hash = hashIndex > -1 ? href.substring(hashIndex) : '';
      
      // Check if we're on the same page
      var currentPage = window.location.pathname.split('/').pop();
      
      // CRITICAL: ignore if hash is just '#' to avoid $( "#" ) unrecognized expression syntax error in jQuery
      if ((page === '' || page === currentPage) && hash !== '' && hash !== '#') {
        // Same page, smooth scroll
        var target = $(hash);
        if (target.length) {
          event.preventDefault();
          var headerH = 120; // Adjust based on header height
          $('html, body').stop().animate({
            scrollTop: target.offset().top - headerH
          }, 800, 'easeInOutExpo');
        }
      }
      // Else, it will navigate normally to the other page with the anchor
    });
  }
  SmoothMenuScroll();

  // Scroll to anchor if exists in URL
  $(window).on('load', function() {
    if (window.location.hash) {
      var target = $(window.location.hash);
      if (target.length) {
        setTimeout(function() {
          var headerH = 120;
          $('html, body').stop().animate({
            scrollTop: target.offset().top - headerH
          }, 800, 'easeInOutExpo');
        }, 300);
      }
    }
  });

  function OnePageMenuScroll() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 117) {
      var menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
      menuAnchor.each(function () {
        var sections = $(this).attr("href");
        $(sections).each(function () {
          if ($(this).offset().top <= windscroll + 100) {
            var Sectionid = $(sections).attr("id");
            $(".one-page-scroll-menu").find("li").removeClass("current");
            $(".one-page-scroll-menu").find("li").removeClass("current-menu-ancestor");
            $(".one-page-scroll-menu").find("li").removeClass("current_page_item");
            $(".one-page-scroll-menu").find("li").removeClass("current-menu-parent");
            $(".one-page-scroll-menu")
              .find("a[href*=\\#" + Sectionid + "]")
              .parent()
              .addClass("current");
          }
        });
      });
    } else {
      $(".one-page-scroll-menu li.current").removeClass("current");
      $(".one-page-scroll-menu li:first").addClass("current");
    }
  }






  /*-- Handle Scrollbar --*/
  function handleScrollbar() {
    const bodyHeight = $("body").height();
    const scrollPos = $(window).innerHeight() + $(window).scrollTop();
    let percentage = (scrollPos / bodyHeight) * 100;
    if (percentage > 100) {
      percentage = 100;
    }
    $(".scroll-to-top .scroll-to-top__inner").css("width", percentage + "%");
  }




  // Animation gsap 
  function title_animation() {
    var tg_var = jQuery('.sec-title-animation');
    if (!tg_var.length) {
      return;
    }
    const quotes = document.querySelectorAll(".sec-title-animation .title-animation");

    quotes.forEach(quote => {

      //Reset if needed
      if (quote.animation) {
        quote.animation.progress(1).kill();
        quote.split.revert();
      }

      var getclass = quote.closest('.sec-title-animation').className;
      var animation = getclass.split('animation-');
      if (animation[1] == "style4") return

      quote.split = new SplitText(quote, {
        type: "lines,words,chars",
        linesClass: "split-line"
      });
      gsap.set(quote, {
        perspective: 400
      });

      if (animation[1] == "style1") {
        gsap.set(quote.split.chars, {
          opacity: 0,
          y: "90%",
          rotateX: "-40deg"
        });
      }
      if (animation[1] == "style2") {
        gsap.set(quote.split.chars, {
          opacity: 0,
          x: "50"
        });
      }
      if (animation[1] == "style3") {
        gsap.set(quote.split.chars, {
          opacity: 0,
        });
      }
      quote.animation = gsap.to(quote.split.chars, {
        scrollTrigger: {
          trigger: quote,
          start: "top 90%",
        },
        x: "0",
        y: "0",
        rotateX: "0",
        opacity: 1,
        duration: 1,
        ease: Back.easeOut,
        stagger: .02
      });
    });
  }
  ScrollTrigger.addEventListener("refresh", title_animation);






  // ===Price Filter===
  function priceFilter() {
    if ($(".price-ranger").length) {
      $(".price-ranger #slider-range").slider({
        range: true,
        min: 0,
        max: 5000,
        values: [0, 3000],
        slide: function (event, ui) {
          $(".price-ranger .ranger-min-max-block .min").val("" + ui.values[0]);
          $(".price-ranger .ranger-min-max-block .max").val("" + ui.values[1]);
        },
      });
      $(".price-ranger .ranger-min-max-block .min").val(
        "" + $(".price-ranger #slider-range").slider("values", 0)
      );
      $(".price-ranger .ranger-min-max-block .max").val(
        "" + $(".price-ranger #slider-range").slider("values", 1)
      );
    }
  }



  $(".add").on("click", function () {
    if ($(this).prev().val() < 999) {
      $(this)
        .prev()
        .val(+$(this).prev().val() + 1);
    }
  });
  $(".sub").on("click", function () {
    if ($(this).next().val() > 1) {
      if ($(this).next().val() > 1)
        $(this)
          .next()
          .val(+$(this).next().val() - 1);
    }
  });






  // ===Checkout Payment===
  if ($(".checkout__payment__title").length) {
    $(".checkout__payment__item").find(".checkout__payment__content").hide();
    $(".checkout__payment__item--active").find(".checkout__payment__content").show();

    $(".checkout__payment__title").on("click", function (e) {
      e.preventDefault();

      $(this)
        .parents(".checkout__payment")
        .find(".checkout__payment__item")
        .removeClass("checkout__payment__item--active");
      $(this).parents(".checkout__payment").find(".checkout__payment__content").slideUp();

      $(this).parent().addClass("checkout__payment__item--active");
      $(this).parent().find(".checkout__payment__content").slideDown();
    });
  }





  // Product All Tab
  if ($(".product__all-tab").length) {
    $(".product__all-tab .tabs-button-box .tab-btn-item").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).hasClass("actve-tab")) {
        return false;
      } else {
        $(".product__all-tab .tabs-button-box .tab-btn-item").removeClass("active-btn-item");
        $(this).addClass("active-btn-item");
        $(".product__all-tab .tabs-content-box .tab-content-box-item").removeClass(
          "tab-content-box-item-active"
        );
        $(target).addClass("tab-content-box-item-active");
      }
    });
  }





  if ($("#shop-details-one__thumb").length) {
    let testimonialsThumb = new Swiper("#shop-details-one__thumb", {
      slidesPerView: 3,
      spaceBetween: 0,
      speed: 1400,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      loop: true,
      autoplay: {
        delay: 5000
      }
    });

    let testimonialsCarousel = new Swiper("#shop-details-one__carousel", {
      observer: true,
      observeParents: true,
      loop: true,
      speed: 1400,
      mousewheel: false,
      slidesPerView: 1,
      autoplay: {
        delay: 5000
      },
      thumbs: {
        swiper: testimonialsThumb
      },
      pagination: {
        el: '#testimonials-one__carousel-pagination',
        type: 'bullets',
        clickable: true
      },

      "navigation": {
        "nextEl": "#product-details__swiper-button-next",
        "prevEl": "#product-details__swiper-button-prev"
      },
    });
  }



  //Related Products Carousel
  if ($(".related-products__carousel").length) {
    $(".related-products__carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 2000,
      navText: [
        '<span class="icon-left-arrow"></span>',
        '<span class="icon-right-arrow"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1200: {
          items: 3,
        },
        1320: {
          items: 4,
        },
      },
    });
  }


  // window load event
  $(window).on("load", function () {

    projectMasonaryLayout();
    fullHeight();
    title_animation();
    priceFilter();



    if ($(".post-filter").length) {
      var postFilterList = $(".post-filter li");
      // for first init
      $(".filter-layout").isotope({
        filter: ".filter-item",
        animationOptions: {
          duration: 500,
          easing: "linear",
          queue: false
        }
      });
      // on click filter links
      postFilterList.on("click", function () {
        var Self = $(this);
        var selector = Self.attr("data-filter");
        postFilterList.removeClass("active");
        Self.addClass("active");

        $(".filter-layout").isotope({
          filter: selector,
          animationOptions: {
            duration: 500,
            easing: "linear",
            queue: false
          }
        });
        return false;
      });
    }

    if ($(".post-filter.has-dynamic-filter-counter").length) {
      // var allItem = $('.single-filter-item').length;

      var activeFilterItem = $(".post-filter.has-dynamic-filter-counter").find(
        "li"
      );

      activeFilterItem.each(function () {
        var filterElement = $(this).data("filter");
        var count = $(".filter-layout").find(filterElement).length;
        $(this).append("<sup>[" + count + "]</sup>");
      });
    }





    // Curved Circle
    if ($(".video-one__curved-circle").length) {
      $(".video-one__curved-circle").circleType({
        position: "absolute",
        dir: 1,
        radius: 380,
        forceHeight: true,
        forceWidth: true,
      });
    }


    // Curved Circle
    if ($(".about-five__curved-circle").length) {
      $(".about-five__curved-circle").circleType({
        position: "absolute",
        dir: 1,
        radius: 270,
        forceHeight: true,
        forceWidth: true,
      });
    }
    // Curved Circle
    if ($(".about-five__curved-circle-2").length) {
      $(".about-five__curved-circle-2").circleType({
        position: "absolute",
        dir: 1,
        radius: -250,
        forceHeight: true,
        forceWidth: true,
      });
    }




  });

  // window scroll event

  $(window).on("scroll", function () {
    if ($(".stricked-menu").length) {
      var headerScrollPos = 300;
      var stricky = $(".stricked-menu");
      if ($(window).scrollTop() > headerScrollPos) {
        stricky.addClass("stricky-fixed");
      } else if ($(this).scrollTop() <= headerScrollPos) {
        stricky.removeClass("stricky-fixed");
      }
    }

    OnePageMenuScroll();

  });

  $(window).on("scroll", function () {
    handleScrollbar();
    if ($(".sticky-header--one-page").length) {
      var headerScrollPos = 130;
      var stricky = $(".sticky-header--one-page");
      if ($(window).scrollTop() > headerScrollPos) {
        stricky.addClass("active");
      } else if ($(this).scrollTop() <= headerScrollPos) {
        stricky.removeClass("active");
      }
    }

    var scrollToTopBtn = ".scroll-to-top";
    if (scrollToTopBtn.length) {
      if ($(window).scrollTop() > 500) {
        $(scrollToTopBtn).addClass("show");
      } else {
        $(scrollToTopBtn).removeClass("show");
      }
    }
  });



  $('select:not(.ignore)').niceSelect();



})(jQuery);