<?php while (have_posts()) : the_post(); ?>
	<section class="forum-single">
		<div class="row mt-5 mb-4">

			<div class="col-12">
				<? the_content(); ?>
			</div>

	</section>
<?php endwhile; ?>
