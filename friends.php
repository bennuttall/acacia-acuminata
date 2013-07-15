<?php

$args = array(
    'post_type' => 'friends',
    'posts_per_page' => '6',
    'orderby' => 'rand',
);

$friends = new WP_Query($args);

?>
<aside id="friends">
<h2><a href="/links/#friends">Friends of Manchester Raspberry Jam</a></h2>
<div class="logos">
<?php while ($friends->have_posts()):
    $friends->the_post();
    $excerpt = get_the_excerpt();
    $thumbnail_args = array('title' => get_the_title());
?>
<a href="<?php the_field('url'); ?>" target="_blank"><?php the_post_thumbnail('friend_thumb', $thumbnail_args); ?></a>
<?php endwhile; ?>
</div>
</aside>
