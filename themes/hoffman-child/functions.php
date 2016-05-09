<?php 
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
  function theme_enqueue_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  }

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Left Sidebar',
    'id' => 'left-sidebar',
    'description' => 'Sidebar Left of Main Content',
    'before_widget' => '<li id="%1$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Right Sidebar',
    'id' => 'right-sidebar',
    'description' => 'Sidebar Right of Main Content',
    'before_widget' => '<li id="%1$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}
?>