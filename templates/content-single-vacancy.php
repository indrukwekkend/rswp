<?php while (have_posts()) : the_post(); ?>
	<section class="vacancy-single">
		<div class="row mt-5 mb-4">

			<div class="col-8">
				<? the_content(); ?>
			</div>

			<div class="col-4">
				<?php get_template_part('templates/sections/parts/locations','list'); ?>
			</div>
		</div>

	</section>
<?php endwhile; ?>
