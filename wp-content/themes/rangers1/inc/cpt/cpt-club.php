<?php
# Employees of cpt_
define('CLUB_POST_TYPE', 'club');
define('CLUB_POST_SLUG', 'club');


function club_register_post_type() {
    $args = array (
        'labels' => [   
          'name'          => 'Club',
          'singular_name' => 'Club',
          'add_new_item'  => 'Add New Club',
          'new_item'      => 'New Club',
          'edit_item'     => 'Edit Club',
        ],
        //'register_meta_box_cb' => 'testimonial_meta_box_cb',
        'menu_icon'          => get_template_directory_uri() . '/assets/img/club-icon.png',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => CLUB_POST_SLUG], //['slug' => TESTIMONIAL_POST_SLUG],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4, // null
        'supports'           => ['title', 'excerpt', 'page-attributes', 'thumbnail', 'editor'], //, 'editor'
      );
      register_post_type(CLUB_POST_SLUG , $args);
    }



add_action('init','club_register_post_type');