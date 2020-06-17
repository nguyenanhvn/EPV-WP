<?php 
/**
 * Template Name: Event Features
 */
get_header();
global $des_options;
echo do_shortcode( '[visiting_menu]' );
?>

<!-- Content News Style 1 -->
<section class="content-news-style1">
	<div class="container">
		<div class="content-news_box">			
			<h2 class="heading">									
				<?php 
					$white__title = rwmb_meta('prefix_features-1st_black_heading');
					$blue__title = rwmb_meta('prefix_features-1st_blue_heading');
					echo $blue__title;
					?> <span><?= $white__title; ?></span>
			</h2>
			<?php 
				$link = rwmb_meta('prefix_features-1st_link_button');
				$text = rwmb_meta('prefix_features-1st_text_button');
			?>
			<a class="view__all" href="<?= $link ?>">
				<?= $text ?>
			</a>

			<div class="clearfix"></div>
			<?php
			$cat = rwmb_meta('prefix_features-1st_taxonomy');
			$args = array(
				'post_type'	=> 'post',
				'cat'		=> $cat,
				'posts_per_page' => 12,
			);
			wp_reset_query();
			$query = new WP_Query($args);
			if($query->have_posts()):
				?>
				<div class="items industry-slide owl-carousel">
					<?php while($query->have_posts()): $query->the_post(); ?>
						<?php 
							$day = rwmb_meta('prefix_event-time_day'); 
							$text = rwmb_meta('prefix_event-time_my_text'); 
						?>
						<div class="item">
							<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url('270x350'); ?>);">
								<img src="<?php the_post_thumbnail_url('270x350'); ?>" alt="">
							</div>
							<div class="item__box">
								<div class="item__date">
									<strong><?= $day ?></strong> <span><?= $text ?></span>
								</div>
								<div class="item__caption">
									<h3 class="item__heading">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="item__paragraph">
										<?= excerpt(13) ?>
									</div>

									<a href="<?php the_permalink(); ?>" class="item__more">
										<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section> <!-- /Content News Style 1 -->

<?php 
	$hide = rwmb_meta('prefix_features-hide_2nd');
	if ($hide === '0'){ ?>
<!-- Content News Style 2 -->
<section class="content-news-style2">
	<div class="container">
		<div class="content-news_box">					
			<h2 class="heading">									
				<?php 
					$white__title = rwmb_meta('prefix_features-2nd_black_heading');
					$blue__title = rwmb_meta('prefix_features-2nd_blue_heading');
					echo $blue__title;
					?> <span><?= $white__title; ?></span>
			</h2>
			<?php
			$cat = rwmb_meta('prefix_features-2nd_taxonomy');
			$args = array(
				'post_type'	=> 'post',
				'cat'		=> $cat,
				'orderby'	=> 'date',
			);
			wp_reset_query();
			$query = new WP_Query($args);
			if($query->have_posts()):
				?>
				<div class="news__style2__item">
					<div class="item__right">
						<?php while($query->have_posts()): $query->the_post(); ?>
							<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url('485x530'); ?>);">
								<img src="<?php the_post_thumbnail_url('485x530'); ?>" alt="">
							</div>
						<?php endwhile; ?>
					</div>

					<div class="item__left">
						<?php while($query->have_posts()): $query->the_post();?>
							<div class="item__box">
								<h3 class="item__heading">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
								<div class="item__date"><?= get_the_date('d/m/Y'); ?></div>
								<div class="item__paragraph">
									<?= excerpt(22); ?>
								</div>

								<a href="<?php the_permalink(); ?>" class="item__more">
									<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
								</a>
							</div>
						<?php endwhile; ?>
					</div>

					<div class="item__bottom">
						<?php 
						$args_next = array(
							'post_type'	=> 'post',
							'cat'		=> $cat,
							'orderby'	=> 'date',
							'offset'	=> 1,
						);
						wp_reset_query();
						$query = new WP_Query($args_next);
						if($query->have_posts()):
							while($query->have_posts()): $query->the_post(); ?>
								<div class="item__news">
									<div class="item__news__img" style="background-image: url(<?php the_post_thumbnail_url('100x80'); ?>);">
										<img src="<?php the_post_thumbnail_url('100x80'); ?>" alt="">
									</div>
									<div class="item__news__caption">
										<div class="item__news__status"><?= changeLang('Next','Tiếp theo'); ?></div>

										<div class="item__news__heading dotdotdot">
											<?php the_title(); ?>
										</div>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section> <!-- /Content News Style 2 -->
<?php } ?>

