<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pug Financial
 */

?><!DOCTYPE html>
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

  <ul id="multicol-menu" class="nav pull-right">
      <li class="dropdown pull-right" style="  margin-right: 10px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  <img src="<?php echo get_template_directory_uri(); ?>/img/grid.png" width="17px"/></a>
          <ul class="dropdown-menu" id="icons">
            <li><a href="<?php echo get_site_url(); ?>/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a href="<?php echo get_site_url(); ?>/about"><i class="glyphicon glyphicon-tasks"></i> About</a></li>
            <li><a href="<?php echo get_site_url(); ?>/explore-loans"><i class="glyphicon glyphicon-book"></i> Explore Loans</a></li>
			<li><a href="<?php echo get_site_url(); ?>/faq"><i class="glyphicon glyphicon-question-sign"></i> FAQ</a></li>
			<li><a href="<?php echo get_site_url(); ?>/credit-guide"><i class="glyphicon glyphicon-bookmark"></i> Credit Guide</a></li>
            <li><a href="<?php echo get_site_url(); ?>/security"><i class="glyphicon glyphicon-lock"></i> Security</a></li>
            <li><a href="<?php echo get_site_url(); ?>/privacy"><i class="glyphicon glyphicon-eye-close"></i> Privacy</a></li>
            <li><a href="<?php echo get_site_url(); ?>/contact-us"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
          </ul>
      </li>
  </ul>
  <div class="social">
  <a href="https://www.facebook.com/The-Pug-851539991524937/"><i class="fa fa-facebook-square pull-right"></i></a>
  <a href="http://twitter.com/pughomeloans"><i class="fa fa-twitter-square pull-right"></i></a>
  <a href="http://linkedin.com/company/pug-home-loans"><i class="fa fa-linkedin-square pull-right"></i></a>
  </div>
