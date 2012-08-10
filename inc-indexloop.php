<?php
/**
 * The loop for home page (index)
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
?>
<div class="primary">
	<div id="content">
	<?php wplook_doctitle(); ?>
<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
	<?php  wplook_content_nav( 'nav-below' ); ?>
<?php else : ?>
	<article id="post-0" class="post no-results not-found">
		<div class="col1 fleft"><div class="postformat"><div class="format-icon"></div><div class="left-corner"></div></div>				</div>
		<div class="col2 fright">
			<header class="entry-header"><h1 class="entry-title"><?php _e( 'Nothing Found', 'wplook' ); ?></h1></header><!-- .entry-header -->
			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wplook' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</div>
	</article><!-- #post-0 -->
<?php endif; ?>
</div><!-- #content -->
</div><!-- #primary -->