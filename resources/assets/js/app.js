var distance = $('.navbar').offset().top,
    $window = $(window);

$window.scroll(function () {
    if ($window.scrollTop() >= distance) {
        $('.navbar').addClass('fixed-top');
    } else {
        $('.navbar').removeClass('fixed-top');
    }
});