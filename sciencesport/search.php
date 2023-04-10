<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ScienceSport
 */

get_header();
?>
	<div class="search-query-covering"></div>
	<main id="primary" class="site-main search-query">

		<?php if ( have_posts() ) : ?>

			<header class="page-header-search">
				<h1 class="page-title-search">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'sciencesport' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
				<div class="search-input-field"><?get_search_form()?></div>
			</header><!-- .page-header -->

			
			<div class="search-query-posts">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<a href="<?the_permalink()?>" class="service-post-container-search">
					<div class="service-post-container-thumbnail" style="background-image:url('<?echo get_the_post_thumbnail_url()?>')"></div>
					<div class="service-post-data-post">
						<div class="service-post-date"><?echo get_the_date()?></div>
						<h3 class="service-post-title"><?echo get_the_title()?></h3>
						<p class="serivce-post-excerpt"><?echo get_the_excerpt()?></p>
						<div class="service-post-click-more" href="<?the_permalink()?>">See More</div>
					</div>
				</a>
			<?
			endwhile;
			
			?>
			
			</div>
			<?
			?>
			
			
		
			
			<?

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
