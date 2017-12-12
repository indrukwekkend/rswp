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

	<section>
		<div class="row">
			<div class="col-12 text-center">
				<h5>Diensten WonenPlus <? the_title(); ?></h5>
				<p>WonenPlus <? the_title();?> biedt een aantal diensten aan zodat u zo lang mogelijk prettig thuis kunt blijven wonen.</p>
			</div>
		</div>

		<?php $post_objects = get_field('services'); ?>
		<?php if( $post_objects ): ?>
			<div class="row">
				<?php foreach( $post_objects as $post): ?>
					<?php setup_postdata($post); ?>

					<div class="col-4">
						<div class="row align-items-center">
							<div class="col-4">
								<?php if(has_post_thumbnail()): ?>
									<img class="img-fluid" src="<? the_post_thumbnail_url(); ?>"/>
								<?php else: ?>
									<img class="img-fluid" src="http://placehold.it/180"/>
								<?php endif; ?>
							</div>
							<div class="col-8">
								<div><b class="text-primary"><?php the_title(); ?></b></div>
								<div><?= wp_trim_words( get_the_excerpt(), 15, ' [...] <a href="'.get_the_permalink().'">Lees meer</a>' ); ?></div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif;?>
		<div class="row">
			<div class="col-12 text-center my-2">
				<a class="btn btn-radius btn-primary px-4" href="/services">BEKIJK ALLE DIENSTEN</a>
			</div>
		</div>
	</section>

	<section class="secondary_content">
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h6><? the_field('secondary_title'); ?></h6>
				<? the_field('secondary_content'); ?>
			</div>
		</div>
	</section>

	<section>
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
<?php endwhile; ?>
