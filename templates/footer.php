<?php if( ( is_singular('location') || is_singular('service') ) and !is_single('kenniscentrum-mantelzorg') ): ?>

	<?php $toggle_bg = (get_field('extra_toggle') == TRUE )?'bg-ivory':'bg-white'; ?>

	<section class="location-footer <?= $toggle_bg; ?>">
		<?php get_template_part('templates/footer','media'); ?>
	</section>

<?php endif; ?>

<footer class="container-fluid">

	<div class="row">
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class="row bg-secondary d-none d-md-block">
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
			<h1 class="d-block d-md-none mt-3">Contact</h1>
			<p class="my-2">
				<small>
					<span class="d-block d-md-inline mb-2 mb-md-0"><i class="fa fa-phone text-secondary mr-1"></i><a href="tel:0299820130" title="Telefoonnummer van RSWP">0299 82 01 30</a></span>
					<span class="d-block d-md-inline mb-2 mb-md-0"><i class="fa fa-envelope text-secondary ml-2 mr-1"></i><a href="mailto:rswp.nl">info@rswp.nl</a></span>
					<span class="d-block d-md-inline"><i class="fa fa-globe text-secondary ml-2 mr-1"></i><a href="/sitemap">sitemap</a></span>
				</small>
			</p>
		</div>
	</div>

</footer>
