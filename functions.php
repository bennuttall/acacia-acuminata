<?php

// Image sizes
add_image_size('friend_thumb', 100, 100, false);
set_post_thumbnail_size(100, 100);

// Menus
register_nav_menu('nav_bar', 'Nav Bar');

// Custom post types

add_action('init', 'create_friends_post_type');

function create_friends_post_type() {
    register_post_type('friends',
        array(
            'labels' => array(
                'name' => __('Friends'),
                'singular_name' => __('Friend')
                ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'friend'),
            'supports' => array('title', 'excerpt', 'thumbnail'),
            )
    );

    add_theme_support('post-thumbnails', array('friends'));

    flush_rewrite_rules(false);
}

// Custom functions

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
