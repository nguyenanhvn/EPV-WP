<?php 
/**
 * Template Name: Exibiting
 */
get_header();
global $des_options;
?>

<?php
if(is_page(162) || is_page(301)){
	echo do_shortcode( '[exhibit_menu]' );
}
if(is_page(165) || is_page(323)){
	echo do_shortcode( '[visiting_menu]' );
} ?>
<!-- Content Show Statistics -->
<section class="content-show">
	<div class="container">
		<div class="content-show_box">
			<h2 class="heading">Show <span>Statistics</span></h2>

			<div class="box__circle box__circle__number__animation">
				<div class="box__circle__dot">
					<img src="<?= get_template_directory_uri(); ?>/images/dot-start.png" alt="">
				</div>
				<ul class="no-style items">
					<li data-count="<?= $epv_options['area'];?>">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-01.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<span>0</span><sup>sqm</sup>
							</div>
							<div class="text">Exhibition Area</div>
						</div>
					</li>
					<li data-count="<?= $epv_options['no-of-exhibitors'];?>">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-02.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<span>0</span>+
							</div>
							<div class="text">No. of Exhibitors</div>
						</div>
					</li>
					<li data-count="<?= $epv_options['country-regions'];?>">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-03.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<span>0</span>
							</div>
							<div class="text">Countries/Regions</div>
						</div>
					</li>
					<li data-count="<?= $epv_options['group-pavillions'];?>">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-04.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<span>0</span>
							</div>
							<div class="text">Group Pavillions</div>
						</div>
					</li>
					<li data-count="<?= $epv_options['no-of-visitors'];?>">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-05.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<span>0</span>+
							</div>
							<div class="text">No. of Visitors</div>
						</div>
					</li>
				</ul>
				<div class="box__circle__dot">
					<img src="<?= get_template_directory_uri(); ?>/images/dot-end.png" alt="">
				</div>					
			</div>

			<div class="box__circle__ipad">
				<ul class="no-style items owl-carousel">
					<li class="child-1">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-01.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<?= $epv_options['area'];?><sup>sqm</sup>
							</div>
							<div class="text">Exhibition Area</div>
						</div>
					</li>
					<li class="child-2">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-02.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<?= $epv_options['no-of-exhibitors'];?>+
							</div>
							<div class="text">No. of Exhibitors</div>
						</div>
					</li>
					<li class="child-3">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-03.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<?= $epv_options['country-regions'];?>
							</div>
							<div class="text">Countries/Regions</div>
						</div>
					</li>
					<li class="child-4">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-04.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<?= $epv_options['group-pavillions'];?>
							</div>
							<div class="text">Group Pavillions</div>
						</div>
					</li>
					<li class="child-5">
						<div class="icon">
							<img src="<?= get_template_directory_uri(); ?>/images/icon-05.png" alt="">
						</div>
						<div class="paragraph">
							<div class="number">
								<?= $epv_options['no-of-visitors'];?>+
							</div>
							<div class="text">No. of Visitors</div>
						</div>
					</li>
				</ul>		
			</div>
		</div>
	</div>
</section> <!-- /Content Show Statistics -->

