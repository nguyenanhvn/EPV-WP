<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1, minimum-scale=1, user-scalable=no" />
	<meta name="format-detection" content="telephone=no" />
	<title><?= bloginfo(); ?></title>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/loading.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<!-- FACEBOOK SDK-->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=583511375492680&autoLogAppEvents=1"></script>
	<!-- /FACEBOOK FANPAGE PLUGIN -->
	<?php global $epv_options;?>
	<?php /**
	<div class="ads-header">
		<div class="ads__box">
			<div class="ads__slider owl-carousel">		
				<?php if ( isset( $epv_options['top-banner-ads'] ) && !empty( $epv_options['top-banner-ads'] ) ) {
					for ($i = 0; $i < count($epv_options['top-banner-ads']); $i++) {?>
						<a href="<?= ($epv_options['top-banner-ads'][$i]['url'] != '') ? $epv_options['top-banner-ads'][$i]['url'] : '#'; ?>" title="" target="_blank">
							<img src="<?= $epv_options['top-banner-ads'][$i]['image'];?>" alt="">
						</a>
					<?php }
				} ?>	
			</div>
		</div>
	</div>
	*/ ?>
<!-- header -->
<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="header-top__left">
				<a href="<?= site_url(); ?>" title="" class="left__main__logo">
					<img src="<?= $epv_options['logo']['url']; ?>" alt="">
				</a>
				<?php if ( isset( $epv_options['other-logo'] ) && !empty( $epv_options['other-logo'] ) ) {
					for ($i = 0; $i < count($epv_options['other-logo']); $i++) {?>
						<a href="<?= ($epv_options['other-logo'][$i]['url'] != '') ? $epv_options['other-logo'][$i]['url'] : '#'; ?>" title="" class="left__other__logo" target="_blank">
							<img src="<?= $epv_options['other-logo'][$i]['image'];?>" alt="">
						</a>
					<?php }
				} ?>	
			</div>

			<div class="header-top__right">
				<div class="right__box">
					<div class="right__time">
						<?php 
						$timestamp_from = strtotime($epv_options['top-head-from-date']);
						$timestamp_to = strtotime($epv_options['top-head-to-date']); ?>
						<strong><?= date_i18n("d", $timestamp_from);?>-<?= date_i18n("d", $timestamp_to);?></strong>
						<span><?= date_i18n("m/Y", $timestamp_from);?></span>
					</div>
					<div class="right__text">
						<div class="right__text__box">
							<strong><?= changeLang($epv_options['top-head-title'],$epv_options['top-head-title-vi']);?></strong>
							<span><?= changeLang($epv_options['top-head-des'],$epv_options['top-head-des-vi']);?></span>							
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>

	<div class="header-middle">
		<div class="container">
			<div class="header-middle__menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'=> false,
					'items_wrap' => '<ul>%3$s</ul>',
				));
				?>
			</div>
			<div class="header-middle__right">	
				<?= custom_polylang_languages(); ?>
				<div class="right__search">
					<span data-toggle="dropdown"><img src="<?= get_template_directory_uri(); ?>/images/icon-search.png" alt=""></span>
					<?= get_search_form(); ?>
				</div>
				<div class="right__action">
					<a class="link__none__bg" href="<?= site_url(); ?>/exhibitor-regulations">
						<?= changeLang('Register', 'Đăng Ký'); ?>
					</a>
					<a class="link__bg" href="<?= site_url(); ?>/book-a-stand">
						<?= changeLang('Book A Stand', 'Đặt Chỗ'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /header -->

<div class="clearfix"></div>

<!-- Content -->
<main id="content">