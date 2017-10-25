<?php
/**
 * Template Name: Speak to your experts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 


?>




	 <div class="row" style="min-height:100%;">
	  <div class="col-lg-10 col-md-10 col-sm-12 col-md-offset-1 col-lg-offset-1 Gotham contact-box1" style="text-align:center;">  
		  <h1 class="Contact"><span class="acca2">SPEAK TO OUR EXPERTS</span></h1>
 
			   

			<div>
				Call us now, or schedule a time  and we'll call you.
			</div>
			
			<form id="myform" name="myform" action="../form.php" method="post" >
				<input type="hidden" name="sent" value="speak"  />
			<div class="row" style="margin-top:30px;line-height:1em;color:#1D707B;font-size:0.8em;" >
				
				<div class="col-lg-4 col-md-4 col-sm-12 Gotham form1" >  
					<a href="tel:1300843784">
					<img src="http://www.thepug.com.au/wp-content/themes/pugfinancial/img/call_box.gif" title="call us now" alt="call us at 1800 843 784" />
					</a>
				</div>
				
				<div class="col-lg-8 col-md-8 col-sm-12 Gotham form2" style="line-height:1.7em;padding-left:7%;" >
				
				<input type="text" name="name" class="txtf_blue" placeholder="NAME*"  />
					<div id='myform_name_errorloc' class="error_strings"></div>
					
					<br /><br />
					<input type="text" name="phone" class="txtf_blue" placeholder="PHONE*" />
					<div id='myform_phone_errorloc' class="error_strings"></div>
					<br /><br />
					<span style="font-size:1.3em;">Please give me a call between &nbsp; </span>
					<select name="time_preferred">
						<option value="7AM-9AM">7AM - 9AM &nbsp; </option>
						<option value="9AM-12PM">9AM - 12PM &nbsp; </option>
						<option value="12PM-5PM">12PM - 5PM &nbsp; </option>
						<option value="5PM-9PM">5PM - 9PM &nbsp; </option>
					</select><br /><br />
					<input type="checkbox" name="weekend" /> &nbsp;  <span style="font-size:1.3em;">including weekends</span>
				</div>
				
				
			
			</div>
			
			<div class="row" style="margin:50px 0px;line-height:1em;font-size:0.8em;padding:0% 0%;margin-bottom:0px;" >
				<div class="col-sm-12  Gotham " style="text-align:center;" >  
					
					<input type="submit" value=" SUBMIT " class="butt_blue"  />
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
				  frmvalidator.addValidation("phone","req","Required Field");
				  frmvalidator.addValidation("phone","regexp=(02[3-9][0-9]{7})|(04[0-9]{8})|(03[4-9][0-9]{7})|(07[3-9][0-9]{7})|(08[0-9]{8})","Please enter a valid Australian phone number including the area code."); 
				         

				//]]></script>
	   </div>
	  </div>

   

<?php get_footer(); ?>
