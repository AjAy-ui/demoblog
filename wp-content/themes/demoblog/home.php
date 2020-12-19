<?php 
/*
* Template Name: Blog
*/

get_header();?>
<!--  -->

<!--? Hero Start -->
<div class="slider-area2">
    <div class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!--? Blog Area Start-->
   
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php  
                        $args = array(
                            'post_type'      => 'blog',
                            'posts_per_page' => 10
                        );

                        $loop = new WP_Query( $args );

                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product; ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url($post);?>" alt="">
                            <a href="<?php echo get_permalink();?>" class="blog_item_date">
                                <h3><?php echo get_the_date('d');?></h3>
                                <p><?php echo get_the_date('M');?></p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php echo get_permalink();?>">
                                <h2 class="blog-head" style="color: #2d2d2d;"><?php echo the_title(); ?></h2>
                            </a>
                            <p><?php echo the_excerpt();?></p>
                            <ul class="blog-info-link">
                                <li><a href="<?php echo get_permalink();?>"><i class="fa fa-user"></i>
                                <?php $categories = [];
                                foreach (get_the_category() as $category) { ?>
                                    <?php $categories[] = $category->name; ?>
                                <?php } ?>
                                <?php echo implode(',', $categories); ?>
                                </a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                    <!-- <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <!-- <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside> -->
                    <?php $args = array(
    'child_of'            => 0,
    'current_category'    => 0,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '',
    'exclude_tree'        => '',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 0,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( 'Categories:' ),
    'use_desc_for_title'  => 1,
);
?>
                    <aside class="single_sidebar_widget post_category_widget">
                        <?php wp_list_categories($args); ?> 
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                        <?php  
                        $args = array(
                            'post_type'  => 'blog',
                            'order'      => 'DESC',
                            'orderby'    => 'created_by',
                            'posts_per_page' => 5
                        );

                        $loop = new WP_Query( $args );

                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product; ?>
                        <div class="media post_item">
                            <img src="<?php echo get_the_post_thumbnail_url($post);?>" alt="post" style="width: 100px;height: 100px">
                            <div class="media-body">
                                <a href="<?php echo get_permalink();?>">
                                    <h3 style="color: #2d2d2d;"><?php echo the_title(); ?></h3>
                                </a>
                                <p><?php echo get_the_date('F j, Y');?></p>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_query();
                        ?>
                    </aside>
                    <!-- <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

  <?php get_footer();?>