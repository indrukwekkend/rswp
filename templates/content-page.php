<section class="content">
	<div class="row">

		<div class="col-6 pt-5">
			<?php get_template_part('templates/header','page'); ?>
			<?php the_content(); ?>
		</div>

		<div class="col-6 px-4">
			<?php get_template_part('templates/sections/parts/locations','list'); ?>
		</div>

	</div>
</section>
