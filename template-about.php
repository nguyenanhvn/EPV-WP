<?php 
/**
 * Template Name: Contact
 */
get_header();
global $des_options;
?>
<?php 
	$shortcode = rwmb_meta('prefix_about_shortcode');
	if ($shortcode) {		
		echo do_shortcode('[' .$shortcode. ']');
	}
?>
<!-- Content Breadcrumb -->
<section class="content-breadcrumb">
	<div class="container">
		<?= custom_breadcrumbs();?>
	</div>
</section> <!-- /Content Breadcrumb -->

<!-- Content About -->
<section class="content-about">
	<div class="container">
		<div class="content-about_box">
			<div class="box__left">
				<h1 class="heading">
					<?php 
					$top_head_title = rwmb_meta('prefix_about_top_head_title');
					$bot_head_title = rwmb_meta('prefix_about_bot_head_title');
					echo $top_head_title;
					?> <span><?= $bot_head_title; ?></span>
				</h1>

				<div class="paragraph">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="box__right">
				<div class="accordions">
					<?php 
					$collapse_group = rwmb_meta('prefix_about_group');
					$i = 0;
					foreach ($collapse_group as $collapse_value):
						$collapseID = $collapse_value['prefix_about_image'];
						$collapse_image = wp_get_attachment_image_url( $collapseID, 'full' );
						$collapseTitle = $collapse_value['prefix_about_title'];
						$collapseContent = $collapse_value['prefix_about_paragraph'];?>
						<div class="accordion">
							<div class="title__accordion has__bg collapsed" data-toggle="collapse" data-target="#data-<?= $i; ?>" aria-expanded="true" style="background-image: url(<?= $collapse_image; ?>);">
								<span>										
									<?= $collapseTitle; ?>
								</span>
							</div>
							<div class="content__accordion collapse" id="data-<?= $i;?>" aria-expanded="true">
								<div class="content__accordion__box">
									<?= do_shortcode( wpautop($collapseContent) ); ?>
								</div>
							</div>
						</div>
						<?php 
						$i++;
					endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section> <!-- /Content About -->
<?php get_footer(); ?>