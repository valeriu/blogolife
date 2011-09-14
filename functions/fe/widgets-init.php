<?php 
/**
 * Register widget areas.
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
function wplook_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'RightSideBar', 'wplook' ),
		'id' => 'sidebar-1',
		'description' => __('Widgets in this area will be shown on the right-hand side.','wplook' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title"><h3>',
		'after_title' => '</h3><div class="right-corner"></div></div>'
	) );
	
}
/** Register sidebars */
add_action( 'widgets_init', 'wplook_widgets_init' );
?>