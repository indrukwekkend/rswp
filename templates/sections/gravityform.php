<?php
$form_id = get_sub_field('form_id');
?>
<?php if($form_id > 0): ?>

	<section class="container gravityform">

		<div class="row py-3 justify-content-center">

			<div class="col-8">

				<?= do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false"]'); ?>

			</div>

		</div>

	</section>

<?php endif; ?>
