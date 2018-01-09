<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gamer_Magazine
 */

?>

	</div><!-- #content -->

	<footer class="chunky-footer">
		<div class="row">
			<div class="columns large-4 medium-6 small-12">
				<?php dynamic_sidebar('footer-sidebar-1'); ?>
			</div>
			<div class="columns large-4 medium-6 small-12">
				<?php dynamic_sidebar('footer-sidebar-2'); ?>
			</div>
			<div class="columns large-4 medium-6 small-12">
				<?php dynamic_sidebar('footer-sidebar-3'); ?>
			</div>
		</div>
	</footer>

	<footer id="colophon" class="site-footer">
		<div class="site-info row">
			<div class="columns large-8 small-12">
				<p>Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>
				<?php dynamic_sidebar('footer-copyright'); ?>
			</div>
			<div class="columns large-4 small-12">

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
