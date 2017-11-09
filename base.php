<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<?php get_template_part('templates/head'); ?>
		<body <?php body_class(); ?>>
			<!--[if IE]>
                <div class="alert alert-warning">
                    <?php _e('Je gebruikt een <strong>verouderde</strong> browser. Doe elke ontwikkelaar een plezier en <a href="http://browsehappy.com/">installeer een recente browser</a>', 'sage'); ?>
                </div>
             <![endif]-->
			<?php do_action('get_header'); ?>

			<?php get_template_part('templates/header'); ?>

			<main class="container" role="main">

				<div class="row">
					<div class="col">
						<?php include Wrapper\template_path(); ?>
					</div>

				<?php if (Setup\display_sidebar()) : ?>
					<div class="col-4">
						<?php include Wrapper\sidebar_path(); ?>
					</div><!-- /.sidebar -->
				<?php endif; ?>

				</div>

			</main><!-- /.main -->

		<?php do_action('get_footer'); ?>

		<?php get_template_part('templates/footer');?>

		<?php wp_footer(); ?>
	</body>
</html>
