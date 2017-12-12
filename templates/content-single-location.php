<?php while (have_posts()) : the_post(); ?>
	<section class="location-single">
		<div class="row mt-5">
			<div class="col-8">
				<h6>WonenPlus <? the_title(); ?></h6>
				<? the_content(); ?>
			</div>
			<div class="col-4">
				<section>
					<h6>Formulieren</h6>
					<?php if( have_rows('forms') ): ?>
						<ul class="list-unstyled">
							<?php while ( have_rows('forms') ) : the_row(); ?>

								<li><i class="fa fa-file-pdf-o text-primary mr-2"></i><a href="<? the_sub_field('file'); ?>"><? the_sub_field('title'); ?></a></li>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</section>

				<section class="locations">
					<h6>Locaties</h6>
					<?php $args = array('post_type' => 'location', 'orderby' => 'rand'); ?>
					<?php $current_post_ID = $post->ID;?>
					<?php $query = new wp_query( $args ); ?>
					<?php if($query->have_posts()): ?>

						<?php while( $query->have_posts() ) : ?>

						<?php $query->the_post(); ?>
						<?php $current = ($current_post_ID == $post->ID) ? 'badge-primary':'badge-secondary'; ?>

							<span class="badge  <?= $current ?>"><? the_title(); ?></span>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>
						<?php wp_reset_query(); ?>
					<?php endif; ?>
				</section>
			</div>
		</div>
	</section>
<?php endwhile; ?>
