$(document).ready(function () {
    var scroll = $(this).scrollTop();
    var topDist = $(".navbar").height();

    if (scroll >= topDist) {
        $(".navbar").css("background-color", "#1F1F1F");
        $(".brand-logo").css("height", 60);
    } else {
        $(".navbar").css("background-color", "transparent");

        $(".brand-logo").css("height", 100);
    }

    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        var topDist = $(".navbar").height();

        if (scroll >= topDist) {
            $(".navbar").css("background-color", "#1F1F1F");
            $(".brand-logo").css("height", 60);
        } else {
            $(".navbar").css("background-color", "transparent");

            $(".brand-logo").css("height", 100);
        }
    });
});
$("#owl-one").owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    autoplay: true,
    dots: false,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});




