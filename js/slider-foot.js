    $(document).ready(function () {
        $("#owl-footer").owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: ["<img src='../img/left_arr.png'>", "<img src='../img/right_arr.png'>"],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                767: {
                    items: 5,
                    nav: true
                },
                1200: {
                    items: 5,
                    nav: true
                }
            }
        });

        /* Good idea, but not this time"

        // $(window).resize(function () {
        //     $('#owl-footer').find('.owl-nav').removeClass('disabled');
        //     $('#owl-footer').on('changed.owl.carousel', function (event) {
        //         $(this).find('.owl-nav').removeClass('disabled');
        //     });
        // });
        */
    });