<?php while (have_posts()) : the_post(); ?>
	<section class="location-single">
		<div class="row mt-5 mb-4">
			<div class="col-8">
				<? the_content(); ?>
			</div>
			<div class="col-4">
				<section>
					<?php if( have_rows('forms') ): ?>
					<h1>Formulieren</h1>
						<ul class="list-unstyled">
							<?php while ( have_rows('forms') ) : the_row(); ?>

								<li><i class="fa fa-file-pdf-o text-primary mr-2"></i><a href="<? the_sub_field('file'); ?>"><? the_sub_field('title'); ?></a></li>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</section>

				<section class="locations">
					<h1>Locaties</h1>
					<?php $args = array('post_type' => 'location', 'orderby' => 'title', 'order' => 'ASC'); ?>
					<?php $current_post_ID = $post->ID;?>
					<?php $query = new wp_query( $args ); ?>
					<?php if($query->have_posts()): ?>

						<?php while( $query->have_posts() ) : ?>

						<?php $query->the_post(); ?>
						<?php $current = ($current_post_ID == $post->ID) ? 'btn-primary':'btn-secondary'; ?>

							<a class="btn  <?= $current ?> mb-2" href="<?= get_post_permalink(); ?>"><i><? the_title(); ?></i></a>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>
						<?php wp_reset_query(); ?>
					<?php endif; ?>
				</section>
			</div>
		</div>
	</section>
<?php endwhile; ?>
