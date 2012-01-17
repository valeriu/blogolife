<?php
/**
 * The main template file.
 *
 * @package WPLOOK
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/
 get_header(); ?>
<section class="primary">
					<div id="content">
			<?php the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="format-image">
			<div class="col1 fleft">
				<div class="postformat">
					<div class="format-icon"></div>
					<div class="left-corner"></div>
				</div>
			</div>
			<div class="col2 fright">		
		<header class="entry-header">
<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wplook' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1></header>
<div class="entry-content">
							<?php
								$metadata = wp_get_attachment_metadata();
								printf( __( 'Original size: <a target="_blank" href="%1$s" title="Link to full-size image">%2$s &times; %3$s</a> in <a href="%4$s" title="Return to %5$s" rel="gallery">%5$s</a>', 'wplook' ),
								
									esc_url( wp_get_attachment_url() ),
									$metadata['width'],
									$metadata['height'],
									esc_url( get_permalink( $post->post_parent ) ),
									get_the_title( $post->post_parent )
								);
							?>
			<div class="entry-attachment">
							<div class="attachment">
<?php
	/**
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
	 * or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
	 */
	$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
	foreach ( $attachments as $k => $attachment ) {
		if ( $attachment->ID == $post->ID )
			break;
	}
	$k++;
	// If there is more than 1 attachment in a gallery
	if ( count( $attachments ) > 1 ) {
		if ( isset( $attachments[ $k ] ) )
			// get the URL of the next image attachment
			$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
		else
			// or get the URL of the first image attachment
			$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
	} else {
		// or, if there's only 1 image, get the URL of the image
		$next_attachment_url = wp_get_attachment_url();
	}
?>
								<a href="<?php echo esc_url( $next_attachment_url ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
								$attachment_size = apply_filters( 'wplook_attachment_size', 848 );
								echo wp_get_attachment_image( $post->ID, array( $attachment_size, 1024 ) ); // filterable image width with 1024px limit for image height.
								?></a>
							</div><!-- .attachment -->
						</div><!-- .entry-attachment -->
						<div class="entry-description">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wplook' ) . '</span>', 'after' => '</div>' ) ); ?>
						</div><!-- .entry-description -->
					</div><!-- .entry-content -->
			<footer class="entry-meta">
				<div class="date-i fleft"><?php wplook_get_date_time();?></div>
				
				<div class="author-i fleft"><?php wplook_get_author();?></div>
				<?php edit_post_link( __( 'Edit', 'wplook' ), '<div class="edit-i fright">', '</div>' ); ?>
			
				<div class="clear"></div>
			</footer>
		</div>
		<div class="clear"></div>
				</article><!-- #post-<?php the_ID(); ?> -->
				
		<?php if ( count( $attachments ) > 1 ) { ?>
			
			<nav id="nav-below">
					<div class="nav-previous fleft"><?php previous_image_link( false, __( '&larr; Previous' , 'wplook' ) ); ?></div>
				<div class="nav-next fright"><?php next_image_link( false, __( 'Next &rarr;' , 'wplook' ) ); ?></div>
			<div class="left-corner"></div>
			<div class="clear"></div>
			</nav>
			<!-- #nav-single -->
			<?php } ?>
			<?php comments_template( '', true ); ?>
			</div><!-- #content -->
		</section><!-- #primary -->				
<?php get_sidebar(); ?>
<?php get_footer(); ?>