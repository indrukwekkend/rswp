<section class="container services">
	<div class="row py-4">
		<div class="col-12 text-center">
			<h5>Diensten WonenPlus <? the_title(); ?></h5>
			<p>WonenPlus <? the_title();?> biedt een aantal diensten aan zodat u zo lang mogelijk prettig thuis kunt blijven wonen.</p>
		</div>
	</div>

	<?php $post_objects = get_field('services'); ?>
	<?php if( $post_objects ): ?>
		<div class="row">
			<?php foreach( $post_objects as $post): ?>
				<?php setup_postdata($post); ?>

				<div class="col-4">
					<div class="row align-items-center">
						<div class="col-4">
							<?php if(has_post_thumbnail()): ?>
								<img class="img-fluid" src="<? the_post_thumbnail_url(); ?>"/>
							<?php else: ?>
								<img class="img-fluid" src="http://placehold.it/180"/>
							<?php endif; ?>
						</div>
						<div class="col-8">
							<div><b class="text-primary"><?php the_title(); ?></b></div>
							<div><?= wp_trim_words( get_the_excerpt(), 15, ' [...] <a href="'.get_the_permalink().'">Lees meer</a>' ); ?></div>
						</div>
					</div>
				</div>

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
