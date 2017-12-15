<h5><i class="fa fa-calendar text-primary"></i> ACTIVITEITEN</h5>
<?php $args = array('post_type' => 'activity'); ?>
<?php $current_post_ID = $post->ID;?>
<?php $query = new wp_query( $args ); ?>
<?php if($query->have_posts()): ?>
	<ul class="list-unstyled activities-list">
		<?php while( $query->have_posts() ) : ?>

		<?php $query->the_post(); ?>
		<li class="py-2">
			<div><?= get_the_date( "d F" );?></div>
			<div><a href="<?= get_the_permalink(); ?>"/><b class="text-primary"><?php the_title(); ?></b></a></div>
		</li>

		<?php endwhile; ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); ?>
<?php endif; ?>
