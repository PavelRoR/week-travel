$(function () {
    // Preloader
    $(window).on('load', function() {
        $('.preloader').fadeOut(1000);
    });
    
    // Header Fixed
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 30) {
            $('.page-header').addClass('fixed');
        } else {
            $('.page-header').removeClass('fixed');
        }
    });

    // Mobile menu
    $('.header-mobile-menu').on('click', function() {
        $(this).toggleClass('open');
        $('.header-content').toggleClass('open');
    });
    $('.header-menu-link').on('click', function() {
        $('.header-mobile-menu, .header-content').removeClass('open');
    });

    // Appartament Slider
    $('.app-slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="app-slider-arrow left"></div>',
        nextArrow: '<div class="app-slider-arrow right"></div>',
    });

    $('.app-slider-button').click(function (e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.app-slider').slick('slickGoTo', slideno - 1);
    });

});