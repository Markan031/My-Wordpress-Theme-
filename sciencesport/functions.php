<?php
/**
 * ScienceSport functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ScienceSport
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sciencesport_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ScienceSport, use a find and replace
		* to change 'sciencesport' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sciencesport', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'sciencesport' ),
			'menu-2' => esc_html__( 'Mobile', 'sciencesport' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sciencesport_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sciencesport_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sciencesport_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sciencesport_content_width', 640 );
}
add_action( 'after_setup_theme', 'sciencesport_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sciencesport_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sciencesport' ),
			'id'            => 'sidebar-1',
		)
	);
}
add_action( 'widgets_init', 'sciencesport_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sciencesport_scripts() {
	wp_enqueue_style( 'sciencesport-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'sciencesport-css', get_template_directory_uri() . '/css/sciencesport.css',false,'1.1','all');
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css',array(), false,'all');
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', array('slick-css'),false,'all');
	wp_style_add_data( 'sciencesport-style', 'rtl', 'replace' );
	

	wp_enqueue_script( 'sciencesport-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sciencesport-js', get_template_directory_uri() . '/js/ScienceSport.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick-min-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick-index-js', get_template_directory_uri() . '/js/carousel/index.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobileMenu.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sciencesport_scripts' );






/* custom post type */


