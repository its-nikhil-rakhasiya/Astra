"use strict";
jQuery,
    jQuery(document).ready(function (o) {
        // Delegate offset-side-bar clicks for carts
        o(document).on("click", ".offset-side-bar", function (e) {
            e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
        });

        // Bind close-side-widget clicks directly (they are static and do not get cloned)
        o(".close-side-widget").on("click", function (e) {
            e.preventDefault(), o(".cart-group").removeClass("isActive"), o(".info-group").removeClass("isActive");
        });

        // Delegate navSidebar-button clicks for info-sidebar (works perfectly on sticky headers!)
        o(document).on("click", ".navSidebar-button", function (e) {
            e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
        });

        o("body").on("click", function (e) {
            o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
        });

        o(".xs-sidebar-widget").on("click", function (e) {
            e.stopPropagation();
        });
            0 < o(".xs-modal-popup").length &&
                o(".xs-modal-popup").magnificPopup({
                    type: "inline",
                    fixedContentPos: !1,
                    fixedBgPos: !0,
                    overflowY: "auto",
                    closeBtnInside: !1,
                    callbacks: {
                        beforeOpen: function () {
                            this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                        },
                    },
                });
    });
