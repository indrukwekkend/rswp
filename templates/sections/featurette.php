<?php 

$reverser = ( get_sub_field( 'order' ) ) ? ' flex-row-reverse' : '';
$image = get_sub_field('image');
$size = 'large';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
$title = $image['title'];
$alt = $image['alt'];

?>

<section class="container featurette">

	<div class="row align-items-center<?= $reverser;?>">

		<div class="col-md-7">

			<h2 class="display-4">
				<?php the_sub_field('title'); ?>
			</h2>

			<p class="lead">
				<?php the_sub_field('lead'); ?>
			</p>

		</div>

		<div class="col-md-5">

			<figure class="figure">

				<img class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>" src="<?= $thumb; ?>" width="<?= $width; ?>" height="<?= $height; ?>" >

				<?php if( get_sub_field('caption') ) : ?>

					<figcaption class="figure-caption">
						<?php the_field('caption'); ?>
					</figcaption>

				<?php endif; ?>

			</figure>

		</div>

	</div>

</section>