<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


 
get_header(); 


?>




	 <div class="row" style="min-height:100%;">
	  <div class="col-lg-10 col-md-10 col-sm-12 col-md-offset-1 col-lg-offset-1 Gotham contact-box1" style="text-align:center;padding-top:20px;">  
		  <h1 class="Contact"><span style="color:white;background-color:#98D4DC;padding:5px 30px;">CONTACT US</span></h1>
 
			   

			<div>What can we help you with?<br />
				Give us a call, we'd love to hear from you.
			</div>
			<div class="row" style="margin-top:30px;line-height:1.5em;font-size:0.7em;" >
				<div class="col-lg-4 col-md-4 col-sm-12  Gotham " style="padding:0% 8%" > 
					<img src="http://www.thepug.com.au/wp-content/uploads/2015/09/map.gif" /> <br /><br />
					SUITE 10, 50 VICTORIA ROAD
					DRUMMOYNE 2047
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12  Gotham " style="line-height:1.5em;" >  
					<img src="http://www.thepug.com.au/wp-content/uploads/2015/09/phone.gif" /> <br /><br />
					<span style="font-size:1.2em"> 1300 THE PUG</span><br />
					
					 1300 843 784
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12  Gotham " >  
					<img src="http://www.thepug.com.au/wp-content/uploads/2015/09/skype.gif" /> <br /><br />
					<a class="loan" href="skype:pugloans?call">PUGLOANS</a>
				</div>
			</div>
			<form id="myform" name="myform" action="../form.php" method="post" >
				<input type="hidden" name="sent" value="contact"  />
			<div class="row" style="margin-top:30px;line-height:1em;font-size:0.8em;" >
			
				<div class="col-lg-6 col-md-6 col-sm-12  Gotham form1" >
					<input type="text" name="name" class="txtf_blue" placeholder="NAME*"  />
					<div id='myform_name_errorloc' class="error_strings"></div>
					<br /><br />
					<input type="text" name="email" class="txtf_blue" placeholder="EMAIL*" />
					<div id='myform_email_errorloc' class="error_strings"></div>
					<br /><br />
					<input type="text" name="phone" class="txtf_blue" placeholder="PHONE" />
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12  Gotham form2" >  
					
					<textarea name="message" class="txta_blue" placeholder="MESSAGE*"></textarea>
					<div id='myform_message_errorloc' class="error_strings" ></div>
				</div>
				
			
			</div>
			
			<div class="row" style="margin:50px 0px;line-height:1em;font-size:0.8em;margin-bottom:0px;" >
				<div class=" col-sm-12  Gotham " style="text-align:center">  
					
					<input type="submit" value="SUBMIT" class="butt_blue"  />
				</div>
				
				
				
			</div>
			
			</form>
			

			<div class="row" style="margin:0px;" >
			<div class="col-sm-12" style="text-align:right;" >  
					<a href="<?php echo get_site_url(); ?>/security">
					<img src="http://www.thepug.com.au/wp-content/uploads/2015/09/ssl.gif" /> </a>
			</div>
			</div>
			
			
			<script language="JavaScript" type="text/javascript"
					xml:space="preserve">//<![CDATA[
				  var frmvalidator  = new Validator("myform");
				  frmvalidator.EnableOnPageErrorDisplay();
				  
				  frmvalidator.EnableMsgsTogether();
				     frmvalidator.addValidation("name","req","Required Field");
				  frmvalidator.addValidation("email","req","Required Field");
				  frmvalidator.addValidation("email","email" ,"Enter a valid Email address");
				  frmvalidator.addValidation("message","req","Required Field");


				//]]></script>
	   </div>
	  </div>

   

<?php get_footer(); ?>
