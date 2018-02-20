<?php while (have_posts()) : the_post(); ?>
	<section class="service-single">
		<div class="row mt-5 mb-4">

			<div class="col-8">
				<h1><?php the_title(); ?></h1>
				<div><? the_content(); ?></div>
				<?php get_template_part('templates/sections/parts/service','locations'); ?>
			</div>

			<div class="col">
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

		</div>

	</section>
<?php endwhile; ?>
