<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-left' )  ) : ?>
	<aside id="widget-area-left" class="site-sidebar-left widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-left' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
