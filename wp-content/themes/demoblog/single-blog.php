<?php get_header(); ?>
<!--? Hero Start -->
<div class="slider-area2">
   <div class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                     <div class="hero-cap hero-cap2 pt-20 text-center">
                        <h2><?php the_title();?></h2>
                     </div>
               </div>
            </div>
         </div>
   </div>
</div>
<!-- Hero End -->

<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <?php if(has_post_thumbnail($post)){ ?>
										<img src="<?php echo get_the_post_thumbnail_url($post);?>" class="img-responsive blog-img img-fluid" alt="Image" />
									<?php } ?>
               </div>
               <div class="blog_details">
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="<?php echo get_permalink();?>"><i class="fa fa-user"></i> <?php $categories = [];
                                foreach (get_the_category() as $category) { ?>
                                    <?php $categories[] = $category->name; ?>
                                <?php } ?>
                                <?php echo implode(',', $categories); ?></a></li>
                     <li><a href="#"><i class="fa fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
                  </ul>
                  <p class="excert">
                    <?php echo the_excerpt();?>
                  </p>
                  <?php echo the_content();?>
               </div>
            </div>
          
            <!-- <div class="comment-form">
            	<?php //comments_template(); ?>
            </div> -->
         </div>
         <div class="col-lg-4">
            <div class="blog_right_sidebar">
               <aside class="single_sidebar_widget post_category_widget">
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
									wp_list_categories($args); ?> 
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
         </div>
      </div>
   </div>
</section>
<!-- Blog Area End -->

<?php get_footer();?>