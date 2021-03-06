<?php 
/**
 * Template Name: E-Brochures
 */
get_header();
global $des_options;
?>
<!-- Content Book A Stand -->
<section class="content-book">
	<div class="container">
		<div class="content-book_box">
			<?php 
				$blue = rwmb_meta('prefix_eBrochureListing-blue_heading');
				$white = rwmb_meta('prefix_eBrochureListing-white_heading');
				$url = rwmb_meta('prefix_eBrochureListing-url');
				$text = rwmb_meta('prefix_eBrochureListing-text');
			?>
			<h1 class="heading"><?= $white; ?> <span><?= $blue; ?></span></h1>
			<div class="items book__slider owl-carousel">
				<?php 
				$args = array(
					'post_type' => "e-brochures",
				);
				$query = new WP_Query($args);
				if($query->have_posts()):
					while($query->have_posts()): $query->the_post();
						$content = rwmb_meta('prefix_brochure-paragraph');
						?>
						<div class="item">
							<div class="item__img">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="item__caption">
								<div class="item__name"><?php the_title(); ?></div>

								<div class="item__info">
									<div class="item__rate">
										<?= wpautop( $content ); ?>
									</div>
									<a href="<?= $url ?>?type=<?php the_title(); ?>" class="item__book">
										<?= $text ?>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				endif; ?>
			</div>
		</div>
	</div>
</section> <!-- /Content Book A Stand -->
<?php get_footer(); ?>