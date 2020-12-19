<?php

	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options/' );
	require_once get_template_directory() . '/inc/admin_config.php';
  //Initial Settings
  add_theme_support('title-tag');	
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  show_admin_bar( false );

	add_action( 'wp_enqueue_scripts', 'load_styles_scripts' );
  function load_styles_scripts() {
    $dir_uri = get_template_directory_uri();
    /* Css */
    wp_enqueue_style( 'bootstrap-css', $dir_uri .'/css/bootstrap.min.css', array(), 'v1.0.0', 'screen' );    
    wp_enqueue_style( 'carousel', $dir_uri .'/css/owl.carousel.min.css', array(), 'v1.0.0', 'screen' );    
    wp_enqueue_style( 'slicknav', $dir_uri .'/css/slicknav.css', array(), 'v1.0.0', 'screen' );
    wp_enqueue_style( 'flaticon',  $dir_uri.'/css/flaticon.css', array(), 'v1.0.0', 'screen' );    
    wp_enqueue_style( 'progressbar_barfiller-css', $dir_uri .'/css/progressbar_barfiller.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'gijgo-css', $dir_uri .'/css/gijgo.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'animate-css', $dir_uri .'/css/animate.min.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'animated-headline-css', $dir_uri .'/css/animated-headline.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'magnific-popup-css', $dir_uri .'/css/magnific-popup.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'fontawesome-all', $dir_uri .'/css/fontawesome-all.min.css', array(), 'v1.0.0', 'screen' );    
    wp_enqueue_style( 'themify-icons-css', $dir_uri .'/css/themify-icons.css', array(), 'v1.0.0', 'screen' ); 
    wp_enqueue_style( 'slick', $dir_uri .'/css/slick.css', array(), 'v1.0.0', 'screen' );
    wp_enqueue_style( 'nice-select', $dir_uri .'/css/nice-select.css', array(), 'v1.0.0', 'screen' );    
    wp_enqueue_style( 'style-css', $dir_uri .'/css/style.css', array(), 'v1.0.0', 'screen');  
    wp_enqueue_style( 'style-theme-css', $dir_uri .'/style.css', array(), 'v1.0.0', 'screen' ); 
    /* CSS End */

    /* Scripts */
    wp_enqueue_script( 'modernizr-js', $dir_uri . '/js/vendor/modernizr-3.5.0.min.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-js', $dir_uri . '/js/vendor/jquery-1.12.4.min.js', array(), '0.1', true );
    wp_enqueue_script( 'popper-js', $dir_uri . '/js/popper.min.js', array(), '0.1', true );
    wp_enqueue_script( 'bootstrap-js', $dir_uri . '/js/bootstrap.min.js', array(), '0.1', true );
    wp_enqueue_script( 'slicknav-js', $dir_uri . '/js/jquery.slicknav.min.js', array(), '0.1', true );
    wp_enqueue_script( 'carousel-js', $dir_uri . '/js/owl.carousel.min.js', array(), '0.1', true );
    wp_enqueue_script( 'slick-js', $dir_uri . '/js/slick.min.js', array(), '0.1', true );
    wp_enqueue_script( 'wow-js', $dir_uri . '/js/wow.min.js', array(), '0.1', true );
    wp_enqueue_script( 'animated-headline-js', $dir_uri . '/js/animated.headline.js', array(), '0.1', true );
    wp_enqueue_script( 'magnific-popup-js', $dir_uri . '/js/jquery.magnific-popup.js', array(), '0.1', true );
    wp_enqueue_script( 'gijgo-js', $dir_uri . '/js/gijgo.min.js', array(), '0.1', true );
    wp_enqueue_script( 'nice-select', $dir_uri . '/js/jquery.nice-select.min.js', array(), '0.1', true );
    wp_enqueue_script( 'sticky-js', $dir_uri . '/js/jquery.sticky.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-barfiller', $dir_uri . '/js/jquery.barfiller.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-counterup', $dir_uri . '/js/jquery.counterup.min.js', array(), '0.1', true );
    wp_enqueue_script( 'waypoints-min-js', $dir_uri . '/js/waypoints.min.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-countdown-js', $dir_uri . '/js/jquery.countdown.min.js', array(), '0.1', true );
    wp_enqueue_script( 'hover-direction-snake-js', $dir_uri . '/js/hover-direction-snake.min.js', array(), '0.1', true );
    wp_enqueue_script( 'contact-js', $dir_uri . '/js/contact.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-form-js', $dir_uri . '/js/jquery.form.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-validate-min-js', $dir_uri . '/js/jquery.validate.min.js', array(), '0.1', true );
    wp_enqueue_script( 'mail-script-js', $dir_uri . '/js/mail-script.js', array(), '0.1', true );
    wp_enqueue_script( 'jquery-ajaxchimp-min-js', $dir_uri . '/js/jquery.ajaxchimp.min.js', array(), '0.1', true );
    wp_enqueue_script( 'plugins-js', $dir_uri . '/js/plugins.js', array(), '0.1', true );
    wp_enqueue_script( 'main-js', $dir_uri . '/js/main.js', array(), '0.1', true );
    /* Scripts End */
    if ( is_singular() ) {
      wp_enqueue_script( "comment-reply" );
    }

  }

	add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
	function wpdocs_theme_add_editor_styles() {
		add_editor_style( 'css/custom-editor-style.css' );
	}

	add_action( 'widgets_init', 'paper_theme_widgets_init' );
	function paper_theme_widgets_init() {
    	$args = array(
    		'name'          => __( 'RIGHT HAND SIDE BAR', 'newpaper' ),
    		'id'            => "right-sidebar",
    		'description'   => '',
    		'class'         => '',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => "</div>\n",
    		'before_title'  => '<h2 class="widgettitle">',
    		'after_title'   => "</h2>\n",
    	);
    	register_sidebar( $args );	

    }

    //Menu Registration
    register_nav_menu('main', 'Main navigation menu');
    register_nav_menu('quick', 'Quick navigation menu');
    register_nav_menu('other', 'Other navigation menu');
	

  
  add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
  function add_loginout_link( $items, $args ) {
      if (is_user_logged_in() && $args->theme_location == 'main') {
          $items .= '<li class ="nav-item has-sub-menu"><a href="'. site_url('my-account') .'">My account</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="'. wp_logout_url(site_url('my-account')) .'">Logout</a></li></ul></li>';
      }
      elseif (!is_user_logged_in() && $args->theme_location == 'main') {
          $items .= '<li class ="nav-item"><a href="'. site_url('my-account') .'">My account</a></li>';
      }
      return $items;
  }
  add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
  function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
  // Pagination

// localize wp-ajax, notice the path to our theme-ajax.js file
wp_localize_script( 'rsclean-request-script', 'theme_ajax', array(
    'url'         => admin_url( 'admin-ajax.php' ),
    'site_url'      => get_bloginfo('url'),
    'theme_url'   => get_bloginfo('template_directory')
) );


add_theme_support('post-thumbnails');
