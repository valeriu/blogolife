<?php
/**
 * The template for displaying single content
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
?>
<section class="primary">
	<div id="content">
	<?php wplook_doctitle(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php comments_template( '', true ); ?>
<?php endwhile;  endif; ?>
</div><!-- #content -->
</section><!-- #primary -->