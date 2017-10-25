<?php
/**
 * Template Name: challenge
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
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Raleway:400,100,600">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/share-button.min.css" />

<script src="<?php echo get_template_directory_uri(); ?>/share-button.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/members.css" />-->

<!-- All the files that are required -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>


<script language="JavaScript" src="<?php echo get_template_directory_uri(); ?>/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
			
		


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/challenge-custom.css" />
			
</head>
<body>

  
 
	<div class="row" style="margin-top:20px;">
	   <div class="col-xs-12 col-sm-5" style="text-align:center;">
		<img src="<?php echo get_template_directory_uri(); ?>/img/land-logo.gif" />
	   </div>	
	   <div class=" col-xs-12 col-sm-4 text-xs-center text-sm-right menuu" >
		<a href="#p-01" class="lnk onlyanchor" >START THE CHALLENGE</a> &nbsp;   &nbsp;   &nbsp;  
		<a href="#ft" class="lnk onlyanchor" >CONTACT</a> &nbsp;   &nbsp;   &nbsp; 
	   </div>	
	   <div class=" col-xs-12 col-sm-3 text-xs-center" style="line-height:40px;" >
			<a href="tel:1300843784" class="lnk">
			<span class="call">CALL 1300 THE PUG</span></a> &nbsp;   &nbsp;   &nbsp;  
			
						<share-button class="share-button" ></share-button>
			
	   </div>	
	   
	</div>		
	
	
	<div class="row" style="margin-top:60px;">
	   <div class="col-xs-12 col-sm-5" style="text-align:center;">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pug-challenge.jpg" />
	   </div>	
	   <div class="col-xs-12 col-sm-7 main_t text-xs-center" >
			<p class="title1">Welcome to <span style="color:;font-weight:700;">The Pug</span></p>
			<p class="title3">RATE CHALLENGE</p><br />
			<p class="title2" style="padding-left:15px">Send us the details of your loan and we’ll provide you with our best  rate within 2 hours!</p><br />

	   </div>	
	   
	</div>		
	
	
	<div class="row" id="p-01" >
		 
		
		<div class="col-xs-12 col-sm-5 col-sm-offset-1 text-xs-center" style="margin-top:30px;">
				<form id="myform" name="myform" action="../form.php" method="post" >
				<div class="boxrata">MY RATE IS 
				<input type="text" name="therate" class="rata"  /> <span style="font-size:24px">%</span></div>
				<input type="hidden" name="sent" value="challenge"  />
				<input type="text" name="name" class="txtf" placeholder="ENTER YOUR NAME" /><br /><br /><br />
				<input type="text" name="mail_phone" class="txtf" placeholder="ENTER YOUR EMAIL OR PHONE" />
				<div id='myform_mail_phone_errorloc' class="error_strings"></div>
		 </div>
		 
		 <div class="col-xs-12 col-sm-6" >
		 
						<div class="row" style="margin-top:40px;" >
							<div class="col-lg-5 col-md-5 col-sm-12  text-xs-center" style="font-size:16px;" >PROPERTY VALUE:</div>
							<div class="col-lg-7 col-md-7 col-sm-12  text-xs-center"  > $ <input id="rangeValue1" name="my_value" style="border:0px;"  type="text" size="9"/> &nbsp; 
							<input type="range" id="value" onchange="printValue('value','rangeValue1')" oninput="printValue('value','rangeValue1')" max="30" step ="0.1" />
							</div>
						</div>
						<div class="row" style="margin-top:40px;" >
						
							<div class="col-lg-5 col-md-5 col-sm-12  text-xs-center" style="font-size:16px;" >YOUR LOAN : </div>
							<div class="col-lg-7 col-md-7 col-sm-12  text-xs-center"  >  $ <input id="rangeValue2" name="my_loan"  style="border:0px;" type="text" size="9"/> &nbsp; 
							<input type="range" id="loan" onchange="printValue('loan','rangeValue2')" oninput="printValue('loan','rangeValue2')" max="30" step ="0.1" />
							</div>
							
						</div>
						
						<div class="row" style="margin-top:40px;" >
						
							<div class="col-lg-5 col-md-5 col-sm-12  text-xs-center" style="font-size:16px;" >TYPE OF LOAN: </div>
							<div class="col-lg-7 col-md-7 col-sm-12  text-xs-center"  > 
								<select name="type_loan" >
									<option value="owner_occupied"> Owner Occupied </option>
									<option value="investment_property"> Investment Property </option>
									<option value="commercial_property"> Commercial Property </option>
								</select>
							</div>
							
						</div>
		 
						<div class="row" style="margin-top:60px;" >
						
							
							<div class="col-lg-10 col-md-10 col-sm-10 col-sm-offset-2 text-sm-right text-xs-center"  > 
								<input type="submit" value="START THE CHALLENGE NOW" class="buttt"  />
							</div>
							
						</div>
		 
						
		 </div>
		</form>
	</div>
	
	<script>
                function printValue(sliderID, textbox) {
                    var x = document.getElementById(textbox);
                    var y = document.getElementById(sliderID);
					var mll = parseFloat(y.value);
					mll = mll*100000;
					mll = Math.round(mll);
					mll = mll.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    x.value = mll;
                }

                window.onload = function() {  printValue('value', 'rangeValue1'); printValue('loan', 'rangeValue2'); }
            </script>
	

	
	<div class="row" id="ft" >
		 <div class="col-xs-12 col-sm-5 text-xs-center" >
			<p class="sml_title">LET'S BE FRIENDS</p>
			<br />
			<a href="https://www.facebook.com/The-Pug-851539991524937/" class="lnk"><img src="<?php echo get_template_directory_uri(); ?>/img/land-fb.gif" style="margin-top:20px;" /></a>
			<a href="http://linkedin.com/company/pug-home-loans" class="lnk"><img src="<?php echo get_template_directory_uri(); ?>/img/land-in.gif" style="margin-top:20px;" /></a>
			<a href="http://twitter.com/pughomeloans" class="lnk"><img src="<?php echo get_template_directory_uri(); ?>/img/land-tw.gif" style="margin-top:20px;" /></a>
		 </div>
		
		<div class="col-xs-12 col-sm-3 text-xs-center cntc" >
				<p class="sml_title">THE PUG</p><br />
				SUITE 10, 50 VICTORIA ROAD DRUMMOYNE 2047
					<br /><br />
				<strong>T</strong>   1300 843 784
		 </div>
		
		<div class="col-xs-12 col-sm-4 smllt"  >
				^All offers and products shown on this website are subject to lender approval, terms and conditions. 
				Please contact The Pug for key details regarding these terms and conditions.
				Your full financial situation would need to be reviewed prior to acceptance of any offer or product. 
				All rates, deals and offers are believed to be correct at the time of publication, but are subject to 
				final confirmation by lender and may change without notice.
		 </div>
		
	</div>
	
	<div class="row" style="margin-top:40px;font-size:12px;margin-bottom:15px">
		 <div class="col-xs-12 col-sm-12 text-sm-center text-xs-center" >
	© Pug Financial Pty Ltd 2015 | All Rights Reserved | Credit Representative Number 480259 is authorised under Australian Credit Licence Number 389328.
		</div>
	</div>
   <script language="JavaScript" type="text/javascript"
					xml:space="preserve">//<![CDATA[
					
					
					
					
					
				  var frmvalidator  = new Validator("myform");
				  frmvalidator.EnableOnPageErrorDisplay();
				  frmvalidator.EnableMsgsTogether();
				  frmvalidator.addValidation("mail_phone","req","Required Field");
				  
				 


				//]]></script>

<script> 

config = {
	 ui: {
    flyout:        'bottom left',
   buttonText: ''
  },
    networks: {
       
	   googlePlus: {
      enabled: false
     
    },
	  
	   pinterest: {
      enabled: false
     
    },
	  reddit: {
      enabled: false
     
    },
	  email: {
      enabled: false
     
    }
		
    }
}

var share = new ShareButton('.share-button', config);
   
	$("a.onlyanchor[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});
	
	

	
	
	
	</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67856089-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 939489437;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/939489437/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



<!-- Facebook Conversion Code for Leads - The Pug 1 -->
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
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6029278935773', {'value':'0.00','currency':'AUD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6029278935773&amp;cd[value]=0.00&amp;cd[currency]=AUD&amp;noscript=1" /></noscript>


	
 </body>
</html>
