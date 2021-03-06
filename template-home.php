<?php 
/**
 * Template Name: Home Page
 */
get_header();
global $epv_options; ?>
<!-- Content Banner -->
<div class="content-banner-slide owl-carousel">
	<?php 
	$p = (pll_current_language() == 'en') ? 14 : 23;
	$args = array(
		'post_type' => 'slider',
		'p' => $p,
	);
	wp_reset_query();
	$query = new WP_Query($args);
	if($query->have_posts()):
		while($query->have_posts()):
			$query->the_post();
			$slide_group = rwmb_meta( 'prefix_slider_group' );
			if ( ! empty( $slide_group ) ):
				foreach ( $slide_group as $slide_value ):
					$image_id = isset( $slide_value['prefix_slider_image'] ) ? $slide_value['prefix_slider_image'] : '';
					$image_mainlogo_id = isset( $slide_value['prefix_slider_main_logo'] ) ? $slide_value['prefix_slider_main_logo'] : '';
					$image = wp_get_attachment_image_url( $image_id, 'full' );
					$mainlogo_image = wp_get_attachment_image_url( $image_mainlogo_id, 'full' );
					$logo_group = $slide_value['prefix_slider_logo_group'];
					$banner_start = $slide_value['prefix_slider_banner_start'];
					$banner_end = $slide_value['prefix_slider_banner_end'];
					$heading_tag_1 = $slide_value['prefix_slider_heading_tag_1'];
					$heading_tag_2 = $slide_value['prefix_slider_heading_tag_2'];
					$heading_tag_3 = $slide_value['prefix_slider_heading_tag_3'];
					$hyperlink = $slide_value['prefix_slider_hyperlink'];
					?>
					<section class="content-banner" style="background-image: url(<?= $image; ?>);">
						<a href="<?= ($hyperlink) ? $hyperlink : '#'; ?>">
							<div class="container">
								<div class="content-banner_box">
									<div class="box__top">
										<?php if($banner_start): ?>
											<div class="banner__date">
												<strong><?= date( 'd' , $banner_start['timestamp'] );?><?php if($banner_end): ?>-<?= date( 'd' , $banner_end['timestamp'] );?><?php endif; ?></strong>
												<span><?= date( 'm/Y' , $banner_start['timestamp'] );?></span>
											</div>
										<?php endif; ?>
										<div class="banner__logo">
											<?php if($mainlogo_image): ?>
												<a href="#" title="" class="logo__main">
													<img src="<?= $mainlogo_image;?>" alt="">
												</a>
											<?php endif; ?>
											<?php 
											if(! empty($logo_group)):
												foreach ( $logo_group as $logo_value ):
													$other_logo_id = isset( $logo_value['prefix_slider_other_logo'] ) ? $logo_value['prefix_slider_other_logo'] : '';
													$otherlogo_image = wp_get_attachment_image_url( $other_logo_id, 'full' );
													$other_logo_url = $logo_value['prefix_slider_other_logo_url'];
													?>
													<a class="logo__other" href="<?= $other_logo_url; ?>">
														<img src="<?= $otherlogo_image; ?>" alt="">
													</a>
												<?php endforeach;
											endif; ?>
										</div>
									</div>

									<div class="clearfix"></div>
									<?php if($heading_tag_1 != "" || $heading_tag_2 != "" || $heading_tag_3 != ""): ?>
										<div class="box__bottom">
											<?php if($heading_tag_1): ?>
												<h4 class="heading__tag4"><?= $heading_tag_1;?></h4>
											<?php endif; ?>
											<?php if($heading_tag_2): ?>
												<h2 class="heading__tag2"><?= $heading_tag_2;?></h2>
											<?php endif; ?>
											<?php if($heading_tag_3): ?>
												<h3 class="heading__tag3"><?= $heading_tag_3;?></h3>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								</div>
							</div>
						</a>
					</section>
					<?php 
				endforeach;
			endif;
		endwhile;
		wp_reset_postdata();
	endif; ?>
</div>

