<?php
/*
Plugin Name: Hours Widget Plugin
Plugin URI: http://www.acodeaebove.com/
Description: A simple plugin that adds a simple widget for business hours
Version: 1.0
Author: Kimberly Pennington
Author URI: http://www.acodeabove.com/
License: GPL2
*/

class hours_widget extends WP_Widget {

        // constructor
        function hours_widget() {
            parent::WP_Widget(false, $name = __('Hours Widget', 'hours_widget') );
        }

    // widget form creation
    function form($instance) {

        // Check values
        if( $instance) {
             $title = esc_attr($instance['title']);
             $text = esc_attr($instance['text']);
             $textarea = esc_textarea($instance['textarea']);
        } else {
             $title = '';
             $text = '';
             $textarea = '';
        }
    }

    // widget update
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        // Fields
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['text'] = strip_tags($new_instance['text']);
        $instance['textarea'] = strip_tags($new_instance['textarea']);
        return $instance;
    }


    // widget display
    function widget($args, $instance) {
       extract( $args );
       // these are the widget options
       $title = apply_filters('widget_title', $instance['title']);
       $text = $instance['text'];
       $textarea = $instance['textarea'];
       echo $before_widget;
       // Display the widget
       echo '<div class="widget-text wp_widget_plugin_box">';

       // Check if title is set
       if ( $title ) {
          echo $before_title . $title . $after_title;
       }

       // Check if text is set
       if( $text ) {
          echo '<p class="wp_widget_plugin_text">'.$text.'</p>';
       }
       // Check if textarea is set
       if( $textarea ) {
         echo '<p class="wp_widget_plugin_textarea">'.$textarea.'</p>';
       }
       echo '</div>';
       echo $after_widget;
    }
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("hours_widget");'));

?>