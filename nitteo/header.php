<?php
/**
 * @package WordPress
 * @subpackage Vojtech Sebo 
 * @since Nitteo
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <meta name="keywords" content="blog, personal page, portfolio">
  <meta name="author" content="Vojtěch Šebo">
  <meta name="robots" content="index,follow">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
	<?php echo of_get_option('google_script', 'no entry'); ?>
</head>
<body>
<script type="text/javascript">
            $(document).ready(function() {
            $(".nav-category-item").hide();  
            $("#item_6").click(function () { 
    if ($(".nav-category-item").css('display') == 'none' ) {
        $(".nav-category-item").show();
    } else {
        $(".nav-category-item").hide();
    }    
    }); 
    });        
  </script> 
	