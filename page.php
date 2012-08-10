<?php
/**
 * The main template file.
 * @package WPLOOK
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/
get_header(); 
	$hasSidebar = "";
	$sidebar =    get_post_meta($post->ID,'wpl_enable_sidebar',true);
get_template_part('content', 'page' ) ;

if($sidebar=="false" ) {
	echo '<div class="clear"></div>';
} else {
	get_sidebar();
}
get_footer(); ?>