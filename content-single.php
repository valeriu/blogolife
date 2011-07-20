				<section class="primary">
					<div id="content">
						<header class="page-header">
							<h1 class="page-title">Latest Posts</h1>
							<div class="left-corner"></div>
						</header>

			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>
					
					<?php comments_template( '', true ); ?>

				<?php endwhile; ?>

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

