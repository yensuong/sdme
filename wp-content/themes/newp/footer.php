<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package newp
 */
?>

		</div><!-- #content -->
	
	</div><!--.mega-container-->
	<?php if (has_nav_menu('bottom')) : ?>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'bottom' ) ); ?>
		</div>
	</nav><!-- #site-navigation -->
	<?php endif; ?>

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php printf( __( 'Powered by %1$s.', 'newp' ), '<a target="blank" href="'.esc_url("https://inkhive.com/product/newp/").'" rel="nofollow">Newp WordPress Theme</a>' ); ?>
			<span class="sep"></span>
			<?php echo ( esc_html(get_theme_mod('newp_footer_text')) == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','newp')) : esc_html( get_theme_mod('newp_footer_text') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
