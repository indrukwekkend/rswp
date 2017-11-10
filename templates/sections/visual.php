<?php 

$image = get_sub_field('image');
$size = 'large';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
$title = $image['title'];
$alt = $image['alt'];

$background = 'style="background-image:url('.$thumb.');"';
?>
<section class="container-fluid visual" <?= $background; ?>>
	<div class="row">
		<div class="col-12">
			<!-- Hier kan eventueel nog content komen -->
		</div>
	</div>
</section>