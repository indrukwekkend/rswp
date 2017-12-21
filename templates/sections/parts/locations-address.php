<?php
$name = get_field('name');
$phone = get_field('phone');
$address = get_field('street') . " " . get_field('housenumber');
$postal = get_field('postalcode') ." ". get_field('location');
$email = get_field('email');
?>
<?php if($name && $phone && $address && $postal && $email): ?>
	<section class="address">
		<h1>RSWP <?php the_title(); ?></h1>
		<div><?= $name; ?></div>
		<div>Tel.: <?= $phone; ?></div>
		<div><?= $address; ?></div>
		<div><?= $postal; ?></div>
		<div><?= $email; ?></div>
		<?php if(get_field('forum_url')): ?>
				<a class="btn btn-primary mt-3 text-script" href="<?php the_field('forum_url'); ?>"><i>RSWP <? the_title(); ?> Forum</i></a>
		<?php endif; ?>
	</section>
<?php endif; ?>
