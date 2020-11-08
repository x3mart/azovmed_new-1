$(document).ready(function () {
    var orto1Carousel1Opts =
    {
        delay: 5000,
        duration: 500,
        easing: 'linear',
        mode: 'fade',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#orto1Carousel1").carouseleffects(orto1Carousel1Opts);
    $("#orto1Carousel1_back a").click(function () {
        $('#orto1Carousel1').carouseleffects('prev');
    });
    $("#orto1Carousel1_next a").click(function () {
        $('#orto1Carousel1').carouseleffects('next');
    });
});