<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
if(in_category(1) || in_category(15) || in_category(42) || in_category(40) || in_category(11)){
	echo do_shortcode( '[newmedia_menu]' );
}
?>

<!-- Content -->
<main id="content">
	<!-- Content Breadcrumb -->
	<section class="content-breadcrumb other-style">
		<div class="container">
			<?= custom_breadcrumbs(); ?>
		</div>
	</section> <!-- /Content Breadcrumb -->

	<!-- Content News Detail -->
	<section class="content-news-detail">
		<div class="content-news_top">
			<div class="container">
				<div class="top__date"><?php the_date('d/m/Y'); ?></div>
				<div class="top__title"><?php the_title(); ?></div>
			</div>
		</div>
		<div class="content-news_bottom">
			<div class="bottom__img">
				<div class="container">						
					<div class="detail__img">
						<?php 
							$image = rwmb_meta('prefix_event-image')['ID'];
							$icon = wp_get_attachment_image_url( $image, 'full' );
							echo '<img src="' . $icon . '">';
						?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="content-news_box">
					<div class="content__detail">
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
								<span>Share</span>

								<ul class="no-style">
									<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" title="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" title="" target="_blank"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<?php get_sidebar(); ?>
				</div>
			</div>				
		</div>
	</section> <!-- /Content News Detail -->

	<section class="content-news-interested">
		<div class="container">
			<div class="content-news_box">
				<h2 class="heading"><?= changeLang('You may be interested in...','Có thể bạn quan tâm .. '); ?></h2>

				<div class="items">
					<?php $query = get_related_posts(get_the_ID(),4);
					if($query->have_posts()):
						while($query->have_posts()): $query->the_post(); ?>
							<div class="item">
								<div class="item__img" style="background-image: url(<?= the_post_thumbnail_url(); ?>);">
									<img src="<?= the_post_thumbnail_url(); ?>" alt="">
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
						<?php endwhile;
					endif; ?>
				</div>
				<?php $post_list =  the_dramatist_order_posts_by_tag_count();
				foreach ($post_list as $post_item) {
				 } ?>
				<?= do_shortcode( "[ads_slide]" ); ?>
			</div>
		</div>
	</section>
</main>  <!-- /Content -->
<?php get_footer(); ?>
