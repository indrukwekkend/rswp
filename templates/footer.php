<footer class="container-fluid">

	<div class="row">
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class="row bg-secondary">
		<div class="col-12">
			<nav class="navbar-light navbar-expand">
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
			<p class="text-muted">
				<small>
					<i class="fa fa-phone text-secondary mr-1"></i><a class="text-muted" href="tel:0299820130" title="Telefoonnummer van RSWP">0299 82 01 30</a>
					<i class="fa fa-envelope text-secondary ml-2 mr-1"></i><a class="text-muted" href="mailto:rswp.nl">info@rswp.nl</a>
					<i class="fa fa-globe text-secondary ml-2 mr-1"></i><a class="text-muted" href="/sitemap">sitemap</a>
				</small>
			</p>
		</div>
	</div>

</footer>
