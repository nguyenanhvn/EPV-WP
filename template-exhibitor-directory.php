<?php 
/**
 * Template Name: Exibitor Directory
 */
get_header();
global $des_options;
?>
<?php 
if(is_page(195) || is_page(203)){
	echo do_shortcode( '[needtoknow_menu]' );
}
if(is_page(201) || is_page(199)){
	echo do_shortcode( '[exhibit_menu]' );
}
if(is_page(197) || is_page(174)){
	echo do_shortcode( '[visiting_menu]' );
}
?>
<section class="content-breadcrumb">
	<div class="container">
		<?= custom_breadcrumbs(); ?>
	</div>
</section> <!-- /Content Breadcrumb -->

<!-- Content Exhibitor -->
<section class="content-exhibitor">
	<div class="container">
		<div class="content-exhibitor_box">
			<div class="content__detail">
				<!-- <h1 class="content__detail__heading"><?php the_title(); ?></h1> -->

				<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="content__detail__img">

				<div class="content__detail__paragraph">
					<?php the_content(); ?>
				</div>

					<?php 
					$post_tags = get_the_tags();
					if ( $post_tags ) :?>
					<div class="content__detail__bottom">
						<div class="content__detail__tags">
							<span>Tags:</span>
							<ul class="no-style">
								<?php
								foreach( $post_tags as $tag ) {
									echo '<li><a href="'.get_tag_link($tag->term_taxonomy_id).'" title="">'.$tag->name.'</a></li>'; 
								}
								?>
							</ul>
						</div>
					</div>
					<?php endif;?>
			</div>

			<div class="content__sidebar">
				<div class="content__widget">
					<h3>Latest Brochure</h3>
					<ul class="content__widget__download">
						<?php 
						global $post;
						$brochureList = $epv_options['ebrochure-post'];
						foreach ($brochureList as $brochureValue):
							$post = get_post($brochureValue);
							setup_postdata($post);  
							?>
							<li>                        
								<div class="thumbnail">
									<a>
										<img src="<?php the_post_thumbnail_url(); ?>">
									</a>
								</div>

								<div class="widget_recent_entry">	             			
									<h4 class="title-post">
										<a rel="bookmark" title="">
											<?php the_title(); ?>
										</a>
									</h4>
									<!-- <div class="download">
										PDF file - 12Mb
									</div> -->
								</div>
							</li>
						<?php endforeach; ?>
					</ul>

					<a class="more" href="<?= site_url(); ?>/e-brochures">
						Download More Brochures
					</a>
				</div>

				<div class="content__ads">
					<div class="ads__slider owl-carousel">
						<?php if ( isset( $epv_options['sidebar-ads'] ) && !empty( $epv_options['sidebar-ads'] ) ) {
							for ($i = 0; $i < count($epv_options['sidebar-ads']); $i++) {?>
								<a href="<?= ($epv_options['sidebar-ads'][$i]['url'] != '') ? $epv_options['sidebar-ads'][$i]['url'] : '#'; ?>" title="" target="_blank">
									<img src="<?= $epv_options['sidebar-ads'][$i]['image'];?>" alt="">
								</a>
							<?php }
						} ?>
					</div>
					<!-- <span>ADVERTISING</span> -->
				</div>
			</div>
		</div>
	</div>
</section> <!-- /Content Exhibitor -->
<?php get_footer(); ?>