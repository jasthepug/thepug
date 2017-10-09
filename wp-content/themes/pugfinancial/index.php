<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pug Financial
 */

get_header(); ?>

	<div class="row">
		<div class="col-sm-11 col-sm-offset-1 col-xs-12 text-xs-center "  >
			
			<img style="max-width:250px;margin-top:20px;" src="<?php echo get_template_directory_uri(); ?>/img/logo1.jpg">
		</div>
	</div>
	
	<div class="row hidd">
		<div class="col-xs-12 text-xs-center "  >
			
			<img style="max-width:180px;" src="<?php echo get_template_directory_uri(); ?>/img/pug_med.jpg">
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-11 col-sm-offset-1 col-xs-12 carosello maxtxt" >
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox" style="height:380px;">
				<div class="item active " >
				   <div class="cont-carousel  ">
						<br /><p class="ttle" >Hi, I'm the Pug...</p><br />
						and you are likely paying more than you should  on your home loan!
						
						<br />
						<a href="loan/low-rate" class=" btn  buttt" style="margin-top:20px;">FIND OUT HOW TO SAVE</a>
					</div>
				</div>

				<div class="item">
				<div class="cont-carousel">
				    <br /><p class="ttle" >Bank said "No"?</p><br />
					
				The Pug tries hard to turn that into a "Yes"!<br />
				
				<a  href="loan/bank-said-no" class=" btn  buttt" style="margin-top:20px;">FIND OUT MORE </a>
				</div>
				</div>

				<div class="item">
				<div class="cont-carousel">
				  <br /><p class="ttle" >Our Rate Challenge</p><br />
				   Send us your current rate and we'll reply with our best rate<br />
						<a href="/rate-challenge" class=" btn  buttt" style="margin-top:20px;">START NOW!</a>
				</div>

				</div>
				
				<div style="width:100px;position:absolute;top:360px;right:10px;" >
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					
					</ol>
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<br /><br /><br /><img src="<?php echo get_template_directory_uri(); ?>/img/arrowl.gif" class="frecc" />
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<br /><br /><br /><img src="<?php echo get_template_directory_uri(); ?>/img/arrowr.gif" class="frecc" />
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		
		
	</div>
	
	
   <div class="row">
		<div class="col-sm-12 col-xs-12 bblue" >
				<div class="col-sm-11 col-sm-offset-1 col-xs-12 maxtxt" >
					
					The Pug is a mortgage broker, which means we are a licensed service that helps people find better home loan deals.
					As a mortgage broker, we have access to special deals and promotions from most lenders, including the big four banks.
					We assist with every step of the loan process, from calculating how much you can borrow, to finding great deals, through to 
					completing the application forms.
					We also help beyond that by readily 
					answering any questions you may have when your needs change.
					<br /><br />
					<strong>Best of all, our service is free!</strong>
					<br /><br /><br />
					
				</div>	
				
				<div class="col-sm-5 col-sm-offset-2 col-xs-12 " >
					<p class="ttlb">WHAT WE DO</p><br />
					<ul class="tick">
							<li>Contact multiple lenders to find and negotiate better rates on your behalf</li>

							 <li>Assist with all the paperwork</li>

							 <li>Calculate borrowing capacity, repayments and how to save</li>
					</ul><br /><br />
				</div>	
				<div class="col-sm-5  col-xs-12 " >
					<p class="ttlb">WHAT WE WON'T DO</p><br />
					<ul class="ics">
							<li> Charge you any fees</li>

							 <li> Just compare rates like most comparison sites</li>

							<li> Flick you off to an overseas call centre</li>

					 </ul>
				</div>	
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-12 col-xs-12 ggrey" >
			<div class="col-sm-4 col-sm-offset-2 col-xs-12 " >
					
					Do you get the feeling you are paying 
				too much on your loan? <br />
				It’s really easy to find out.
					<br /><br /><br />
					
			</div>	
			<div class="col-sm-2 text-sm-center text-xs-center col-xs-12 " >
				<div class="apc" >CALL US</div>
			<a href="tel:1300843784" class="lnk">1300 THE PUG</a><br /><br />
			</div>	
			<div class="col-sm-2 text-sm-center text-xs-center col-xs-12 " >
			<div class="apc" >EMAIL US</div>
			<a href="mailto:info@thepug.com.au" class="lnk">INFO@THEPUG.COM.AU</a>
			</div>	
			<div class="col-sm-2" ></div>	
		</div>
	</div>
	
	
   <div class="row">
	   <div class="col-sm-12 col-xs-12" style="margin-bottom:20px;">
	   
			<div style="margin:0 auto; text-align:center" >
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/westpac.gif" alt="westpac" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/nab.gif" alt="nab" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/commonwealth.gif" alt="commonwealth" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/connective.gif" alt="connective" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/anz.gif" alt="anz" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/macquarie.gif" alt="macquarie" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/bluestone.gif" alt="bluestone" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/suncorp.gif" alt="suncorp" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/bankwest.gif" alt="bankwest" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/ing.gif" alt="ing" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/amp.gif" alt="amp" /> &nbsp;  &nbsp; 
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logos/boq.gif" alt="boq" /> &nbsp;  &nbsp; 
			<br /><br />
			</div>
	   

		</div>
	</div>

<?php get_footer(); ?>
