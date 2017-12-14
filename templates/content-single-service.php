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
				$caption = $image['caption'];
				?>

					<img class="img-fluid" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />

				<?php endif; ?>
			</div>
			<div class="col-4">
				<section class="locations">
					<h1>Locaties</h1>
					<?php $args = array('post_type' => 'location', 'orderby' => 'title', 'order' => 'ASC'); ?>
					<?php $current_post_ID = $post->ID;?>
					<?php $query = new wp_query( $args ); ?>
					<?php if($query->have_posts()): ?>

						<?php while( $query->have_posts() ) : ?>

						<?php $query->the_post(); ?>
						<?php $current = ($current_post_ID == $post->ID) ? 'btn-primary':'btn-secondary'; ?>

							<a class="btn  <?= $current ?> mb-2" href="<?= get_post_permalink(); ?>"><i><? the_title(); ?></i></a>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>
						<?php wp_reset_query(); ?>
					<?php endif; ?>
				</section>
			</div>
		</div>
	</section>
<?php endwhile; ?>
