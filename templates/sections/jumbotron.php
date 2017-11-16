<?php 

$background = function($has_post_thumbnail){

    if($has_post_thumbnail):

        $url = get_the_post_thumbnail_url();

        return 'style="background-image: url('.$url.');"';

    endif;

    return;
};

// Bedoeling is dat je op elke pagina een Jumbotron kan plaatsen.
$jumbotron = get_field('jumbotron');

?>

<section class="jumbotron m-0" <?= $background( has_post_thumbnail() ); ?>>

	<div class="container">

		<div class="row">

			<div class="col-12 text-center">

				<?php if( $jumbotron ): ?>

					<?php if( $jumbotron['title'] ): ?>

						<h1 class="jumbotron-heading text-white">
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

				<?php endif; ?>

			</div>

		</div>

	</div>

</section>