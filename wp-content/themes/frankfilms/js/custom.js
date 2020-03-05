var $ = jQuery.noConflict();
$(function() {
    //caches a jQuery object containing the header element
    var page = $("body");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 300) {
            page.addClass("stuck");
        } else {
            page.removeClass("stuck");
        }
    });
    var hamburger =  $('.menu-toggle');
    hamburger.click(function(e) {
        e.preventDefault();
        $('.menu').toggleClass('show');
        hamburger.toggleClass('close');
    });
    var root = $('html, body');
    $('a.scroll-link').click(function(e) {
        e.preventDefault();
        $('.menu').removeClass('show');
        $('.menu-toggle').removeClass('close');
        root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 100
        }, 400);
        return false;
    });
    $('li.scroll-link').click(function(e) {
        var child = $(this).find('a').attr('href');
        e.preventDefault();
        $('.menu').removeClass('show');
        $('.menu-toggle').removeClass('close');
        root.animate({
            scrollTop: $(child).offset().top - 100
        }, 400);
        return false;
    });
});
