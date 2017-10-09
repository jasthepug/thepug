<footer>© Pug Financial Pty Ltd 2015 | All Rights Reserved | Credit Representative Number 480259 is authorised under Australian Credit Licence Number 389328. 
Thepug.com.au is a registered trademark.

</footer>

   </div>
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cbpQTRotator.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>

<script>


jQuery(document).ready(function() {
	 	jQuery(".button").click(function() {
	 		var href_val = jQuery(this).find('a').attr('href');
	 		window.location = href_val;
	 	});
		
function myFunction($param) {
   $param.each(function() {
		var square_w = jQuery(this).width();
		var padding_w = jQuery(this).css('padding-left');
		jQuery(this).css('height',Number(square_w)+Number(padding_w));
		jQuery(this).children( ".card-container" ).css('height',square_w);
		jQuery(this).find( ".card .front" ).css('height',square_w);
		jQuery(this).find( ".back" ).css('height',square_w);
		jQuery(this).find( ".card-container" ).css('height',square_w);
	});	
}
myFunction(jQuery(".square"));
jQuery(window).resize(function() {
	myFunction(jQuery(".square"));
})

})
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

</body>
</html>
