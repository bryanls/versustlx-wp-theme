$(document).ready(function() {
    var distance = $(".primary-navigation").offset().top;
    var bannerInitialScroll = $(".banner-wrap-custom").offset().top;

    $(window).on('scroll', function() {
            if (($(window).scrollTop() > distance)) {
                $('.primary-navigation').addClass('menu-fixed');
            } else {
                $('.primary-navigation').removeClass('menu-fixed');
            }
    });

    $("#open-menu").click(function() {
        //document.body.style.overflow = "hidden";
        $("#mobile-nav").animate({right: "0"});
    });

    $("#close-menu").click(function() {
        //document.body.style.overflow = "auto";
        $("#mobile-nav").animate({right: "-100%"});
    });

    $("#open-search").click(function() {
        //document.body.style.overflow = "hidden";
        $("#search-mobile-container").animate({top: "0"});
    });

    $("#close-search").click(function() {
        //document.body.style.overflow = "hidden";
        $("#search-mobile-container").animate({top: "-100%"});
    });

});

function toggleSearch() {
    document.getElementById("search-form-content").classList.toggle("show");
}
