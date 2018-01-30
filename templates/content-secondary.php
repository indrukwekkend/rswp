<?php if( ( is_singular('location') || is_singular('service') ) and !is_single('kenniscentrum-mantelzorg') ) : ?>
	<?php get_template_part('templates/sections/parts/services','list'); ?>
<?php endif; ?>

<?php if( have_rows('sections') ) : ?>
	<?php while( have_rows('sections') ) : the_row(); ?>

		<?php if( get_row_layout() == 'section_display' ): ?>
			<?php get_template_part('templates/sections/display'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_featured' ): ?>
			<?php get_template_part('templates/sections/featured'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_featurette' ): ?>
			<?php get_template_part('templates/sections/featurette'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_visual' ): ?>
			<?php get_template_part('templates/sections/visual'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_brands' ): ?>
			<?php get_template_part('templates/sections/brands'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_quote' ): ?>
			<?php get_template_part('templates/sections/quote'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_posts' ): ?>
			<?php get_template_part('templates/sections/posts'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_maps' ): ?>
			<?php get_template_part('templates/sections/maps'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_content' ): ?>
			<?php get_template_part('templates/sections/content'); ?>
		<?php endif;?>

		<?php if( get_row_layout() == 'section_form' ): ?>
			<?php get_template_part('templates/sections/gravityform'); ?>
		<?php endif;?>

	<?php endwhile;?>
<?php endif;?>
