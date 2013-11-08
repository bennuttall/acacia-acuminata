<?php

get_header();

if (have_posts()) {
    the_post();
    get_template_part('post');
}
else {
    get_template_part('part', '404');
}

get_template_part('friends', 'full');

get_footer();
