<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeSvtlnR
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>
		About me
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
		<div class="hdr">
				Svetlana Ragulina
		</div>	
	</header>
	<nav class ="navmenu"> 
		<div id="sandwich">
				<div class="stripe"></div>
				<div class="stripe"></div>
				<div class="stripe"></div>
		</div>
		<?php 	
		wp_nav_menu( array('theme_location' => 'menu-1', 'container'=>'', 'depth'=>'1', 'echo'=>'1')); ?>  
		<!-- <div id="sandwich">
				<div class="stripe"></div>
				<div class="stripe"></div>
				<div class="stripe"></div>
		</div>
		<ul>
			<li class="navli"><div id="shgi"><a href="#geninf">General information</a></div></li>
			<li class="navli"><div id="shfsh"><a href="#favsh">Favourite shows</a></div></li>
			<li class="navli"><div id="shcont"><a href="#cont">Contacts</a></div></li>
			<li class="navli"><div id="shoff"><a href="#offer">Create offer</a></div></li>
			<li class="navli"><div id="shposts">Posts</div></li>
		</ul> -->
		<!-- <div id="sandwich">
				<div class="stripe"></div>
				<div class="stripe"></div>
				<div class="stripe"></div>
		</div>
		<ul>
			<li class="navli"><div id="shgi">General information</div></li>
			<li class="navli"><div id="shfsh">Favourite shows</div></li>
			<li class="navli"><div id="shcont">Contacts</div></li>
			<li class="navli"><div id="shoff">Create offer</div></li>
			<li class="navli"><div id="shposts">Posts</div></li>
		</ul> -->
		<!-- <div id="sandwich">
				<div class="stripe"></div>
				<div class="stripe"></div>
				<div class="stripe"></div>
		</div>
		<ul>
			<li class="navli"><div class="shgi">General information</div></li>
			<li class="navli"><div class="shfsh">Favourite shows</div></li>
			<li class="navli"><div class="shcont">Contacts</div></li>
			<li class="navli"><div class="shoff">Create offer</div></li>
			<li class="navli"><div class="shposts">Posts</div></li>
		</ul> --> 
	</nav> 
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'themesvtlnr' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$themesvtlnr_description = get_bloginfo( 'description', 'display' );
			if ( $themesvtlnr_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $themesvtlnr_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		--><!-- .site-branding -->

<!-- 		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'themesvtlnr' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> --><!-- #site-navigation -->
	<!--</header>--><!-- #masthead -->
</div> 
	<div id="content" class="site-content">
