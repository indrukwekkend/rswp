
<?php
$lead = get_sub_field('lead');
$taxonomy = get_sub_field('taxonomy');
$aantal = get_sub_field('amount');

$args = array(
  'posts_per_page' =>  $aantal,
  'tax_query' => array(
    'relation' => 'AND',
      array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => array( $taxonomy )
      )
    )
  );

$the_query = new WP_Query( $args );
?>


<section class="container posts">

  <div class="row">

    <div class="col-12 pt-4 text-center">

      <h2>
        <?php the_sub_field('title'); ?>
      </h2>

      <p class="lead">
        <?php the_sub_field('lead'); ?>
      </p>

    </div>

  </div>

  <div class="row">

    <?php if ( $the_query->have_posts() ): ?>

			<div class="card-group">

			  <?php while ( $the_query->have_posts() ): ?>

	        <?php $the_query->the_post(); ?>

					<?php get_template_part('templates/content'); ?>

	        <?php endwhile;?>

      <?php wp_reset_postdata(); ?>

			</div>

		<?php endif;?>

  </div>

</section>
