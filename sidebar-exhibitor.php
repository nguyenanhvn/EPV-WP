<div class="content__widget">
	<h3><?= changeLang("Latest Brochures","Tài liệu mới nhất"); ?></h3>
	<ul class="content__widget__download">
		<?php 
		global $epv_options;
		$brochureList = changeLang($epv_options['ebrochure-post'], $epv_options['ebrochure-post-vi']);
		foreach ($brochureList as $brochureValue):
			$post = get_post($brochureValue);
			setup_postdata($post);  
			$content = rwmb_meta('prefix_brochure-paragraph');
			?>
			<li>                        
				<div class="thumbnail">
					<a href="<?= site_url(); ?>/<?= changeLang("application-form-e-brochure/","vi/mau-don-dien-tu/") ?>?type=<?php the_title(); ?>" rel="bookmark" title="">
						<img src="<?php the_post_thumbnail_url(); ?>">
					</a>
				</div>

				<div class="widget_recent_entry">	             			
					<h4 class="title-post">
						<a href="<?= site_url(); ?>/<?= changeLang("application-form-e-brochure/","vi/mau-don-dien-tu/") ?>?type=<?php the_title(); ?>" rel="bookmark" title="">
							<?php the_title(); ?>
						</a>
					</h4>
					<div class="download">
						<?= wpautop( $content ); ?>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>

	<a class="more" href="<?= site_url(); ?>/<?= changeLang("e-brochures","vi/tai-lieu-trien-lam/"); ?>">
		<?= changeLang("Download More Brochures","Tải thêm tài liệu"); ?>
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