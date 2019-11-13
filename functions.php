<?php
add_theme_support('html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ));

   function more($post) {
       return '<a href="'. esc_url(get_permalink()) . '">'.'続きを読む'.'</a>';
   }
   add_filter('excerpt_more', 'more');

//    function scripts () {
// }
    add_theme_support('post-thumbnails');
    // add_action( 'wp_enqueue_scripts', 'scripts');
   ?>