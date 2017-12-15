<div class="col-4 p-0">
	<div class="media mb-3">
		<?php $image = get_field('icon'); ?>

		<?php if( !empty($image) ): ?>

		<?php
		$title = $image['title'];
		$alt = $image['alt'];
		$thumb = $image['sizes']['thumbnail'];
		?>
			<a href="<?= get_the_permalink(); ?>">
				<img class="img-fluid align-self-center mr-3" src="<?= $thumb; ?>" alt="<?= $alt; ?>" tile="<?= $title; ?>"/>
			</a>
		<?php endif; ?>
		<div class="media-body">
			<div><a href="<?= get_the_permalink(); ?>"><b class="text-primary"><?php the_title(); ?></b></a></div>
			<div><?= wp_trim_words( get_the_excerpt(), 15, ' <span class="text-nowrap">[...] <a href="'.get_the_permalink().'">Lees meer</a></span>' ); ?></div>
		</div>
	</div>
</div>
