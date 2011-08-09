<?php

/**
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/

function getCategories($parent) {
	global $wpdb, $table_prefix;
	$tb1 = "$table_prefix"."terms";
	$tb2 = "$table_prefix"."term_taxonomy";
	if ($parent == '0')	{
		$qqq = "AND $tb2".".parent = 0";
	} else	{
		$qqq = "";
	}
	
	$q = "SELECT $tb1.term_id,$tb1.name,$tb1.slug FROM $tb1,$tb2 WHERE $tb1.term_id = $tb2.term_id AND $tb2.taxonomy = 'category' $qqq ORDER BY $tb1.name ASC";
	$q = $wpdb->get_results($q);
	
	foreach ($q as $cat) {
		$categories[$cat->term_id] = $cat->name;
	} 
	return($categories);
}
		$categories = getCategories(0);
		$categoriesParents = getCategories(0);
		
	if (count($categories) > 0) {
	foreach ( $categories as $key => $value ) {
			$catids[] = $key;
			$catnames[] = $value;
	}
	}
	if (count($categoriesParents) > 0){
	foreach ( $categoriesParents as $key => $value ) {

		$catidsp[] = $key;
			$catnamesp[] = $value;
		}
}

function wplook_bar_menu() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
		$admin_dir = get_admin_url();
		
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_menu',
	'title' => __( 'wplook Panel', 'wplook' ),
	'href' => FALSE,
	'meta' => array('title' => 'wplook Options Panel', 'class' => 'wplookpanel') ) );
	
	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'title' => __( 'BlogoLife Options', 'wplook' ),
	'href' => $admin_dir .'admin.php?page=fw-options.php',
	'meta' => array('title' => 'BlogoLife - Theme options') ) );
	
	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'title' => __( 'wplook Themes', 'wplook' ),
	'href' => 'http://wplook.com/wordpress-themes',
	'meta' => array('title' => 'Premium Wordpress Themes from wplook')) );
	
	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'title' => __( 'wplook News', 'wplook' ),
	'href' => 'http://wplook.com/',
	'meta' => array('title' => 'News and theme updates from wplook') ) );

	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'title' => __( 'Facebook', 'wplook' ),
	'href' => 'http://www.facebook.com/pages/wplook/217332894973977',
	'meta' => array('target' => 'blank', 'title' => 'Become a fan on Facebook') ) );
	
	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'title' => __( 'Twitter', 'wplook' ),
	'href' => 'http://twitter.com/#!/wplook',
	'meta' => array('target' => 'blank', 'title' => 'Follow us on Twitter')
		) );
}
add_action('admin_bar_menu', 'wplook_bar_menu', '1000');