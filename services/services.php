<?php
/**
 * Plugin Name: Serivces CPT
 * Plugin URI: 
 * Description: This plugin creates the custom post type Services
 * Version: 1.0.0
 * Author: Kimberly Pennington
 * Author URI: http://acodeabove.com
 * License: GPL2
 */


function custom_post_service() {
  $labels = array(
    'name'               => __( 'Services', 'post type general name' ),
    'singular_name'      => __( 'Service', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Service' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Service' ),
    'search_items'       => __( 'Search Services' ),
    'not_found'          => __( 'No services found' ),
    'not_found_in_trash' => __( 'No services found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Service offered, description of the service, and pricing',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'description', 'custom-fields' ),
    'has_archive'   => true,
    'menu_icon'   => 'dashicons-store',
  );
  register_post_type( 'service', $args ); 
}
add_action( 'init', 'custom_post_service' );


?>