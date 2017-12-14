<?php if(is_singular('location')): ?>
<?php $toggle_bg = (get_field('extra_toggle') == TRUE )?'bg-tint':'bg-white'; ?>
	<section class="location-footer <?= $toggle_bg; ?>">
		<?php get_template_part('templates/sections/location','footer'); ?>
	</section>
<?php endif; ?>

<footer class="container-fluid">

	<div class="row">
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class="row bg-secondary">
		<div class="col-12 py-3">
			<nav class="navbar-dark navbar-expand">
				<?php
                wp_nav_menu(array(
                    'menu' => 'primary_navigation',
                    'theme_location' => 'primary_navigation',
                    'depth' => 2,
                    'container' => 'div',
                    'container_id' => 'footer_navigation',
                    'menu_class' => 'navbar-nav nav justify-content-center',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
            ?>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col-12 text-center">
			<p class="text-muted my-2">
				<small>
					<i class="fa fa-phone text-secondary mr-1"></i><a class="text-muted" href="tel:0299820130" title="Telefoonnummer van RSWP">0299 82 01 30</a>
					<i class="fa fa-envelope text-secondary ml-2 mr-1"></i><a class="text-muted" href="mailto:rswp.nl">info@rswp.nl</a>
					<i class="fa fa-globe text-secondary ml-2 mr-1"></i><a class="text-muted" href="/sitemap">sitemap</a>
				</small>
			</p>
		</div>
	</div>

</footer>
