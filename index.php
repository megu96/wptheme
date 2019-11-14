<?php get_header(); ?>
<header>
    <div class="inner hd-inner">
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

        <div class="nav-toggle nav-btn">
            <p>menu</p>
        </div>

        
    </div>       
</header>

<div class="menu" id="menu">
    <div class="menu__inner">
        <div class="menu__top">
        <h5 class="menu__title">NAVIGATION</h5>
        <div class="nav-toggle nav-close" id="nav-close">←</div> 
    </div>                   
        <ul class="menu__ul">
            <li class="menu__item"><a href="">Works</a></li>
            <li class="menu__item"><a href="">About</a></li>
            <li class="menu__item"><a href="">Contact</a></li>
        </ul>
    </div>
</div>

<section class="index-posts">
    <div class="inner index-inner">
    
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

</div>
</section>

<?php
	the_posts_pagination(
		array(
			'prev_text' => '<i class="fas fa-angle fa-angle-left"></i>',
			'next_text' => '<i class="fas fa-angle fa-angle-right"></i>'
		)
	);
?>

<?php get_footer(); ?>
