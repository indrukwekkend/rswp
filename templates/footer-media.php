<section class="container location-footer">
	<div class="row py-4">
		<div class="col-12">
			<h1 class="text-center">Actueel</h1>
		</div>

		<div class="col-3">
			<h5><i class="fa fa-calendar text-primary"></i> ACTIVITEITEN</h5>
			<?php $args = array('post_type' => 'activity'); ?>
			<?php $current_post_ID = $post->ID;?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>

				<?php while( $query->have_posts() ) : ?>

				<?php $query->the_post(); ?>
				<?php the_title(); ?>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>
				<?php wp_reset_query(); ?>
			<?php endif; ?>
		</div>

		<div class="col-6 posts">
			<?php $args = array('post_type' => 'post', 'posts_per_page' =>  2, );?>
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
			<h5><i class="fa fa-user text-primary"></i> VACATURES</h5>
			<?php $args = array('post_type' => 'vacancy'); ?>
			<?php $current_post_ID = $post->ID;?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>

				<?php while( $query->have_posts() ) : ?>

				<?php $query->the_post(); ?>
				<?php the_title(); ?>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>
				<?php wp_reset_query(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
