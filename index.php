<?php get_header(); ?>



<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        ?>
        <h2><a href="<php the_permalink();"><?php the_title(); ?></a></h2>
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
