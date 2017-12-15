<?php if( is_singular('location') ) : ?>
	<section class="container services">
		<div class="row py-4">
			<div class="col-12 text-center">
				<h1>Diensten WonenPlus <? the_title(); ?></h1>
				<p>WonenPlus <? the_title();?> biedt een aantal diensten aan zodat u zo lang mogelijk prettig thuis kunt blijven wonen.</p>
			</div>
		</div>

		<?php $post_objects = get_field('location_service'); ?>
		<?php if( $post_objects ): ?>
			<div class="row">
				<?php foreach( $post_objects as $post): ?>
					<?php setup_postdata($post); ?>

					<?php get_template_part('templates/sections/parts/services'); ?>

				<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif;?>

		<div class="row pb-4">
			<div class="col-12 text-center my-2">
				<a class="btn btn-radius btn-primary px-4" href="/services">BEKIJK ALLE DIENSTEN</a>
			</div>
		</div>
	</section>
<?php endif;?>

<?php if( is_singular('service') ) : ?>
	<section class="container services">
		<div class="row py-4">
			<div class="col-12 text-center">
				<h1>Diensten WonenPlus</h1>
				<p>WonenPlus biedt een aantal diensten aan zodat u zo lang mogelijk prettig thuis kunt blijven wonen.</p>
			</div>
		</div>

		<?php $args = array('post_type' => 'service', 'posts_per_page' => 9); ?>
		<?php $query = new wp_query( $args ); ?>
		<?php if($query->have_posts()): ?>
			<div class="row">
				<?php while( $query->have_posts() ) : ?>

				<?php $query->the_post(); ?>

				<?php get_template_part('templates/sections/parts/services'); ?>

				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>

		<div class="row pb-4">
			<div class="col-12 text-center my-2">
				<a class="btn btn-radius btn-primary px-4" href="/services">BEKIJK ALLE DIENSTEN</a>
			</div>
		</div>
	</section>
<?php endif;?>
