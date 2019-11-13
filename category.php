<?php get_header(); ?>

<h1><?php single_cat_title(); ?></h1>

<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        ?>
        <?php
        if( has_post_thumbnail() ){
            the_post_thumbnail('thumbnail')
;        } else {
    ?>
    <img src="https://via.placeholder.com/72?text=noimage" class="attachment-thumnail">
    <?
}
?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <!-- 日付 -->
        <p><?php the_time("Y-n-j"); ?></p>
        <p><?php the_category(","); ?> </p>
        <p><?php the_excerpt();?></p>
        
        <?php
        endwhile;
        else:
?>

<p>投稿がありません</p>

<?php
    endif;
?>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>
