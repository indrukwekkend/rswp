<footer class="container-fluid bg-dark">

	<div class="row">
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class="row">
		<div class="col-12 pb-4 pt-3">
			<?php
                wp_nav_menu(array(
                    'menu' => 'primary_navigation',
                    'theme_location' => 'primary_navigation',
                    'depth' => 2,
                    'container' => 'div',
                    'container_id' => 'footer_navigation',
                    'menu_class' => 'nav justify-content-center',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
            ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12 mb-4 text-center">
			<p class="text-muted"><small>&copy; <?= date('Y') ?> All rights reserved.</small></p>
			<p class="text-muted"><small>Creatie door <a href="https://newfish.nl/" title="Newfish B.V.">Newfish B.V.</a></small></p>
		</div>
	</div>

</footer>
