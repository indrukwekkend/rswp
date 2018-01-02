<?php while (have_posts()) : the_post(); ?>
	<section class="vacancy-single">
		<div class="row mt-5 mb-4">

			<div class="col-8">
				<? the_content(); ?>
			</div>

		</div>

	</section>
<?php endwhile; ?>
