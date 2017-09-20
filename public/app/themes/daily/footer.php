<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package brosco
 */
?>

	</div><!-- #content -->



	<div class="footer-widgets">

	<div class="row inside-wrapper">
	<div class="col-1-3">
	<?php if ( dynamic_sidebar('footer-1') ) : else : endif; ?>
	</div>
	<div class="col-1-3">
	<?php if ( dynamic_sidebar('footer-2') ) : else : endif; ?>
	</div>
	<div class="col-1-3">
	<?php if ( dynamic_sidebar('footer-3') ) : else : endif; ?>
	</div>
	</div>

	</div>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'brosco' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'brosco' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Theme: <a href="http://www.robertbrodziak.com/en/free-wordpress-themes/daily-theme/">Daily</a> by <a href="http://www.robertbrodziak.com">Brodziak Studio</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

