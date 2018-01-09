<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gamer_Magazine
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main columns large-9 medium-9 small-12">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

		<article class="columns large-3 medium-3 small-12 vertical-sidebar">
			<?php get_sidebar(); ?>
		</article>
	</div><!-- #primary -->

<?php
get_footer();
