<section class="upload-list">

	<?php if( have_rows('forms') ): ?>

		<h1>Formulieren</h1>

		<ul class="list-unstyled">
			<?php while ( have_rows('forms') ) : the_row(); ?>

				<li><i class="fa fa-file-pdf-o text-primary mr-2"></i><a href="<? the_sub_field('file'); ?>"><? the_sub_field('title'); ?></a></li>

			<?php endwhile; ?>
		</ul>

	<?php endif; ?>

</section>
