			<div class="footer-container">
					<div class="footer-contents">
						<div class="logo-cont">
							<a href="<?php echo get_site_url() ?>">
							<img src="<?php echo get_template_directory_uri() . '/images/tunbridge-wells-munga-logo-grey.png'; ?>"/>
							</a>
						</div>
						<div class="footer-menu-cont">
							<?php
							if(has_nav_menu('footer-left') && has_nav_menu('footer-right')): ?>
							<nav class="footer-navigation" role="navigation">
								<?php  wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
								<?php  wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
							</nav>
							<?php endif; ?>
						</div>
					
					<div class="footer-widgets-cont">
						<?php dynamic_sidebar('footer-contact'); ?>
					</div>
					<div class="copyright-cont">
						
						<a class="copyright" href="mailto:williamfmhay@gmail.com?subject=Websites">&copy; Will Hay <?=date("Y")?></div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</html>