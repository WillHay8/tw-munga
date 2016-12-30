<?php
/**
* @version 1.0
*/
?>
<?php get_header(); ?>
<div class="page-wrapper other-page">
	<div class="content-area">
		<div class="site-main contact">

			<span class="anchor" id="content-start"></span>
			<?php
			if(have_posts()):
				while(have_posts()):
					the_post();
					echo the_content();
					endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<?php get_footer() ?>


