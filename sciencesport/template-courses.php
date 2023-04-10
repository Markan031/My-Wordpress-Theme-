<?
/* Template Name: Courses Template 
   Template Post Type: Services
*/ 


 $hero_image = get_field("hero_image");

get_header();
?>

  <main id="primary" class="site-main courses"> 
  <div class="single-cover"></div>

  <div class="courses-title">
    <h1 class="courses-h1-title">OUR COURSES</h1>
  </div>
            <?
              $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'Services',
                    'field'    => 'slug',
                    'terms'    => 'courses',
                  ),
                ),
            );
            $arr_posts = new WP_Query( $args );
            ?>
            <div class ="courses-flex">
            <?
            
            if ( $arr_posts->have_posts() ) :

                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
  				              
					              	<div class="service-post-container">
					              		<div class="service-post-container-thumbnail" style="background-image:url('<?echo get_the_post_thumbnail_url()?>')"></div>
					              		<div class="service-post-data-post">
					              			<div class="service-post-date"><?echo get_the_date()?></div>
					              			<h3 class="service-post-title"><?echo get_the_title()?></h3>
					              			<p class="serivce-post-excerpt"><?echo get_the_excerpt()?></p>
					              			<a class="service-post-click-more" href="<?the_permalink()?>">See More</a>
					              		</div>

					              	</div>
					             
                <?endwhile; ?>
            <?endif; ?>
            </div>



  </main>


<?php
get_footer();
