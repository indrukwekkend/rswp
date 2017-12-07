<?php

$background = function($has_post_thumbnail){

    if($has_post_thumbnail):

        $url = get_the_post_thumbnail_url();

        return 'style="background-image: url('.$url.');min-height:320px;"';

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

  							<a href="<?= $cta['url']; ?>" class="btn <?= $color; ?>"><?= $cta['label'] ?></a>

  						<?php endforeach; ?>
  					</div>

  				<?php endif; ?>

  			</div>

			<?php else: ?>

				<div class="container">
					<div class="row py-5">
						<div class="col-5 bg-secondary text-white">
							<h2 class="display-4 text-center my-3">Zoek naar diensten</h2>
							<form>

								<div class="form-group row">
									<label for="input-locatie" class="col-3">Locatie</label>
									<div class="col-9">
										<select class="form-control" id="input-locatie">
											<option selected>- kies locatie</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="input-diensten" class="col-3">Diensten</label>
									<div class="col-9">
										<select class="form-control" id="input-diensten">
											<option selected>- kies dienst</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
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
