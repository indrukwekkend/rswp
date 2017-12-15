<section class="container brands">

	<?php if( have_rows('brands') ) : ?>

		<div class="row py-3">

			<?php  while( have_rows('brands') ) : the_row(); ?>

			<?php $image = get_sub_field('image'); ?>
			<?php $thumb = $image['sizes']['large']; ?>
			<?php $title = $image['title']; ?>
			<?php $alt = $image['alt']; ?>

				<div class="col-12 col-md text-center">

					<figure class="figure">

						<img class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>" src="<?= $thumb; ?>">

					</figure>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

</section>
