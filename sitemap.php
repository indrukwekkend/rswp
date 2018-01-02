<?php

/*
 * Template Name: Sitemap
 */

?>
<h2 id="pages">Pagina's</h2>
<ul>
<?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '',
    'title_li' => '',
  )
);
?>
</ul>
