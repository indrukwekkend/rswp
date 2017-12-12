<?
use Roots\Sage\Assets;
?>

<header>

	<section class="topbar">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-6">
					<small>
						<i class="fa fa-phone text-secondary mr-1"></i><a class="text-muted" href="tel:0299820130" title="Telefoonnummer van RSWP"><i>0299 82 01 30</i></a>
						<i class="fa fa-envelope text-secondary ml-2 mr-1"></i><a class="text-muted" href="mailto:rswp.nl"><i>info@rswp.nl</i></a>
						<i class="fa fa-lock text-secondary ml-2 mr-1"></i><a class="text-muted" href="/sitemap"><i>sitemap</i></a>
					</small>
				</div>

				<div class="col-6">
					<form class="form-inline my-1">

						<div class="input-group input-group-sm ml-auto">
							<span class="input-group-btn">
								<button class="btn" type="button"><i class="fa fa-search"></i></button>
							</span>
							<input type="text" class="form-control" placeholder="ZOEKEN..." aria-label="Search for...">
						</div>

						<div class="ml-3">
							<a class="mr-2" href="#tw"><i class="fa fa-twitter"></i></a>
							<a class="mr-2" href="#fb"><i class="fa fa-facebook"></i></a>
							<a href="#ANBI"><img src="<?= Assets\asset_path('images/anbi.jpg');?>" height="24"/></a>
						</div>

					</form>
				</div>

			</div>
		</div>
	</section>

	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">

			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
				<img src="<?= Assets\asset_path('images/logo.png');?>"/>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary_navigation" aria-controls="primary_navigation" aria-expanded="false" aria-label="<?php _e('Wissel navigatie', 'sage');?>">
				<span class="navbar-toggler-icon"></span>
			</button>

        <?php
            wp_nav_menu(
                array(
                    'menu'              => 'primary_navigation',
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'primary_navigation',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                )
            );
        ?>

			</div>
		</div>
	</nav>

	<?php if( is_front_page() or has_post_thumbnail() or is_page_template('template-jumbotron.php') or is_archive() or is_single() ) : ?>

		<?php get_template_part('templates/sections/jumbotron'); ?>

	<?php endif;?>

</header>
