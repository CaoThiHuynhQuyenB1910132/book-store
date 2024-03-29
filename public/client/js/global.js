"use strict";
$(function () {
    $(".js-open-search-form-header").on("click", function () {
        $(this).siblings(".form-outer").addClass("open");
    });
    $(".js-close-search-form-header").on("click", function () {
        $(this).parent().removeClass("open");
    });
    $("[data-toggle=popover]").popover({ html: true });
    $('[data-toggle="tooltip"]').tooltip();
    $(".animsition").animsition({
        inClass: "fade-in",
        outClass: "fade-out",
        inDuration: 1500,
        outDuration: 800,
        linkElement:
            'nav .menu li a:not([target="_blank"]):not([href^="#"]), .mm-listview li a:not([target="_blank"]):not([href^="#"]),  .animsition-link',
        loading: true,
        loadingParentElement: "html",
        loadingClass: "animsition-loading",
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: ["animation-duration", "-webkit-animation-duration"],
        overlay: false,
        overlayClass: "animsition-overlay-slide",
        overlayParentElement: "body",
        transition: function (url) {
            window.location.href = url;
        },
    });
});
