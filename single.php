<?php get_header(); ?>

<div id="main-container">
    <div class="main-content">
        <article class="entry-container clearfix">
        <!-- <div class="tree-cats"><?php //echo get_the_category_list( ' / ', 'multiple' ); ?></div> -->
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    get_template_part( 'content', get_post_format() );
                endwhile; 
            else: 
                echo '<p>No se encontró el artículo.</p>';
            endif; 
            wp_reset_query();
            ?>
        </article>
        <?php dynamic_sidebar( 'banner-3' ); ?>  
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>