<!-- Content Why Exhibit -->
<section class="content-why">
	<div class="container">
		<div class="content-why_box">

			<div class="items">
				<div class="items__left">
					<?php
					$group_list = rwmb_meta('prefix_exhibit-group');
					$i = 0;
					?>
					<h2 class="heading">
						Why <span>Exhibit ?</span>
					</h2>
					<?php foreach ($group_list as $group_value): 
						if($i % 2 == 0):
							$imageID = isset( $group_value['prefix_exhibit-image'] ) ? $group_value['prefix_exhibit-image'] : '';
							$image = wp_get_attachment_image_url($imageID, 'full');
							$title = $group_value['prefix_exhibit-title'];
							$tag_title = $group_value['prefix_exhibit-tag_title'];
							$content = $group_value['prefix_exhibit-paragraph'];?>
							<div class="item" text="<?= $tag_title; ?>">
								<div class="item__number">0<?= $i+2; ?></div>
								<div class="item__box">
									<div class="item__img">
										<img src="<?= $image; ?>" alt="">
									</div>
									<div class="item__paragraph">
										<div class="item__heading dotdotdot">
											<span>												
												<?= $title; ?>
											</span>
										</div>
										<div class="item__text dotdotdot">
											<?= wpautop( $content ); ?>
										</div>
									</div>
								</div>
							</div>
						<?php endif;
						$i++;
					endforeach; ?>
				</div>
				<div class="items__right">
					<?php 
					$i = 0;
					foreach ($group_list as $group_value): 
						if($i % 2 != 0):
							$imageID = isset( $group_value['prefix_exhibit-image'] ) ? $group_value['prefix_exhibit-image'] : '';
							$image = wp_get_attachment_image_url($imageID, 'full');
							$title = $group_value['prefix_exhibit-title'];
							$tag_title = $group_value['prefix_exhibit-tag_title'];
							$content = $group_value['prefix_exhibit-paragraph'];
							?>
							<div class="item" text="<?= $tag_title; ?>">
								<div class="item__number">0<?= $i; ?></div>
								<div class="item__box">
									<div class="item__img">
										<img src="<?= $image; ?>" alt="">
									</div>
									<div class="item__paragraph">
										<div class="item__heading dotdotdot">
											<span>												
												<?= $title; ?>
											</span>
										</div>
										<div class="item__text dotdotdot">
											<?= wpautop( $content ); ?>
										</div>
									</div>
								</div>
							</div>
						<?php endif;
						$i++;
					endforeach; ?>
				</div>
			</div>
			<div class="items items__show__ipad">
				<div class="items__left">
					<h2 class="heading">
						Why <span>Exhibit ?</span>
					</h2>
					<?php 
					$i = 1;
					foreach ($group_list as $group_value):
						$imageID = isset( $group_value['prefix_exhibit-image'] ) ? $group_value['prefix_exhibit-image'] : '';
						$image = wp_get_attachment_image_url($imageID, 'full');
						$title = $group_value['prefix_exhibit-title'];
						$tag_title = $group_value['prefix_exhibit-tag_title'];
						$content = $group_value['prefix_exhibit-paragraph'];
						?>
						<div class="item" text="<?= $tag_title; ?>">
							<div class="item__number">0<?= $i; ?></div>
							<div class="item__box">
								<div class="item__img">
									<img src="<?= $image; ?>" alt="">
								</div>
								<div class="item__paragraph">
									<div class="item__heading dotdotdot">
										<span>												
											<?= $title; ?>
										</span>
									</div>
									<div class="item__text dotdotdot">
										<?= wpautop( $content ); ?>
									</div>
								</div>
							</div>
						</div>
						<?php $i++;
					endforeach; ?>
				</div>
			</div>

			<?= do_shortcode( '[ads_slide]' ); ?>
		</div>
	</div>
</section> <!-- /Content Why Exhibit -->

