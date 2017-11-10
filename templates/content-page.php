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

	<?php endwhile;?>
<?php endif;?>