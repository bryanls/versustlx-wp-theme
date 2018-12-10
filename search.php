<?php get_header(); ?>

<div id="main-container">

    <div class="main-content articles-cat-list">

        <div class="tree-cats"><?php echo get_category_parents( $cat, true, ' / ' ); ?></div>
        <p class="current-cat"><?php single_cat_title(''); ?></p>
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="article-cat-thumb">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-list-thumb' ); } ?>
            </div>
            <div class="article-cat-info">
                <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                <div class="date-info">
                    <span class="date-entry"><?php the_time('j F, Y') ?> a las <?php the_time(); ?> | Por: <?php the_author(); ?></span>
                </div>
                <div class="post-cats"><?php the_category(', '); ?></div>
                <div class="extract"><?php the_excerpt(); ?></div>
            </div>
        </article>
        <?php endwhile; echo paginate_links(); else: ?>
        <p>No se encontraron artículos.</p>
        <?php endif; wp_reset_query(); ?>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
