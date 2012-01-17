<?php
/**
 * Headerdata
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */

global $options;
foreach ($options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		$$value['id'] = $value['std'];
	}
	elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}

// additional js and css

function wpl_css_include () {
	if (get_option('wpl_css') == 'Pink' ){
		wp_register_style('style-pink', get_template_directory_uri().'/images/pink/style.css', 'style', '','all');
		wp_enqueue_style('style-pink'); }

		if (get_option('wpl_css') == 'Blue' ){
		wp_register_style('style-blue', get_template_directory_uri().'/images/blue/style.css', 'style', '','all');
		wp_enqueue_style('style-blue');}

		if (get_option('wpl_css') == 'Black' ){
		wp_register_style('style-black', get_template_directory_uri().'/images/black/style.css', 'style', '','all');
		wp_enqueue_style('style-black');}

		if (get_option('wpl_css') == 'Orange' ){
		wp_register_style('style-orange', get_template_directory_uri().'/images/orange/style.css', 'style', '','all');
		wp_enqueue_style('style-orange');}

		if (get_option('wpl_css') == 'Green' ){
		wp_register_style('style-green', get_template_directory_uri().'/images/green/style.css', 'style', '','all');
		wp_enqueue_style('style-green');}
		
		wp_register_style('oswald', 'http://fonts.googleapis.com/css?family=Oswald&amp;v2', 'style', '','all');
		wp_enqueue_style('oswald');
}
add_action( 'wp_enqueue_scripts', 'wpl_css_include' );

function wpl_scripts_include() {
	wp_enqueue_script( 'html5', 'http://html5shim.googlecode.com/svn/trunk/html5.js', '', '', '' );
	}   

add_action('wp_enqueue_scripts', 'wpl_scripts_include');


function wplook_meta_description() {
	if (is_home() && get_option('wpl_meta_description') != '') {
		echo '<meta name="description" content="'.get_option('wpl_meta_description'). '" />';
	}
	
	if (is_single() || is_page()){
		$excerpt = get_the_excerpt();
		$title = get_the_title();		
			if ($excerpt == '') 
				echo '<meta name="description" content="'.$title.'" />';

			else 
				echo '<meta name="description" content="'.$excerpt.'" />';
		}
}

// Located in header.php 
// Creates the content of the Title tag
// Credits: Tarski Theme
function wplook_doctitle() {

	if ( is_search() ) { 
	  $content = __('Search Results for:', 'wplook'); 
	  $content .= ' ' . esc_html(stripslashes(get_search_query()));
	}

	elseif ( is_category() ) {
	  $content = __('Category Archives:', 'wplook');
	  $content .= ' ' . single_cat_title("", false);
	}

	elseif ( is_day() ) {
		$content = __( 'Daily Archives:', 'wplook');
		$content .= ' ' . esc_html(stripslashes( get_the_date()));
	}
	
	elseif ( is_month() ) {
		$content = __( 'Monthly Archives:', 'wplook');
		$content .= ' ' . esc_html(stripslashes( get_the_date( 'F Y' )));
	}
	elseif ( is_year()  ) {
		$content = __( 'Yearly Archives:', 'wplook');
		$content .= ' ' . esc_html(stripslashes( get_the_date( 'Y' ) ));
	}		
	
	elseif ( is_tag() ) { 
	  $content = __('Tag Archives:', 'wplook');
	  $content .= ' ' . single_tag_title( '', false );
	} 
	
	elseif ( is_404() ) { 
	  $content = __('Not Found', 'wplook'); 
	}
	
	else { 
		$content = '';
	}
	
	$elements = array("content" => $content);   

	// Filters should return an array
	$elements = apply_filters('wplook_doctitle', $elements);
	
	// But if they don't, it won't try to implode
		if(is_array($elements)) {
		  $doctitle = implode(' ', $elements);
		}
		else {
		  $doctitle = $elements;
		}

		if ( is_search() || is_category() || is_day() || is_month() || is_year() || is_404() || is_tag() ) {
			$doctitle = "<header class=\"page-header\"><h1 class=\"page-title\">" . $doctitle . "</h1><div class=\"left-corner\"></div></header>";
		}
		

	echo $doctitle;

} 

?>