<?php
// TODO: Optie inbouwen in de customizer zodat er gekozen kan worden tussen weergave modus:
// Masonry, Grid, Lijst
?>

<article <?php post_class('card'); ?> >

	<?php if( get_the_post_thumbnail_url('thumbnail') ) : ?>

		<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

	<?php endif; ?>

	<div class="card-body">

		<h4 class="card-title"><?php the_title(); ?></h4>

		<?php get_template_part('templates/entry-meta'); ?>

		<p class="card-text"><?php the_excerpt(); ?></p>

		<a href="<?php the_permalink(); ?>" class="btn btn-primary">Lees meer</a>

	</div>

</article>