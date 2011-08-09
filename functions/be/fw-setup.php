<?php

/**
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/
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