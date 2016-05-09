<?php
/*
Plugin Name: Super Simple Social Buttons Widget
Plugin URI: 
Description: A simple widget for the most popular Social Media sites
Version: 1.0
Author: Kimberly Pennington
Author URI: http://www.ACodeAbove.com
License: GPL2
*/

class super_simple_social extends WP_Widget {

  // constructor
  function super_simple_social() {
    parent::WP_Widget(false, $name = __('Super Simple Social Widget', 'super_simple_social') );
  }

  // widget form creation
  function form($instance) {  
  /* ... */
  }

  // widget update
  function update($new_instance, $old_instance) {
    /* ... */
  }

  // widget display
  function widget($args, $instance) {
    /* ... */
  }
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("super_simple_social");'));


?>