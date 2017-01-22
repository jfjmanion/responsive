<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Page Template
 *
Template Name:  Home Page
 *
 * @file           full-width-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
/**
 * Globalize Theme Options
 */
$responsive_options = responsive_get_options();
/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
if( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	get_template_part( 'home' );
}
elseif( 'page' == get_option( 'show_on_front' && $responsive_options['front_page'] != 1)) {
	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );
}
else {

	get_header();

	//test for first install no database
	$db = get_option( 'responsive_theme_options' );
	//test if all options are empty so we can display default text if they are
	$empty = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
	?>

	<div id="featured" class="grid col-940">
 		<?php 
		if (get_bloginfo('language') == 'en-US') {
			$newsTitle = 'Recent News';
			$category = 'News';
			$language = "english";
		} else {
			$newsTitle = 'Quoi de nufs';
			$category = 'Nouvelles';
			$language = 'french';
		}
		
		echo do_shortcode("[rev_slider homepage_".$language."]" ); ?>
	</div><!-- end of #featured -->
    
 <?php 	get_sidebar( 'home' );?>
 
  <div class="grid col-620">
  	<div class="widget-wrapper">
    	<?php 
		if (get_bloginfo('language') == 'en-US') {
			$newsTitle = 'News';
			$category = 'News';
		} else {
			$newsTitle = 'Nouvelles';
			$category = 'Nouvelles';
		}
		echo do_shortcode("[slposts title='" .$newsTitle. "'
          suppress_filters=FALSE
          number_posts=4
          time_frame=0
          title_only=FALSE
          display_type=ulist
          thumbnail=FALSE
          thumbnail_wh=80x80
          thumbnail_class=NULL
          thumbnail_filler=placeholder
          category=".$category."
          tag=NULL
          paginate=FALSE
          posts_per_page=NULL
          excerpt_length=50
          auto_excerpt=TRUE
          excerpt_trail=text
          full_meta=TRUE
          footer_meta=FALSE
          display_comments=FALSE
          post_status=publish
          wrapper_list_css='nav nav-tabs nav-stacked'
          wrapper_block_css=content
          instance=NULL ]");
		  ?>
    </div>
    </div>

<div class="grid col-300 fit">
<div class="widget-wrapper widget_text">
<div id="widget-title-one" class="widget-title-home">
<h3> Twitter </h3>
</div>
<a class="twitter-timeline" href="https://twitter.com/alive_to_strive" data-widget-id="406212418155450368">Tweets by @alive_to_strive</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>

	<?php

	get_footer();
}
?>
