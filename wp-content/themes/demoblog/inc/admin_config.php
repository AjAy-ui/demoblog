<?php

/********
Options
********/
require_once 'options/options-framework.php';
require_once get_template_directory() . '/options.php';

/********
Post Type
********/
// include('posttypes/testimonials.php');
// include('posttypes/slider.php');
// include('posttypes/about_slider.php');
// include('posttypes/services.php');
// include('posttypes/benefits.php');
// include('posttypes/faq.php');
// include('posttypes/howitworks.php');
include('posttypes/blogs.php');
// include('posttypes/lens.php');

/********
Listing
********/

include('includes/contact_list.php');
// include('includes/payment_list.php');
// include('includes/subscription_list.php');
include('includes/pagination.php');


/********
Metaboxes
********/
// include('metabox/rating.php');
include('metabox/video.php');
include('metabox/blog_meta.php');
include('metabox/short_description.php');
// include('metabox/show_in_home.php');
