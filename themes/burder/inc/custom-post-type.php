<?php

 function create_custom_posts(){
     
    // Register custom post type
    register_post_type('csr', array(
        'labels' => array(
            'name' => 'CSR',
            'add_new_item' => 'Add new csr'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
 }

 add_action('init', 'create_custom_posts');

?>