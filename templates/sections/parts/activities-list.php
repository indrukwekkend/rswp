<h5><i class="fa fa-calendar text-primary"></i> ACTIVITEITEN</h5>

<?php if( is_singular('location') ): ?>

  <?php $post_objects = get_field('location_activity'); ?>
  
  <?php if( $post_objects ): ?>
          
      <?php // alle id's in die gekoppeld zijn in een Array
      foreach( $post_objects as $post): ?>
  
	  	<?php $post_ids[] = $post->ID; ?>
  	
	  <?php endforeach; ?>
	  <?php wp_reset_postdata(); ?>
	  <?php wp_reset_query(); ?>
			  
		<?php // alle id's ophalen als posts in de volgorde van de datum tijd die is ingevoerd:
	      
		  $args = array('post_type' => 'activity', 
		  				'post__in' => $post_ids,
		  				'order'				=> 'ASC',
		  				'orderby'			=> 'meta_value',
		  				'meta_key'			=> 'datum_en_tijd',
		  				'meta_type'			=> 'DATETIME'
					
		  				);
		?>
		<?php $the_query = new WP_Query( $args ); ?>	
			
		<?php if ( $the_query->have_posts() ) : ?>
		
		
		 <ul class="list-unstyled activities-list">
		
		    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    	
				<li class="py-2">
		          <div><?php the_field('datum_en_tijd'); ?></div>
		          <div><a href="<?= get_the_permalink(); ?>"/><b class="text-primary"><?php the_title(); ?></b></a></div>
		        </li>
			<?php endwhile; ?>
		    			
		<?php wp_reset_postdata(); ?>
		<?php wp_reset_query(); ?>
		    </ul>
		<?php endif; ?>	  
  
  
  <?php else: ?>  
    <p>Er zijn op dit moment geen activiteiten gepland </p>
  <?php endif;?>
  

<?php else: ?>

  <?php $args = array(	'post_type' => 'activity',
	  					'order'				=> 'ASC',
		  				'orderby'			=> 'meta_value',
		  				'meta_key'			=> 'datum_en_tijd',
		  				'meta_type'			=> 'DATETIME'
	  ); ?>
  <?php $query = new wp_query( $args ); ?>
  <?php if($query->have_posts()): ?>
    <ul class="list-unstyled activities-list">
      <?php while( $query->have_posts() ) : ?>

        <?php $query->the_post(); ?>
        <li class="py-2">
          <div><?php the_field('datum_en_tijd'); ?></div>
          <div><a href="<?= get_the_permalink(); ?>"/><b class="text-primary"><?php the_title(); ?></b></a></div>
        </li>

      <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>

  <?php endif; ?>

<?php endif; ?>