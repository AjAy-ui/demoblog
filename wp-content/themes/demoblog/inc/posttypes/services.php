<?php	
//Services
	$labels = array(
					'name' => 'Services', 
					'singular_name' => 'Service', 
					'add_new' => 'Add New', 
					'add_new_item' => 'Add New Services', 
					'edit_item' => 'Edit Services', 
					'new_item' => 'New Service', 
					'all_items' => 'All Services', 
					'view_item' => 'View Services', 
					'search_items' => 'Search Services', 
					'not_found' =>  'No Services found', 
					'not_found_in_trash' => 'No Services found in Trash', 
					'parent_item_colon' => '', 'menu_name' => 'Services' 
				);	
	$args = array( 
					'labels' => $labels, 
					'public' => true, 
					'publicly_queryable' => true, 
					'show_ui' => true, 
					'show_in_menu' => true, 
					'query_var' => true, 
					'rewrite' => array( 'slug' => 'services' ), 
					'capability_type' => 'post', 
					'has_archive' => true, 
					'hierarchical' => false,
					'menu_position' => null,
					'supports' => array( 'title','editor','thumbnail','excerpt' ), 
					'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/news.png' ); 
	register_post_type( 'services',$args );
