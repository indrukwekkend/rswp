<?php if( is_single('kenniscentrum-mantelzorg') ): ?>

  <?php get_template_part('templates/header','page'); ?>

  <?php $args = array('post_type' => 'service'); ?>
  <?php $query = new wp_query( $args ); ?>
  <?php if($query->have_posts()): ?>

    <?php while( $query->have_posts() ) : ?>

      <?php $query->the_post(); ?>

      <?php require(locate_template('templates/content.php')); ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
  <?php endif; ?>

<?php else: ?>
  <?php while (have_posts()) : the_post(); ?>
    <section class="location-single">
      <div class="row mt-5 mb-4">

        <div class="col-8">

          <? the_content(); ?>

        </div>

        <div class="col-4">

          <?php get_template_part('templates/sections/parts/locations','address'); ?>

          <?php get_template_part('templates/sections/parts/openinghours'); ?>

          <?php get_template_part('templates/sections/parts/uploads','list'); ?>

        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
