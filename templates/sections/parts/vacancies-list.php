<h5><i class="fa fa-user text-primary"></i> VACATURES</h5>

<?php if( is_singular('location') ): ?>

  <?php $post_objects = get_field('location_vacancy'); ?>
  <?php if( $post_objects ): ?>
    <?php $i = 0; ?>
    <ul class="list-unstyled vacancies-list">
      <?php foreach( $post_objects as $post): $i++; ?>

          <?php setup_postdata($post); ?>
          <li class="py-2">
            <a href="<?= get_the_permalink(); ?>"/><b class="text-primary"><?php the_title(); ?></b></a>
          </li>

      <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
  <?php endif;?>

<?php else: ?>

  <?php $args = array('post_type' => 'vacancy'); ?>
  <?php $query = new wp_query( $args ); ?>
  <?php if($query->have_posts()): ?>
  	<ul class="list-unstyled vacancies-list">
  		<?php while( $query->have_posts() ) : ?>

  		<?php $query->the_post(); ?>
  		<li class="py-2">
  			<a href="<?= get_the_permalink(); ?>"/><b class="text-primary"><?php the_title(); ?></b></a>
  		</li>

  		<?php endwhile; ?>
  	</ul>
  	<?php wp_reset_postdata(); ?>
  	<?php wp_reset_query(); ?>
  <?php endif; ?>

<?php endif; ?>
