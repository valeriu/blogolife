<?php
/**
 * Headerdata
 *
 * @package wplook
 * @subpackage vip
 * @since vip 1.0
 */
 /*
global $options;
foreach ($options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		$$value['id'] = $value['std'];
	}
	elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}
 */
// additional js and css
if(	!is_admin()){
	wp_register_style('stylered', get_template_directory_uri().'/red.css', 'style', '','all');
	wp_enqueue_style('stylered');	
	wp_register_style('style', get_template_directory_uri().'/style.css', 'style', '','all');
	wp_enqueue_style('style');
	wp_register_style('oswald', 'http://fonts.googleapis.com/css?family=Oswald&amp;v2', 'style', '','all');
	wp_enqueue_style('oswald');
}

function wplook_meta_description() {
	if (is_home() ) {
		if (get_option(wpl_meta_description) != '' )
echo '<meta name="description" content="'.get_option('wpl_meta_description'). '" />';
	}
	
if (is_single()){
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
if (function_exists('childtheme_override_doctitle'))  {
    function thematic_doctitle() {
    	childtheme_override_doctitle();
    }
} else {
	function thematic_doctitle() {
		$site_name = get_bloginfo('name');
	    $separator = '|';
	        	
			if ( is_home() || is_front_page() ) { 
	      $content = __('Latest post', 'thematic'); 
	    }

	    elseif ( is_search() ) { 
	      $content = __('Search Results for:', 'thematic'); 
	      $content .= ' ' . esc_html(stripslashes(get_search_query()));
	    }
	    elseif ( is_category() ) {
	      $content = __('Category Archives:', 'thematic');
	      $content .= ' ' . single_cat_title("", false);;
	    }
	    elseif ( is_tag() ) { 
	      $content = __('Tag Archives:', 'thematic');
	      $content .= ' ' . thematic_tag_query();
	    }
	    elseif ( is_404() ) { 
	      $content = __('Not Found', 'thematic'); 
	    }
	    else { 
	      $content = ' ';
	    }
	
	    
	
	    if($content) {
	      if ( is_home() || is_front_page() ) {
	          $elements = array(
	            'content' => $content
	          );
	      }
	      else {
	          $elements = array(
	            'content' => $content
	          );
	      }  
	    } else {
	      $elements = array(
	        'site_name' => $site_name
	      );
	    }
	
	    // Filters should return an array
	    $elements = apply_filters('thematic_doctitle', $elements);
		
	    // But if they don't, it won't try to implode
	    if(is_array($elements)) {
	      $doctitle = implode(' ', $elements);
	    }
	    else {
	      $doctitle = $elements;
	    }
	    
	    $doctitle = $doctitle;
	    
	    echo $doctitle;
	} // end thematic_doctitle
}

?>