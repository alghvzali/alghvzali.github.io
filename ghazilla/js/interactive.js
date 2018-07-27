$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    if(wScroll > $('.features-icons').offset().top - 500 ) {
        $('.features-icons .features-icons-item').addClass('show');
    }

    if(wScroll > $('.show-left').offset().top - 400 ) {
        $('.show-left').addClass('show');
    }

    if(wScroll > $('.show-right').offset().top - 500 ) {
        $('.show-right').addClass('show');
    }


});