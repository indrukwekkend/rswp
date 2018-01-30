<section class="index">

  <?php get_template_part('templates/header', 'page'); ?>

  <?php if (!have_posts()) : ?>

    <div class="alert alert-warning" role="warning">

      <?php _e('Helaas, er zijn (nog) geen berichten om te lezen :(', 'sage'); ?>

    </div>

    <?php get_search_form(); ?>

  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/content', get_post_type() ? get_post_type() : get_post_format()); ?>

  <?php endwhile; ?>

  <div class="row py-4">
    <div class="col-6 text-left">
      <?php echo get_previous_posts_link(); ?>
    </div>
    <div class="col-6 text-right">
      <?php echo get_next_posts_link(); ?>
    </div>
  </div>

</section>
