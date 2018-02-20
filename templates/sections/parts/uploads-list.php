<section class="upload-list mt-3">

  <?php if( have_rows('forms') ): ?>

    <h1>Formulieren</h1>

    <ul class="list-unstyled">
      <?php while ( have_rows('forms') ) : the_row(); ?>

        <?php if( get_sub_field('url') ): ?>
          <li><i class="fa fa-globe text-primary mr-2"></i><a href="<? the_sub_field('url'); ?>" target="_blank"><? the_sub_field('title'); ?></a></li>
        <?php else: ?>
          <?php if( get_sub_field('file') ): ?>
            <li><i class="fa fa-file-pdf-o text-primary mr-2"></i><a href="<? the_sub_field('file'); ?>" target="_blank"><? the_sub_field('title'); ?></a></li>
          <?php endif; ?>
        <?php endif; ?>

      <?php endwhile; ?>
    </ul>

  <?php endif; ?>

</section>
