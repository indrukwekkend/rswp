<section class="container location-footer">
	<div class="row py-4">

		<div class="col-12">
			<h1 class="text-center">Actueel</h1>
		</div>

		<div class="col-3">
			<?php get_template_part('templates/sections/parts/activities','list'); ?>
		</div>

		<div class="col-6 posts">
			
			<?php if(  is_singular('location')  ) :   ?>
				
				<?php $location = get_the_id(); ?>
				
					<?php $args = array('post_type' => 'post', 'posts_per_page' =>  2, 'meta_value' => $location, 'meta_key' => 'location' );?>
				
				<?php else: ?>
				
					<?php $args = array('post_type' => 'post', 'posts_per_page' =>  2 );?>
				
				<?php endif; ?>
			
			<?php $the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ): ?>

				<div class="card-group">

					<?php while ( $the_query->have_posts() ): ?>

						<?php $the_query->the_post(); ?>

						<?php get_template_part('templates/content'); ?>

						<?php endwhile;?>

				<?php wp_reset_postdata(); ?>

				</div>

			<?php endif;?>
		</div>

		<div class="col-3">
			<?php get_template_part('templates/sections/parts/vacancies','list'); ?>
		</div>

	</div>
</section>
