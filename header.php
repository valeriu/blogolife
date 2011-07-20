<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'wplook' ), max( $paged, $page ) );

	?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
	</head>
<body class="two-column right-sidebar"<?php //body_class(); ?>>
		<div id="page">
			<header id="branding">
				<div id="logo" class="fleft">
				</div>
				<hgroup class="fleft">
					<h1 id="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h1>
					<h2 id="site-description"><?php bloginfo('description'); ?></h2>
				</hgroup>
				<div class="header-widget fright">
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus velit. Morbi odio. Ut in sapien. Proin nec erat vitae orci tincidunt iaculis.
						Morbi laoreet metus sed diam suscipit ultricies.
					</p>
				</div>
				<div class="social-icons fright">
					<a href="#"><img src="images/in.png" alt="Linkin" /></a>
					<a href="#"><img src="images/fb.png" alt="Facebook" /></a>
					<a href="#"><img src="images/twitter.png" alt="Twitter" /></a>
					<a href="#"><img src="images/rss.png" alt="RSS" /></a>
				</div>
				<div class="clear">
				</div>
			</header>
			
			
			<nav>
				<?php wp_nav_menu( array('depth' => '3', 'theme_location' => 'primary' )); ?>
				<div class="left-corner"></div>
				<div class="right-corner"></div>
			</nav>
			<div id="header-image">
			
			
						<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
					<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>

			<?php endif; ?>
			
			
			</div>
			<div id="main">