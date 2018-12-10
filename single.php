<?php get_header(); ?>

<div id="main-container">

    <div class="main-content single-article">

        <!-- <div class="tree-cats"><?php //echo get_the_category_list( ' / ', 'multiple' ); ?></div> -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="clearfix">
            <h1><?php the_title(); ?></h1>
            <div class="date-info">
                <p class="date-entry">Por <span class="author-entry"><?php the_author(); ?></span> | <?php the_time('j F, Y') ?> a las <?php the_time(); ?></p>
            </div>
            <div class="post-cats"><?php the_category(', '); ?></div>
            <div class="thumb">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-big-thumb' ); } ?>
            </div>
            <div class="extract"><?php the_content(); ?></div>
        </article>
        <?php endwhile; else: ?>
        <p>No se encontraron artículos.</p>
        <?php endif; wp_reset_query(); ?>

        <?php dynamic_sidebar( 'banner-3' ); ?>

    </div>
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
