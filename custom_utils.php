<?php

/* Get content from via post id or post page and show on home page. */
function add_content_to_main_page($post_id) {
    $posts = get_posts(
        array( 
            'include' => $post_id, 
            'post_type' => 'any', 
            'numberposts' => 1, 
            'suppress_filters' => false, )
        );
    echo apply_filters('the_content', $posts[0]->post_content);
}

?>