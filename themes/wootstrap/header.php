<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
	<div class="container">
				<a href="<?php get_site_url(); ?>">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
				</a>

			<div class="navbar">
					<?php 
						wp_nav_menu( array(
				        'depth'      => 2,
				        'container' => false,
				        'menu_class' => 'nav navbar-nav',
				        'fallback_cb' => 'wp_page_menu',
				        'theme_location' => 'main-menu'
				        )
						);
				    ?>
			</div>