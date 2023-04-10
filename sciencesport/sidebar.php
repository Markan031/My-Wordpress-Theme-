<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ScienceSport
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,

);
$side_bar_latest_posts = new WP_Query($args);


$args = array(
  'post_type' => 'services',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'tax_query' => array(
/* 	array(
	  'taxonomy' => 'Services',
	  'field'    => 'slug',
	  'terms'    => 'courses',
	), */
  ),
);
$our_services = new WP_Query( $args );

?>

<aside id="secondary" class="widget-area sidebar-main-con">
	<div class="search-input-field"><?get_search_form()?></div>
	<div class="latest-posts-main-con">
		<?if($side_bar_latest_posts -> have_posts()):?>
			<h1 class="latest-posts-h1">LATEST POSTS</h1>
		<?while ($side_bar_latest_posts -> have_posts()): 
			$side_bar_latest_posts -> the_post();?>
			<a class="latest-post" href="<?the_permalink()?>">
				<div class="latest-post-thumbnail" style="background-image:url('<?echo get_the_post_thumbnail_url()?>')"></div>
				<div class="latest-post-info">
					<div class="latest-post-info-title-and-date">
						<div class="latest-post-title"><?echo get_the_title()?></div>
						<div class="latest-post-date"><?echo get_the_date()?></div>
					</div>
					<div class="latest-post-info-content"><?echo get_the_excerpt()?></div>
				</div>
			</a>
		<?endwhile;?>
		<?endif;?>
	</div>
	<div class="services-posts-main-con">
		<?if($our_services-> have_posts()):?>
			<h1 class="latest-posts-h1">OUR SERVICES</h1>
		<?while ($our_services -> have_posts()): 
			$our_services -> the_post();?>
			<a class="latest-post" href="<?the_permalink()?>">
				<div class="latest-post-thumbnail" style="background-image:url('<?echo get_the_post_thumbnail_url()?>')"></div>
				<div class="latest-post-info">
					<div class="latest-post-info-title-and-date">
						<div class="latest-post-title"><?echo get_the_title()?></div>
						<div class="latest-post-date"><?echo get_the_date()?></div>
					</div>
					<div class="latest-post-info-content"><?echo get_the_excerpt()?></div>
				</div>
			</a>
		<?endwhile;?>
		<?endif;?>
	</div>
</aside><!-- #secondary -->