<!-- Content Notify -->
<section class="content-notify">
	<div class="container">
		<div class="content-notify_box">
			<div class="box__left">
				<?= changeLang('ANNOUNCEMENTS:','THÔNG BÁO:'); ?>
			</div>
			<div class="box__right">
				<div class="notify__slider owl-carousel">
					<?php 
					$announce = rwmb_meta('prefix_homepage_announcement');
					global $post;
					foreach ($announce as $announce_value):
						$post = get_post($announce_value);
						setup_postdata( $post );
						?>
						<div class="item">
							<a href="<?php the_permalink(); ?>" class="item__name"><?php the_title(); ?></a>
							<a class="item__more" href="<?php the_permalink(); ?>"><?= changeLang('Learn more','Xem thêm'); ?> <span>→</span></a>
						</div>
						<?php wp_reset_postdata();
					endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section> <!-- /Content Notify -->

<!-- Content Show Statistics -->
<section class="content-show">
	<div class="container">
		<div class="content-show_box">
			<h2 class="heading">
				<?php 
					$white__title = rwmb_meta('prefix_homepage_static_heading_white');
					$blue__title = rwmb_meta('prefix_homepage_static_heading_blue');
					echo $white__title;
					?> <span><?= $blue__title; ?></span>
			</h2>

			<div class="box__circle box__circle__number__animation">
				<div class="box__circle__dot">
					<img src="<?= get_template_directory_uri(); ?>/images/dot-start.png" alt="">
				</div>

				<?php 
					$ads = rwmb_meta('prefix_homepage_static_groups');
					if ( ! empty( $ads ) ): ?>
						<ul class="no-style items">
						<?php foreach ( $ads as $ads__item ):
							$image = isset( $ads__item['prefix_homepage_static_image'] ) ? $ads__item['prefix_homepage_static_image'] : '';
							$icon = wp_get_attachment_image_url( $image, 'full' );
							$number = isset( $ads__item['prefix_homepage_static_number'] ) ? $ads__item['prefix_homepage_static_number'] : '';
							$sub_number = isset( $ads__item['prefix_homepage_static_sub_number'] ) ? $ads__item['prefix_homepage_static_sub_number'] : '';
							$text = isset( $ads__item['prefix_homepage_static_text'] ) ? $ads__item['prefix_homepage_static_text'] : '';
							?>
							<li data-count="<?= $number ?>">
								<div class="icon">
									<img src="<?= $icon ?>" alt="">
								</div>
								<div class="paragraph">
									<div class="number">
										<span>0</span><?= $sub_number ?>
									</div>
									<div class="text"><?= $text ?></div>
								</div>
							</li>
						<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				<div class="box__circle__dot">
					<img src="<?= get_template_directory_uri(); ?>/images/dot-end.png" alt="">
				</div>					
			</div>

			<div class="box__circle__ipad">				
				<?php 
					$ads = rwmb_meta('prefix_homepage_static_groups');
					if ( ! empty( $ads ) ): ?>
						<ul class="no-style items owl-carousel">
						<?php 						
							$i = 1;
							foreach ( $ads as $ads__item ):
							$image = isset( $ads__item['prefix_homepage_static_image'] ) ? $ads__item['prefix_homepage_static_image'] : '';
							$icon = wp_get_attachment_image_url( $image, 'full' );
							$number = isset( $ads__item['prefix_homepage_static_number'] ) ? $ads__item['prefix_homepage_static_number'] : '';
							$sub_number = isset( $ads__item['prefix_homepage_static_sub_number'] ) ? $ads__item['prefix_homepage_static_sub_number'] : '';
							$text = isset( $ads__item['prefix_homepage_static_text'] ) ? $ads__item['prefix_homepage_static_text'] : '';
							?>
							<li class="child-<?= $i ?>">
								<div class="icon">
									<img src="<?= $icon ?>" alt="">
								</div>
								<div class="paragraph">
									<div class="number">
										<span><?= $number ?></span><?= $sub_number ?>
									</div>
									<div class="text"><?= $text ?></div>
								</div>
							</li>
						<?php $i++; endforeach; ?>
						</ul>
					<?php endif; ?>
				</ul>		
			</div>
		</div>
	</div>
</section> <!-- /Content Show Statistics -->

