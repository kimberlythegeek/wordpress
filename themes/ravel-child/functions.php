<?php /* include directory at same level as web document root: */include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/ravel/library/functions/sidebars.php';if ( function_exists('register_sidebar') ){hybrid_register_sidebar(array( 'id'=> 'sidebar-left', 'name'=> _x('Left Sidebar', 'sidebar', 'ravel'), 'description'=> __('Displays the Left Sidebar.', 'ravel'), )); hybrid_register_sidebar(array( 'id'=> 'sidebar-right', 'name'=> _x('Right Sidebar', 'sidebar', 'ravel'), 'description'=> __('Displays the Right Sidebar.', 'ravel'), ));}?>