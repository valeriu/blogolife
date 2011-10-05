<?php
/**
 * The template for displaying Comments.
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
?>
<a name="comments"></a>
<?php if ( comments_open() ) : ?>
<div class="comments"><?php if ( post_password_required() ) : ?><p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'wplook' ); ?></p></div>
<!-- #comments -->
<?php 	return; 	endif; ?>
<?php if ( have_comments() ) : ?>
<header class="page-header"><h2 class="page-title"><?php	printf( _n( 'One Response', '%1$s Responses', get_comments_number(), 'wplook' ),	number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );	?></h2><div class="left-corner"></div></header>
<ul class="commentlist"><?php	wp_list_comments( array( 'callback' => 'wplook_comment' ) ); ?></ul>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
<nav id="nav-below">
	<div class="nav-previous fleft"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'wplook' ) ); ?>	</div>
	<div class="nav-next fright"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'wplook' ) ); ?></div>
	<div class="left-corner"></div>
	<div class="clear"></div>
</nav>
 <?php endif; ?>
 
<!-- .navigation -->
<?php endif; // check for comment navigation ?>
<?php else : // or, if we don't have comments:
	if ( ! comments_open() ) :
?>
<!--<p class="nocomments"><?php //we show in metaheader _e( 'Comments are closed.', 'wplook' ); ?></p>-->
<?php endif; // end ! comments_open() ?>
<?php endif; // end have_comments() ?>
<?php wplook_comment_form(  ); ?>
</div>
<!-- end #comments -->