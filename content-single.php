				<section class="primary">
					<div id="content">
			
			<?php thematic_doctitle(); ?>

			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>
					
					<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div><!-- #content -->
		</section><!-- #primary -->

