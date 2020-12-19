<?php 
//Slider
	$labels = array(
					'name' => 'Slider', 
					'singular_name' => 'Slider', 
					'add_new' => 'Add New', 
					'add_new_item' => 'Add New Slider', 
					'edit_item' => 'Edit Slider', 
					'new_item' => 'New Slider', 
					'all_items' => 'All Sliders', 
					'view_item' => 'View Slider', 
					'search_items' => 'Search Sliders', 
					'not_found' =>  'No Sliders found', 
					'not_found_in_trash' => 'No Sliders found in Trash', 
					'parent_item_colon' => '', 'menu_name' => 'Sliders' 
				);	
	$args = array( 
					'labels' => $labels,
					'public' => true,
					'publicly_queryable' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'query_var' => true,
					'rewrite' => array( 'slug' => 'slider' ),
					'capability_type' => 'post',
					'has_archive' => true,
					'hierarchical' => false,
					'menu_position' => null,
					'supports' => array( 'title','editor','thumbnail','excerpt' ), 
					'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/pin.png' 
				); 

	register_post_type( 'slider', $args );	
