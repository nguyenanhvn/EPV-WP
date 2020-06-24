</main>

<div class="clearfix"></div>
<?php global $epv_options; ?>
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="footer-top__box">
				<div class="box__items__slider owl-carousel">
					<?php 
					$args = array(
						'post_type' => 'sponsor',
					);
					wp_reset_query();
					$query = new WP_Query($args);
					if($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post();
							$sponsor_group = rwmb_meta('prefix_sponsor_group',get_the_ID());
							foreach ($sponsor_group as $sponsor_value):
								$sponsorID = $sponsor_value['prefix_sponsor_image'];
								$sponsor_image = wp_get_attachment_image_url( $sponsorID, 'full' );
								$sponsorURL = isset($sponsor_value['prefix_sponsor_logo_url']) ? $sponsor_value['prefix_sponsor_logo_url'] : "#";
								?>
								<a class="item" href="<?= $sponsorURL; ?>" target="_blank">
									<img src="<?= $sponsor_image; ?>" alt="">
								</a>
							<?php endforeach;
						endwhile;
						wp_reset_postdata();
					endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom__box">
				<div class="box__left">		
					<div class="box__left__information">		
						<div class="name">
							<span><?= changeLang($epv_options['footer-title'],$epv_options['footer-title-vi']); ?></span>
						</div>
						<div class="item">
							<b>A.</b> <span><?= changeLang($epv_options['footer-addr'],$epv_options['footer-addr-vi']); ?></span>
						</div>
						<a href="mailTo: <?= $epv_options['footer-email']; ?>" class="item">
							<b>E.</b> <span><?= $epv_options['footer-email']; ?></span>
						</a>
						<a href="tel: <?= $epv_options['footer-phone']; ?>" class="item">
							<b>T.</b> <span><?= $epv_options['footer-phone']; ?></span>
						</a>							
					</div>	

					<div class="box__left__quick__link">
						<h3 class="heading">
							<span><?= changeLang('Quick link', 'Truy cập nhanh'); ?></span>
						</h3>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'container'=> false,
							'items_wrap' => '<ul class="no-style">%3$s</ul>',
						));
						?>
					</div>	

					<div class="clearfix"></div>

					<div class="box__left__footer">
						<div class="box__left__footer__copyright">
							<?= $epv_options['copyright']; ?>
						</div>
						<div class="box__left__footer__follow">
							<?php if($epv_options['url-facebook'] != "" || $epv_options['url-linkedin'] != ""  || $epv_options['url-youtube'] != "" || $epv_options['url-email'] != ""): ?>
								<span>Follow us on:</span>
								<ul class="no-style social">
									<?php if($epv_options['url-facebook'] != ""): ?>
										<li>
											<a href="<?= $epv_options['url-facebook']; ?>" title="" target="_blank"><i class="fa fa-facebook" target="_blank"></i></a>
										</li>
									<?php endif; ?>
									<?php if($epv_options['url-linkedin'] != ""): ?>
										<li>
											<a href="<?= $epv_options['url-linkedin']; ?>" title="" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a>
										</li>
									<?php endif; ?>
									<?php if($epv_options['url-youtube'] != ""): ?>
										<li>
											<a href="<?= $epv_options['url-youtube']; ?>" title="" target="_blank"><i class="fa fa-youtube-play" target="_blank"></i></a>
										</li>
									<?php endif; ?>
									<?php if($epv_options['url-email'] != ""): ?>
										<li>
											<a href="mailto:<?= $epv_options['url-email']; ?>" title="" target="_blank"><i class="fa fa-envelope" target="_blank"></i></a>
										</li>
									<?php endif; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<div class="box__right">
					<div class="box__right__box">
						<div class="heading">
							<?= changeLang('Get Exclusive Offers and Latest news', 'Nhận ưu đãi độc quyền và tin tức mới nhất'); ?>
						</div>
						<div class="form">
							<?= changeLang(do_shortcode( '[contact-form-7 id="5" title="Subscribe"]' ), do_shortcode( '[contact-form-7 id="496" title="Subscribe VI"]' )) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom__ipad">
				<div class="box__left__footer__copyright">
					<?= $epv_options['copyright']; ?>
				</div>
				<div class="box__left__footer__follow">
					<span>Follow us on:</span>
					<ul class="no-style social">
						<?php if($epv_options['url-facebook'] != ""): ?>
							<li>
								<a href="<?= $epv_options['url-facebook']; ?>" title="" target="_blank"><i class="fa fa-facebook" target="_blank"></i></a>
							</li>
						<?php endif; ?>
						<?php if($epv_options['url-linkedin'] != ""): ?>
							<li>
								<a href="<?= $epv_options['url-linkedin']; ?>" title="" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a>
							</li>
						<?php endif; ?>
						<?php if($epv_options['url-youtube'] != ""): ?>
							<li>
								<a href="<?= $epv_options['url-youtube']; ?>" title="" target="_blank"><i class="fa fa-youtube-play" target="_blank"></i></a>
							</li>
						<?php endif; ?>
						<?php if($epv_options['url-email'] != ""): ?>
							<li>
								<a href="mailto:<?= $epv_options['url-email']; ?>" title="" target="_blank"><i class="fa fa-envelope" target="_blank"></i></a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/dotdotdot.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>
