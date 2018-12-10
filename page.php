<?php get_header(); ?>

<div id="main">
    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner1') ) : endif; ?>
    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner2') ) : endif; ?>
    
    <div class="page-article">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div class="thumb">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'single_thumbs' ); } ?>
            </div>
            <div class="extract"><?php the_content(); ?></div>
        </article>
        <?php endwhile; else: ?>
        <p>No se encontraron artículos.</p>
        <?php endif; wp_reset_query(); ?>
    </div>
    <?php get_sidebar(); ?>
    <!-- <div class="advs-col-ps">
        
    </div> -->
    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner3') ) : endif; ?>
    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner4') ) : endif; ?>
</div>


<?php get_footer(); ?>