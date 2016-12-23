<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<div class="site-wrapper">
			<header id="masthead" class="site-header" role="banner">
				<div class="logo-cont">
					<img src="wp-content/uploads/2016/12/Tunbridge-Wells-Munga-logo-blue.png"/>
				</div>
				<div class="site-title-cont">
					<div class="site-title">Tunbridge Wells<br/>Model United Nations General Assembley</div>
				</div>
				<?php
				if(has_nav_menu('top')): ?>
				<div class="navigation-top">
					<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
				</div>
				<?php endif; ?>
				<?php get_template_part('template-parts/header/header', 'image'); ?>
			</div>
		
			