<!-- Content Grid 2 -->
<section class="content-grid2">
	<div class="container">
		<div class="content-grid2_box">
			<div class="items">
				<?php 
				$exhibit_group = rwmb_meta('prefix_homepage_exhibit_h_group');
				if(!empty($exhibit_group)):
					foreach ($exhibit_group as $exhibit_value):
						$exhibit_img_id = isset( $exhibit_value['prefix_homepage_exhibit_h_image'] ) ? $exhibit_value['prefix_homepage_exhibit_h_image'] : '';
						$exhibit_image = wp_get_attachment_image_url( $exhibit_img_id, 'full' );
						$exhibit_tag = $exhibit_value['prefix_homepage_exhibit_h_tag'];
						$exhibit_title = $exhibit_value['prefix_homepage_exhibit_h_title'];
						$exhibit_link = isset($exhibit_value['prefix_homepage_exhibit_h_link']) ? $exhibit_value['prefix_homepage_exhibit_h_link'] : '#' ;
						?>
						<div class="item">
							<div class="item__img" style="background-image: url(<?= $exhibit_image; ?>);">
								<img src="<?= $exhibit_image; ?>" alt="">
							</div>
							<div class="item__caption">
								<div class="item__line">
									<?= $exhibit_tag; ?>
								</div>

								<h3 class="item__name">
									<a href="<?= $exhibit_link; ?>" title="">
										<?= $exhibit_title; ?>
									</a>
								</h3>

								<a class="item__more" href="<?= $exhibit_link; ?>">
									<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
								</a>
							</div>
						</div>
					<?php endforeach;
				endif; ?>
			</div>

			<div class="box__ads">
				<?php 
					$ads = rwmb_meta('prefix_homepage_grid_ads');
					if ( ! empty( $ads ) ): ?>
						<div class="ads__slider owl-carousel">
						<?php foreach ( $ads as $ads__item ):
							$image = isset( $ads__item['prefix_homepage_image'] ) ? $ads__item['prefix_homepage_image'] : '';
							$icon = wp_get_attachment_image_url( $image, 'full' );
							$link = $ads__item['prefix_homepage_link'];
							?>
							<a href="<?= $link; ?>" title="" target="_blank">
								<img src="<?= $icon ?>" alt="">
							</a>	
						<?php endforeach; ?>
						</div>
					<?php endif; ?>				
			</div>
		</div>
	</div>
</section> <!-- /Content Grid 2 -->

<!-- Content Catalogue -->
<section class="content-catalogue">
	<div class="content-catalogue_box">
		<div class="box__catalogue">
			<?php 
			$catalogue1_group = rwmb_meta('prefix_homepage_catalogue_group_1');
			$catalogue1_imgID = isset( $catalogue1_group['prefix_homepage_catalogue1_image'] ) ? $catalogue1_group['prefix_homepage_catalogue1_image'] : '';
			$catalogue1_image = wp_get_attachment_image_url( $catalogue1_imgID, 'full' );
			$catalogue1_title = $catalogue1_group['prefix_homepage_catalogue1_title'];
			$catalogue1_btn_text = $catalogue1_group['prefix_homepage_catalogue1_btn_text'];
			$catalogue1_link = isset($catalogue1_group['prefix_homepage_catalogue1_link']) ? $catalogue1_group['prefix_homepage_catalogue1_link'] : "#";
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
			$catalogue2_group = rwmb_meta('prefix_homepage_catalogue_group_2');
			$catalogue2_title = $catalogue2_group['prefix_homepage_catalogue2_title'];
			$catalogue2_des = $catalogue2_group['prefix_homepage_catalogue2_des'];
			$catalogue2_btn_text1 = $catalogue2_group['prefix_homepage_catalogue2_btn_text1'];
			$catalogue2_btn_text2 = $catalogue2_group['prefix_homepage_catalogue2_btn_text2'];
			$catalogue2_link1 = isset($catalogue2_group['prefix_homepage_catalogue2_link1']) ? $catalogue2_group['prefix_homepage_catalogue2_link1'] : "#";
			$catalogue2_link2 = isset($catalogue2_group['prefix_homepage_catalogue2_link2']) ? $catalogue2_group['prefix_homepage_catalogue2_link2'] : "#";
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
			$catalogue3_group = rwmb_meta('prefix_homepage_catalogue_group_3');
			$catalogue3_imgID = isset( $catalogue3_group['prefix_homepage_catalogue3_image'] ) ? $catalogue3_group['prefix_homepage_catalogue3_image'] : '';
			$catalogue3_image = wp_get_attachment_image_url( $catalogue1_imgID, 'full' );
			$catalogue3_title = $catalogue3_group['prefix_homepage_catalogue3_title'];
			$catalogue3_btn_text = $catalogue3_group['prefix_homepage_catalogue3_btn_text'];
			$catalogue3_link = isset($catalogue3_group['prefix_homepage_catalogue3_link']) ? $catalogue3_group['prefix_homepage_catalogue3_link'] : "#";
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
	</div>
