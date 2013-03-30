<?php

get_header();

get_template_part('results');

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('post');
    }
}

get_footer();
