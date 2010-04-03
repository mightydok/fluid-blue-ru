<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="posttitle"><?php the_title(); ?></h2>
			<div class="postentry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Страниц:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
	
			<div class="postmetadata">
				<div class="postmetadata">
					<?php if('open' == $post->comment_status) { ?><a href="#respond"><?php _e('Комментарий') ?></a> (<?php comments_rss_link('RSS'); ?>)&nbsp;&nbsp;|&nbsp;<?php } ?>
					<?php if('open' == $post->ping_status) { ?><a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('Trackback') ?></a><?php } ?>
					<?php edit_post_link(__('Изменить'), '&nbsp;|&nbsp;&nbsp;', ''); ?>
				 </div>
			</div>
		</div>


		<?php comments_template(); ?>

		<?php endwhile; else: ?>

		<div class="post">
			<h2 class="posttitle"><?php _e('Не найдено') ?></h2>
			<div class="postentry"><p><?php _e('К сожалению, по вашему запросу ничего не найдено.'); ?></p></div>
		</div>

		<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
