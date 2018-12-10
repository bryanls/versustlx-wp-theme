<article class="clearfix">
    <h1><?php the_title(); ?></h1>
    <div class="date-info">
        <p class="date-entry">Por <span class="author-entry"><?php the_author(); ?></span> | <?php the_time('j F, Y') ?> a las <?php the_time(); ?></p>
    </div>
    <div class="post-cats"><?php the_category(', '); ?></div>
    <div class="extract">
        <?php the_content(); ?>
    </div>
</article>