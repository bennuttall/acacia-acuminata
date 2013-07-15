<?php

$args = array(
    'post_type' => 'friends',
    'orderby' => 'rand',
    'posts_per_page' => 30,
);

$friends = new WP_Query($args);

?>
<aside id="friends">
<h2>Friends of Manchester Raspberry Jam</h2>
<div class="logos">
<?php while ($friends->have_posts()):
    $friends->the_post();
    $thumbnail_args = array('title' => get_the_title());
?>
<h3><?php the_title(); ?></h3>
<a href="<?php the_field('url'); ?>" target="_blank"><?php the_post_thumbnail('friend_thumb', $thumbnail_args); ?></a>
<?php the_excerpt(); ?>
<?php endwhile; ?>
</div>
</aside>
