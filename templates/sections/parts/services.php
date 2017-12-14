<div class="col-4 p-0">
	<div class="media mb-3">
		<?php $image = get_field('icon'); ?>

		<?php if( !empty($image) ): ?>

		<?php
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$thumb = $image['sizes']['thumbnail'];
		?>

			<img class="img-fluid align-self-center mr-3" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />

		<?php endif; ?>
		<div class="media-body">
			<div><b class="text-primary"><?php the_title(); ?></b></div>
			<div><?= wp_trim_words( get_the_excerpt(), 15, ' <span class="text-nowrap">[...] <a href="'.get_the_permalink().'">Lees meer</a></span>' ); ?></div>
		</div>
	</div>
</div>
