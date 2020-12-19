<?php 
//Lens
	$labels = array(
					'name' => 'Lens', 
					'singular_name' => 'Lens', 
					'add_new' => 'Add New', 
					'add_new_item' => 'Add New Lens', 
					'edit_item' => 'Edit Lens', 
					'new_item' => 'New Lens', 
					'all_items' => 'All Lenses', 
					'view_item' => 'View Lens', 
					'search_items' => 'Search Lenses', 
					'not_found' =>  'No Lenses found', 
					'not_found_in_trash' => 'No Lenses found in Trash', 
					'parent_item_colon' => '', 'menu_name' => 'Lenses' 
				);	
	$args = array( 
					'labels' => $labels,
					'public' => true,
					'publicly_queryable' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'query_var' => true,
					'rewrite' => array( 'slug' => 'lens' ),
					'capability_type' => 'post',
					'has_archive' => true,
					'hierarchical' => true,
					'menu_position' => null,
					'supports' => array( 'title','editor','thumbnail','excerpt','page-attributes' ), 
					'menu_icon' => get_bloginfo( 'template_url').'/inc/posttypes/pin.png' 
				); 

	register_post_type( 'lens', $args );	
