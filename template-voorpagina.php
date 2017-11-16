<?php
/**
 * Template Name: Pagina met Hero
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<section class="container">
		<div class="row">
			<div class="col">
				<?php the_title(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	</section>

<?php endwhile; ?>
