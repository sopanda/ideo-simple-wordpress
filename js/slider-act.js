$(document).ready(function () {

    $('.slider-actual').slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/left_arr.png'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='../img/right_arr.png'>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});