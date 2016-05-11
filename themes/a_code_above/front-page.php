<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * @link http://themes.required.ch/?p=606
 */

get_header(); ?>



<div id="wrapper">
<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    include( get_page_template() );
}
?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


