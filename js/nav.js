(function($) {
$(document).ready(function () {
    $("#search-button").on("click", function (e) {
        if ($("#search-input-container").hasClass("hdn")) {
            e.preventDefault();
            $("#search-input-container").removeClass("hdn");
        }
    });

    $("#hide-search-input-container").on("click", function (e) {
        e.preventDefault();
        $("#search-input-container").addClass("hdn");
    });
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