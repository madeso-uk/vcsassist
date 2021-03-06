<?php
/*
* Template Name: Partner Directory page with sidebar template
* */

/**
 * The Template for the main partner directory page.
 *
 * This is the main partner directory template - which
 * includes the sidebar
 *
 */

get_header(); ?>
<?php get_sidebar('directory'); ?>
	<div id="primary" class="with-sidebar content-area partner-directory-page">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'directorypage' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
