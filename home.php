<div class="row py-5">
  <?php $args = array('post_type' => 'post' );?>
  <?php $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ): ?>


    <?php while ( $the_query->have_posts() ): ?>

      <div class="col-3">
        <div class="row">
          <?php $the_query->the_post(); ?>

          <?php get_template_part('templates/content'); ?>
        </div>
      </div>

    <?php endwhile;?>

    <?php wp_reset_postdata(); ?>


  <?php endif;?>
</div>
