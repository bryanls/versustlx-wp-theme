$(document).ready(function() {
    var altura = $(".primary-navigation").offset().top;
    //var altura2 = $('.menu-bar').offset().top;
    //var ancho = screen.width;
    //var menu_size = $(".mob-menu-content").height();

    $(window).on('scroll', function() {
        //if (($(window).scrollTop() > altura2) && (screen.width <= 640)) {
            //$('.menu-bar').addClass('menu-fixed');
            //$('.primary-navigation').addClass('tmenu-fixed');
        //} else {
            //$('.menu-bar').removeClass('menu-fixed');
            //$('.primary-navigation').removeClass('tmenu-fixed');
            if (($(window).scrollTop() > altura)) {
                $('.primary-navigation').addClass('menu-fixed');
            } else {
                $('.primary-navigation').removeClass('menu-fixed');
            }
        //}
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
