<section class="featured">

	<div class="row py-3">

		<?php if( have_rows('content') ) : ?>

			<?php while( have_rows('content') ) : the_row(); ?>

				<div class="col-12 col-md">

					<h2><?php the_sub_field('title'); ?></h2>

					<?php the_sub_field('lead'); ?>

				</div>

			<?php endwhile; ?>

		<?php endif;?>

	</div>

</section>