function custom_post_type_Services() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Services', 'Post Type General Name', 'sciencesport' ),
			'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'sciencesport' ),
			'menu_name'           => __( 'Services', 'sciencesport' ),
			'parent_item_colon'   => __( 'Parent Services', 'sciencesport' ),
			'all_items'           => __( 'All Services', 'sciencesport' ),
			'view_item'           => __( 'View Services', 'sciencesport' ),
			'add_new_item'        => __( 'Add New Services', 'sciencesport' ),
			'add_new'             => __( 'Add New', 'sciencesport' ),
			'edit_item'           => __( 'Edit Services', 'sciencesport' ),
			'update_item'         => __( 'Update Services', 'sciencesport' ),
			'search_items'        => __( 'Search Services', 'sciencesport' ),
			'not_found'           => __( 'Not Found', 'sciencesport' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'sciencesport' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'Services', 'sciencesport' ),
			'description'         => __( 'Services news and reviews', 'sciencesport' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes'),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_admin_column' => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'menu_icon' => 'dashicons-admin-users',
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
			'rewrite'           =>  array('slug' => '', 'with_front' => true)// my custom slug
			 
			// This is where we add taxonomies to our CPT
			
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'Services', $args );
	 
	}

	add_action( 'init', 'custom_post_type_Services', 0 );

	function add_custom_taxonomies_Services() {
		// Add new "Area" taxonomy to Posts
		register_taxonomy('Services', 'services', array(
		  // Hierarchical taxonomy (like categories)
		  'hierarchical' => true,
		  // This array of options controls the labels displayed in the WordPress Admin UI
		  'labels' => array(
			'name' => _x( 'Services Category', 'taxonomy general name' ),
			'singular_name' => _x( 'Services Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Services Category' ),
			'all_items' => __( 'All Services Category' ),
			'parent_item' => __( 'Parent Services Category' ),
			'parent_item_colon' => __( 'Parent Services Category:' ), 
			'edit_item' => __( 'Edit Services Category' ),
			'update_item' => __( 'Update Services Category' ),
			'add_new_item' => __( 'Add New Services Category' ),
			'new_item_name' => __( 'New Services Category Name' ),
			'menu_name' => __( 'Services Categories' ),
		  ),
		  // Control the slugs used for this taxonomy
		  'rewrite' => array(
			'slug' => '', // This controls the base slug that will display before each term
			'with_front' => true, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		  ),
		));
	  }
	  add_action( 'init', 'add_custom_taxonomies_Services', 0 );







	  function front_page_script() {
		if (is_front_page()) { 
		  ?>
			  <script type="text/javascript">
				window.onload=function(){

					let fourthcontenthomepagebtn = document.getElementsByClassName("fourth-content-homepage-btn")[0];
					let fourthcontenthomepagetextcontainer = document.getElementsByClassName("fourth-content-homepage-text-container")[0];
						let fourthcontentshow = false;
						Array.from(fourthcontenthomepagetextcontainer.children).forEach((child) => {
						  child.classList.add("fourth-content-homepage-text-height");
						});

						fourthcontenthomepagebtn.addEventListener("click", () => {
						  let readLess = document.createTextNode("Read Less");
						  let readMore = document.createTextNode("Read More");
						  if (!fourthcontentshow) {
						    Array.from(fourthcontenthomepagetextcontainer.children).forEach((child) => {
						      child.classList.replace(
						        "fourth-content-homepage-text-height",
						        "fourth-content-homepage-text-height-show"
						      );
						    });
						
						    fourthcontenthomepagebtn.childNodes[0].remove(
						      fourthcontenthomepagebtn.childNodes[0]
						    );
						    fourthcontenthomepagebtn.appendChild(readLess);
						    fourthcontentshow = true;
						  } else {
						    Array.from(fourthcontenthomepagetextcontainer.children).forEach((child) => {
						      child.classList.replace(
						        "fourth-content-homepage-text-height-show",
						        "fourth-content-homepage-text-height"
						      );
						    });
						    fourthcontenthomepagebtn.childNodes[0].remove(
						      fourthcontenthomepagebtn.childNodes[0]
						    );
						    fourthcontenthomepagebtn.appendChild(readMore);
						    fourthcontentshow = false;
						  }
						});




					if (window.innerWidth <= 1750) {
					  large_image_main_container.classList.replace(
					    "large_image_main_container",
					    "large_image_main_container_static"
					  );
					  fourthcontenthomepageholder.classList.replace(
					    "fourth-content-homepage-holder",
					    "fourth-content-homepage-holder-static"
					  );
					}

				}
				
			  </script>
		  <?php
		}
	  }
	  add_action('wp_head', 'front_page_script');




	  function about_us_page_script() {
		if (is_page(12)) { 
		  ?>
			  <script type="text/javascript">
				window.onload=function(){
					let readmore_aboutus_toggle_first = false;
					let readmore_aboutus_toggle_second = false;
					let readmoreaboutusfirstinfotext = document.getElementsByClassName("read-more-about-us-first-info-text")[0];
					let readmoreaboutussecondinfotext = document.getElementsByClassName("read-more-about-us-second-info-text")[0];
					let aboutusfirstinfotext = document.getElementsByClassName("about-us-first-info-text")[0];
					let aboutussecondinfotext = document.getElementsByClassName("about-us-second-info-text")[0];
					let readLessfirst = document.createTextNode("Read Less");
					let readMorefirst = document.createTextNode("Read More");
					let readLesssecond = document.createTextNode("Read Less");
					let readMoresecond = document.createTextNode("Read More");
					aboutusfirstinfotext.classList.add("about-us-first-info-text-read-less");
					aboutussecondinfotext.classList.add("about-us-second-info-text-read-less");
					readmoreaboutusfirstinfotext.addEventListener("click", ()=>{
						if(!readmore_aboutus_toggle_first){
							aboutusfirstinfotext.classList.replace("about-us-first-info-text-read-less", "about-us-first-info-text-read-more")
							readmoreaboutusfirstinfotext.childNodes[0].remove(
								readmoreaboutusfirstinfotext.childNodes[0]
						    );
							readmoreaboutusfirstinfotext.appendChild(readLessfirst);
							readmore_aboutus_toggle_first = true;
						}else{
							aboutusfirstinfotext.classList.replace("about-us-first-info-text-read-more", "about-us-first-info-text-read-less")
							readmoreaboutusfirstinfotext.childNodes[0].remove(
								readmoreaboutusfirstinfotext.childNodes[0]
						    );
							readmoreaboutusfirstinfotext.appendChild(readMorefirst);
							readmore_aboutus_toggle_first = false;
						}

					})
					readmoreaboutussecondinfotext.addEventListener("click", ()=>{
						if(!readmore_aboutus_toggle_second){
							aboutussecondinfotext.classList.replace("about-us-second-info-text-read-less", "about-us-second-info-text-read-more")
							readmoreaboutussecondinfotext.childNodes[0].remove(
								readmoreaboutussecondinfotext.childNodes[0]
						    );
							readmoreaboutussecondinfotext.appendChild(readLesssecond);
							readmore_aboutus_toggle_second = true;
						}else{
							aboutussecondinfotext.classList.replace("about-us-second-info-text-read-more", "about-us-second-info-text-read-less")
							readmoreaboutussecondinfotext.childNodes[0].remove(
								readmoreaboutussecondinfotext.childNodes[0]
						    );
							readmoreaboutussecondinfotext.appendChild(readMoresecond);
							readmore_aboutus_toggle_second = false;
						}

					})
					

				}
				
			  </script>
		  <?php
		}
	  }
	  add_action('wp_head', 'about_us_page_script');





	  
	  function services_posts_script() {
		if (is_single() ) { 
		  ?>
			  <script type="text/javascript">
				window.onload=function(){
				let navlinks = document.getElementsByClassName("nav-links")[0];

					Array.from(navlinks.children).forEach((navlinksChild) => {
 						navlinksChild.children[0].children[1].classList.add("navlinksDelete")
					}); 
				}
				
			  </script>
		  <?php
		}
	  }
	  add_action('wp_head', 'services_posts_script');
	  







	  function wpb_list_child_pages() { 

		global $post; 
	
		$id = ( is_page() && $post->post_parent ) ? $post->post_parent : $post->ID;
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $id . '&echo=0' );
		//you can add `&depth=1` in the end, so it only shows one level
	
		if ( $childpages ) {    
			$string = '<ul>' . $childpages . '</ul>';
		}
	
		return $string;
	}
	
	add_shortcode('wpb_childpages', 'wpb_list_child_pages');




	function post_pagination($paged = '', $max_page = '') {
		if (!$paged) {
			$paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
		}
	
		if (!$max_page) {
			global $wp_query;
			$max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
		}
	
		$big  = 999999999; // need an unlikely integer
	
		$html = paginate_links(array(
			'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'     => '?paged=%#%',
			'current'    => max(1, $paged),
			'total'      => $max_page,
			'mid_size'   => 1,
			'prev_text'  => __('« Prev'),
			'next_text'  => __('Next »'),
		));
	
		$html = "<div class='navigation pagination'>" . $html . "</div>";
	
		echo $html;
	}


	  
	

	  