<?php 
	$hide1 = rwmb_meta('prefix_features-hide_3rd');
	if ($hide1 === '0'){ ?>
<!-- Content News Style 3 -->
<section class="content-news-style3">
	<div class="container">
		<div class="content-news_box">		
			<div class="box__left">	
				<h2 class="heading">									
					<?php 
						$white__title = rwmb_meta('prefix_features-3rd_white_heading');
						$blue__title = rwmb_meta('prefix_features-3rd_blue_heading');
						echo $blue__title;
						?> <span><?= $white__title; ?></span>
				</h2>
				<div class="paragraph">
					<?php
						$text = rwmb_meta('prefix_features-3rd_text');
						echo $text;
					?>
				</div>

				<?php 
					$link = rwmb_meta('prefix_features-3rd_link_button');
					$text = rwmb_meta('prefix_features-3rd_text_button');
				?>
				<a class="view__more" href="<?= $link ?>">
					<?= $text ?>
				</a>
			</div>
			<div class="box__right">
			<?php
			$cat = rwmb_meta('prefix_features-3rd_taxonomy');
			$args = array(
				'post_type'	=> 'post',
				'cat'		=> $cat,
				'posts_per_page'	=> 12,
			);
			wp_reset_postdata();
			$query = new WP_Query($args);
			if($query->have_posts()):
				?>
					<div class="news__slider owl-carousel">
						<?php while($query->have_posts()): $query->the_post(); ?>
							<div class="item">
								<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url('270x180');?>);">
									<img src="<?php the_post_thumbnail_url('270x180');?>" alt="">
								</div>
								<div class="item__caption">
									<h3 class="item__heading">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="item__date"><?= get_the_date('d/m/Y'); ?></div>
									<div class="item__paragraph">
										<?= excerpt(13); ?>
									</div>

									<a href="<?php the_permalink(); ?>" class="item__more">
										<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
									</a>
								</div>
							</div>
							<?php wp_reset_postdata();
						endwhile; ?>
					</div>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section> <!-- /Content News Style 3 -->
<?php } ?>

<!-- Content Media -->
<section class="content-media">
	<div class="container">
		<div class="content-media_box">			
			<div class="box__ads">
				<?php 
					$ads = rwmb_meta('prefix_features-media_ads');
					if ( ! empty( $ads ) ): ?>
						<div class="ads__slider owl-carousel">
						<?php foreach ( $ads as $ads__item ):
							$image = isset( $ads__item['prefix_features-image'] ) ? $ads__item['prefix_features-image'] : '';
							$icon = wp_get_attachment_image_url( $image, 'full' );
							$link = $ads__item['prefix_features-link'];
							?>
							<a href="<?= $link; ?>" title="" target="_blank">
								<img src="<?= $icon ?>" alt="">
							</a>	
						<?php endforeach; ?>
						</div>
						<!-- <span>ADVERTISING</span> -->
					<?php endif; ?>				
			</div>

			<div class="box__media">			
				<h2 class="heading">									
					<?php 
						$white__title = rwmb_meta('prefix_features-media_heading_white');
						$blue__title = rwmb_meta('prefix_features-media_heading_blue');
						echo $white__title;
						?> <span><?= $blue__title; ?></span>
				</h2>
				<div class="media__slider owl-carousel">
					<?php 
					$args = array(
						'post_type' => 'partner',
					);
					wp_reset_query();
					$query = new WP_Query($args);
					if($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post();
							$partner_group = rwmb_meta('prefix_partner_group',get_the_ID());
							foreach ($partner_group as $partner_value):
								$partnerID = $partner_value['prefix_partner_image'];
								$partner_image = wp_get_attachment_image_url( $partnerID, 'full' );
								$partnerURL = isset($partner_value['prefix_partner_logo_url']) ? $partner_value['prefix_partner_logo_url'] : "#";
								?>
								<a class="item" href="<?= $partnerURL; ?>" target="_blank">
									<img src="<?= $partner_image; ?>" alt="">
								</a>
							<?php endforeach;
						endwhile;
						wp_reset_postdata();
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</section> <!-- /Content Media -->

<?php 
	$hide2 = rwmb_meta('prefix_features-hide_registration');
	if ($hide2 === '0'){ ?>
<section class="content-press" style="background-image: url(<?= get_template_directory_uri(); ?>/images/bg-1.jpg);">
	<div class="container">
		<div class="content-press_box">
			<div class="box__left">
				<h2 class="heading">									
					<?php 
						$white__title = rwmb_meta('prefix_features-registration_heading_white');
						$blue__title = rwmb_meta('prefix_features-registration_heading_blue');
						echo $white__title;
						?> <span><?= $blue__title; ?></span>
				</h2>

				<div class="paragraph">								
					<?php 
						$text = rwmb_meta('prefix_features-registration_text');
						echo $text;
					?>
				</div>
			</div>

			<div class="box__right">						
				<?php 
					$form = rwmb_meta('prefix_features-registration_form');
				?>
				<?= do_shortcode( $form ); ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php get_footer(); ?>