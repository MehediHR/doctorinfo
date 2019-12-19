$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 30) {
            $(".navbar-fixed-top").css({
                "background": "black",
                "opacity": "0.7"
            });
        } else {
            $(".navbar-fixed-top").css("background", "transparent");
        }
    })
})

//perticals

$(document).ready(function () {
    $('.canvas').particles({
        connectParticles: true,
        color: '#ffffff',
        size: 3,
        maxParticles: 80,
        speed: 1.8
    });
});