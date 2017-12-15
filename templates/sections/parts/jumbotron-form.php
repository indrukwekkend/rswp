<div class="container pt-7 pt-md-0 py-md-4">
	<div class="row py-md-5">
		<div class="col-12 col-md-8 col-lg-5 px-4 mx-auto mx-lg-0 bg-secondary text-white">

			<h1 class="text-center text-white my-3">Zoek naar diensten</h1>

			<form id="service_search_form" action="/services/boodschappenservice/" method="get">

				<div class="form-group row">

					<label for="input-location" class="col-4"><i class="fa fa-map-marker text-primary mr-2"></i>LOCATIE</label>

					<div class="col-8">
						<?php $args = array('post_type' => 'location', 'orderby' => 'title', 'order' => 'ASC'); ?>
						<?php $query = new wp_query( $args ); ?>

						<?php if($query->have_posts()): ?>
							<select class="form-control" id="input-location">
								<option selected>- kies locatie</option>
									<?php while( $query->have_posts() ) : ?>
										<?php $query->the_post(); ?>

										<option value="<?= $post->post_name; ?>"><? the_title(); ?></option>

									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
									<?php wp_reset_query(); ?>
								</select>
							<?php endif; ?>
					</div>
				</div>

				<div class="form-group row">

					<label for="input-service" class="col-4"><i class="fa fa-handshake-o text-primary mr-2"></i>DIENSTEN</label>

					<div class="col-8">
						<?php $args = array('post_type' => 'service', 'orderby' => 'title', 'order' => 'ASC'); ?>
						<?php $query = new wp_query( $args ); ?>

						<?php if($query->have_posts()): ?>
							<select class="form-control" id="input-service" disabled>
								<option selected>- kies eerst locatie</option>
									<?php while( $query->have_posts() ) : ?>
										<?php $query->the_post(); ?>

										<option value="<?= $post->ID; ?>"><? the_title(); ?></option>

									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
									<?php wp_reset_query(); ?>
								</select>
							<?php endif; ?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-12">
						<button type="submit" id="input-submit" class="btn btn-block btn-primary" disabled>zoeken</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
