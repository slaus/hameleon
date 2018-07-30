//Slider settings
jQuery(function ($) {

    $(".spincrement").spincrement({
        from: 0,
        thousandSeparator: " ",
        duration: 1000
    });

    $('.item').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100 && $(".menu").hasClass("default")) {
            $(".menu").removeClass("default").addClass("fixed");
        } else if ($(this).scrollTop() <= 100 && $(".menu").hasClass("fixed")) {
            $(".menu").removeClass("fixed").addClass("default");
        }


//Back to top button
        if ($(this).scrollTop() > 400) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

// scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').stop().animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $(".type").find("a").on("click", function(e) {
        e.preventDefault();
    });

});