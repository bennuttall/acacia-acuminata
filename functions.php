<?php

register_nav_menu('nav_bar', 'Nav Bar');

function show_tag_list ($id, $separator, $before) {
    $tags = wp_get_post_tags($id);

    if (!empty($tags)) {

        $tags_html = array();
        foreach ($tags as $tag) {
            $tags_html[] = "<a href='/tag/{$tag->slug}/'>{$tag->name}</a>";
        }

        echo $before . join($separator, $tags_html);
    }
}

function random_404_message() {
    $random_1 = rand(0, 2);
    $random_2 = rand(0, 2);

    $words = array(
        'Raspberry',
        'Jam',
        'Pi'
    );

    $word = $words[$random_1];

    $messages = array(
        "No {$word} here...",
        "This is not the {$word} you are looking for...",
        "The {$word} you requested could not be found",
    );

    echo $messages[$random_2];
}
