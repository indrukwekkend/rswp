<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-config.php");
$wp->init(); $wp->parse_request(); $wp->query_posts();
$locatie = isset($_POST["locatie"]) ? $_POST["locatie"] : "";
$args = array(
	'post_type' => 'location',
	'name' => $locatie,
);
$the_query = new WP_Query( $args );
$arr = array();
if ( $the_query->have_posts() ):

	$arr['Kies Dienst'] = '';

	while ( $the_query->have_posts()):

		$the_query->the_post();
		$post_objects = get_field('location_service');

		if( $post_objects ):

			foreach( $post_objects as $post):

				setup_postdata($post);

				$arr[get_the_title()] = $post->post_name;

			endforeach;

		endif;

	endwhile;

endif;

// Echo the generated JSON
echo json_encode($arr);
