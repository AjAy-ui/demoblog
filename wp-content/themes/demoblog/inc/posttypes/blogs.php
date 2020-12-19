<?php   
//Blogs
  $labels = array( 
          'name' => 'Blogs', 
          'singular_name' => 'Blog', 
          'add_new' => 'Add New', 
          'add_new_item' => 'Add New Blogs', 
          'edit_item' => 'Edit Blogs', 
          'new_item' => 'New Blogs', 
          'all_items' => 'All Blogs', 
          'view_item' => 'View Blogs', 
          'search_items' => 'Search Blogs', 
          'not_found' =>  'No Blogs found', 
          'not_found_in_trash' => 'No Blogs found in Trash', 
          'parent_item_colon' => '', 
          'menu_name' => 'Blogs' 
        );  
  $args = array( 
          'labels' => $labels, 
          'public' => true, 
          'publicly_queryable' => true, 
          'show_ui' => true,  
          'show_in_menu' => true, 
          'query_var' => true, 
          'rewrite' => array( 'slug' => 'blog' ), 
          'capability_type' => 'post', 
          'has_archive' => true, 
          'taxonomies' => array('post_tag','category'),
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title','editor','thumbnail','excerpt','comments' ), 
          'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/testimonial.png' 
        ); 
  register_post_type( 'blog', $args );
  function add_tags_categories() {
    register_taxonomy_for_object_type('category', 'blog');
    register_taxonomy_for_object_type('post_tag', 'blog');
  }
  add_action('init', 'add_tags_categories');