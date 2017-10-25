<?php
/**
 * Template Name: Explore Loans
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



	   <div class="row" style="min-height:100%;">
	 
	  <div class="col-md-6 col-md-offset-3 centered" style="margin-top:10px;">
				   <div style="max-width:400px;text-align:center;margin:0 auto;" > 
				  <h1 class="Contact"><span style="font-size:20px;color:white;background-color:#98D4DC;padding:5px 10px">What type of loan are you looking for?</span></h1> </div>

	
								   <?php
  	$loop = new WP_Query( array(
    		'showposts' => 4,
    		'post_type' => array('loan'),
    		)
    		);
    		$counter = 0;

  	while ( $loop->have_posts() ) : $loop->the_post(); ?>

 
			    
			     <div class="col-sm-6 square" style="padding-left:27px !important; padding-right:27px !important">
                	
                	<div class="card-container" style="margin-bottom:14px;">
		                <div class="card"  >
							<a class="loan" href="<?php the_permalink() ?>">
		                    <div class="front" >
								<table style="height:100%;"><tr valign="middle"><td valign="bottom">
								<h3 class="small_t" style="font-weight: lighter;">
								<?php the_field( "small_title" );  ?><hr>
								<div style="font-size:22px;text-align:center;color:white;background-color:#98D4DC;padding:5px 30px"><?php the_title();  ?></div></h3></td></tr>
								</table>
		                    </div> <!-- end front panel -->
							
		                    <div class="back" >
								
								<div class="back_int"><?php the_field( "short_desc" );  ?>
								<br />
									<div>
									<span class="more">Read More</span>
										
									</div>
								</div>
							</a>
							
		                    </div> <!-- end back panel -->
		                </div> <!-- end card -->
		            </div> <!-- end card-container -->
                </div>
	<?php
	if ($counter % 2 == 1): /* ADD THIS */?>
            <div class="clearfix"></div>
          <?php endif; ?>
          <?php $counter++ ?>
          <?php	endwhile;
	wp_reset_postdata();
	?>
	<!--<div class="explore_t">
		All our loans have no fees and charges except the one monthly instalment and can be repaid anytime without any exit fees.
	</div>-->
						<div class="row" style="margin-top:20px;text-align:center;font-size:0.8em;color:#9a9d9d" >
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
	   	</div>
		<div style="height:40px;"></div>
				   
   

<?php get_footer(); ?>
