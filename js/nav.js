(function ($) {
    $(document).ready(function () {
        $("#search-button").on("click", function (e) {
            if ($("#search-input-container").hasClass("hdn")) {
                e.preventDefault();
                $("#search-input-container").removeClass("hdn");
                $( "#search_input" ).focus();
            }
        });

        $("#hide-search-input-container").on("click", function (e) {
            e.preventDefault();
            $("#search-input-container").addClass("hdn");
        });

        $("#aktualnosci-logo").on("click", function (e) {
            e.preventDefault();
            window.location = "http://wp-szkolenie-3.t.ideo/wordpress/aktualnosci/";
        });

        $(".subpage-h2").on("click", function (e) {
            e.preventDefault();
            window.location = "http://wp-szkolenie-3.t.ideo/wordpress/aktualnosci/";
        });
        console.log("nav.js - works");

        let width = window.innerWidth || document.body.clientWidth;

        if (width >= 1199) {
            $('div#n2-ss-2 .n2-ss-control-bullet').css({
                'width': "1000px",
                "text-align": "right"
            });

        } else if (width >= 768 && width < 1199) {
            $('div#n2-ss-2 .n2-ss-control-bullet').css({
                'display' : 'none'
            });
        } else if (width >= 320 && width < 768) {
            $('div#n2-ss-2 .nextend-bullet-bar').wrap('<div class="dotsWrapMobile"></div');
            $('.dotsWrapMobile').css({
                'width': "300px",
                "text-align": "right",
                'margin-bottom': "-62px"
            });
        }

        // var lnk = $(".carousel-slider__post-title").attr('href');
        // $('<a>Więcej</a>').insertAfter(".carousel-slider__post-excerpt").attr("href", lnk);

    });
})(jQuery);





function openNav() {
    let width = window.innerWidth || document.body.clientWidth;

    if (width >= 1199) {
        document.getElementById("mySidenav").style.width = "211px";
        console.log(width);
    } else if (width >= 768 && width < 1199) {
        document.getElementById("mySidenav").style.width = "116px";
        console.log(width);
    } else if (width >= 320 && width < 768)
        document.getElementById("mySidenav").style.width = "91px";
    console.log(width);
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}