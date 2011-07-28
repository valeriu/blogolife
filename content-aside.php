<?php
/**
 * The template for displaying aside
 *
 * @package wplook
 * @subpackage vip
 * @since vip 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="col1 fleft">
				<div class="postformat">
					<div class="format-icon"></div>
					<div class="left-corner"></div>
				</div>
			</div>
			<div class="col2 fright">		

		
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>	
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wplook' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="clear"></div><div class="page-link"><span>' . __( 'Pages:', 'wplook' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>	
			<footer class="entry-meta">
				<div class="date-i fleft"><?php the_time('F jS, Y') ?></div>
				<div class="comment-i fleft"><?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off');?></div>
				<div class="author-i fleft"><?php the_author_posts_link(); ?></div>
				<?php edit_post_link( __( 'Edit', 'wplook' ), '<div class="edit-i fright">', '</div>' ); ?>
			
				<div class="clear"></div>
			</footer>
		</div>
		<div class="clear"></div>
	</article>	