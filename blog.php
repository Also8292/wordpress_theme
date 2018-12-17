<?php
/*
Template name: Articles
*/

get_sidebar(); 
?>



	<section id="primary" class="content-area text-center">
		<main id="main" class="site-main">
        <h1>Articles</h1>
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
