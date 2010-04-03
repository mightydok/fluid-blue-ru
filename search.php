<?php get_header(); ?>
	<div id="content">

	<?php if (have_posts()) : ?>

		<h2><?php _e('Поиск') ?></h2>
		
		<p> Результаты для <em><?php echo $_GET['s'] ?></em></p>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h3 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка к <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="postentry">
					<?php the_excerpt(); ?>
				</div>
		
				<div class="postmetadata">
					<?php _e('Опубликовано') ?> <?php the_time('d M Y') ?> <?php _e('в рубрике') ?> <?php the_category(', ') ?>
					<?php if( function_exists('the_tags') ) 
						the_tags(__('. Теги '), ', ', '.'); 
					?>
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
