<?php
/**
 * The 404 template file.
 *
 * @package WPLOOK
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/
get_header(); ?>

<section class="primary">
	<div id="content">
		<?php wplook_doctitle();?>
		<article id="post-0" class="post no-results not-found">
			<div class="col1 fleft">
				<div class="postformat"><div class="format-icon"></div><div class="left-corner"></div></div>
			</div>
			<div class="col2 fright">
				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wplook' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div>
		</article><!-- #post-0 -->
	</div><!-- #content -->
</section><!-- #primary -->

<?php 
	get_sidebar(); 
	get_footer(); 
?>