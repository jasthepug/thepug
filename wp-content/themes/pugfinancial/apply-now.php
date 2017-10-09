<?php
/**
 * Template Name: Apply Now
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	   	<?php while ( have_posts() ) : the_post(); ?>
	   <div class="row" style="margin-left:0; margin-right:0px;">
		<div class="col-sm-6 col-sm-offset-3" style="margin-top:20px; margin-bottom:20px; min-height:400px;">
			<div class="vertical-center app_now" style="color: #333;font-size: 20px;">
			<div class="col-sm-5 btt">
			<center>I know what I want</center><br>
			<div class="button">
			<a href="<?php echo get_site_url(); ?>/create-an-account">Apply Online</a>
			</div>
			</div>
            <div class="col-sm-5 col-sm-offset-2 btt">
            <center>It's complicated!</center><br>
            <div class="button">
            <a href="<?php echo get_site_url(); ?>/get-a-pug-broker">Speak to our Experts</a>
            </div>
            </div>
		</div>
	   	</div>
        <?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>