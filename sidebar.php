    <div class="col-third-container">
      
       <section class="category-container">
            <div class="column-header bl-vsblack"><p class="bg-vsblack">Municipios</p></div>
            <div class="newsfeed-style-2">
            <?php
            $args8 = array(
                'category_name' => 'sponsor',
                'posts_per_page' => 5
            );
            $query8 = new WP_Query( $args8 );

            if ( $query8->have_posts() ) : while ( $query8->have_posts() ) : $query8->the_post();
                if ( $query8->current_post == 0 ) : ?>
                <div class="featured-item">
                    <div class="item-image">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-medium-thumb' ); ?></a>
                    <?php } else { echo '*Sin imagen representativa'; } ?>
                    </div>
                    <div class="item-info">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-date"><?php the_time('j F, Y') ?></div>
                    </div>
                </div>
                <ul class="newsfeed-list-items-style-2 clearfix">
                <?php else: ?>
                    <li class="sponsored-article">
                        <div class="thumb">
                            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'list_articles_thumbs' ); } ?></a>
                        </div>
                        <div class="info">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-date"><?php the_time('j F, Y') ?></div>
                        </div>
                    </li><?php endif; endwhile; ?>
                </ul>
            <?php else: echo "<p>No se encontraron artículos.</p>";
            endif; wp_reset_postdata(); ?>
            </div>
        </section>
        
        <section class="category-container">
            <div class="column-header bl-vsblack"><p class="bg-vsblack">Destacado</p></div>
            <div class="newsfeed-style-3">
            <?php
            $args9 = array(
                'category_name' => 'destacado',
                'posts_per_page' => 5
            );
            $query9 = new WP_Query( $args9 );

            if ( $query9->have_posts() ) : while ( $query9->have_posts() ) : $query9->the_post();
                if ( $query9->current_post == 0 /*&& !is_paged()*/ ) : ?>
                <div class="featured-item">
                    <div class="item-image">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vs-medium-thumb' ); ?></a>
                    <?php } else { echo '*Sin imagen representativa'; } ?>
                    </div>
                    <div class="item-info">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-date"><?php the_time('j F, Y') ?></div>
                    </div>
                </div>
                <ul class="newsfeed-list-items clearfix">
                <?php else: ?>
                    <li>
                        <div class="item-thumb">
                            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'vs-small-thumb' ); } ?></a>
                        </div>
                        <div class="item-info">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <span class="entry-date"><?php the_time('j F, Y') ?></span>
                        </div>
                    </li><?php endif; endwhile; ?>
                </ul>
                <?php else: echo "<p>No se encontraron artículos.</p>";
                endif; wp_reset_postdata(); ?>
            </div>
        </section>
        
        <section class="category-container">
            <div class="column-header bl-vsblack"><p class="bg-vsblack">Reportajes</p></div>
            <div class="newsfeed-style-1">
                <ul class="newsfeed-list-items clearfix">
                    <?php
                    $args10 = array(
                        'category_name' => 'reportaje',
                        'posts_per_page' => 4
                    );
                    $query10 = new WP_Query( $args10 );
                    if ( $query10->have_posts() ) : while ( $query10->have_posts() ) : $query10->the_post(); ?>
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
        
        <?php dynamic_sidebar( 'sidebar-1' ); ?> 
        
    </div>
