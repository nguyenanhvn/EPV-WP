<?php if(is_category(1) 
	|| is_category(15) 
	|| is_category(42) 
	|| is_category(40) 
	|| is_category(11)
	|| is_category(45)
	|| is_category(13)
	|| is_category(7)
	|| is_category(17)
	|| is_category(47)
){
	echo do_shortcode( '[newmedia_menu]' );
} ?>

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
				<?php 
				$pieces = explode(" ",single_cat_title("",false));
				for ($i = 0; $i <= count($pieces) - 1; $i++) {
					if($i == (count($pieces) - 1))
						printf(" <span>%s</span>",$pieces[$i]);
					else
						echo $pieces[$i];
				}
				?>
			</h2>

			<div class="clearfix"></div>

			<div class="items">
				<?php if(have_posts()):
					while(have_posts()): the_post(); ?>
						<?php 
							$day = rwmb_meta('prefix_event-time_day'); 
							$text = rwmb_meta('prefix_event-time_my_text'); 
						?>
						<div class="item">
							<div class="item__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
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
										<?= excerpt(15); ?>
									</div>

									<a href="<?php the_permalink(); ?>" class="item__more">
										<?= changeLang('Learn more', 'Xem thêm'); ?> <span>→</span>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile;
				endif; ?>
			</div>

			<?= posts_nav(); ?>

			<?= do_shortcode( '[ads_slide]' ); ?>
		</div>
	</div>
	</section> <!-- /Content News Style 1 -->