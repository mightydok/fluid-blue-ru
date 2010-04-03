<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка к <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="postmetadata"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?> <!-- <?php _e('by') ?> <?php the_author() ?> --></div>
			<div class="postentry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
	
			<div class="postmetadata">
				<div class="postmetadata">
					<?php if( function_exists('the_tags') ) 
						the_tags(__('Теги: '), ', ', '<br />'); 
					?>
					<?php _e('Рубрика:') ?> <?php the_category(', ') ?>
					<?php if('open' == $post->comment_status) { ?>&nbsp;|&nbsp;&nbsp;<a href="#respond"><?php _e('Комментарии') ?></a> (<?php comments_rss_link('RSS'); ?>)<?php } ?>
					<?php if('open' == $post->ping_status) { ?>&nbsp;|&nbsp;&nbsp;<a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('Trackback') ?></a><?php } ?>
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
	
