<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ScienceSport
 */



get_header();
?>

	<main id="primary" class="site-main single">
		<div class="single-cover"></div>
		<div class="breadcrumbs"><?ah_breadcrumb()?></div>
		<div class="single-flex-con">
			<div class="single-con">
			<?php
				while ( have_posts() ) :
				the_post();
			?>
				<div class="post-container">
						<div class="post-container-thumbnail" style="background-image:url('<?echo get_the_post_thumbnail_url()?>')"></div>
						<div class="post-data-post">
							<div class="post-date"><?echo get_the_date()?></div>
							<h3 class="post-title"><?echo get_the_title()?></h3>
							<div class="post-content"><?echo get_the_content()?></div>
						</div>
				</div>
			<?
			



				endwhile; // End of the loop.
				?>

				<div class="post-navigation">
					<?
					the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sciencesport' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sciencesport' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
					?>
				</div>
			</div>
			<div class="sidebar-con"><?get_sidebar();?></div>
		</div>
	</main><!-- #main -->

<?php


get_footer();
