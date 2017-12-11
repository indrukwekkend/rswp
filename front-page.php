<?php // Gebruik dit bestand voor de voorpagina. ?>

<?php while (have_posts()) : the_post(); ?>

	<section class="content">
		<div class="row">

			<div class="col-6 pt-6">

				<div class="row">
					<div class="col-12">
						<? the_content(); ?>
					</div>
				</div>

				<div class="row">

					<div class="col-6">
						<a class="btn btn-block btn-primary" href="#">bekijk alle diensten</a>
					</div>

					<div class="col-6">
						<a class="btn btn-block btn-secondary" href="#">word abonnee</a>
					</div>

				</div>

			</div>

			<div class="col-6 px-4">
				<div class="kaart bg-primary text-white text-center py-3 px-2">
					<h5 class="display-4">Wat doet RSWP in mijn omgeving?</h5>
					<p>In elke buurt worden andere diensten aangeboden. Bekijk het hier.</p>
					<canvas id="canvas" width="400" height="400">
							Hier komt de kaart van RSWP.
					</canvas>
				</div>
			</div>

		</div>
	</section>

	<?php get_template_part('templates/content','page');?>

<?php endwhile; ?>
