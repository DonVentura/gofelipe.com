<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    
    
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-24320795-1', 'auto');
 ga('send', 'pageview');

</script>
    
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
 
            <div id="navbar" class="navbar">
                <div class="social-icons-pages">
                    <a href="https://www.facebook.com/goFelipe" target="_blank"><img src="http://gofelipe.com/wp-content/uploads/2015/05/social-media-icon-facebook.png" alt="Facebook Icon" width="66" height="65"></a>
                    <a href="https://twitter.com/HireFelipe" target="_blank"><img src="http://gofelipe.com/wp-content/uploads/2015/05/social-media-icon-twitter.png" alt="Facebook Icon" width="66" height="65"></a>
                    <a href="https://www.google.com/+GofelipeGraphicDesign" target="_blank"><img src="http://gofelipe.com/wp-content/uploads/2015/05/social-media-icon-google-plus.png" alt="Facebook Icon" width="66" height="65"></a>
                    <a href="https://instagram.com/hirefelipe/" target="_blank"><img src="http://gofelipe.com/wp-content/uploads/2015/05/social-media-icon-instagram.png" alt="Facebook Icon" width="66" height="65"></a>
                    <a href="https://www.linkedin.com/in/gofelipe" target="_blank"><img src="http://gofelipe.com/wp-content/uploads/2015/05/social-media-icon-linkedin.png" alt="Facebook Icon" width="66" height="65"></a>
                </div>
                
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
            
            <h1 class="felipe-title">Blog</h1>

		</header><!-- #masthead -->
        <div class="spacer"></div>
		<div id="main" class="site-main">
