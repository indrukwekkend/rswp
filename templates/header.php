<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">

			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
				<?php bloginfo('name'); ?>
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
                    'menu_class'        => 'nav navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                )
            );
        ?>

			</div>
		</div>
	</nav>

	<?php if( is_front_page() or has_post_thumbnail() or is_page_template('template-jumbotron.php') ) : ?>

		<?php get_template_part('templates/sections/jumbotron'); ?>

	<?php endif;?>

</header>