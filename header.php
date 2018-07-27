<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset= "<?php bloginfo('charset'); ?>">
		<meta name="viweport" content="width=device-width">
		<title><?php bloginfo('name') ?> </title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class() ?>>

	<div class="container col-12">
	
	
		<!-- site-header -->
		<div class='top'>
			<header class="top-header col-12">
					<a href="http://sinbadtrips.com/about-us/">About Us</a>
					<a href="http://sinbadtrips.com/contact-us/">Contact Us</a>
			</header>
		</div>
		<header class="site-header">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
			

			<nav class="site-nav">

				<?php

					$args = array(
						'theme_location' => 'primary' 
						 );

				 ?>
				
				<?php wp_nav_menu( $args ); ?>

			</nav>
		</header><!-- site-header -->

		<?php

		// Home page SlideShow

		if (is_front_page()) { ?>
			<div class="clear"></div>
			<div class="homeSlide">

 				<?php 	// metaslider plugin code snippet for home page

					echo do_shortcode('[metaslider id="256"]'); ?>
			</div>

		<?php
		} 

		 ?>
	<div class="body-container col-11">