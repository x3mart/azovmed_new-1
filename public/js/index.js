$(document).ready(function()
{
    $("a[data-rel='indexPhotoGallery1']").attr('rel', 'indexPhotoGallery1');
    $("a[rel^='indexPhotoGallery1']").fancybox({});
    var indexCarousel1Opts =
    {
        delay: 50000,
        duration: 500,
        easing: 'linear',
        mode: 'fade',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#indexCarousel1").carouseleffects(indexCarousel1Opts);
    $("#indexCarousel1_back a").click(function()
    {
        $('#indexCarousel1').carouseleffects('prev');
    });
    $("#indexCarousel1_next a").click(function()
    {
        $('#indexCarousel1').carouseleffects('next');
    });
});