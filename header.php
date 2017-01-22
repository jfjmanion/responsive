<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div id="header">
		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'fallback_cb'    => false,
								   'menu_class'     => 'top-menu',
								   'theme_location' => 'top-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_in_header(); // header hook ?>


			<div id="logo" class="grid col-780" >
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri() . "/core/images/cropped-logo-only.png"; ?>" width="125" height="250" alt="<?php bloginfo( 'name' ); ?>"/></a>
                
                <?php $logoImage = "logo-english.png"?>
                
                <img width="300" src="<?php echo get_template_directory_uri() . "/core/images/" . $logoImage; ?>">
                
			</div><!-- end of #logo -->
			<div id="header-icons" class="grid col-260 fit">
				<?php

				// First let's check if any of this was set

				echo '<ul class="social-icons">';
				global $responsive_options;
				$responsive_options = responsive_get_options();
				
				if( !empty( $responsive_options['twitter_uid'] ) ) {
					echo '<li class="twitter-icon"><a href="' . $responsive_options['twitter_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/twitter-icon.png' ) . '" width="36" height="36" alt="Twitter">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['facebook_uid'] ) ) {
					echo '<li class="facebook-icon"><a href="' . $responsive_options['facebook_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/facebook-icon.png' ) . '" width="36" height="36" alt="Facebook">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['linkedin_uid'] ) ) {
					echo '<li class="linkedin-icon"><a href="' . $responsive_options['linkedin_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/linkedin-icon.png' ) . '" width="24" height="24" alt="LinkedIn">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['youtube_uid'] ) ) {
					echo '<li class="youtube-icon"><a href="' . $responsive_options['youtube_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/youtube-icon.png' ) . '" width="31" height="31" alt="YouTube">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['stumble_uid'] ) ) {
					echo '<li class="stumble-upon-icon"><a href="' . $responsive_options['stumble_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/stumble-upon-icon.png' ) . '" width="24" height="24" alt="StumbleUpon">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['rss_uid'] ) ) {
					echo '<li class="rss-feed-icon"><a href="' . $responsive_options['rss_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/rss-feed-icon.png' ) . '" width="24" height="24" alt="RSS Feed">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['google_plus_uid'] ) ) {
					echo '<li class="google-plus-icon"><a href="' . $responsive_options['google_plus_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/googleplus-icon.png' ) . '" width="24" height="24" alt="Google Plus">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['instagram_uid'] ) ) {
					echo '<li class="instagram-icon"><a href="' . $responsive_options['instagram_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/instagram-icon.png' ) . '" width="31" height="31" alt="Instagram">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['pinterest_uid'] ) ) {
					echo '<li class="pinterest-icon"><a href="' . $responsive_options['pinterest_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/pinterest-icon.png' ) . '" width="24" height="24" alt="Pinterest">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['yelp_uid'] ) ) {
					echo '<li class="yelp-icon"><a href="' . $responsive_options['yelp_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/yelp-icon.png' ) . '" width="24" height="24" alt="Yelp!">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['vimeo_uid'] ) ) {
					echo '<li class="vimeo-icon"><a href="' . $responsive_options['vimeo_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/vimeo-icon.png' ) . '" width="24" height="24" alt="Vimeo">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['foursquare_uid'] ) ) {
					echo '<li class="foursquare-icon"><a href="' . $responsive_options['foursquare_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/foursquare-icon.png' ) . '" width="24" height="24" alt="foursquare">'
						. '</a></li>';
				}

				echo '</ul><!-- end of .social-icons -->';
				?>
			</div>
			<!-- end of col-380 fit -->
			
			
		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
							   'container'       => 'div',
							   'container_class' => 'main-nav',
							   'fallback_cb'     => 'responsive_fallback_menu',
							   'theme_location'  => 'header-menu'
						   )
		);
		?>

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'menu_class'     => 'sub-header-menu',
								   'theme_location' => 'sub-header-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>