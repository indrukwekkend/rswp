<?php

$background = function($has_post_thumbnail){

    if($has_post_thumbnail):

        $url = get_the_post_thumbnail_url();

				$min_height = (is_page('contact'))?'250px':'160px';

        return 'style="background-image: url('.$url.');min-height:'.$min_height.';"';

    endif;

    return;
};

// Bedoeling is dat je op elke pagina een Jumbotron kan plaatsen.
$jumbotron = get_field('jumbotron');

?>

<section class="jumbotron jumbotron-fluid m-0 p-0" <?= $background( has_post_thumbnail() ); ?>>

	<?php if( $jumbotron['title'] or $jumbotron['lead'] or $jumbotron['cta']): ?>

    <div class="container-fluid">

  		<div class="row py-5">

  			<div class="col-12 py-5">

  				<?php if( $jumbotron['title'] ): ?>

  					<h1 class="jumbotron-heading display-3 text-white">
  						<?= $jumbotron['title']; ?>
  					</h1>

  				<?php endif; ?>

  				<?php if( $jumbotron['lead'] ): ?>

  					<div class="lead text-white">
  						<?= $jumbotron['lead'];?>
  					</div>

  				<?php endif; ?>

  				<?php if( $jumbotron['cta'] ): ?>

  					<div>
  						<?php foreach($jumbotron["cta"] as $cta ) :?>

  							<?php $color = ($cta['color']) ? "btn-" . $cta['color'] : "btn-primary"; ?>

  							<a href="<?= $cta['url']; ?>" class="btn btn-radius <?= $color; ?>"><?= $cta['label'] ?></a>

  						<?php endforeach; ?>
  					</div>

  				<?php endif; ?>

  			</div>

			<?php elseif( is_front_page() ): ?>

				<div class="container py-4">
					<div class="row py-5">
						<div class="col-5 px-4 bg-secondary text-white">
							<h2 class="display-4 text-center text-white my-3">Zoek naar diensten</h2>
							<form action="/services" method="get">

								<div class="form-group row">
									<label for="input-locatie" class="col-4"><i class="fa fa-map-marker text-primary mr-2"></i>LOCATIE</label>
									<div class="col-8">
										<?php $args = array('post_type' => 'location', 'orderby' => 'title', 'order' => 'ASC'); ?>
										<?php $query = new wp_query( $args ); ?>

										<?php if($query->have_posts()): ?>
											<select class="form-control" id="input-locatie">
												<option selected>- kies locatie</option>
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
									<label for="input-diensten" class="col-4"><i class="fa fa-handshake-o text-primary mr-2"></i>DIENSTEN</label>
									<div class="col-8">
										<?php $args = array('post_type' => 'service', 'orderby' => 'title', 'order' => 'ASC'); ?>
										<?php $query = new wp_query( $args ); ?>

										<?php if($query->have_posts()): ?>
											<select class="form-control" id="input-diensten">
												<option selected>- kies dienst</option>
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
										<button type="submit" class="btn btn-block btn-primary">zoeken</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>

  		<?php endif; ?>

  	</div>

  </div>

</section>
