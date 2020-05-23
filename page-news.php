<?php get_header(); ?>

<main id="news">
    <img src="<?php bloginfo('template_directory'); ?>/images/header2.png" alt="ヘッダーの写真">

    <div class="wrap">  
        <div class="news-outer">
            <div class="news-inner">
                <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 5,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                <div>
                    <a href="<?php echo get_permalink(); ?>"><?php the_time('Y.n.j'); ?>&nbsp;&nbsp;</a>
                    <?php the_category(', ') ?>&nbsp;&nbsp;
                </div>
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; endif; ?>
            </div>
            <div class="news-numbar">
                <?php
                if ($the_query->max_num_pages > 1) {
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'total' => $the_query->max_num_pages
                    ));
                }
                ?>
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