/* BreadCrumbs */

function ah_breadcrumb() {

	// Check if is front/home page, return
	if ( is_front_page() ) {
	  return;
	}
  
	// Define
	global $post;
	$custom_taxonomy  = 'Services'; // If you have custom taxonomy place it here
  
	$defaults = array(
	  'seperator'   =>  '/',
	  'id'          =>  'ah-breadcrumb',
	  'classes'     =>  'ah-breadcrumb',
	  'home_title'  =>  esc_html__( 'Home', '' )
	);
  
	$sep  = '<li class="seperator">'. esc_html( $defaults['seperator'] ) .'</li>';
  
	// Start the breadcrumb with a link to your homepage
	echo '<ul id="'. esc_attr( $defaults['id'] ) .'" class="'. esc_attr( $defaults['classes'] ) .'">';
  
	// Creating home link
	echo '<li class="item"><a href="'. get_home_url() .'">'. esc_html( $defaults['home_title'] ) .'</a></li>' . $sep;
  
	if ( is_single() ) {
  
	  // Get posts type
	  $post_type = get_post_type();
  
	  // If post type is not post
	  if( $post_type != 'post' ) {
  
		$post_type_object   = get_post_type_object( $post_type );
		$post_type_link     = get_post_type_archive_link( $post_type );
  
		echo '<li class="item item-cat"><a href="'. $post_type_link .'">'. $post_type_object->labels->name .'</a></li>'. $sep;
  
	  }
  
	  // Get categories
	  $category = get_the_category( $post->ID );
  
	  // If category not empty
	  if( !empty( $category ) ) {
  
		// Arrange category parent to child
		$category_values      = array_values( $category );
		$get_last_category    = end( $category_values );
		// $get_last_category    = $category[count($category) - 1];
		$get_parent_category  = rtrim( get_category_parents( $get_last_category->term_id, true, ',' ), ',' );
		$cat_parent           = explode( ',', $get_parent_category );
  
		// Store category in $display_category
		$display_category = '';
		foreach( $cat_parent as $p ) {
		  $display_category .=  '<li class="item item-cat">'. $p .'</li>' . $sep;
		}
  
	  }
  
	  // If it's a custom post type within a custom taxonomy
	  $taxonomy_exists = taxonomy_exists( $custom_taxonomy );
  
	  if( empty( $get_last_category ) && !empty( $custom_taxonomy ) && $taxonomy_exists ) {
  
		$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
		$cat_id         = $taxonomy_terms[0]->term_id;
		$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
		$cat_name       = $taxonomy_terms[0]->name;
  
	  }
  
	  // Check if the post is in a category
	  if( !empty( $get_last_category ) ) {
  
		echo $display_category;
		echo '<li class="item item-current">'. get_the_title() .'</li>';
  
	  } else if( !empty( $cat_id ) ) {
  
		echo '<li class="item item-cat"><a href="'. $cat_link .'">'. $cat_name .'</a></li>' . $sep;
		echo '<li class="item-current item">'. get_the_title() .'</li>';
  
	  } else {
  
		echo '<li class="item-current item">'. get_the_title() .'</li>';
  
	  }
  
	} else if( is_archive() ) {
  
	  if( is_tax() ) {
		// Get posts type
		$post_type = get_post_type();
  
		// If post type is not post
		if( $post_type != 'post' ) {
  
		  $post_type_object   = get_post_type_object( $post_type );
		  $post_type_link     = get_post_type_archive_link( $post_type );
  
		  echo '<li class="item item-cat item-custom-post-type-' . $post_type . '"><a href="' . $post_type_link . '">' . $post_type_object->labels->name . '</a></li>' . $sep;
  
		}
  
		$custom_tax_name = get_queried_object()->name;
		echo '<li class="item item-current">'. $custom_tax_name .'</li>';
  
	  } else if ( is_category() ) {
  
		$parent = get_queried_object()->category_parent;
  
		if ( $parent !== 0 ) {
  
		  $parent_category = get_category( $parent );
		  $category_link   = get_category_link( $parent );
  
		  echo '<li class="item"><a href="'. esc_url( $category_link ) .'">'. $parent_category->name .'</a></li>' . $sep;
  
		}
  
		echo '<li class="item item-current">'. single_cat_title( '', false ) .'</li>';
  
	  } else if ( is_tag() ) {
  
		// Get tag information
		$term_id        = get_query_var('tag_id');
		$taxonomy       = 'post_tag';
		$args           = 'include=' . $term_id;
		$terms          = get_terms( $taxonomy, $args );
		$get_term_name  = $terms[0]->name;
  
		// Display the tag name
		echo '<li class="item-current item">'. $get_term_name .'</li>';
  
	  } else if( is_day() ) {
  
		// Day archive
  
		// Year link
		echo '<li class="item-year item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></li>' . $sep;
  
		// Month link
		echo '<li class="item-month item"><a href="'. get_month_link( get_the_time('Y'), get_the_time('m') ) .'">'. get_the_time('M') .' Archives</a></li>' . $sep;
  
		// Day display
		echo '<li class="item-current item">'. get_the_time('jS') .' '. get_the_time('M'). ' Archives</li>';
  
	  } else if( is_month() ) {
  
		// Month archive
  
		// Year link
		echo '<li class="item-year item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></li>' . $sep;
  
		// Month Display
		echo '<li class="item-month item-current item">'. get_the_time('M') .' Archives</li>';
  
	  } else if ( is_year() ) {
  
		// Year Display
		echo '<li class="item-year item-current item">'. get_the_time('Y') .' Archives</li>';
  
	  } else if ( is_author() ) {
  
		// Auhor archive
  
		// Get the author information
		global $author;
		$userdata = get_userdata( $author );
  
		// Display author name
		echo '<li class="item-current item">'. 'Author: '. $userdata->display_name . '</li>';
  
	  } else {
  
		echo '<li class="item item-current">'. post_type_archive_title() .'</li>';
  
	  }
  
	} else if ( is_page() ) {
  
	  // Standard page
	  if( $post->post_parent ) {
  
		// If child page, get parents
		$anc = get_post_ancestors( $post->ID );
  
		// Get parents in the right order
		$anc = array_reverse( $anc );
  
		// Parent page loop
		if ( !isset( $parents ) ) $parents = null;
		foreach ( $anc as $ancestor ) {
  
		  $parents .= '<li class="item-parent item"><a href="'. get_permalink( $ancestor ) .'">'. get_the_title( $ancestor ) .'</a></li>' . $sep;
  
		}
  
		// Display parent pages
		echo $parents;
  
		// Current page
		echo '<li class="item-current item">'. get_the_title() .'</li>';
  
	  } else {
  
		// Just display current page if not parents
		echo '<li class="item-current item">'. get_the_title() .'</li>';
  
	  }
  
	} else if ( is_search() ) {
  
	  // Search results page
	  echo '<li class="item-current item">Search results for: '. get_search_query() .'</li>';
  
	} else if ( is_404() ) {
  
	  // 404 page
	  echo '<li class="item-current item">' . 'Error 404' . '</li>';
  
	}
  
	// End breadcrumb
	echo '</ul>';
  
  }




  function vicode_registration_form(){
	//if user is not logged in
	if(!is_user_logged_in()){
		//check if registration is enabled
		$registration_enabled = get_option('users_can_register');

		if($registration_enabled){
			$output = vicode_registration_fields();

			
			
		}else{
			echo 'error!';
		}
		return $output;
		
		
	}else{
	ob_start(); ?>
		<div class="already-registered-con">
			<div class="already-registered-con2">
				<h1 class="already-registered"> You have already registered to our site</h1>
		 		<h1 class="already-registered-info">Go to Login page, thank you!</h1>
			</div>
		</div>
		<div class="already-register-covering"></div>
	
		<? 
		

	} 
  }
  add_shortcode('register_form', 'vicode_registration_form');

  function vicode_registration_fields(){
	ob_start(); ?>
	<?
		// show reg errors	
	
	?>
		
	<form id ="vicode_registration_form" class="vicode_form" action="" method="POST">

		<div class="testing-reg"><?echo do_shortcode("[user_email_exists]")?></div>


		<div class="username-login-container login-container">
			<input type ="text" name="vicode_user_login" id="vicode_user_login" class="vicode_user_login" placeholder="Username" required />
		</div>

		<div class="email-login-container login-container">
			<input type ="email" name="vicode_email_login" id="vicode_email_login" class="vicode_email_login" placeholder="Your Email" required />
		</div>
		<div class="firstname-login-container login-container">
		
			<input type ="text" name="vicode_username_login" id="vicode_username_login" class="vicode_username_login" placeholder="Your First name" />
		</div>
		<div class="lastname-login-container login-container">
	
			<input type ="text" name="vicode_lastname_login" id="vicode_lastname_login" class="vicode_lastname_login" placeholder="Your Last name" />
		</div>
		<div class="password-login-container login-container">
	
			<input type ="password" name="vicode_password_login" id="vicode_password_login" class="vicode_password_login" placeholder="Your Password" required />
		</div>


		<div class="csrf-login-container login-container">
			<input type ="hidden" name="vicode_csrf" value="<?echo wp_create_nonce('vicode-csrf');?>"/>
			<input type="submit" value="<?_e('Register Your Account'); ?>" class="submit-register" />
		</div>

  	</form>

	<div class="not-register-covering"></div>

	<?
	return ob_get_clean();
  }

  


  //register new user 

  function vicode_add_new_user(){
		$user_login = (isset($_POST['vicode_user_login']) ? $_POST['vicode_user_login'] : '');
		$user_email = (isset($_POST['vicode_email_login']) ? $_POST['vicode_email_login'] : '');
		$user_firstname = (isset($_POST['vicode_username_login']) ? $_POST['vicode_username_login'] : '');
		$user_lastname = (isset($_POST['vicode_lastname_login']) ? $_POST['vicode_lastname_login'] : '');
		$user_password = (isset($_POST['vicode_password_login']) ? $_POST['vicode_password_login'] : '');

		if ( !username_exists( $user_login ) && !email_exists( $user_email ) ) {
			$user_id = wp_create_user( $user_login, $user_password, $user_email );
			if( !is_wp_error($user_id) ) {
				//user has been created
				$user_login = new WP_User( $user_id );
				$user_login->set_role( 'contributor' );
				//Redirect
				if($user_id){
					//send an email to the admin
					wp_new_user_notification($user_id);
	
					//log the user in
					wp_set_current_user($user_id, $user_login);
					do_action('wp_login', $user_login);
	
					//send user to homepage
				    wp_redirect(home_url());  


				}

				exit; 
			
			} else {
				//$user_id is a WP_Error object. Manage the error
			}


		

		 }if(email_exists( $user_email ) || username_exists( $user_login )){
			ob_start();
			if(email_exists( $user_email )){	
				?>
					<div class="email-exists-con">
						<h1 class="email-exists">This Email already exists!</h1>
					</div>

				<?
				
			
			}
			if(username_exists( $user_login )){	
			    ?>
					<div class="username-exists-con">
						<h1 class="username-exists">This Username already exists!</h1>
					</div>
				<?
				
				
				
	
			}
			return ob_get_clean();
			

		 }
		
		


		}
		

		
		
		add_shortcode('user_email_exists', 'vicode_add_new_user');

  add_action('init', 'vicode_add_new_user');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

