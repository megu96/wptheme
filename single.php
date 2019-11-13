<?php get_header(); ?>
<header>
    <div class="user-area">
        <h1 class="user-img">
            <a href="<?php echo esc_url( home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/red-ptofile.jpg" alt="メインロゴ">
            </a>
        </h1>
        <div class="title-area">
        <p class="title">Works.</p>
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

<main>
    <section class="article">
    <?php while(have_posts()): the_post(); ?>

    <?php
    if(has_post_thumbnail()) {
        the_post_thumbnail('large', array( 'class' => 'single main-image' ));
        }
    ?>
    
    <!-- <p><?php the_category(","); ?> </p>
    <p><?php the_time("Y-n-j"); ?></p> -->
    <h2 class="article__title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    

    <ul class="bread-list">
        <li class="bread-item">
            <?php $category = get_the_category()[0]; { echo '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>';} ?>
        </li>
    </ul>

<?php endwhile; ?>

<?php comments_template(); ?>

</section>
</main>

<?php get_footer(); ?>