			<div class="footer-container">
					<div class="footer-contents">
						<a href="/munga">
						<div class="logo-cont">
							<a href="/munga">
							<img src="/munga/wp-content/uploads/2016/12/Tunbridge-Wells-Munga-logo-grey-1.png"/>
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
						
						<a class="copyright" href="mailto:williamfmhay@gmail.com?subject=Websites">&copy; Will Hay <?=date("Y")?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</html>