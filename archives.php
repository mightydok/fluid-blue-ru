<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content">
<div class="post">
<h2><?php _e('Архивы') ?></h2>

<h3><?php _e('Архивы по месяцам') ?></h3>
<ul>
    <?php wp_get_archives('type=monthly'); ?>
</ul>
<p>&nbsp;</p>
<h3><?php _e('Архивы по рубрикам') ?></h3>
<ul>
     <?php wp_list_cats(); ?>
</ul>

<?php if( function_exists('wp_tag_cloud') ) { ?>
<p>&nbsp;</p>
<h3><?php _e('Теги') ?></h3>
<?php wp_tag_cloud(); ?>
<?php } ?>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
