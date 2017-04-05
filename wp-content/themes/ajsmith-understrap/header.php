<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel='stylesheet' id='understrap-styles-css'  href='/AJSmith/wp-content/themes/ajsmith-understrap/sass/theme/_theme.css' type='text/css' media='all' />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- <style>.svg-clipped{-webkit-clip-path:url(#svgPath);clip-path:url(#svgPath);}</style>

<div class="svg-clipped" style="background:url(/AJSmith/wp-content/themes/ajsmith-understrap/img/kayaking.jpg);height: 800px; width: 800px;"></div>

<svg height="0" width="0" class="hero__title">
	<defs>
		<clippath id="svgPath">
			<text x="0" y="300" textLength="690" lengthAdjust="spacing" font-family="christopherhand" font-size="210px" font-weight="700">AJ Smith</text>
		</clippath>
	</defs>
</svg> -->

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->

	<div class="text-wrap">
  <svg viewBox="0 0 500 80">
    <pattern 
             id="p-img1" 
             viewBox="0 0 300 100"
             patternUnits="userSpaceOnUse"
             width="200%" height="200%"
             x="-60%" y="-10%">
      <image xlink:href="/AJSmith/wp-content/themes/ajsmith-understrap/img/iceberg.jpg" width="300" height="200"/>
    </pattern>
	<pattern 
             id="p-img2" 
             viewBox="0 0 300 100"
             patternUnits="userSpaceOnUse"
             width="200%" height="200%"
             x="-60%" y="-10%">
      <image xlink:href="/AJSmith/wp-content/themes/ajsmith-understrap/img/gorge.jpg" width="300" height="200"/>
    </pattern>
    <text text-anchor="middle"
          x="50%"
          y="50%"
          dy=".35em"
          class="img-layer">
      AJ Smith
    </text>
    <!-- DISABLE GRADIENT
	<linearGradient id="gr-overlay" x1="0" y1="0" x2="100%" y2="100%">
      <stop stop-color="hsla(50, 100%, 70%, 0.5)" offset="10%"/>
      <stop stop-color="hsla(200, 100%, 60%, 0.5)" offset="50%"/>
      <stop stop-color="hsla(320, 100%, 50%, 0.5)" offset="90%"/>
    </linearGradient>

    <text text-anchor="middle"
          x="50%"
          y="50%"
          dy=".35em"
          class="gradient-layer">
      AJ Smith
    </text> -->
  </svg>
</div>