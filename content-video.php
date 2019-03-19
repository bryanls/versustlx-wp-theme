<div class="entry-header">
    <div class="category-links"><?php the_category(' '); ?></div>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-meta">
        <span class="entry-author"><?php the_author(); ?></span>
        <span class="entry-date"><?php the_time('j F, Y') ?> - <?php the_time(); ?></span>
    </div>
</div>
<div class="entry-content">
    <div class="entry-text"><?php the_content(); ?></div>
</div>