<?php get_header(); ?>

<header id="header">
	<h1><a href="/"><?php bloginfo('title'); ?></a></h1>
	<em><?php bloginfo('description'); ?></em>
</header>

<?php
if (have_posts()):
    	while (have_posts()) {
        	the_post();
        	get_template_part('post');
    	}
   	get_template_part('prevnext');
else:
	get_template_part('part', '404');
endif; ?>

<?php get_footer(); ?>