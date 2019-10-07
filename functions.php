<?php

function webKu_resources(){
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'webKu_resources');

//memunculkan menu di apperance
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

//get_top_ancestor
function get_top_ancestor_id(){
    global $post;
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

function has_children(){
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}