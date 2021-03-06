<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/global.css">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header class="site-header">
		<a href="/" title="Terug naar de homepage" class="logo" rel="home">
		  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ND Vormgeving logo" />
		</a>
		<?php 
			if (has_nav_menu( 'header-menu' )) {
				wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); 
			}
		?>
	</header>

	<div id="main" class="main-content">