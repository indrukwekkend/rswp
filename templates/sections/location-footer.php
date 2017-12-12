<section class="container location-footer">
	<div class="row">
		<div class="col-12">
			<h6 class="display-4 text-center">Actueel</h6>
		</div>

		<div class="col-3">
			<h6 class="text-center">ACTIVITEITEN</h6>
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

								<div class="card col-12 col-md-6 col-lg mb-4">

									<div class="card-body">

										<?php if( has_post_thumbnail() ):?>

											<img class="card-img-top border border-primary" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">

										<?php endif; ?>

										<div class="card-title">
											<span><?php the_title(); ?></span>
										</div>

										<div class="card-subtitle text-muted my-1 mt-auto">
											<small class="card-meta">
												<i class="fa fa-map-marker mr-1 text-secondary"></i><?= get_the_title(get_field('location')); ?>
												<i class="fa fa-clock-o text-secondary mx-1"></i><?= get_the_date( get_option( 'date_format' ) );?>
											</small>
										</div>

										<div class="card-text">
											<?= wp_trim_words( get_the_excerpt(), 15, ' [..]'); ?>
										</div>

									</div>

									<div class="card-footer">
										<a href="<?= get_post_permalink(); ?>" class="card-link btn btn-radius btn-sm btn-outline-primary">Lees verder</a>
									</div>

								</div>

						<?php endwhile;?>

				<?php wp_reset_postdata(); ?>

				</div>

			<?php endif;?>
		</div>

		<div class="col-3">
			<h6 class="text-center">VACATURES</h6>
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
