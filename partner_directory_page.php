<?php
/*
* Template Name: Partner Directory Full page template
* */
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="full-width content-area partner-directory-page">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
      <?php echo do_shortcode( '[businessdirectory-listings]' ) ?>
      <?php // wpbdp_render_listing(null, 'single', false) ?>
	</div><!-- #primary -->
<?php get_sidebar('directory'); ?>
<?php get_footer(); ?>
