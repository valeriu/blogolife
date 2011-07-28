<?php 
/**
 * Setup
 *
 * @package wplook
 * @subpackage vip
 * @since vip 1.0
 */
 
add_action( 'after_setup_theme', 'wplook_setup' );
if ( ! function_exists( 'wplook_setup' ) ):
function wplook_setup() {
	
	load_theme_textdomain( 'wplook', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );	
	
// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
// Add default posts and comments RSS feed links to head
	

	
function register_my_menus() {
	register_nav_menus(
	array('primary' => __( 'WPLOOK Main Navigation', 'wplook' ),) 
);

}
add_action( 'init', 'register_my_menus' );

wp_create_nav_menu( 'WPLOOK Main Menu', array( 'slug' => 'primary' ) );


	// The next four constants set how Twenty Eleven supports custom headers.

	// The default header text color
	define( 'HEADER_TEXTCOLOR', '666' );

	// By leaving empty, we allow for random image rotation.
	define( 'HEADER_IMAGE', '' );

	// The height and width of your custom header.
	// Add a filter to wplook_header_image_width and wplook_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'wplook_header_image_width', 960 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'wplook_header_image_height', 200 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be the size of the header image that we just defined
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Add Twenty Eleven's custom image sizes
	add_image_size( 'large-feature', HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true ); // Used for large feature (header) images
	// Turn on random header image rotation by default.
	add_theme_support( 'custom-header', array( 'random-default' => true ) );
	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See wplook_admin_header_style(), below.
	add_custom_image_header( 'wplook_header_style', 'wplook_admin_header_style', 'wplook_admin_header_image' );
	
		// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'ipad' => array(
			'url' => '%s/images/headers/ipad.jpg',
			'thumbnail_url' => '%s/images/headers/ipad-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'iPad', 'wplook' )
		),
		'trainstation' => array(
			'url' => '%s/images/headers/trainstation.jpg',
			'thumbnail_url' => '%s/images/headers/trainstation-thumbnails.jpg',
			/* translators: header image description */
			'description' => __( 'Train Station', 'wplook' )
		)
	) );

}

endif;

if ( ! function_exists( 'wplook_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @since Twenty Eleven 1.0
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
 *
 * Referenced via add_custom_image_header() in wplook_setup().
 *
 * @since Twenty Eleven 1.0
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
 *
 * Referenced via add_custom_image_header() in wplook_setup().
 *
 * @since Twenty Eleven 1.0
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

add_custom_background();
set_post_thumbnail_size( 150, 100, true ); // default Post Thumbnail dimensions (cropped)


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
 * Display feed in dashboard
 */

add_action('wp_dashboard_setup', 'my_dashboard_widgets');
function my_dashboard_widgets() {
     global $wp_meta_boxes;
     unset(
          $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'],
          $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'],
          $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
     );
     wp_add_dashboard_widget( 'dashboard_custom_feed', 'wplook news' , 'dashboard_custom_feed_output' );
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



}


?>