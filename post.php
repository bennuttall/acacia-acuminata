<article>
    <header>
        <?php if (!is_page()): ?>
        <date><?php the_date(); ?></date>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <?php the_content(); ?>
    <footer>
    <?php if (!is_page()): ?>
        <?php show_tag_list(get_the_ID(), ', ', 'Tags: '); ?>
    <?php endif; ?>
    </footer>
</article>
