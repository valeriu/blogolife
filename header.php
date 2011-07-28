<?php global $options;
foreach ($options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		$$value['id'] = $value['std'];
	}
	elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}
?>
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

<link rel="shortcut icon" href="<?php echo $wpl_favicon_url; ?>" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
<?php echo stripslashes($wpl_ga_code); ?>
	</head>
<body class="two-column right-sidebar" <?php //body_class(); ?>>
		<div id="page">
			<header id="branding">

				<hgroup class="fleft">
					<h1 id="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h1>
					<h2 id="site-description"><?php bloginfo('description'); ?></h2>
				</hgroup>
				<div class="header-desc fright">
					<p><?php echo stripslashes($wpl_header_desc); ?></p>
				</div>
				<div class="social-icons fright">
					<?php // RSS ?>
					<?php if ($wpl_rss != '') {	?>
						<a href="<?php echo $wpl_rss; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/rss.png" width="22" height="22" alt="<?php echo $wpl_rss; ?>" /></a>
					<?php } ?>
							
					<?php // Twitter ?>
					<?php if ($wpl_twitter != '') {	?>
						<a href="<?php echo $wpl_twitter; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.png" width="22" height="22" alt="<?php echo $wpl_twitter; ?>" /></a>
					<?php } ?>
					
					<?php // Facebook ?>
					<?php if ($wpl_facebook != '') {	?>
						<a href="<?php echo $wpl_facebook; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png" width="22" height="22" alt="<?php echo $wpl_facebook; ?>" /></a>
					<?php } ?>
					
					<?php // Linkedin ?>
					<?php if ($wpl_linkedin != '') {	?>
						<a href="<?php echo $wpl_linkedin; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.png" width="22" height="22" alt="<?php echo $wpl_linkedin; ?>" /></a>
					<?php } ?>
					
					<?php // Tumblr ?>
					<?php if ($wpl_tumblr != '') {	?>
						<a href="<?php echo $wpl_tumblr; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/tumblr.png" width="22" height="22" alt="<?php echo $wpl_tumblr; ?>" /></a>
					<?php } ?>
					
					<?php // Delicious ?>
					<?php if ($wpl_delicious != '') {	?>
						<a href="<?php echo $wpl_delicious; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/delicious.png" width="22" height="22" alt="<?php echo $wpl_delicious; ?>" /></a>
					<?php } ?>			
							
					<?php // Digg ?>
					<?php if ($wpl_digg != '') {	?>
						<a href="<?php echo $wpl_digg; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/digg.png" width="22" height="22" alt="<?php echo $wpl_digg; ?>" /></a>
					<?php } ?>	
					
					<?php // Stumbleupon ?>
					<?php if ($wpl_stumbleupon != '') {	?>
						<a href="<?php echo $wpl_stumbleupon; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/stumbleupon.png" width="22" height="22" alt="<?php echo $wpl_stumbleupon; ?>" /></a>
					<?php } ?>
					
					<?php // Flickr ?>
					<?php if ($wpl_flickr != '') {	?>
						<a href="<?php echo $wpl_flickr; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/flickr.png" width="22" height="22" alt="<?php echo $wpl_flickr; ?>" /></a>
					<?php } ?>						
					
					<?php // Picasa ?>
					<?php if ($wpl_picasa != '') {	?>
						<a href="<?php echo $wpl_picasa; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/picasa.png" width="22" height="22" alt="<?php echo $wpl_picasa; ?>" /></a>
					<?php } ?>	
					
					<?php // YouTube ?>
					<?php if ($wpl_youtube != '') {	?>
						<a href="<?php echo $wpl_youtube; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/youtube.png" width="22" height="22" alt="<?php echo $wpl_youtube; ?>" /></a>
					<?php } ?>						
					
					<?php // Dribbble ?>
					<?php if ($wpl_dribbble != '') {	?>
						<a href="<?php echo $wpl_dribbble; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons/dribbble.png" width="22" height="22" alt="<?php echo $wpl_dribbble; ?>" /></a>
					<?php } ?>											
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