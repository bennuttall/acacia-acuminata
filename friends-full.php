<?php

$args = array(
    'post_type' => 'friends',
    'orderby' => 'rand',
    'posts_per_page' => 100,
);

$friends = new WP_Query($args);

$i = 0;

?>
<section id="friends">
    <h2>Friends of Manchester Raspberry Jam</h2>
    <?php while ($friends->have_posts()):
        $friends->the_post();
        $thumbnail_args = array('title' => get_the_title());
    ?>
    <div class="friend">
        <a href="<?php the_field('url'); ?>" target="_blank"><?php the_post_thumbnail('friend_thumb', $thumbnail_args); ?></a>
        <?php the_excerpt(); ?>
    </div>
    <?php if ($i % 2): ?>
        <div style="clear:both;"></div>
    <?php endif;
        $i++;
    endwhile; ?>
    <div style="clear:both;"></div>
</section>
