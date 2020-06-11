<?php 
/**
* Template Name: Application Form Book A Stand
*/
get_header(); ?>
<section class="content-application" style="background-image: url(<?= get_template_directory_uri(); ?>/images/bg-form.jpg);">
	<div class="container">
		<div class="content-application_box">
			<?php 
			$blue = rwmb_meta('prefix_appBookAStand-blue_heading');
			$white = rwmb_meta('prefix_appBookAStand-white_heading');
			$blue_title = rwmb_meta('prefix_appBookAStand-blue_title');
			$white_title = rwmb_meta('prefix_appBookAStand-white_title');
			$shortcode = rwmb_meta('prefix_appBookAStand-shortcode');
			$agree_text = rwmb_meta('prefix_appBookAStand-agree_text');
			?>
			<h1 class="heading"><?= $white; ?> <span><?= $blue; ?></span></h1>
			<div class="box__blue">
				<div class="text__blue">
					<?= $blue_title; ?>
				</div>

				<div class="text__white">
					<?= $white_title; ?>
				</div>

				<div class="form">
					<?= do_shortcode( $shortcode ); ?>
					<div class="group">
						<div class="noted">
							<?= wpautop( $agree_text ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>