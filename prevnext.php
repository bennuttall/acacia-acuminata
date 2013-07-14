<?php if (!is_page()): ?>
<aside id="prevnext">
    <?php if (is_singular('post')): ?>
    <nav id="prev"><?php previous_post_link(); ?></nav>
    <nav id="next"><?php next_post_link(); ?></nav>
    <?php else: ?>
    <nav id="prev"><?php previous_posts_link(); ?></nav>
    <nav id="next"><?php next_posts_link(); ?></nav>
    <?php endif; ?>
    <div style="clear:both;"></div>
</aside>
<?php endif; ?>
