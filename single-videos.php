<?php


	get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div class="page-videos">
			<div class="container">
				<section class="news">	
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content-single', 'page' ); ?>

						<?php the_post_navigation(); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // End of the loop. ?>
				</section>
			</div>
		</div>
	</main><!-- #main -->


<?php get_footer(); ?>