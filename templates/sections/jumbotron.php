<?php 

$background = function($has_post_thumbnail){

    if($has_post_thumbnail):

        $url = get_the_post_thumbnail_url();

        return 'style="background-image: url('.$url.');"';

    endif;

    return;
}

?>

<section class="jumbotron m-0" <?= $background( has_post_thumbnail() ); ?>>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="jumbotron-heading">Jumbotron titel</h1>
				<p class="lead">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
				<p>
					<a href="#cta-1" class="btn btn-primary">CTA #1</a> <a href="#cta-2" class="btn btn-secondary">CTA #2</a>
				</p>
			</div>
		</div>
	</div>
</section>