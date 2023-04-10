<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ScienceSport
 */

  $large_image_homepage = get_field("homepage_large_image");
  $fifth_content_image = get_field("fifth_content_image");
  $microsoft_logo = get_field("microsoft_logo");
  $apple_logo = get_field("apple_logo");
  $nestle_logo = get_field("nestle_logo");




get_header();
?>

	<main id="primary" class="site-main">
		<div class="first-hero-border-bottom-homepage"></div>
		<div class="first-hero-homepage">
		<div class="first-hero-homepage-holder">
		<?if (the_custom_logo()):?>
					<?the_custom_logo()?>
		<?endif;?>
			<h1 class="h1-first-hero-homepage">YOGA CLASSES</h1>
			<div class="text-btn-first-hero-homepage">
				<h3 class="h3-first-hero-homepage">BODY HARMONY</h3>
				<p class="p-first-hero-homepage">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vitae sit ratione, vel et a numquam neque aperiam maxime harum magnam minus totam odit quibusdam consequuntur laboriosam ullam voluptate. Dignissimos? adipisicing elit. Enim vitae sit ratione, vel et a numquam neque aperiam maxime harum magnam minus totam odit quibusdam consequuntur laboriosam ullam voluptate. Dignissimos?
				</p>
				<button class="btn-first-hero-homepage">More</button>
			</div>
		</div>
		
		</div>




		<div class="large_image_homepage_container">
				<div class="large_image_main_container">
					<div class="large_image_title_container">
						<i class="fa-solid fa-caret-right fa-caret"></i>
						<h1 class="large_image_title">OUR PHILOSOPHY</h1>
						<i class="fa-solid fa-caret-left fa-caret"></i>
					</div>
					<div class="large_image_flex_text_container">
						<p class="large_image_text1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis sed eos obcaecati optio minima sapiente laboriosam expedita, quidem eaque debitis modi, laudantium itaque tempora sint! Harum, quam id? Molestiae, ad, dolorum nobis earum incidunt magnam possimus sunt ratione aliquam similique voluptatum vel harum est eveniet.
						</p>
						<p class="large_image_text2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, laudantium id, doloribus dolorum quis tenetur pariatur quaerat beatae nemo eos distinctio ipsa eaque, ad amet corrupti. Illum facilis expedita eligendi! Doloribus architecto, quaerat ut labore repellat voluptate nobis! Ex odio accusantium harum alias aliquam, itaque ipsum quam voluptatem officia fuga!
						</p>
					</div>
					<div class="btn_container">
						<button class="large_image_btn">Read More</button>
					</div>
				</div>

			
			
			<div class="large_image_homepage" style="background-image: url('<?echo $large_image_homepage?>')">
			    
			</div>
		</div>


		<?php $loop = new WP_Query( array( 'post_type' => 'services' ) ); ?>
		
		<div class="third_content_homepage_border">
			<div class="third_content_homepage">
				<div class="third_content_homepage_title_container">
					<div class="third_content_homepage_flex">
						<i class="fa-solid fa-caret-right fa-caret-third"></i>
						<h3 class="third_content_title">JOIN OUR COMMUNITY</h3>
					</div>

					<h3 class="third_content_subtitle">RELAX YOUR BODY AND MIND</h3>
				</div>
				<?if($loop -> have_posts()):?>
				<div class="front-page-posts-carousel">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  					<div>
						<div class="service-post-container">
							<div class="service-post-container-thumbnail" style="background-image:url('<?echo get_the_post_thumbnail_url()?>')"></div>
							<div class="service-post-data-post">
								<div class="service-post-date"><?echo get_the_date()?></div>
								<h3 class="service-post-title"><?echo get_the_title()?></h3>
								<p class="serivce-post-excerpt"><?echo get_the_excerpt()?></p>
								<a class="service-post-click-more" href="<?the_permalink()?>">See More</a>
							</div>
							
						</div>
					</div>
				<? endwhile;?>
				</div>
				<? endif; ?>
			</div>	
		</div>



		<div class="front-page-companies-carousel">
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $microsoft_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $apple_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $nestle_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $microsoft_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $microsoft_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $microsoft_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $microsoft_logo?>')"></div>
				</div>
			</div>
			<div>
				<div class="logo-companies-container">
					<div class="logo-companies" style="background-image:url('<?echo $microsoft_logo?>')"></div>
				</div>
			</div>

		</div>




		<div class="fourth-content-homepage-border">
			<div class="fourth-content-homepage">
				<div class="fourth-content-homepage-holder">
				<h3 class="fourth-content-homepage-title">OUR METHODOLOGY</h3>
				<div class="fourth-content-homepage-text-container">
					<p class="fourth-content-homepage-first-text">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis sed eos obcaecati optio minima sapiente laboriosam expedita, quidem eaque debitis modi, laudantium itaque tempora sint! Harum, quam id? Molestiae, ad, dolorum nobis earum incidunt magnam possimus sunt ratione aliquam similique voluptatum vel harum est eveniet.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis sed eos obcaecati optio minima sapiente laboriosam expedita, quidem eaque debitis modi, laudantium itaque tempora sint! Harum.
					</p>
					<p class="fourth-content-homepage-second-text">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis sed eos obcaecati optio minima sapiente laboriosam expedita, quidem eaque debitis modi, laudantium itaque tempora sint! Harum, quam id? Molestiae, ad, dolorum nobis earum incidunt magnam possimus sunt ratione aliquam similique voluptatum vel harum est eveniet.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis sed eos obcaecati optio minima sapiente laboriosam expedita, quidem eaque debitis modi, laudantium itaque tempora sint! Harum.
					</p>
				</div> 
				<button class="fourth-content-homepage-btn">Read More</button>
				</div>
			</div>
		</div>


		<div class="fifth-content-homepage-container">
			<div class="fifth-content-homepage" style="background-image:url('<?echo $fifth_content_image?>')">	
			</div>
			<div class="fifth-content-homepage-title-container">
						<div class="fifth-content-homepage-title-1-container">	
							<i class="fa-solid fa-caret-right fa-caret-fifth"></i>
							<h3 class="fifth_content_title">Inhale</h3>
						</div>
						<div class="fifth-content-homepage-title-2-container">
							<i class="fa-solid fa-caret-right fa-caret-fifth"></i>
							<h3 class="fifth_content_title">Exhale</h3>
						</div>
						<h3 class="fifth-content-homepage-title-3">YOGA THERAPY</h3>
			</div>
		</div> 


		
		


			
		
	






	

		

	</main><!-- #main -->

<?php
get_footer();


