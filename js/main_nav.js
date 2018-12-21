$(document).ready(function() {
    var altura = $(".primary-navigation").offset().top;

    $(window).on('scroll', function() {
            if (($(window).scrollTop() > altura)) {
                $('.primary-navigation').addClass('menu-fixed');
            } else {
                $('.primary-navigation').removeClass('menu-fixed');
            }
    });

    $("#btn-open").click(function() {
        document.body.style.overflow = "hidden";
        $("#mobile-nav").animate({left: "0"});
    });

    $("#btn-open-2").click(function() {
        document.body.style.overflow = "hidden";
        $("#mobile-nav").animate({left: "0"});
    });

    $("#btn-close").click(function() {
        document.body.style.overflow = "auto";
        $("#mobile-nav").animate({left: "-100%"});
    });

});