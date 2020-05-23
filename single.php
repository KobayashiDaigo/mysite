<?php get_header(); ?>
<main id="single">
    <img src="<?php bloginfo('template_directory'); ?>/images/header2.png" alt="ヘッダーの写真">
    
    <div class="wrap">
        <div class="single-outer">
            <div class="single-inner">
                <?php 
                if(have_posts()):
                    while(have_posts()):the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_time('Y.n.j'); ?>&nbsp;&nbsp; <?php the_category(', ') ?>&nbsp;&nbsp;</p>
                <section>
                    <?php the_content(); ?>
                </section>
                <?php endwhile;
                endif;
                ?>
            </div>
            <div class="catalog">
                <a href="<?php echo home_url('/news'); ?>">記事一覧へ</a>
            </div>
        </div>
        
        <div class="sidebar">
            <?php if ( is_active_sidebar('main-sidebar') ) : ?>
              <ul class="menu">
                <?php dynamic_sidebar('main-sidebar'); ?>
              </ul>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>