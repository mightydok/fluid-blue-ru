<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

	<?php /* If this is a category archive */ if (is_category()) { ?>
		<p>Рубрика &#8216;<?php echo single_cat_title(); ?>&#8217;</p>

 		<?php /* If this is a tag archive */ } elseif ( function_exists ('is_tag') && (is_tag()) ) { ?>
		<p>Тег &#8216;<?php echo single_tag_title(); ?>&#8217;</p>

	 <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<p>Архив за <?php the_time('jS F Y'); ?></p>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<p>Архив за <?php the_time('F Y'); ?></p>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<p>Архив за <?php the_time('Y'); ?></p>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<p>Архив автора</p>

		<?php } ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Предыдущие записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Следующие записи &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка к <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmetadata"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?> <!-- <?php _e('Автор') ?> <?php the_author() ?> --></div>
				<div class="postentry">
					<?php the_content("<small>".__('Читать полностью'). " &#8216;" . the_title('', '', false) . "&#8217; &raquo;</small>"); ?>
				</div>
		
				<div class="postmetadata">
					<?php if( function_exists('the_tags') ) 
						the_tags(__('Теги: '), ', ', '<br />'); 
					?>
					<?php _e('Рубрика:') ?> <?php the_category(', ') ?>&nbsp;&nbsp;|&nbsp;
					<?php comments_popup_link(__('Комментарий'), __('1 Комментарий'), __('% Комментариев')); ?>
					<?php edit_post_link(__('Править'), '&nbsp;|&nbsp;&nbsp;', ''); ?>
				 </div>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Предыдущие записи')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Следующие записи &raquo;')) ?></div>
		</div>
		
	<?php else : ?>
		<div class="post">
			<h2 class="posttitle"><?php _e('Не найдено') ?></h2>
			<div class="postentry"><p><?php _e('К сожалению, по вашему запросу ничего не найдено.'); ?></p></div>
		</div>

	<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
