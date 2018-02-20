<div class="service-locations">

	<?php $post_objects = get_field('location_service'); ?>

	<?php if($post_objects): ?>

		<?php $total_tags = count($post_objects); ?>

		<?php if($post_objects && ($total_tags > 0) ): ?>
			<?php $i=0; ?>

			<div><b>Aangeboden in:</b></div>

			<div class="locations">
				<?php foreach($post_objects as $post): ?>
					<?php setup_postdata($post); ?>
					<?php $i++; ?>
					<?php
					if($i < ($total_tags - 1) ):
						$punctuation = ', ';
					elseif($i < ($total_tags) ):
						$punctuation = " & ";
					else:
						$punctuation = "";
					endif;
					?>
					<a class="text-primary" href="<?= get_the_permalink($location->ID); ?>"><b><?= get_the_title($location->ID); ?></b></a><?= $punctuation; ?>
				<?php endforeach; ?>
			</div>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
	<?php endif;?>
</div>
