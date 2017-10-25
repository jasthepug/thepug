<?php
/**
 * The template for displaying all single posts.
 *
 * @package Wealth Bay
 */

get_header(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
	 	<section class="ha-waypoint section-services" id="section_2" data-animate-down="ha-header-show" data-animate-up="ha-header-show" style="padding:15px; color:#333 !important">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<img src="<?php echo $image[0]; ?>" width="100%;" />

<?php endif; ?>
<div class="row animated opacity" data-andown="fadeIn" data-animation="animation">
					<div class="col-sm-8 col-sm-offset-2 elem" style="text-align:justify">
					<p class="grey"><h1><?php the_title(); ?></h1></p>
					<hr style="width:50%; float:left"><div class="clearfix"></div>
		<?php the_content(); ?></div>
					<!--<div class="col-sm-4 elem" style="background-color:white;"><?php the_field( "col_2" );  ?>
					</div>-->
	</section>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
