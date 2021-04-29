<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap Core CSS -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <!-- custom CSS -->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

	
	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	 <!-- HEADER 
    =========================================================== -->
    <header class="site-header" role="banner">

        <!-- NAVBAR -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a>
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- <a class="navbar-brand" href="#">Navbar</a> -->
				<div class="collapse navbar-collapse" id="menu-1"></div>
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-1',
						'depth'             => 2,
						'container'         => 'nav',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'navbarSupportedContent',
						'menu_class'        => 'navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker()
						
					) );
					?>
				</div>
			</div>
		</nav>
        

    </header>
