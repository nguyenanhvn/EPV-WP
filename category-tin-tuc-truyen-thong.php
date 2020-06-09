<?php get_header(); 
echo do_shortcode( '[newmedia_menu]' );
?>
<!-- Content News Style 1 -->
<section class="content-news-style1">
	<div class="container">
		<div class="content-news_box">
			<?php
			$industry_EN_ID = get_cat_ID("Industry News");
			$industry_VI_ID = get_cat_ID("Tin Ngành");
			$cat = (pll_current_language() == 'en') ? $industry_EN_ID : $industry_VI_ID; 
			$args = array(
				'post_type'	=> 'post',
				'cat'		=> $cat,
				'posts_per_page' => 12,
			);
			wp_reset_query();
			$query = new WP_Query($args);
			if($query->have_posts()):
				?>
				<h2 class="heading">
					<?php 
					$pieces = explode(" ",get_cat_name($cat));
					for ($i = 0; $i <= count($pieces) - 1; $i++) {
						if($i == (count($pieces) - 1))
							printf(" <span>%s</span>",$pieces[$i]);
						else
							echo $pieces[$i];
					}
					?>
				</h2>

				<a class="view__all" href="<?= get_category_link($cat); ?>"><?= changeLang('View All Industry News','Xem tất cả tin ngành'); ?></a>

				<div class="clearfix"></div>

				<div class="items industry-slide owl-carousel">
					<?php while($query->have_posts()): $query->the_post(); ?>
						<div class="item">
							<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url('270x350'); ?>);">
								<img src="<?php the_post_thumbnail_url('270x350'); ?>" alt="">
							</div>
							<div class="item__box">
								<div class="item__date">
									<strong><?= get_the_date('d'); ?></strong> <span><?= get_the_date('F Y'); ?></span>
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

<!-- Content News Style 2 -->
<section class="content-news-style2">
	<div class="container">
		<div class="content-news_box">
			<?php
			$pressRelease_EN_ID = get_cat_ID("Press Release");
			$pressRelease_VI_ID = get_cat_ID("Thông cáo báo chí");
			$cat = (pll_current_language() == 'en') ? $pressRelease_EN_ID : $pressRelease_VI_ID; 
			$args = array(
				'post_type'	=> 'post',
				'cat'		=> $cat,
				'orderby'	=> 'date',
			);
			wp_reset_query();
			$query = new WP_Query($args);
			if($query->have_posts()):
				?>
				<h2 class="heading">
					<?php 
					$pieces = explode(" ",get_cat_name($cat));
					for ($i = 0; $i <= count($pieces) - 1; $i++) {
						if($i == (count($pieces) - 1))
							printf(" <span>%s</span>",$pieces[$i]);
						else
							echo $pieces[$i];
					}
					?>
				</h2>

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

<!-- Content News Style 3 -->
<section class="content-news-style3">
	<div class="container">
		<div class="content-news_box">
			<?php
			$eventNews_EN_ID = get_cat_ID("Event News");
			$eventNews_VI_ID = get_cat_ID("Tin sự kiện");
			$cat = (pll_current_language() == 'en') ? $eventNews_EN_ID : $eventNews_VI_ID; 
			$args = array(
				'post_type'	=> 'post',
				'cat'		=> $cat,
				'posts_per_page'	=> 12,
			);
			wp_reset_postdata();
			$query = new WP_Query($args);
			if($query->have_posts()):
				?>
				<div class="box__left">
					<h2 class="heading">
						<?php 
						$pieces = explode(" ",get_cat_name($cat));
						for ($i = 0; $i <= count($pieces) - 1; $i++) {
							if($i == (count($pieces) - 1))
								printf(" <span>%s</span>",$pieces[$i]);
							else
								echo $pieces[$i];
						}
						?>
					</h2>

					<div class="paragraph">
						<?= category_description($cat); ?>
					</div>

					<a class="view__more" href="<?= get_category_link($cat); ?>"><?= changLang('View More Event News', 'Xem thêm tin sự kiện'); ?></a>
				</div>

				<div class="box__right">
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
				</div>
			<?php endif; ?>
		</div>
	</div>
</section> <!-- /Content News Style 3 -->

<!-- Content Media -->
<section class="content-media">
	<div class="container">
		<div class="content-media_box">
			<div class="box__ads">
				<div class="ads__slider owl-carousel">
					<?php if ( isset( $epv_options['bottom-banner-ads'] ) && !empty( $epv_options['bottom-banner-ads'] ) ) {
						for ($i = 0; $i < count($epv_options['bottom-banner-ads']); $i++) {?>
							<a href="<?= ($epv_options['bottom-banner-ads'][$i]['url'] != '') ? $epv_options['bottom-banner-ads'][$i]['url'] : '#'; ?>" title="" target="_blank">
								<img src="<?= $epv_options['bottom-banner-ads'][$i]['image'];?>" alt="">
							</a>
						<?php }
					} ?>						
				</div>
				<!-- <span>ADVERTISING</span> -->
			</div>

			<div class="box__media">
				<?= changeLang('<h2 class="heading">Media <span>Partners & Sponsor</span></h2>', '<h2 class="heading">Đối Tác <span>Báo Chí & Nhà Tài Trợ</span></h2>'); ?>
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

<section class="content-press" style="background-image: url(<?= get_template_directory_uri(); ?>/images/bg-1.jpg);">
	<div class="container">
		<div class="content-press_box">
			<div class="box__left">
				<h2 class="heading">
					<?php 
					global $epv_options;
					$pieces = explode(" ",$epv_options['registration-title']);
					for ($i = 0; $i <= count($pieces) - 1; $i++) {
						if($i == (count($pieces) - 1))
							printf(" <span>%s</span>",$pieces[$i]);
						else
							echo $pieces[$i];
					}
					?>
				</h2>

				<div class="paragraph">
					<?php 
					echo $epv_options['registration-text'];
					?>
				</div>
			</div>

			<div class="box__right">
				<form action="news-media_submit" method="get" accept-charset="utf-8">
					<?= do_shortcode( '[contact-form-7 id="113" title="registration"]' ); ?>
				</form>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>