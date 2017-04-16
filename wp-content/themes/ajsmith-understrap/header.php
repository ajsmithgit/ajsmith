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
	
	<meta property="og:url" content="http://www.AJ-Smith.com.au">
    <meta property="og:title" content="AJ Smith | Front End Web Developer, Photographer, Explorer">
    <meta property="og:description" content="I love Travel, Photography, building on the web - sometimes the three come together!">
    <meta property="og:image" content="/wp-content/themes/ajsmith-understrap/img/aj.png">
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_header.css' type='text/css' media='all' /><link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_header.css' type='text/css' media='all' />
	<link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_header.css' type='text/css' media='all' /><link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_footer.css' type='text/css' media='all' />
	<link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_background-anim.css' type='text/css' media='all' />
	<link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_theme.css' type='text/css' media='all' />
	<link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_clipmaps.css' type='text/css' media='all' />
	<link rel='stylesheet' id='understrap-styles-css'  href='/wp-content/themes/ajsmith-understrap/sass/theme/_photo-gallery.css' type='text/css' media='all' />
	
	<script type='text/javascript' src='/wp-content/themes/ajsmith-understrap/js/ajsmith.js'></script>
	<!-- <script type='text/javascript' src='/wp-content/themes/ajsmith-understrap/js/photoswipe.js'></script> -->
	<link rel="shortcut icon" href="/wp-content/themes/ajsmith-understrap/img/aj.png"/>
</head>

<body <?php body_class(); ?>>

<ul class="background-slideshow">
	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
</ul>

<section class="navigation">
  <div class="nav-container">
    <!-- <div class="brand">
      <a href="#!">Logo</a>
    </div> -->
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li class="hidden-desktop">
          <a href="/"><i class="fa fa-home hidden-desktop" aria-hidden="true">&nbsp&nbsp</i>Home</a>
        </li>
        <li>
          <a href="/web"><i class="fa fa-code hidden-desktop" aria-hidden="true">&nbsp&nbsp</i>Web</a>
        </li>
        <!-- <li>
          <a href="#!">Services</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li> -->
        <li>
          <a href="/photography"><i class="fa fa-camera hidden-desktop" aria-hidden="true">&nbsp&nbsp</i>Photography</a>
        </li>
        <li>
          <a href="/contact"><i class="fa fa-phone hidden-desktop" aria-hidden="true">&nbsp&nbsp</i>Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<div class="hfeed site" id="page">

	<div class="text-wrap">

	  <svg viewBox="0 0 500 80">
		<pattern 
				 id="p-img1" 
				 viewBox="0 0 300 100"
				 patternUnits="userSpaceOnUse"
				 width="200%" height="200%"
				 x="-60%" y="-10%">
		  <image xlink:href="/wp-content/uploads/2017/04/Antarctica-47.jpg" width="300" height="200"/>
		</pattern>
		<pattern 
				 id="p-img2" 
				 viewBox="0 0 300 100"
				 patternUnits="userSpaceOnUse"
				 width="200%" height="200%"
				 x="-60%" y="-10%">
		  <image xlink:href="/wp-content/uploads/2017/04/IMG_8125.jpg" width="300" height="200"/>
		</pattern>
		<pattern 
				 id="p-img3" 
				 viewBox="0 0 300 100"
				 patternUnits="userSpaceOnUse"
				 width="200%" height="200%"
				 x="-60%" y="-10%">
		  <image xlink:href="/wp-content/themes/ajsmith-understrap/img/ghostgum.jpg" width="300" height="200"/>
		</pattern>
		<pattern 
				 id="p-img4" 
				 viewBox="0 0 300 100"
				 patternUnits="userSpaceOnUse"
				 width="200%" height="200%"
				 x="-60%" y="-10%">
		  <image xlink:href="/wp-content/uploads/2017/04/amazon-11.jpg" width="300" height="200"/>
		</pattern>
		<pattern 
				 id="p-img5" 
				 viewBox="0 0 300 100"
				 patternUnits="userSpaceOnUse"
				 width="200%" height="200%"
				 x="-60%" y="-10%">
		  <image xlink:href="/wp-content/themes/ajsmith-understrap/img/penguin.jpg" width="300" height="200"/>
		</pattern>
		<text text-anchor="middle"
			  x="50%"
			  y="50%"
			  dy=".35em"
			  class="img-layer">
		  AJ Smith
		</text>
               <linearGradient id="gr-overlay" x1="0" y1="0" x2="100%" y2="100%">
                 <stop stop-color="rgba(255, 255, 255, 0.8)" offset="10%"/>
                 <stop stop-color="rgba(255, 255, 255, 0.4)" offset="50%"/>
                 <stop stop-color="rgba(255, 255, 255, 0.3)" offset="90%"/>
               </linearGradient>

               <text text-anchor="middle"
                         x="50%"
                         y="50%"
                         dy=".35em"
                         class="gradient-layer">
                 AJ Smith
               </text>

	  </svg>
	</div>
		<div class="subtext">
		<span><a href="#">Front End Web Developer</a></span>
		and
		<span><a href="#">Photographer</a></span>
	</div>