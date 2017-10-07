function stickyNavbar(className){
    var distance = $(className).offset().top,
        window = $(window);

    window.scroll(function () {
        if (window.scrollTop() >= distance) {
            $(className).addClass('fixed-top');
        } else {
            $(className).removeClass('fixed-top');
        }
    });
}