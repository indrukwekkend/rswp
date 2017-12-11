
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


<section class="posts">

  <div class="row">

    <div class="col-12 py-4 text-center">

      <h1 class="display-4">
        <?php the_sub_field('title'); ?>
      </h1>

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



	            <div class="card col-12 col-md-6 col-lg mb-4">

	              <div class="card-body">

									<?php if( has_post_thumbnail() ):?>

										<img class="card-img-top border border-primary" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">

									<?php endif; ?>

	                <div class="card-title">
	                  <span><?php the_title(); ?></span>
	                </div>

	                <div class="card-subtitle text-muted my-1 mt-auto">
										<?php

										$post_object = get_field('location');
										$location = null;

										if( $post_object ):
											$post = $post_object;
											setup_postdata( $post );

											$location = get_the_title();

											wp_reset_postdata();
		 								endif;
										?>
	                  <small class="card-meta">
											<i class="fa fa-map-marker mr-1 text-secondary"></i><?= $location; ?>
											<i class="fa fa-clock-o text-secondary mx-1"></i><?= get_the_date( get_option( 'date_format' ) );?>
										</small>
	                </div>

	                <div class="card-text">
	                  <?php the_excerpt(); ?>
	                </div>

	              </div>

	              <div class="card-footer">
	                <a href="<?= get_post_permalink(); ?>" class="card-link btn btn-sm btn-outline-primary">Lees verder</a>
	              </div>

	            </div>



	        <?php endwhile;?>

      <?php wp_reset_postdata(); ?>

			</div>

		<?php endif;?>

  </div>

</section>
