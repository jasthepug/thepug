<?php
/**
 * Template Name: landingpage
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Raleway:400,100,600">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/members.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rotating-card.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- All the files that are required -->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/members.js"></script>

<style type="text/css" xml:space="preserve">
		
		A{font-family: Arial,Verdana,Helvetica, sans-serif;}
		B {	font-family : Arial, Helvetica, sans-serif;	font-size : 12px;	font-weight : bold;}
		.error_strings{ text-align:left;margin-left:20%;color:#227884;font-weight:bold;background-color:#bde2e7; width:50%;}
		</style><script language="JavaScript" src="<?php echo get_template_directory_uri(); ?>/gen_validatorv4.js"
			type="text/javascript" xml:space="preserve"></script>
			
		<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
_fbq.push(['addPixelId', '516696571830978']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=516696571830978&amp;ev=PixelInitialized" /></noscript>

			
</head>
<body <?php body_class( $class ); ?> >

  
  <div class="social">
  <a href="http://twitter.com/pughomeloans"><i class="fa fa-twitter-square pull-right"></i></a>
  <a href="http://linkedin.com/company/pug-home-loans"><i class="fa fa-linkedin-square pull-right"></i></a>
  </div>

	<div class="row">
	   <div class="col-sm-12">
			<div class="col-sm-4" style="max-width:480px;">
			<img  src="<?php echo get_template_directory_uri(); ?>/img/pughealth.jpg" />
			</div>
			<div class="col-sm-4" style="padding-top:70px;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo1.jpg">
				<p class="slogans">Little Dog, Big Deals</p><br />
				<img src="<?php echo get_template_directory_uri(); ?>/img/shot.gif">
			</div>
			<div class="col-sm-4">
			
			  
				
				  
				
						
			<div class="col-sm-4" style="width:280px;color:black;border: 2px solid; border-color: 
					#98d4dc;  font-size: 25px; padding: 20px; text-align: center; font-weight: bold;">Low Rate:<br />
					<span style="color: #98d4dc; font-size: 55px;">3.99%</span><span style="font-size:12px;color: #98d4dc;">pa</span><br />
					Comparison Rate:<br />
					<span style="color: #98d4dc; font-size: 55px;">4.13%</span><span style="font-size:36px;">*</span><span style="font-size:12px;color: #98d4dc;"> pa</span>
			</div>
			
		</div>
   	</div>
	
	
	
	  <div class="row" style="min-height:100%;">
	  
		
		<div class="col-md-6 col-md-offset-3 centered" style="margin-top:10px;">

	<div style="max-width:400px;text-align:center;margin:0 auto;" > 
				  <h1 class="Contact"><span style="font-size:20px;color:white;background-color:#98D4DC;padding:5px 10px">Get your no obligation loan health check</span></h1> </div>
								   <?php
			$loop = new WP_Query( array(
					'showposts' => 4,
					'post_type' => array('loan'),
					)
					);
					$counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post(); ?>

 
			    
			     <div class="col-sm-6 square" style="padding-left:37px !important; padding-right:37px !important">
                	
                	<div class="card-container" style="margin-bottom:14px;">
		                <div class="card"  >
							
		                    <div class="front" >
								<table style="height:100%;"><tr valign="middle"><td valign="bottom">
								<h3 class="small_t" style="font-weight: lighter;">
								<?php the_field( "small_title" );  ?><hr>
								<div style="font-size:20px;text-align:center;color:white;background-color:#98D4DC;padding:5px 30px"><?php the_title();  ?></div></h3></td></tr>
								</table>
		                    </div> <!-- end front panel -->
							
		                    <div class="back" >
								
								<div class="back_int"><?php the_field( "short_desc" );  ?>
								<?php
								if ($counter == 0){/* ADD THIS */?>
								<div style="font-size:10px;line-height:10px;margin: 2px 0px;" >Rates will vary markedly depending on your circumstances and LVR.</div>
								<?php }else{ echo "<br />";} ?>
								<div>
									<div style="font-size:20px;text-align:center;color:white;background-color:#98D4DC;padding:5px 30px"><?php the_title();  ?></div>
										
									</div>
								</div>
							
							
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
				
				
				<div class="row">	
				<div class="col-sm-9  Gotham " style="width:100%;" >
					<form id="myform" name="myform" action="../form.php" method="post" >
					<div  style="width:100%;margin:5%;" ><br />
					<input type="hidden" name="sent" value="land"  />
					<p class="slogans" style="color:#4495a1;min-width:100%;font-size:16px;" >Contact us regarding any of the above deals</p>
					<input type="text" name="name" class="txtf_blue" style="padding:1px 8px" placeholder="NAME*"  />
					<div id='myform_name_errorloc' class="error_strings"></div>
					<br />
					<input type="text"  name="myemail" class="txtf_blue" style="padding:1px 8px" placeholder="EMAIL" />
					<div id='myform_myemail_errorloc' class="error_strings"></div>
					<br /><br />
					<input type="text"  name="myphone" class="txtf_blue" style="padding:1px 8px" placeholder="PHONE" />
					
				
					<div id='myform_myphone_errorloc' class="error_strings"></div>	<br />
					<select name="loans" class="txtf_blue" style="padding:1px 8px" >
						<option value="">WHAT TYPE OF LOAN ARE YOU INTERESTED IN?</option>
						<?php
						$loop = new WP_Query( array(
								'showposts' => 4,
								'post_type' => array('loan'),
								)
								);
								

						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<option value="<?php the_title();  ?>"><?php the_title();  ?></option>

							  <?php	endwhile;
						wp_reset_postdata();
						?>
					</select>
					
					<br /><br />
					
					<div style="text-align:right"><input type="submit" value="SUBMIT" class="butt_blue"  /></div>
				</form>
					
					</div>
				</div>
				</div>
				
				
				
			
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
				   
   <script language="JavaScript" type="text/javascript"
					xml:space="preserve">//<![CDATA[
					
					
					function DoCustomValidation()
					{
					  var frm = document.forms["myform"];
					  if(frm.myemail.value == "" && frm.myphone.value == "")
					  {
						sfm_show_error_msg('Insert Email and/or Phone',frm.myphone);
						return false;
					  }
					  else
					  {
						return true;
					  }
					}
					
					
				  var frmvalidator  = new Validator("myform");
				  frmvalidator.EnableOnPageErrorDisplay();
				  frmvalidator.EnableMsgsTogether();
				  frmvalidator.addValidation("name","req","Required Field");
				  frmvalidator.addValidation("myemail","email","Insert a valid email");
				  frmvalidator.setAddnlValidationFunction(DoCustomValidation);


				//]]></script>

<?php get_footer(); ?>
