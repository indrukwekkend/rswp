<?php while (have_posts()) : the_post(); ?>
	<section class="location-single">
		<div class="row mt-5 mb-4">
			<div class="col-5">
				<div><? the_content(); ?></div>
				<div class="service-locations">
					<?php $locations = get_field('location_service'); ?>
					<?php foreach($locations as $location): ?>
						<?= get_the_title($location->ID); ?>

					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-3">
				<?php $image = get_field('image'); ?>

				<?php if( !empty($image) ): ?>

				<?php
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				?>

					<img class="img-fluid" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />

				<?php endif; ?>
			</div>
			<div class="col-4">
				<?php get_template_part('templates/sections/parts/locations','list'); ?>
			</div>
		</div>
	</section>
<?php endwhile; ?>
