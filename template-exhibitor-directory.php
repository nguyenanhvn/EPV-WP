<?php 
/**
 * Template Name: Exibitor Directory
 */
get_header();
global $des_options;
?>
<?php 
	$shortcode = rwmb_meta('prefix_directory_shortcode');
	if ($shortcode) {		
		echo do_shortcode('[' .$shortcode. ']');
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
				<div class="content__detail__bottom">
					<?php 
					$post_tags = get_the_tags();
						if ( $post_tags ) :?>
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
						<?php endif;?>
					<div class="content__detail__share">
						<span><?= changeLang('share','Chia sẻ'); ?></span>

						<ul class="no-style">
							<li>
	                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?=get_permalink()?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" title=""><i class="fa fa-facebook"></i></a>
	                        </li>
	                        <li>
	                            <a href="https://twitter.com/share?url=<?=get_permalink()?>&text=<?=the_title()?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" title=""><i class="fa fa-twitter"></i></a>
	                        </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="content__sidebar">
				<div class="content__widget">
					<h3><?= changeLang("Latest Brochures","Tài liệu mới nhất"); ?></h3>
					<ul class="content__widget__download">
						<?php 
						global $post;
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
						<?= changeLang("Download More Brochures","Download thêm tài liệu"); ?>
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