        <article>
            <div class="article-cat-thumb">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'list_articles_thumbs' ); } ?>
            </div>
            <div class="article-cat-info">
                <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                <span class="date-info"><?php the_time('j F, Y') ?> a las <?php the_time(); ?> | Por: <?php the_author(); ?></span>
                <?php the_category(); ?>
                <div class="extract"><?php the_excerpt(); ?></div>
            </div>
        </article>