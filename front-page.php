<?php // Gebruik dit bestand voor de voorpagina. ?>

<?php use Roots\Sage\Assets; ?>

<?php while (have_posts()) : the_post(); ?>

	<section class="content">
		<div class="row">

			<div class="col-6 pt-5 pr-5">

				<div class="row">
					<div class="col-12">
						<? the_content(); ?>
					</div>
				</div>

				<div class="row">

					<div class="col-6">
						<a class="btn btn-block btn-primary text-script" href="#">bekijk alle diensten</a>
					</div>

					<div class="col-6">
						<a class="btn btn-block btn-secondary text-script" href="#">word abonnee</a>
					</div>

				</div>

			</div>

			<div class="col-6">
				<div class="kaart text-center py-3 px-2">
					<h1 class="mb-1 text-white">Wat doet RSWP in mijn omgeving?</h1>
					<p class="text-white text-script">In elke buurt worden andere diensten aangeboden. Bekijk het hier.</p>
					<?php get_template_part('templates/front-page','map'); ?>
				</div>
			</div>

		</div>
	</section>
	<div class="mb-4"></div>

<?php endwhile; ?>
