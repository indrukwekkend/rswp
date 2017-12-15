<?php while (have_posts()) : the_post(); ?>
	<section class="location-single">
		<div class="row mt-5 mb-4">

			<div class="col-5">
				<div><? the_content(); ?></div>
				<div class="service-locations">

					<?php $post_objects = get_field('location_service'); ?>

					<?php if($post_objects): ?>

						<?php $total_tags = count($post_objects); ?>

						<?php if($post_objects && ($total_tags > 1) ): ?>
							<?php $i=0; ?>

							<div><b>Aangeboden in:</b></div>

							<div class="locations">
								<?php foreach($post_objects as $post): ?>
									<?php setup_postdata($post); ?>
									<?php $i++; ?>
									<?php
									if($i < ($total_tags - 1) ):
										$punctuation = ', ';
									elseif($i < ($total_tags) ):
										$punctuation = " & ";
									else:
										$punctuation = "";
									endif;
									?>
									<a class="text-primary" href="<?= get_the_permalink($location->ID); ?>"><b><?= get_the_title($location->ID); ?></b></a><?= $punctuation; ?>
								<?php endforeach; ?>
							</div>
						<?php endif;?>
						<?php wp_reset_postdata(); ?>
					<?php endif;?>
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
