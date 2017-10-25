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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/members.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rotating-card.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- All the files that are required -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/members.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style type="text/css" xml:space="preserve">

		A {
            font-family: Arial, Verdana, Helvetica, sans-serif;
        }

        B {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
        }

        .error_strings {
            text-align: left;
            margin-left: 20%;
            color: #227884;
            font-weight: bold;
            background-color: #bde2e7;
            width: 50%;
        }
		</style><script language="JavaScript" src="<?php echo get_template_directory_uri(); ?>/gen_validatorv4.js"
                        type="text/javascript" xml:space="preserve"></script>

    <script>(function () {
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
    <noscript><img height="1" width="1" alt="" style="display:none"
                   src="https://www.facebook.com/tr?id=516696571830978&amp;ev=PixelInitialized"/></noscript>


</head>
<body <?php body_class($class); ?> >
<h1 class="sr-only">The Pug Home Loans</h1>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>/">
                <img class="pg-nav-brand" src="<?php echo get_template_directory_uri(); ?>/img/Logo-Final.png"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="https://www.facebook.com/The-Pug-851539991524937/"><i
                                class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="http://twitter.com/pughomeloans"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="http://linkedin.com/company/pug-home-loans"><i
                                class="fa fa-linkedin"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </a>
                    <ul class="dropdown-menu" id="icons">
                        <li><a href="<?php echo get_site_url(); ?>/"><i class="fa fa-home fa-fw"></i>
                                Home</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/about"><i class="fa fa-tasks fa-fw"></i>
                                About</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/faq"><i
                                        class="fa fa-question fa-fw"></i> FAQ</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/credit-guide"><i
                                        class="fa fa-bookmark fa-fw"></i> Credit Guide</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/security"><i
                                        class="fa fa-lock fa-fw"></i> Security</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/privacy"><i
                                        class="fa fa-eye-slash fa-fw"></i> Privacy</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/contact-us"><i
                                        class="fa fa-envelope fa-fw"></i> Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
