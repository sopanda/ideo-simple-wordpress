$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        mouseDrag: true,
        responsiveClass:true,
        autoplayTimeout: 2000,
        autoplay: true,
        pagination: false,
        navText: ["<img src='../img/arr_white_left.png'>","<img src='../img/arrow_white_right.png'>"],
        responsive:{
            0:{
                items:1,
                nav:true,
                mouseDrag: true
            },
            768:{
                items:3,
                nav: false,
                mouseDrag: false,
                autoplay: false
            },
        }
    });
});