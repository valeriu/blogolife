<?php 
/**
 * Setup
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
 
add_action( 'after_setup_theme', 'wplook_setup' );
if ( ! function_exists( 'wplook_setup' ) ):
function wplook_setup() {
	
	
// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
// Add default posts and comments RSS feed links to head
	
	
function register_my_menus() {
	register_nav_menus(
	array('primary' => __( 'WPlook Main Navigation', 'wplook' ),) 
);

}
add_action( 'init', 'register_my_menus' );

wp_create_nav_menu( 'WPlook Main Menu', array( 'slug' => 'primary' ) );


}

endif;

if ( ! function_exists( 'wplook_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 */
function wplook_header_style() {

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == get_header_textcolor() )
		return;
	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == get_header_textcolor() ) :
	?>
		#site-title,
		#site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // wplook_header_style

if ( ! function_exists( 'wplook_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 * Referenced via add_custom_image_header() in wplook_setup().
 */
function wplook_admin_header_style() {
?>
	<style type="text/css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}
	#headimg h1 {
		margin: 0;
	}
	#headimg h1 a {
		font-size: 32px;
		line-height: 36px;
		text-decoration: none;
	}
	#desc {
		font-size: 14px;
		line-height: 23px;
		padding: 0 0 3em;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?>;
		}
	<?php endif; ?>
	#headimg img {
		max-width: 1000px;
		height: auto;
		width: 100%;
	}
	</style>
<?php
}
endif; // wplook_admin_header_style

if ( ! function_exists( 'wplook_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 * Referenced via add_custom_image_header() in wplook_setup().
 */
function wplook_admin_header_image() { ?>
	<div id="headimg">
		<?php
		if ( 'blank' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) || '' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) )
			$style = ' style="display:none;"';
		else
			$style = ' style="color:#' . get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) . ';"';
		?>
		<h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }
endif; // wplook_admin_header_image


if ( ! isset( $content_width ) )
	$content_width = 565;
	
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
// Add support for a variety of post formats
add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'  ) );

// Add support for custom backgrounds
$wplook_bg_defaults = array(
	'default-color'			=> 'f3f3f3',
	'default-image' 		=> get_template_directory_uri() . '/images/bg.png',
	'wp-head-callback'		=> '_custom_background_cb',
	'admin-head-callback'	=> '',
	'admin-preview-callback'=> ''
);
add_theme_support( 'custom-background', $wplook_bg_defaults );

// Add support for custom header
$wplook_ch_defaults = array(
	'default-image'			=> '%s/images/headers/ipad.jpg',
	'random-default'		=> true,
	'width'					=> 960,
	'height'				=> 200,
	'flex-height'			=> true,
	'flex-width'			=> true,
	'header-text'			=> true,
	'default-text-color'	=> '000000',
	'uploads'				=> true,
	'wp-head-callback'		=> 'wplook_header_style',
	'admin-head-callback'	=> 'wplook_admin_header_style',
	'admin-preview-callback'=> 'wplook_admin_header_image',
);
add_theme_support( 'custom-header', $wplook_ch_defaults );

// default Post Thumbnail dimensions (cropped)
set_post_thumbnail_size( 150, 100, true ); 
add_image_size( 'ch-images', 960, 200, true );
/**
 * Display navigation to next/previous pages when applicable
 */
function wplook_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<div class="nav-previous fleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'wplook' ) ); ?></div>
			<div class="nav-next fright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'wplook' ) ); ?></div>
			<div class="left-corner"></div>
			<div class="clear"></div>
		</nav><!-- #nav-above -->
	<?php endif;
}

/**
 * Display Autor (microformats)
 */
function wplook_get_author() { ?>
	<span class="vcard"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a></span>
<?php
}


/**
 * Display feed in dashboard
 */

add_action('wp_dashboard_setup', 'wplook_dashboard_widgets');
function wplook_dashboard_widgets() {
	global $wp_meta_boxes;
	unset(
		$wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'],
		$wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'],
		$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
	);
		wp_add_dashboard_widget( 'dashboard_custom_feed', 'WPlook news' , 'dashboard_custom_feed_output' );
}
function dashboard_custom_feed_output() {
		echo '<div class="rss-widget rss-wplook">';
	wp_widget_rss_output(array(
		'url' => 'http://feeds.feedburner.com/wplook',
		'title' => 'wplook news',
		'items' => 5,
		'show_summary' => 1,
		'show_author' => 0,
		'show_date' => 0
		));
		echo '</div>';
}
function wplook_get_date() {
the_time(get_option('date_format'));
}
function wplook_get_time() {
the_time(get_option('time_format'));
}
function wplook_get_date_time() {
the_time(get_option('date_format'));
_e(' at ', 'wplook');
the_time(get_option('time_format'));}


//sidebar
	function wpl_sidebar_add_custom_box() {

			 add_meta_box('wpl_sidebar', 'Sidebars', 'wpl_sidebars_custom_box','page', 'side', 'high');

			 add_meta_box('wpl_sidebar', 'Sidebars', 'wpl_sidebars_custom_box','post', 'side', 'high');

		}

		/* Use the admin_menu action to define the custom boxes */

	add_action('admin_menu', 'wpl_sidebar_add_custom_box');
		/* prints the custom field in the new custom post section */
		function wpl_sidebars_custom_box() {
			 //get post meta value
			 global $post;
			  $enable_sidebar = get_post_meta($post->ID,'wpl_enable_sidebar',true)  ;
			 ?>
<div id="sidebar_box">
	<p>
		<label for=""><?php _e( 'Enable Sidebar:' , 'wplook' ); ?></label>      
		<label for="sidebar_yes"><?php _e( 'Yes' , 'wplook' ); ?></label><input type="radio" id="sidebar_yes" name="enable_sidebar" value="true" <?php if($enable_sidebar=="true" || trim($enable_sidebar) =="" ) echo "checked='checked'"; ?> />
		<label for="sidebar_no"><?php _e( 'No' , 'wplook' ); ?></label><input type="radio" id="sidebar_no" name="enable_sidebar" value="false" <?php if($enable_sidebar=="false") echo "checked='checked'"; ?>/>
	</p>
</div>
<?php
		}

		/* use save_post action to handle data entered */
		add_action('save_post', 'wpl_sidebars_save_postdata');
		/* when the post is saved, save the custom data */
		function wpl_sidebars_save_postdata($post_id) {
			// do not save if this is an auto save routine
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
		$_POST["enable_sidebar"] = (!isset($_POST["enable_sidebar"])) ? '' : $_POST["enable_sidebar"];
			update_post_meta($post_id, "wpl_enable_sidebar", $_POST["enable_sidebar"]);

	}



}?>