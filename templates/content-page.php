<section class="content">
	<div class="row mt-5 mb-4">

		<div class="col-8">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>

		<div class="col-4">
			<?php get_template_part('templates/sections/parts/locations','list'); ?>
		</div>

	</div>
</section>
