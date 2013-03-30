<?php $results = have_posts() ? 'Results' : 'No results'; ?>
<article>
    <?php echo $results; ?> for <strong><?php echo get_search_query(); ?></strong>
</article>
