<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ScienceSport
 */

?>
<? $frontpage_id = get_option( 'page_on_front' )?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/744314ae1c.js" crossorigin="anonymous"></script> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sciencesport' ); ?></a>

	<header id="masthead" class="site-header  masthead_visible_mobile">

		

			

		<nav id="site-navigation" class="main-navigation">
		
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="login-or-register-main-container" style="display:none">
			<div class="log-in-or-register">
					<a href ="http://sciencesport.local/wp-admin" class="log-in loginreg">Log in</a>
					<a href ="<?echo get_permalink(280)?>" class="Register loginreg">Register User</a>
			</div>
		</div>
		<div class="login-or-register-main-container-mobile">
			<div class="log-in-or-register">
					<a href ="http://sciencesport.local/wp-admin" class="log-in loginreg">Log in</a>
					<a href ="<?echo get_permalink(280)?>" class="Register loginreg">Register User</a>
			</div>
		</div>


		<nav id="site-navigation" class="main-navigation-mobile">
			<i class="fa-solid fa-bars mobile-bars-visible"></i>
			<i class="fa-regular fa-user fa-user-item-mobile"></i>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'mobile',
				)
			);
			?>
		</nav><!-- #site-navigation -->


		
	</header><!-- #masthead -->


	


	
	

	
	
	

</div>