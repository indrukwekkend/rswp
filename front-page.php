<?php // Gebruik dit bestand voor de voorpagina. ?>

<?php use Roots\Sage\Assets; ?>

<?php while (have_posts()) : the_post(); ?>

	<section class="content">
		<div class="row">

			<div class="col-12 col-md-6 pt-5 pr-5 d-none d-md-block">

				<div class="row">
					<div class="col-12">
						<? the_content(); ?>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6">
						<a class="btn btn-block btn-primary text-script" href="/services">bekijk alle diensten</a>
					</div>

					<div class="col-12 col-sm-6">
						<a class="btn btn-block btn-secondary text-script" href="/word-abonnee">word abonnee</a>
					</div>

				</div>

			</div>

			<div class="col-12 col-md-6">
				<div class="kaart text-center py-3 px-2">
					<h1 class="mb-1 text-white">Wat doet RSWP in mijn omgeving?</h1>
					<p class="text-white text-script">In elke buurt worden andere diensten aangeboden. Bekijk het hier.</p>
					<?php get_template_part('templates/front-page','map'); ?>

					<section class="d-block d-md-none">
						<?php get_template_part('templates/sections/parts/locations','list'); ?>
					</section>

				</div>
			</div>

		</div>
	</section>

<?php endwhile; ?>
