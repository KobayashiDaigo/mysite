<?php get_header(); ?>
<main id="archive">
    <img src="<?php bloginfo('template_directory'); ?>/images/header2.png" alt="ヘッダーの写真">

    <div class="wrap">
        <div class="archive-outer">
            <div>
                <?php the_category(', ') ?>一覧
            </div>
            <div class="archive-inner">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php if( is_category() ) : ?>
                <?php elseif( is_tag() ): ?>
                <?php elseif( is_day() ): ?>
                <?php elseif( is_month() ): ?>
                <?php elseif( is_year() ): ?>
                <?php endif; ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    <div class="archive-ttl">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        <a href="<?php echo get_permalink(); ?>"><?php the_time('Y.n.j'); ?>&nbsp;&nbsp;</a>
                    </div>
                    <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                </article>
                <hr>
                <?php endwhile; ?>
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