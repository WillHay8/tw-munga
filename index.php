<?php
/**
* @version 1.0
*/
?>
<?php get_header(); ?>
<div class="page-wrapper">
	<div class="content-area">
		<div class="site-main">
			<?
			if(have_posts()):
				while(have_posts()):
					the_post();
					get_template_part('template_parts/post/content', get_post_format());
				endwhile;

			else:
				get_template_part('template-parts/post/content', 'none');
			endif;
			?>
		</div>
		<div class="news-posts-container">
			//get news posts
		</div>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer ?>


