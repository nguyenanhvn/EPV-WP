<!-- Content Breadcrumb -->
<section class="content-breadcrumb">
	<div class="container">
		<?= custom_breadcrumbs_2(); ?>
	</div>
</section> <!-- /Content Breadcrumb -->

<!-- Content News Style 1 -->
<section class="content-news-style1">
	<div class="container">
		<div class="content-news_box">
			<h2 class="heading">
				Search: <span><?= get_search_query()?></span>
			</h2>

			<div class="clearfix"></div>
				<?php if(have_posts()): ?>
					<div class="items">
					<?php while(have_posts()): the_post(); ?>
						<div class="item">
							<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
								<img src="<?php the_post_thumbnail_url('270x350'); ?>" alt="">
							</div>
							<div class="item__box">
								<div class="item__date">
									<strong><?= get_the_date('d'); ?></strong> <span><?= get_the_date('M Y'); ?></span>
								</div>
								<div class="item__caption">
									<h3 class="item__heading">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="item__paragraph">
										<?= excerpt(15); ?>
									</div>

									<a href="<?php the_permalink(); ?>" class="item__more">
										<?= changeLang('Learn more', 'Xem thêm'); ?> <span>→</span>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					</div>
				<?php else: ?>
                    <div class="no-results td-pb-padding-side">
                    	<h4>
	                    	<?= changeLang('No results for your search, please do another search', 'Không có kết quả cho tìm kiếm của bạn, xin vui lòng thực hiện một tìm kiếm khác'); ?>
                    	</h4>
                    </div>
                <?php endif; ?>  

			<?= posts_nav(); ?>

			<?= do_shortcode( '[ads_slide]' ); ?>
		</div>
	</div>
	</section> <!-- /Content News Style 1 -->