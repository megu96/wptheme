
jQuery(function(){

    jQuery(".menu").hide();

    jQuery('.nav-toggle').on('click', function () {

        jQuery('.menu').fadeToggle();

        jQuery('.nav-btn, .nav-close, .index-posts').toggleClass('open')

        jQuery('.menu__ul li')
            .css({opacity: 0})
            .each(function(i){
                jQuery(this).delay(200 * i).animate({opacity:1}, 150);
        });

    })

});

jQuery(function () {

    jQuery(".single-nav").hide();

    jQuery('.single-btn').on({
        'mouseenter': function () {
            jQuery('.single-nav:not(:animated)').slideDown(500)
        },
    })
    jQuery('.single-nav').on({
        'mouseleave': function () {
            jQuery('.single-nav').slideUp(500)
        }
    })

})
