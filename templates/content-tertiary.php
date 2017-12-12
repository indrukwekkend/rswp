<?php if(get_field('secondary_title') && get_field('secondary_content')): ?>
	<section class="container content">
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h6><? the_field('secondary_title'); ?></h6>
				<? the_field('secondary_content'); ?>
			</div>
		</div>
	</section>
<?php endif;?>
