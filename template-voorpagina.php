<?php
/**
 * Template Name: Voorpagina Template
 * 
 * Omdat we dit template ook voor bijv. een contact pagina willen gebruiken.
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/header', 'frontpage'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