</section> <!-- /Content Catalogue -->

<!-- Content Upcoming -->
<section class="content-upcoming content-upcoming_gray">
	<div class="content-upcoming_top">
		<div class="container">
			<div class="content-upcoming_box">
				<div class="box__top">
					<h2 class="heading">									
						<?php 
							$white__title = rwmb_meta('prefix_homepage_upcoming_heading_white');
							$blue__title = rwmb_meta('prefix_homepage_upcoming_heading_blue');
							echo $white__title;
							?> <span><?= $blue__title; ?></span>
					</h2>

					<?php 
						$link = rwmb_meta('prefix_homepage_upcoming_link_button');
						$text = rwmb_meta('prefix_homepage_upcoming_text_button');
					?>
					<a class="view__all" href="<?= $link ?>">
						<?= $text ?>
					</a>
				</div>

				<div class="clearfix"></div>

				<?php 
					$event = rwmb_meta('prefix_homepage_upcoming_event');
				?>
				<div class="box__bottom" text="<?= $event ?>">
					<?php 
					global $post;
					$post = get_post(changeLang($epv_options['event-main-post'],$epv_options['event-main-post-vi']));
					setup_postdata($post); 
					$locate = rwmb_meta('prefix_event-locate');
					$day = rwmb_meta('prefix_event-time_day');
					$month = rwmb_meta('prefix_event-time_my');
					?>
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
							<strong><?= $day; ?></strong><br>
							<span><?= $month; ?></span>
						</div>
					</div>
					<?php wp_reset_postdata();?>
					<div class="items">
						<?php 							
							$event_other = changeLang($epv_options['event-other-post'],$epv_options['event-other-post-vi']);
						foreach ($event_other as $event_value):
							global $post;
							$post = get_post($event_value);
							setup_postdata($post); 
							$locate = rwmb_meta('prefix_event-locate');							
							$full = rwmb_meta('prefix_event-time_text');
							?>
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
										<?= $full; ?> | <?= $locate; ?>
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
</section>

