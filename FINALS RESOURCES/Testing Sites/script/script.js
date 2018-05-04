$(".menu-toggle").on('click', function () {
    $(this).toggleClass("on");
    $('.menu-section').toggleClass("on");
    $("nav ul").toggleClass('hidden');
});

$(".nav-toggle").on("click", function () {
    $(".hamburger-03").toggleClass("hamburger-03-activate");
    $(".hamburger-02").toggleClass("hamburger-02-activate");
    $(".hamburger").toggleClass("hamburger-hide-activate");
    $(".hide-on-click").toggleClass("hide");
    $(".number-header").toggleClass("hide");
    $("#mobile-menu").toggleClass("expand-height");
    $(".logo").toggleClass("animate-center-small animate-center-large");
    $("li").toggleClass("animated slideInUp");
    $(".mobile_nav_link").toggleClass("animated slideInRight");
    // $("html").toggleClass("catchScroll");
    $(".mobile-ninja").toggleClass("animate-mobile-ninja");

    if ($("#products-menu").hasClass("expand-height")) {
        $("#products-menu").removeClass("expand-height");
        $("#mobile-menu").removeClass("expand-height");
    } else if ($("#crash-tested-menu").hasClass("expand-height")) {
        $("#products-menu").removeClass("expand-height");
        $("#mobile-menu").removeClass("expand-height");
        $("#crash-tested-menu").removeClass("expand-height");
    }
});

$(".products-link").click(function () {
    $("#mobile-menu").removeClass("expand-height");
    $("#products-menu").addClass("expand-height");
});

$(".crash-link").click(function () {
    $("#mobile-menu").removeClass("expand-height");
    $("#products-menu").removeClass("expand-height");
    $("#crash-tested-menu").addClass("expand-height");
});
