<?php   
//Work Flow Step
  $labels = array( 
          'name' => 'Work Flow Step', 
          'singular_name' => 'Work Flow Step', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Work Flow Step', 
          'edit_item' => 'Edit Work Flow Step', 
          'new_item' => 'New Work Flow Step', 
          'all_items' => 'All Work Flow Step', 
          'view_item' => 'View Work Flow Step', 
          'search_items' => 'Search Work Flow Step', 
          'not_found' =>  'No Work Flow Step found', 
          'not_found_in_trash' => 'No Work Flow Step found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Work Flow Step' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'howitworks' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt','page-attributes' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'howitworks', $args );
