<?php
/**
 * The footer template
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
?>
</div>
		</div>
		<?php 
		if (is_active_sidebar( 'col1-widgets' ) || is_active_sidebar( 'col2-widgets' ) || is_active_sidebar( 'col3-widgets' )	) { ?>
			<div id="footer-widget-area">
				<?php if ( is_active_sidebar( 'col1-widgets' ) ) : ?>
					<!-- Widget area 1 -->
					<div class="w1">
						<?php dynamic_sidebar( 'col1-widgets' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'col2-widgets' ) ) : ?>
					<!-- Widget area 2 -->
					<div class="w2">
						<?php dynamic_sidebar( 'col2-widgets' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'col3-widgets' ) ) : ?>
					<!-- Widget area 3 -->
					<div class="w3">
						<?php dynamic_sidebar( 'col3-widgets' ); ?>
					</div>
				<?php endif; ?>
				<div class="clear"></div>
			</div>
		<?php }	?>
	<!-- It is completely optional, but if you like the Theme I would appreciate it if you keep the credit link at the bottom. -->
	<footer id="copy"><p><?php _e('Proudly powered by', 'wplook'); ?> <a href="http://wordpress.org" target="_blank"><?php _e('WordPress', 'wplook'); ?></a>. <?php _e('Design by', 'wplook'); ?>  <a href="http://wplook.com/blogolifewpo" title="<?php _e('WPlook', 'wplook'); ?>" target="_blank">WPlook</a></p></footer>
	<?php wp_footer(); ?>
	</body>
</html>