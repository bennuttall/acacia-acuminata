<?php

get_header();

if (have_posts()):
    while (have_posts()) {
        the_post();
        get_template_part('post');
    }
    if (!is_page()): ?>
    <aside id="prevnext">
        <nav id="prev"><?php previous_posts_link(); ?></nav>
        <nav id="next"><?php next_posts_link(); ?></nav>
    </aside>
<?php
    endif;
else:
    get_template_part('part', '404');
endif;

get_footer();
