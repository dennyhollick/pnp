<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raysent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="section-blue">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'raysent' ); ?></a>
		<div class="max-width-wrapper">
			<!-- #masthead -->
			<header id="masthead" class="site-header">
				
				<div class="pure-g">
					
					<!-- left-links -->
					<div id="masthead-left" class="pure-u-1-3 third">
						<h6 class="medium-letter-spacing">ORDER NOW</h6>
					</div>
					
					<!-- .site-branding -->
					<div class="site-branding pure-u-1-3">
						<div class="site-logo">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.5 321" style=""><path class="site-logo-svg STqAkDNk_0" d="M256.5 4.8L14.3 94l237 95v124.4l-237-94.9 242.4-89.2" style="max-width:50%;padding:0 5px 0 5px" stroke-dasharray="1152, 1154" fill="none" stroke="#F2EFDE" stroke-width="10" stroke-miterlimit="10"></path><style>.STqAkDNk_0{stroke-dasharray:1152 1154;stroke-dashoffset:1153;animation:STqAkDNk_draw 1333ms linear 0ms forwards;}@keyframes STqAkDNk_draw{100%{stroke-dashoffset:0;}}@keyframes STqAkDNk_fade{0%{stroke-opacity:1;}93.54838709677419%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.5 321" style=""><path class="site-logo-svg WegPqqxq_0" d="M2 316.2L244.2 227 7.1 132V7.6l237.1 94.9L1.8 191.7" style="max-width:50%;padding:0 5px 0 5px" stroke-dasharray="1152, 1154" fill="none" stroke="#F2EFDE" stroke-width="10" stroke-miterlimit="10"></path><style>.WegPqqxq_0{stroke-dasharray:1152 1154;stroke-dashoffset:1153;animation:WegPqqxq_draw 1333ms linear 0ms forwards;}@keyframes WegPqqxq_draw{100%{stroke-dashoffset:0;}}@keyframes WegPqqxq_fade{0%{stroke-opacity:1;}93.54838709677419%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>
						</div>
						<div>
							<h4 class="logo-text third">RAYSENT</h4>
						</div>
					</div>

					<!-- right-links -->
					<div id="masthead-right" class="pure-u-1-3 alignright third">
						<h6 class="medium-letter-spacing">EN | 中文</h6>
					</div>

				</div>
			</header><!-- #masthead-end -->
		</div>
	</div>	
	<div id="content" class="site-content">

