<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pug Financial
 */

get_header(); ?>


	   	<?php while ( have_posts() ) : the_post(); ?>
	   <div class="row" style="min-height:100%;">
			<div class="col-lg-6 col-md-6 col-sm-12 col-md-offset-3 col-lg-offset-3 marginate" >  
			
					<div class="row" >
					<div class="col-sm-12 col-lg-12" style="text-align:center;">
						<h2 style="border:0px;"><span class="acca2"><?php the_title();?></span></h2>
				     </div>
					</div>
				   
				   
				   <?php the_content();?>
				   
				   <div class="row" style="margin-top:50px;text-align:center;" >
						<div class="col-sm-12 col-lg-6" style="padding-top:20px;" >
							<form method="post" action="<?php echo get_site_url(); ?>/find-out-more">
							<input type="hidden" name="my_loan" value="<?php the_title();?>"  />
							<input type="submit" value=" FIND OUT MORE " class="butt_blue" style="min-height:40px;"  />
							</form>
						</div>
						<div class="col-sm-12 col-lg-6" style="padding-top:20px;">
							<input type="button" value="SPEAK TO OUR EXPERTS" class="butt_blue" style="min-height:40px;"
							onclick="window.location='<?php echo get_site_url(); ?>/speak-to-our-experts'"  />

						</div>
				   </div>
				   <div class="row" style="line-height:1.1em;margin:40px 0px;text-align:center;font-size:0.8em;color:#9a9d9d" >
						<div class="col-sm-12 col-lg-12">
						*The comparison rates are based on a loan amount of $150,000 and a term of 25 years.
						Warning: These comparison rates apply only to the example or examples given. 
						Different amounts and terms will result in different comparison rates. 
						Costs such as redraw fees or early repayment fees, and costs savings such
						as fee waivers, are not included in the comparison rate but may influence the cost of the loan.
						All offers and products shown on this website are subject to lender approval, terms and conditions. 
						Please contact The Pug for key details regarding these terms and conditions. 
						Your full financial situation would need to be reviewed prior to acceptance of any offer or product. 
						All rates, deals and offers are believed to be correct at the time of publication,
						but are subject to final confirmation by lender and may change without notice.
						
						</div>

						</div>
				   </div>
                	<!----->
					
           
			
	   	</div>
		</div>
	   	
        <?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>