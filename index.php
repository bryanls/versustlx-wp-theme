<?php get_header(); ?>

<div id="main-container">
    <div id="newsfeed-style-lastestnews" class="clearfix">
       <?php 
        $args = array(
            'posts_per_page' => 4,
            'orderby' => 'post_date',
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
            if ( $query->current_post == 0 && !is_paged() ) : ?>
            <div class="col-third-animation-container big-grid-post-1">
                <div class="col-third-animation-content">
                    <div class="post-img-bg">
                    <?php if( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-custom-big-thumb' ); ?></a><?php } else { echo '* Sin imagen representativa'; } ?>
                    </div>
                    <div class="post-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-date"><?php the_time('j F, Y') ?></div>
                    </div>
                </div>
            </div>
            <div class="col-third-animation-container big-grid-post-2">
        <?php elseif ( $query->current_post == 1 && !is_paged() ) : ?>
                <div class="col-third-animation-content">
                    <div class="post-img-bg">
                    <?php if( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-custom-big-thumb' ); ?></a><?php } else { echo '* Sin imagen representativa'; } ?>
                    </div>
                    <div class="post-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-date"><?php the_time('j F, Y') ?></div>
                    </div>
                </div>
            </div>
        <div class="col-third-animation-container big-grid-post-3">
       <?php else: ?>
            <div class="col-third-animation-content medium-grid-post-1">
                <div class="post-img-bg">
                 <?php if( has_post_thumbnail() ) { ?>
        			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-custom-medium-thumb' ); ?></a><?php } else { echo '* Sin imagen representativa'; } ?>
        		</div>
        		<div class="post-title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-date"><?php the_time('j F, Y') ?></div>
                </div>
            </div>
        <?php endif; endwhile; else: ?>
        <p>No se encontraron artículos.</p>
        <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
    
    <div class="banner-half-container">
        <?php dynamic_sidebar( 'banner-2' ); ?>
    </div>
    
    <div id="wrapper" class="clearfix">
        <div class="main-content">

            <div class="col-twothirds-wrap clearfix">
                <div class="col-twothirds-container">
                    <section class="category-third-container right-separator">
                        <div class="column-header bl-vsorange"><p class="bg-vsorange">Congreso</p></div>
                        <div class="newsfeed-style-1">
                            <ul class="newsfeed-list-items clearfix">
                                <?php
                                $args1 = array(
                                    'category_name' => 'congreso',
                                    'posts_per_page' => 4
                                );
                                $query1 = new WP_Query( $args1 );
                                if ( $query1->have_posts() ) : while ( $query1->have_posts() ) : $query1->the_post(); ?>
                                <li>
                                    <div class="item-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                                    </div>
                                    <div class="item-info">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="entry-date"><?php the_time('j F, Y') ?></span>
                                    </div>
                                </li><?php endwhile; ?>
                            </ul>
                            <?php else: echo "<p>No se encontraron artículos.</p>";
                            endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                    <section class="category-third-container">
                        <div class="column-header bl-vsblue"><p class="bg-vsblue">Gobierno</p></div>
                        <div class="newsfeed-style-1">
                            <ul class="newsfeed-list-items clearfix">
                                <?php
                                $args3 = array(
                                    'category_name' => 'gobierno',
                                    'posts_per_page' => 4
                                );
                                $query3 = new WP_Query( $args3 );
                                if ( $query3->have_posts() ) : while ( $query3->have_posts() ) : $query3->the_post(); ?>
                                <li>
                                    <div class="item-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                                    </div>
                                    <div class="item-info">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="entry-date"><?php the_time('j F, Y') ?></span>
                                    </div>
                                </li><?php endwhile; ?>
                            </ul>
                            <?php else: echo "<p>No se encontraron artículos.</p>";
                            endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>

                <div class="col-twothirds-container">
                    <section class="category-twothirds-container">
                    <div class="column-header bl-vsred"><p class="bg-vsred">Justicia</p></div>
                    <div class="justice-news-container clearfix">
                    <?php
                    $args7 = array(
                        'category_name' => 'justicia',
                        'posts_per_page' => 5
                    );

                    $query7 = new WP_Query( $args7 );

                    if ( $query7->have_posts() ) : while ( $query7->have_posts() ) : $query7->the_post();
                        if ( $query7->current_post == 0 && !is_paged() ) : ?>
                        <div class="featured-item">
                            <div class="featured-item-img">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-medium-thumb' ); ?></a>
                                <?php } else { echo '*Sin imagen representativa'; } ?>
                            </div>
                            <div class="featured-item-info">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="entry-date"><?php the_time('j F, Y') ?></div>
                                <div class="entry-excerpt"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                        <div class="justice-news-items">
                        <?php else: ?>
                            <div class="justice-item-content">
                                <div class="justice-item-img">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-small-thumb' ); ?></a>
                                    <?php } ?>
                                </div>
                                <div class="justice-item-info">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="entry-date"><?php the_time('j F, Y') ?></div>
                                </div>
                            </div>
                        <?php endif; endwhile; ?>
                        </div>
                        <?php else: echo "<p>No se encontraron artículos.</p>"; 
                        endif; wp_reset_postdata(); ?>
                    </div>
                </section>
                </div>
            </div>

            <?php dynamic_sidebar( 'banner-3' ); ?>

            <div class="col-twothirds-wrap clearfix">
                <div class="col-twothirds-container">
                    <section class="category-third-container right-separator">
                        <div class="column-header bl-vsdarkcyan"><p class="bg-vsdarkcyan">Salud</p></div>
                        <div class="newsfeed-style-1">
                            <ul class="newsfeed-list-items clearfix">
                                <?php
                                $args5 = array(
                                    'category_name' => 'salud',
                                    'posts_per_page' => 4
                                );
                                $query5 = new WP_Query( $args5 );
                                if ( $query5->have_posts() ) : while ( $query5->have_posts() ) : $query5->the_post(); ?>
                                <li>
                                    <div class="item-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                                    </div>
                                    <div class="item-info">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="entry-date"><?php the_time('j F, Y') ?></span>
                                    </div>
                                </li><?php endwhile; ?>
                            </ul>
                            <?php else: echo "<p>No se encontraron artículos.</p>";
                            endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                    
                    <section class="category-third-container">
                        <div class="column-header bl-vsgreen"><p class="bg-vsgreen">Educación</p></div>
                        <div class="newsfeed-style-1">
                            <ul class="newsfeed-list-items clearfix">
                                <?php
                                $args6 = array(
                                    'category_name' => 'educacion',
                                    'posts_per_page' => 4
                                );
                                $query6 = new WP_Query( $args6 );
                                if ( $query6->have_posts() ) : while ( $query6->have_posts() ) : $query6->the_post(); ?>
                                <li>
                                    <div class="item-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                                    </div>
                                    <div class="item-info">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="entry-date"><?php the_time('j F, Y') ?></span>
                                    </div>
                                </li><?php endwhile; ?>
                            </ul>
                            <?php else: echo "<p>No se encontraron artículos.</p>";
                            endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                    <section class="category-third-container right-separator">
                        <div class="column-header bl-vsyellow"><p class="bg-vsyellow">Cultura</p></div>
                        <div class="newsfeed-style-1">
                            <ul class="newsfeed-list-items clearfix">
                                <?php
                                $args2 = array(
                                    'category_name' => 'cultura',
                                    'posts_per_page' => 4
                                );
                                $query2 = new WP_Query( $args2 );
                                if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); ?>
                                <li>
                                    <div class="item-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                                    </div>
                                    <div class="item-info">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="entry-date"><?php the_time('j F, Y') ?></span>
                                    </div>
                                </li><?php endwhile; ?>
                            </ul>
                            <?php else: echo "<p>No se encontraron artículos.</p>";
                            endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                    
                    <section class="category-third-container">
                        <div class="column-header bl-vspurple"><p class="bg-vspurple">Opinión</p></div>
                        <div class="newsfeed-style-1">
                            <ul class="newsfeed-list-items clearfix">
                                <?php
                                $args4 = array(
                                    'category_name' => 'opinion',
                                    'posts_per_page' => 4
                                );
                                $query4 = new WP_Query( $args4 );
                                if ( $query4->have_posts() ) : while ( $query4->have_posts() ) : $query4->the_post(); ?>
                                <li>
                                    <div class="item-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                                    </div>
                                    <div class="item-info">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="entry-date"><?php the_time('j F, Y') ?></span>
                                    </div>
                                </li><?php endwhile; ?>
                            </ul>
                            <?php else: echo "<p>No se encontraron artículos.</p>";
                            endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row-twothirds-container">
                <section class="row-large-video-container bg-vsblack">
                    <div class="video-wrap">
                        <p class="video-header">Video Notas</p>
                        <?php echo do_shortcode('[yt_playlist mainid="7sKMPEw_dGU" vdid="HeXQB5x0QRY,h_JzP_7lafU,OdE-lgzovZE,urOaGW6f5KA,Ct2kOjL5obE,-abh8m1mAzc"]'); ?>
<!--
                        https://www.youtube.com/watch?v=7sKMPEw_dGU
                        https://www.youtube.com/watch?v=HeXQB5x0QRY
                        https://www.youtube.com/watch?v=h_JzP_7lafU
                        https://www.youtube.com/watch?v=OdE-lgzovZE
                        https://www.youtube.com/watch?v=urOaGW6f5KA
                        https://www.youtube.com/watch?v=Ct2kOjL5obE
                        https://www.youtube.com/watch?v=-abh8m1mAzc
-->
<!--
                        <div class="video-container">
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/urOaGW6f5KA?list=UUoc2dJY1Q5Eac959eW-nl1A" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
-->
                    </div>
                </section>
            </div>
            <div class="row-twothirds-container">
                <section class="category-twothirds-container">
                    <div class="column-header bl-vsgreen"><p class="bg-vsgreen">Audio Notas</p></div>
                    <div class="audio-container">
                        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/132032960&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    </div>
                </section>
            </div>

        </div><!-- End Main content -->

    <?php get_sidebar(); ?>

    </div><!-- Ended wrapper -->

    <div class="col-third-container">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div>

</div>
<?php get_footer(); ?>
