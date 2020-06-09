<?php 
/**
* Template Name: Application Form E Brochure
*/
get_header(); ?>
<section class="content-application" style="background-image: url(<?= get_template_directory_uri(); ?>/images/bg-form.jpg);">
	<div class="container">
		<div class="content-application_box">
			<h1 class="heading">Application <span>Form</span></h1>
			<?php 
			$blue_title = rwmb_meta('prefix_brochure-blue_title');
			$white_title = rwmb_meta('prefix_brochure-white_title');
			$agree_text = rwmb_meta('prefix_brochure-agree_text');
			?>
			<div class="box__blue">
				<div class="text__blue">
					<?= $blue_title; ?>
				</div>

				<div class="text__white">
					<?= $white_title; ?>
				</div>

				<div class="form">
					<?= do_shortcode( '[contact-form-7 id="191" title="Application Form E-Brochure"]' ); ?>
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