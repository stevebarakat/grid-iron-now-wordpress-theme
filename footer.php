<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sportsday Now
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="row" role="contentinfo">
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'http://sportsdaynow.com/', 'sportsdays-now' ) ); ?>"><?php printf( __( 'Copyright &copy;2015 Sportsday Now', 'sportsdays-now' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sportsdays-now' ), 'Sportsday Now', '<a href="#" rel="designer">S. Barakat</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div> <!-- end bg-white -->
</body>
</html>
