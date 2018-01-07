// Click on link
$('.page-scroll').on('click', function(e){

    // mengambil isi href
    var tujuan = $(this).attr('href');

    // elemen bersangkutan (section)
    var elemenTujuan = $(tujuan);

    // pindah scroll
    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    }, 4000, 'easeOutCubic', 4000, 'easeInCubic');    

    e.preventDefault();
    

});


// Parallax
// About
$(window).on('load', function(){
    $('.pKiri').addClass('pMuncul');
    $('.pKanan').addClass('pMuncul');
    $('.blockquote').addClass('muncul');
    $('.blockquote-footer').addClass('muncul')
})

$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    // Jumbotron
    $('.jumbotron img').css({
        'transform' : 'translate(0px, '+ wScroll/6 +'%)'
    });

    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2.5 +'%)'
    });

    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/1.5 +'%)'
    });


    // Gallery
    if(wScroll > 600) {
        $('.gallery .thumbnail').addClass('muncul');
    }


});
