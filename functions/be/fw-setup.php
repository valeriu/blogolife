<?php

/**
 * @package WPlook
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
	'title' => __( 'WPlook Panel', 'wplook' ),
	'href' => FALSE,
	'meta' => array('title' => 'WPlook Options Panel', 'class' => 'wplookpanel') ) );
	
	$wp_admin_bar->add_menu( array(
	'id' => 'wpl_to',
	'parent' => 'custom_menu',
	'title' => __( 'BlogoLife Options', 'wplook' ),
	'href' => $admin_dir .'admin.php?page=fw-options.php',
	'meta' => array('title' => 'BlogoLife - Theme options') ) );
	
	$wp_admin_bar->add_menu( array(
	'id' => 'wpl_wt',
	'parent' => 'custom_menu',
	'title' => __( 'WPlook Themes', 'wplook' ),
	'href' => 'http://wplook.com/wordpress-themes',
	'meta' => array('title' => 'Premium Wordpress Themes from WPlook')) );
	
	$wp_admin_bar->add_menu( array(
	'id' => 'wpl_wn',
	'parent' => 'custom_menu',
	'title' => __( 'WPlook News', 'wplook' ),
	'href' => 'http://wplook.com/',
	'meta' => array('title' => 'News and theme updates from WPlook') ) );

	$wp_admin_bar->add_menu( array(
	'id' => 'wpl_fb',
	'parent' => 'custom_menu',
	'title' => __( 'Become our fan on Facebook', 'wplook' ),
	'href' => 'http://www.facebook.com/wplookthemes',
	'meta' => array('target' => 'blank', 'title' => 'Become our fan on Facebook') ) );
	
	$wp_admin_bar->add_menu( array(
	'id' => 'wpl_tw',
	'parent' => 'custom_menu',
	'title' => __( 'Follow us on Twitter', 'wplook' ),
	'href' => 'http://twitter.com/#!/wplook',
	'meta' => array('target' => 'blank', 'title' => 'Follow us on Twitter')
		) );
}
add_action('admin_bar_menu', 'wplook_bar_menu', '999');


function wplook_buy_menu() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
				
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_buymenu',
	'title' => __( 'Blogolife PRO', 'wplook' ),
	'href' => 'http://wplook.com/blogolifebuy',
	'meta' => array('title' => 'Learn more about Blogolife PRO', 'class' => 'wplookbuy') ) );
	

}
add_action('admin_bar_menu', 'wplook_buy_menu', '1000');

