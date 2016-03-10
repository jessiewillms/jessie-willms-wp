<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jessie_willms
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="fullwidth site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jessie_willms' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'jessie_willms' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'jessie_willms' ), 'jessie_willms', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
		<div class="site-info">
			<ul>
				<li><i class="fa fa-facebook"></i></li>
				<li><i class="fa fa-twitter"></i></li>
				<li><i class="fa fa-instagram"></i></li>
				<li><i class="fa fa-spotify"></i></li>
				<li><i class="fa fa-github-alt"></i></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
