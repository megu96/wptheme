<?php get_header(); ?>
<header>
    <div class="user-area">
        <h1 class="user-img">
            <a href="<?php echo esc_url( home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/red-ptofile.jpg" alt="メインロゴ">
            </a>
        </h1>
        <div class="title-area">
        <p class="title">Portfolio.</p>
        <p class="name">- Megumi Tsukakoshi</p>
        </div>
        </div>
        <div class="nav-btn">
            <p>menu</p>
        </div>
        <!-- <nav>
        <ul>
            <li><a href="#">コンテンツA</a></li>
            <li><a href="#">コンテンツB</a></li>
            <li><a href="#">コンテンツC</a></li>
        </ul>
        </nav> -->
        
</header>

<section class="index-posts">
    
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        ?>
        <div class="index-posts__item">
        <a href="<?php the_permalink(); ?>">
            <?php
        if( has_post_thumbnail() ){
            the_post_thumbnail('thumbnail')
            ;        } else {
                ?>   
     
    <img src="https://via.placeholder.com/72?text=noimage" class="attachment-thumbnail">
  
    <?
}
?>
   
   <div class="mask">
    <div class="index-posts__title">
        <h2><?php the_title(); ?></h2>
        <!-- <p><?php the_time("Y-n-j"); ?></p> -->
        <!-- <p><?php the_category(","); ?> </p>
        <p><?php the_excerpt();?></p> -->
        </div>
    </div>
    </a>
    </div>

        <?php
        endwhile;
        else:
?>

<p>投稿がありません</p>

<?php
    endif;
?>

</section>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>
