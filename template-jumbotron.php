<?php
/**
 * Template Name: Pagina met Jumbotron
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php if( is_page('contact') ): ?>
		<?php get_template_part('templates/content', 'contact'); ?>
	<?php elseif(is_page()): ?>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php else: ?>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php endif; ?>
<?php endwhile; ?>
