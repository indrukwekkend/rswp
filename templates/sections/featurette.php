<?php

$reverser = ( get_sub_field( 'order' ) ) ? ' flex-row-reverse' : '';
$image = get_sub_field('image');
$size = 'large';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
$title = $image['title'];
$alt = $image['alt'];

$cta_group = get_sub_field('cta');

?>

<section class="featurette">

	<div class="row py-3 align-items-center<?= $reverser;?>">

		<div class="col-md-7">

			<h2 class="display-4">
				<?php the_sub_field('title'); ?>
			</h2>

			<h3 class="mb-3">
				<?php the_sub_field('lead'); ?>
			</h3>

			<span class="lead">
				<?php the_sub_field('content'); ?>
			</span>

			<div class="mt-3">

				<?php if( $cta_group ) : ?>

					<?php foreach($cta_group as $cta) : ?>

						<?php $color = ($cta['color']) ? "btn-" . $cta['color'] : "btn-primary" ;?>

						<a class="btn <?= $color; ?>" href="<?= $cta['url']; ?>"><?= $cta['label']; ?></a>

					<?php endforeach; ?>

				<?php endif; ?>

			</div>

		</div>

		<div class="col-md-5">

			<figure class="figure">

				<img class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>" src="<?= $thumb; ?>" width="<?= $width; ?>" height="<?= $height; ?>" >

				<?php if( get_sub_field('caption') ) : ?>

					<figcaption class="figure-caption">
						<?php the_sub_field('caption'); ?>
					</figcaption>

				<?php endif; ?>

			</figure>

		</div>

	</div>

</section>
