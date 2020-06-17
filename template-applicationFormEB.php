<?php 
/**
* Template Name: Application Form E Brochure
*/
get_header(); ?>
<section class="content-application" style="background-image: url(<?= get_template_directory_uri(); ?>/images/bg-form.jpg);">
	<div class="container">
		<div class="content-application_box">
			<?php 
			$blue = rwmb_meta('prefix_appEBrochure-blue_heading');
			$white = rwmb_meta('prefix_appEBrochure-white_heading');
			$blue_title = rwmb_meta('prefix_appEBrochure-blue_title');
			$white_title = rwmb_meta('prefix_appEBrochure-white_title');
			$shortcode = rwmb_meta('prefix_appEBrochure-shortcode');
			$agree_text = rwmb_meta('prefix_appEBrochure-agree_text');
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

<script>
	jQuery(document).ready(function($) {	        
        $('.selectbox__radio input').each(function(key, val) {
            bookType = getUrlParameter('type');
            if ($(this).val() == bookType) {
                $(this).addClass('nf-checked');
                $(this).trigger('click');
            }
        });
	});
	function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    };
</script>
<?php get_footer(); ?>