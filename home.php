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
			<?php
			$news_posts_query = new WP_Query(array(
				'category_name' => 'news'));
			if($news_posts_query->have_posts()):
				while($news_posts_query->have_posts()):
					$news_posts_query->the_post();
					echo '<article class="news-post">
								<h3 class="post-title">'.the_title().'</h3>
								<h4 class="post-date">'.the_date().'</h4>
								<p>'.the_content().'</p>
								<span class="author">'.the_author().'</span>
								</article>';
				endwhile;
			else:
				echo '<p>no new updates</p>';
			endif;
			?>
		</div>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer ?>


