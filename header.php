<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); 
		define( 'WP_USE_THEMES', false );
		?>
	</head>
	<body <?php body_class(); ?>>

		<div class="site-wrapper">
			<header id="masthead" class="site-header" role="banner">
				<div class="app-bar">
					<div class="app-bar-contents">
						<div class="logo-cont">
							<a href="/munga">
							<img id="white-logo" src="/munga/wp-content/uploads/2016/12/Tunbridge-Wells-Munga-logo-white.png"/>
							<img id="blue-logo" src="/munga/wp-content/uploads/2016/12/Tunbridge-Wells-Munga-logo-blue.png"/>
							</a>
						</div>
					
						<div class="site-title-cont">
							<div class="site-title">Tunbridge Wells<br/>Model United Nations General Assembley</div>
						</div>
						<?php
						if(has_nav_menu('top')): ?>
						<div class="menu-toggle-cont">
							<div id="menu-toggle" class="menu-toggle" role="navigation">&#9776;</div>
						</div> 
					</div>
				</div>
				<div id="site-header-menu" class="site-header-menu">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu(array(
							'theme_location' => 'top',
							)); 
						?>
					</nav>
				</div>
					
				<?php endif; ?>
				<div class="header-img-cont">
				<?php if(get_header_image()): ?>
					<img src="/munga/wp-content/uploads/2016/12/MUNGA-2016-group-medium.jpg" 
					srcset="/munga/wp-content/uploads/2016/12/MUNGA-2016-group-medium.jpg 600w, <?php header_image(); ?> 900w"/>
				<?php endif; ?>
				</div>
			</header>
		
			