<!-- Content News & Updates -->
<section class="content-updates">
	<div class="container">
		<div class="content-updates_box">
			<h2 class="heading" style="position: relative;">									
				<?php 
					$white__title = rwmb_meta('prefix_homepage_news_heading_white');
					$blue__title = rwmb_meta('prefix_homepage_news_heading_blue');
					echo $white__title;
					?> <span><?= $blue__title; ?></span>
			</h2>

			<!-- Nav tabs -->
			<ul class="relative nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab"><?= changeLang('Industry News','Tin Ngành'); ?></a></li>
				<li role="presentation"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab"><?= changeLang('Press Release','Thông Cáo Báo Chí'); ?></a></li>
				<li role="presentation"><a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab"><?= changeLang('Events News','Tin Sự Kiện'); ?></a></li>
				<li role="presentation"><a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab"><?= changeLang('Featured Articles','Bài Viết Đặc Biệt'); ?></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="relative tab-content">
				<div role="tabpanel" class="tab-pane active" id="tab-1">
					<div class="items">
						<?php 
						$industry_EN_ID = get_cat_ID("Industry News");
						$industry_VI_ID = get_cat_ID("Tin Ngành");
						$cat = (pll_current_language() == 'en') ? $industry_EN_ID : $industry_VI_ID; 
						$args = array(
							'post_type' => 'post',
							'cat'		=> $cat,
							'posts_per_page'	=> 3,
						);
						wp_reset_query();
						$query = new WP_Query($args);
						if($query->have_posts()):
							while($query->have_posts()): $query->the_post();
								?>
								<div class="item">
									<div class="item__img">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="Item">
									</div>
									<div class="item__caption">
										<h3 class="item__heading">
											<a title="">
												<?php the_title(); ?>
											</a>
										</h3>
										<div class="item__date"><?= get_the_date('d/m/Y'); ?></div>
										<div class="item__paragraph"><?= excerpt(13); ?></div>

										<a href="<?php the_permalink(); ?>" class="item__more">
											<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
										</a>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab-2">
					<div class="items">
						<?php 
						$pressRelease_EN_ID = get_cat_ID("Press Release");
						$pressRelease_VI_ID = get_cat_ID("Thông cáo báo chí");
						$cat = (pll_current_language() == 'en') ? $pressRelease_EN_ID : $pressRelease_VI_ID;  
						$args = array(
							'post_type' => 'post',
							'cat'		=> $cat,
							'posts_per_page'	=> 3,
						);
						wp_reset_query();
						$query = new WP_Query($args);
						if($query->have_posts()):
							while($query->have_posts()): $query->the_post();
								?>
								<div class="item">
									<div class="item__img">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="Item">
									</div>
									<div class="item__caption">
										<h3 class="item__heading">
											<a title="">
												<?php the_title(); ?>
											</a>
										</h3>
										<div class="item__date"><?= get_the_date('d/m/Y'); ?></div>
										<div class="item__paragraph"><?= excerpt(13); ?></div>

										<a href="<?php the_permalink(); ?>" class="item__more">
											<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
										</a>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab-3">
					<div class="items">
						<?php
						$eventNews_EN_ID = get_cat_ID("Event News");
						$eventNews_VI_ID = get_cat_ID("Tin sự kiện");
						$cat = (pll_current_language() == 'en') ? $eventNews_EN_ID : $eventNews_VI_ID; 
						$args = array(
							'post_type'	=> 'post',
							'cat'		=> $cat,
							'posts_per_page'	=> 3,
						);
						wp_reset_postdata();
						$query = new WP_Query($args);
						if($query->have_posts()):
							while($query->have_posts()): $query->the_post();
								?>
								<div class="item">
									<div class="item__img">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="Item">
									</div>
									<div class="item__caption">
										<h3 class="item__heading">
											<a title="">
												<?php the_title(); ?>
											</a>
										</h3>
										<div class="item__date"><?= get_the_date('d/m/Y'); ?></div>
										<div class="item__paragraph"><?= excerpt(13); ?></div>

										<a href="<?php the_permalink(); ?>" class="item__more">
											<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
										</a>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab-4">
					<div class="items">
						<?php 
						global $post;
						$feature_even_group = changeLang($epv_options['feature-article'],$epv_options['feature-article-vi']);
						foreach ($feature_even_group as $feature_even_item):
							$post = get_post($feature_even_item);
							setup_postdata($post);?>
							<div class="item">
								<div class="item__img">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="Item">
								</div>
								<div class="item__caption">
									<h3 class="item__heading">
										<a title="">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="item__date"><?= get_the_date('d/m/Y'); ?></div>
									<div class="item__paragraph"><?= excerpt(13); ?></div>

									<a href="<?php the_permalink(); ?>" class="item__more">
										<?= changeLang('Learn more','Xem thêm'); ?> <span>→</span>
									</a>
								</div>
							</div>
							<?php wp_reset_postdata();
						endforeach; ?>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<?php 
				$link = rwmb_meta('prefix_homepage_news_link');
				$text = rwmb_meta('prefix_homepage_news_text');
			?>
			<a class="view__all" href="<?= $link ?>">
				<?= $text ?>
			</a>
		</div>
	</div>
</section> <!-- /Content News & Updates -->

<!-- Content Media -->
<section class="content-media">
	<div class="container">
		<div class="content-media_box">
			<div class="box__ads">
				<?php 
					$ads = rwmb_meta('prefix_homepage_media_ads');
					if ( ! empty( $ads ) ): ?>
						<div class="ads__slider owl-carousel">
						<?php foreach ( $ads as $ads__item ):
							$image = isset( $ads__item['prefix_homepage_image'] ) ? $ads__item['prefix_homepage_image'] : '';
							$icon = wp_get_attachment_image_url( $image, 'full' );
							$link = $ads__item['prefix_homepage_link'];
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
						$white__title = rwmb_meta('prefix_homepage_media_heading_white');
						$blue__title = rwmb_meta('prefix_homepage_media_heading_blue');
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
<?php get_footer(); ?>