<?php use Roots\Sage\Assets; ?>

<article <?php post_class('card col-12 col-md-6 col-lg mb-4'); ?>>

	<div class="card-body">

		<?php if( has_post_thumbnail() && ( is_singular('location') || is_singular('service') || is_front_page() ) ):?>

			<img class="card-img-top border border-primary mb-2" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">

    <?php else: ?>

      <?php if( !is_archive() ): ?>

        <img class="card-img-top border border-primary mb-2" src="<?= Assets\asset_path('images/post-default.jpg'); ?>" alt="<? the_title(); ?>">

      <?php endif; ?>

    <?php endif; ?>

		<div class="card-title mb-1">
			<h5 class="m-0"><?php the_title(); ?></h5>
		</div>

		<div class="card-subtitle my-1 mt-auto">
			<small class="card-meta">
				<?php get_template_part('templates/entry-meta'); ?>
			</small>
		</div>

		<div class="card-text mb-auto">
			<?php $limit = ( is_front_page() ) ? 50 : 18 ; ?>
			<?= wp_trim_words( get_the_excerpt(), $limit, ' [...]' ); ?>
		</div>

	</div>

	<div class="card-footer">
		<a href="<?= get_post_permalink(); ?>" class="card-link btn btn-radius btn-sm btn-outline-primary">Lees verder</a>
	</div>

</article>

<?php if( is_home() || is_archive() ): ?>
	<?php if (($wp_query->current_post +1) != ($wp_query->post_count)): ?>
		<hr>
	<?php endif; ?>
<?php endif; ?>
