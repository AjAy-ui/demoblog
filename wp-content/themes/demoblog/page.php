<?php get_header();?>
	<div class="holder">
		<div class="container">
			<?php if( have_posts() ){
				while( have_posts() ){ the_post();?>
				<!-- <h3><?php the_title();?></h3> -->
				<?php the_content();?>
				<?php }
			}?>
		</div>
	</div>
<?php get_footer();?>