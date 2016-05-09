<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a_code_above
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
  <div id="primary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  </div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
  <div id="secondary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
  </div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
  <div id="tertiary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
  </div>
<?php endif; ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'a_code_above' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'a_code_above' ), 'WordPress' ); ?></a>
			<br>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'a_code_above' ), 'a_code_above', '<a href="http://www.ACodeAbove.com" rel="designer">Kimberly Pennington</a>' ); ?>
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
