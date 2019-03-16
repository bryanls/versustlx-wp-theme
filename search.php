<?php get_header(); ?>

<div id="main-container">
    <div class="main-content">

        <div class="archive-container clearfix">
            <h1 class="search-title"><?php printf( __( 'Resultados de búsqueda: <span class="searched-text">%s</span>', 'versustlx' ), get_search_query() ); ?></h1>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="article-wrapper">
                <div class="article-thumbnail">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-list-thumb' ); } ?>
                </div>
                <div class="article-content">
                    <div class="entry-header">
                        <div class="category-links"><?php the_category(' '); ?></div>
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-meta">
                            <span class="entry-author"><?php the_author(); ?></span>
                            <span class="entry-date"><?php the_time('j F, Y') ?> - <?php the_time(); ?></span>
                        </div>
                    </div>
                    <div class="entry-extract"><?php the_excerpt(); ?></div>
                </div>
            </article>
            <?php endwhile;
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __('Anterior', 'versustlx'),
                'next_text' => __( 'Siguiente', 'versustlx' ),
            ) );
            else: ?>
            <p>No se encontraron artículos.</p>
            <?php endif; wp_reset_query(); ?>
        </div>

    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>