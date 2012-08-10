<?php
/**
 * The right sidebar file. By default we show Archives and Meta
 * @package WPLOOK
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/?>
<div id="secondary" class="widget-area" role="complementary">
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<aside id="archives" class="widget">
			<div class="widget-title">	<h3><?php _e( 'Archives', 'wplook' ); ?></h3>
			<div class="right-corner"></div></div>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>
		<aside id="meta" class="widget">
			<div class="widget-title">	<h3><?php _e( 'Meta', 'wplook' ); ?></h3>
			<div class="right-corner"></div></div>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>
	<?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->
<div class="clear"></div>