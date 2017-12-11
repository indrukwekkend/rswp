<?php // Gebruik dit bestand voor de voorpagina. ?>

<?php use Roots\Sage\Assets; ?>

<?php while (have_posts()) : the_post(); ?>

	<section class="content">
		<div class="row">

			<div class="col-6 pt-5">

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
				<div class="kaart text-white text-center py-3 px-2">
					<h5 class="display-4 mb-1 text-white">Wat doet RSWP in mijn omgeving?</h5>
					<p>In elke buurt worden andere diensten aangeboden. Bekijk het hier.</p>
						<img src="<?= Assets\asset_path('images/kaart.png'); ?>" width="400" height="400">
				</div>
			</div>

		</div>
	</section>

	<?php get_template_part('templates/content','page');?>
	<div class="mb-4"></div>

<?php endwhile; ?>
