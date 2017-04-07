<?php
/**
* @version 1.0
*/
?>
<?php get_header(); ?>
<div class="page-wrapper">
	<div class="content-area">
		<div class="site-main">
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
		<div class="news-posts-cont">
			<h2>Latest News</h2>
			<?php
			$news_posts_query = new WP_Query(array(
				'category_name' => 'news',
				'posts_per_page' => 3));
			if($news_posts_query->have_posts()):
				while($news_posts_query->have_posts()):
					$news_posts_query->the_post(); ?>
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
	<div class="sidebar-cont">
		<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</div>
<?php get_footer() ?>


