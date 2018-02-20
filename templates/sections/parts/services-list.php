<?php if( is_singular('location') ) : ?>
  <section class="container services">
    <div class="row py-4">
      <div class="col-12 text-center">
        <h1><?php the_field('service_title'); ?></h1>
        <p><?php the_field('service_lead'); ?></p>
      </div>
    </div>

    <?php $post_objects = get_field('location_service'); ?>
    <?php if( $post_objects ): ?>
      <?php $i = 0; ?>
      <div class="row">
        <?php foreach( $post_objects as $post): $i++; ?>

          <?php if($i <= 9 ): ?>

            <?php setup_postdata($post); ?>

            <?php get_template_part('templates/sections/parts/services'); ?>

          <?php endif; ?>

        <?php endforeach; ?>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php endif;?>

    <div class="row pb-4">
      <div class="col-12 text-center my-2">
        <a class="btn btn-radius btn-primary px-4" href="/services">BEKIJK ALLE DIENSTEN VAN RSWP</a>
      </div>
    </div>
  </section>
<?php endif;?>

<?php if( is_singular('service') ) : ?>
  <section class="container services">
    <div class="row py-4">
      <div class="col-12 text-center">
        <h1><?php the_field('service_title'); ?></h1>
        <p><?php the_field('service_lead'); ?></p>
      </div>
    </div>

    <?php $args = array('post_type' => 'service', 'posts_per_page' => 9,'meta_key' => 'knowledgeitem', 'meta_value'	=> 'service'); ?>
    <?php $query = new wp_query( $args ); ?>
    <?php if($query->have_posts()): ?>
      <div class="row">
        <?php while( $query->have_posts() ) : ?>

          <?php $query->the_post(); ?>

          <?php get_template_part('templates/sections/parts/services'); ?>

        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php wp_reset_query(); ?>
    <?php endif; ?>

    <div class="row pb-4">
      <div class="col-12 text-center my-2">
        <a class="btn btn-radius btn-primary px-4" href="/services">BEKIJK ALLE DIENSTEN VAN RSWP</a>
      </div>
    </div>
  </section>
<?php endif;?>