<!-- Content Catalogue -->
<section class="content-catalogue">
	<div class="content-catalogue_box">
		<div class="box__catalogue">
			<?php 
			$catalogue1_group = rwmb_meta('prefix_exhibit-catalogue_group_1');
			$catalogue1_imgID = isset( $catalogue1_group['prefix_exhibit-catalogue1_image'] ) ? $catalogue1_group['prefix_exhibit-catalogue1_image'] : '';
			$catalogue1_image = wp_get_attachment_image_url( $catalogue1_imgID, 'full' );
			$catalogue1_title = $catalogue1_group['prefix_exhibit-catalogue1_title'];
			$catalogue1_btn_text = $catalogue1_group['prefix_exhibit-catalogue1_btn_text'];
			$catalogue1_link = isset($catalogue1_group['prefix_exhibit-catalogue1_link']) ? $catalogue1_group['prefix_exhibit-catalogue1_link'] : "#";
			?>
			<div class="col__3" style="background-image: url(<?= $catalogue1_image; ?>);">
				<div class="col__3__box">
					<div class="heading">
						<span><?= $catalogue1_title; ?></span>
					</div>
					<div class="clearfix"></div>
					<div class="line"></div>
					<div class="clearfix"></div>
					<a href="<?= $catalogue1_link;?>" class="link" title=""><?= $catalogue1_btn_text; ?> →</a>
				</div>
			</div>
			<?php 
			$catalogue2_group = rwmb_meta('prefix_exhibit-catalogue_group_2');
			$catalogue2_title = $catalogue2_group['prefix_exhibit-catalogue2_title'];
			$catalogue2_des = $catalogue2_group['prefix_exhibit-catalogue2_des'];
			$catalogue2_btn_text1 = $catalogue2_group['prefix_exhibit-catalogue2_btn_text1'];
			$catalogue2_btn_text2 = $catalogue2_group['prefix_exhibit-catalogue2_btn_text2'];
			$catalogue2_link1 = isset($catalogue2_group['prefix_exhibit-catalogue2_link1']) ? $catalogue2_group['prefix_exhibit-catalogue2_link1'] : "#";
			$catalogue2_link2 = isset($catalogue2_group['prefix_exhibit-catalogue2_link2']) ? $catalogue2_group['prefix_exhibit-catalogue2_link2'] : "#";
			?>
			<div class="col__3 col__3__gray">
				<div class="col__3__box">
					<div class="heading">
						<span><?= $catalogue2_title; ?></span>
					</div>
					<div class="paragraph"><?= $catalogue2_des; ?></div>

					<a class="other__link" href="<?= $catalogue2_link1; ?>"><?= $catalogue2_btn_text1; ?></a>
					<a class="other__link" href="<?= $catalogue2_link2; ?>"><?= $catalogue2_btn_text2; ?></a>
				</div>
			</div>
			<?php 
			$catalogue3_group = rwmb_meta('prefix_exhibit-catalogue_group_3');
			$catalogue3_imgID = isset( $catalogue3_group['prefix_exhibit-catalogue3_image'] ) ? $catalogue3_group['prefix_exhibit-catalogue3_image'] : '';
			$catalogue3_image = wp_get_attachment_image_url( $catalogue1_imgID, 'full' );
			$catalogue3_title = $catalogue3_group['prefix_exhibit-catalogue3_title'];
			$catalogue3_btn_text = $catalogue3_group['prefix_exhibit-catalogue3_btn_text'];
			$catalogue3_link = isset($catalogue3_group['prefix_exhibit-catalogue3_link']) ? $catalogue3_group['prefix_exhibit-catalogue3_link'] : "#";
			?>
			<div class="col__3" style="background-image: url(<?= $catalogue1_image; ?>);">
				<div class="col__3__box">
					<div class="heading">
						<span><?= $catalogue3_title; ?></span>
					</div>
					<div class="line"></div>
					<a href="<?= $catalogue3_link; ?>" class="link" title=""><?= $catalogue3_btn_text; ?> →</a>
				</div>
			</div>
		</div>
		<div class="container">
			<?= do_shortcode( '[ads_slide]' ); ?>
		</div>
	</div>
</section> <!-- /Content Catalogue -->

<!-- Content Profiles -->
<section class="content-profile">
	<div class="container">
		<div class="content-profile_box">
			<h2 class="heading">Visitor <span>Profiles</span></h2>

			<div class="items">
				<?php 
				$visitor_group = rwmb_meta('prefix_exhibit-visitor_group');
				if ( ! empty( $visitor_group ) ):
					foreach ( $visitor_group as $visitor_value ):
						$visitor_id = isset( $visitor_value['prefix_exhibit-icon'] ) ? $visitor_value['prefix_exhibit-icon'] : '';
						$visitor_id_hover = isset( $visitor_value['prefix_exhibit-icon_hover'] ) ? $visitor_value['prefix_exhibit-icon_hover'] : '';
						$icon = wp_get_attachment_image_url( $visitor_id, 'full' );
						$icon_hover = wp_get_attachment_image_url( $visitor_id_hover, 'full' );
						$visitor_title = $visitor_value['prefix_exhibit-visitor_title'];
						?>
						<a class="item">
							<div class="item__box">
								<div class="item__icon">
									<img src="<?= $icon ?>" alt="">
									<img src="<?= $icon_hover; ?>" alt="">
								</div>
								<div class="item__name"><?= $visitor_title; ?></div>
							</div>
						</a>
					<?php endforeach;
				endif;
				?>
			</div>

			<div class="clearfix"></div>

			<a class="view__more" href="<?= site_url(); ?>/visitor-profiles">
				Discover Full List Of Visitor Profiles
			</a>
		</div>
	</div>
</section> <!-- /Content Profiles -->