<!-- header -->
<div id="header-responsive">
	<div class="tops">			
			<!-- <div class="sticky desktop">
		        <div class="container">
		            <div class="show-sticky" style="display: none;">
		                <div class="col-left">
		                    <p>
		                        PRVH Series is part of the Informa Markets Division of Informa PLC                        
		                    </p>
		                    <div>
		                    	<ul>
	                               <li><a href="<?= get_template_directory_uri(); ?>/https://informa.com">INFORMA PLC</a></li>
	                              	<li><a href="<?= get_template_directory_uri(); ?>/https://informa.com/about-us">ABOUT US</a></li>
	                              	<li><a href="<?= get_template_directory_uri(); ?>/https://informa.com/investors/">INVESTOR RELATIONS</a></li>
	                              	<li><a href="<?= get_template_directory_uri(); ?>/https://informa.com/talent/">TALENT</a></li>
	                            </ul>
	                        </div>
		                </div>
		                <div class="col-right">
		                    <p>
		                      	This site is operated by a business or businesses owned by Informa PLC and all copyright resides with them. Informa PLC’s registered office is 5 Howick Place, London SW1P 1WG. Registered in England and Wales. Number 8860726
		                    </p>
		                </div>
		            </div>
		            <div class="btn-informa"><span class=""><img src="<?= get_template_directory_uri(); ?>/images/infor.png" alt=""></span></div>
		        </div>
		    </div> -->
		    <?= custom_polylang_languages1();?>

		    <div class="clearfix"></div>
		</div>
		<div class="bottoms">
			<div class="menu">
				<div class="toggle-action">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

			<div class="logo">
				<a href="<?= site_url(); ?>" title=""><img src="<?= $epv_options['logo']['url']; ?>" alt="Logo"></a>
				<?php for ($i = 0; $i < count($epv_options['other-logo']); $i++) {?>
					<a href="<?= ($epv_options['other-logo'][$i]['url'] != '') ? $epv_options['other-logo'][$i]['url'] : '#'; ?>" title="" target="_blank"><img src="<?= $epv_options['other-logo'][$i]['image'];?>" alt="Logo"></a>
				<?php }?>
				<?php /* ?>
				<div class="other-logo owl-carouse">
					<?php if ( isset( $epv_options['other-logo'] ) && !empty( $epv_options['other-logo'] ) ) {
						for ($i = 0; $i < count($epv_options['other-logo']); $i++) {?>
							<a href="<?= ($epv_options['other-logo'][$i]['url'] != '') ? $epv_options['other-logo'][$i]['url'] : '#'; ?>" title="" target="_blank"><img src="<?= $epv_options['other-logo'][$i]['image'];?>" alt="Logo"></a>
						<?php }
					} ?>	
				</div>
				<?php */ ?>
			</div>
		</div>
	</div>
</div><!-- /header -->

<!-- Menu Mobile -->
<div id="menu-mobile">
	<div class="toggle-action">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<?= custom_polylang_languages2();?>

	<div class="clearfix"></div>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container'=> false,
		'items_wrap' => '<ul class="no-style fr-menu">%3$s</ul>',
	));
	?>

	<div class="clearfix"></div>

	<div class="box-bottom">
		<ul class="no-style short-link">
			<li class="book"><a href="<?= site_url(); ?>/book-a-stand" title=""><?= changeLang('Book A Stand', 'Đặt Chỗ'); ?></a></li>
			<li class="visitor"><a href="<?= site_url(); ?>/exhibitor-regulations" title=""><?= changeLang('Visitor Pre-Registration', 'Đăng Ký'); ?></a></li>
		</ul>
	</div>
</div> <!-- /Menu Mobile -->

<div id="dark-shadow"></div>
<?php
	if(!isset($_SESSION["fanpage"])){ ?>
	<div class="sticky-fanpage active">
	<?php } else { ?>
	<div class="sticky-fanpage">
	<?php } ?>
	<span class="closeFrame">×</span>
	<h3>FanPage</h3>
	<div class="fb-page" data-href="https://www.facebook.com/ElectricPowerVietnam/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/ElectricPowerVietnam/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ElectricPowerVietnam/">Electric &amp; Power Vietnam</a></blockquote></div>
</div>
<!-- Lightbox  -->	
<?php
	// Starting session
	session_start();
	 
	// Storing session data
	if(!isset($_SESSION["fanpage"])){
	    $_SESSION["fanpage"] = "true";
	}
?>
<?php
	if(!isset($_SESSION["lightbox"])){ ?>
		<div class="md-modal md-effect-1 md-show" id="md-lightbox">
			<div class="md-content">
				<span class="md-close" title="Close Popup">&times;</span>

				<div class="md-box">
					<?php if($epv_options['popup-image'] || $epv_options['popup-image-vi']): ?>
						<div class="box__left">
							<img src="<?= changeLang($epv_options['popup-image']['url'],$epv_options['popup-image-vi']['url']);?>" alt="">
						</div>
					<?php endif; ?>
					<div class="box__right">
						<?php 
						$popup_post_ID = changeLang($epv_options['popup-post'],$epv_options['popup-post-vi']);
						global $post;
						$post = get_post($popup_post_ID);
						setup_postdata( $post );
						?>
						<div class="box__right__heading">
							<?php the_title(); ?>
						</div>

						<div class="box__right__text">
							<?php 
							$content = get_the_content();
							echo mb_strimwidth(wp_strip_all_tags($content), 0, 300, '...');
							?>
						</div>

						<a class="box__right__more" href="<?php the_permalink(); ?>"><?= changeLang('More detail','Chi tiết'); ?></a>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="md-darknight"></div><!-- the overlay element -->
<?php } ?>
<?php
	// Starting session
	session_start();
	 
	// Storing session data
	if(!isset($_SESSION["lightbox"])){
	    $_SESSION["lightbox"] = "true";
	}
?>
</body>
</html>