<?php global $epv_options; ?>
<div class="content__sidebar">
	<div class="content__widget">
		<h3>Must Read</h3>
		<ul class="content__widget__news">
			<?php 
			global $post;
			$mustRead = changeLang($epv_options['must-read'], $epv_options['must-read-vi']);
			foreach ($mustRead as $objPost):
				$post = get_post($objPost);
				setup_postdata($post);?>
				<li>                        
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_post_thumbnail_url('100x80'); ?>">
						</a>
					</div>

					<div class="widget_recent_entry">	             			
						<h4 class="title-post">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="">
								<?php the_title(); ?>
							</a>
						</h4>
					</div>
				</li>
				<?php 
			wp_reset_postdata();
		endforeach; ?>
	</ul>
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