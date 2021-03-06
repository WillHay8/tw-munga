<?php
/**
* @version 1.0
*/
?>
<?php get_header(); ?>
<div class="page-wrapper">
	<div class="content-area">
		<div class="news-posts-cont">
			<h2>Latest News</h2>
			<?php
			if(have_posts()):
				while(have_posts()):
					the_post(); ?>
					<article class="news-post">
						<h3 class="post-title"><?php the_title(); ?></h3>
						<h4 class="post-date"><?php the_date(); ?></h4>
						<p><?php the_content(); ?></p>
					</article>
			<?php endwhile;
			else:
				echo '<p>no new updates</p>';
			endif;
			?>
		</div>
	</div>
</div>
<?php get_footer() ?>