<!-- Content Testimonials -->
<section class="content-testimonials">
	<div class="content-testimonials_top">
		<div class="container">
			<div class="content-testimonials_box">
				<h2 class="heading">Our Exhibitors' <span>Testimonials</span></h2>
				<div class="box__left">
					<div class="item__avatar__main">
						<?php 
						$testimonial_group = rwmb_meta('prefix_exhibit-testimonial_group');
						if ( ! empty( $testimonial_group ) ):
							foreach ( $testimonial_group as $testimonial_value ):
								$testimonial_id = isset( $testimonial_value['prefix_exhibit-testimonial_avt'] ) ? $testimonial_value['prefix_exhibit-testimonial_avt'] : '';
								$avt = wp_get_attachment_image_url( $testimonial_id, 'full' );
								?>
								<div class="item__img">								
									<img src="<?= $avt; ?>" alt="">
								</div>						
								<?php 
							endforeach;
						endif;?>
					</div>
				</div>

				<div class="box__right">
					<h2 class="heading">Our Exhibitors' <span>Testimonials</span></h2>

					<div class="item__reviews">
						<?php
						$testimonial_group = rwmb_meta('prefix_exhibit-testimonial_group');
						if ( ! empty( $testimonial_group ) ):
							foreach ( $testimonial_group as $testimonial_value ):
								$testimonial_title = $testimonial_value['prefix_exhibit-testimonial_title'];
								$testimonial_pos = $testimonial_value['prefix_exhibit-testimonial_pos'];
								$testimonial_info = $testimonial_value['prefix_exhibit-testimonial_paragraph'];?>
								<div class="item__review">
									<div class="item__comment">
										<?= wpautop( $testimonial_info ); ?>									
									</div>
									<div class="item__info">
										<div class="item__name"><?= $testimonial_title; ?></div>
										<div class="item__position"><?= $testimonial_pos; ?></div>
									</div>
								</div>
							<?php endforeach;
						endif;?>
					</div>

					<div class="item__avatar__child">
						<?php $testimonial_group = rwmb_meta('prefix_exhibit-testimonial_group');
						if ( ! empty( $testimonial_group ) ):
							foreach ( $testimonial_group as $testimonial_value ):
								$testimonial_id = isset( $testimonial_value['prefix_exhibit-testimonial_avt'] ) ? $testimonial_value['prefix_exhibit-testimonial_avt'] : '';
								$avt = wp_get_attachment_image_url( $testimonial_id, 'full' );
								?>
								<div class="item__img">								
									<img src="<?= $avt; ?>" alt="">
								</div>						
								<?php 
							endforeach;
						endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-testimonials_bottom">
		<div class="container">		
			<?= do_shortcode( '[ads_slide]' ); ?>
		</div>
	</div>
</section> <!-- /Content Testimonials -->

<!-- Content Upcoming -->
<section class="content-upcoming">
	<div class="content-upcoming_top">
		<div class="container">
			<div class="content-upcoming_box">
				<div class="box__top">
					<h2 class="heading">Upcoming <span>Events</span></h2>

					<a class="view__all" href="<?= site_url();?>/new-media/event-news/">
						View All Events
					</a>
				</div>

				<div class="box__bottom" text="EVENT FEATURES">
					<?php 
					global $post;
					$post = get_post($epv_options['event-main-post']);
					setup_postdata($post); 
					$locate = rwmb_meta('prefix_event-locate');?>
					<div class="item__main">
						<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
							<img src="<?php the_post_thumbnail_url('685x480'); ?>" alt="">
						</div>
						<div class="item__caption">
							<h3 class="item__heading">
								<a href="<?php the_permalink(); ?>" title="">
									<?php the_title(); ?>
								</a>
							</h3>

							<div class="item__location">
								<?= $locate; ?>
							</div>
						</div>

						<div class="item__date">
							<strong><?= get_the_date('m-d'); ?></strong>
							<span><?= get_the_date('m/Y'); ?></span>
						</div>
					</div>
					<?php wp_reset_postdata();?>
					<div class="items">
						<?php $event_other = $epv_options['event-other-post'];
						foreach ($event_other as $event_value):
							global $post;
							$post = get_post($event_value);
							setup_postdata($post); 
							$locate = rwmb_meta('prefix_event-locate');?>
							<div class="item">
								<a href="<?php the_permalink(); ?>" class="item__img">
									<img src="<?php the_post_thumbnail_url('100x100'); ?>" alt="">
								</a>
								<div class="item__caption">
									<h3 class="item__heading">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>

									<div class="item__info">
										<?= get_the_date('d F, Y'); ?> | <?= $locate; ?>
									</div>

									<a class="item__more">Learn more <span>→</span></a>
								</div>
							</div>
							<?php wp_reset_postdata();
						endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-upcoming_bottom">
		<div class="container">
			<?= do_shortcode( '[ads_slide]' ); ?>
		</div>
	</div>
</section> <!-- /Content Upcoming -->
<?php get_footer(); ?>