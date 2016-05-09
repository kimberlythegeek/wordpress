<?php
/*
Plugin Name: Super Simple HTML5 Contact Form
Plugin URI: 
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Kimberly Pennington
Author URI: http://acodeabove.com
*/
function html_form_code() {
  echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
  echo '<p>';
  echo 'Name (required) <br />';
  echo '<input id="sscf-form-name" type="text" name="sscf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["sscf-name"] ) ? esc_attr( $_POST["sscf-name"] ) : '' ) . '"/>';
  echo '</p>';
  echo '<p>';
  echo 'Phone Number<br />';
  echo '<input type="tel" id="sscf-form-phone" name="sscf-phone" value="' . ( isset( $_POST["sscf-phone"] ) ? esc_attr( $_POST["sscf-phone"] ) : '' ) . '"/>';
  echo '</p>';
  echo '<p>';
  echo 'Email (required) <br />';
  echo '<input type="email" id="sscf-form-email" name="sscf-email" value="' . ( isset( $_POST["sscf-email"] ) ? esc_attr( $_POST["sscf-email"] ) : '' ) . '"/>';
  echo '</p>';
  echo '<p>';
  echo 'Message (required) <br />';
  echo '<textarea id="sscf-form-message" name="sscf-message">' . ( isset( $_POST["sscf-message"] ) ? esc_attr( $_POST["sscf-message"] ) : '' ) . '</textarea>';
  echo '</p>';
  echo '<div class="g-recaptcha" data-sitekey="6LcXihsTAAAAAMbRGFnscWbkQUEBGVDARGX6yABr"></div>';
  echo '<p><input type="submit" name="sscf-submitted" value="Send"/></p>';
  echo '</form>';
}

function deliver_mail() {

  // if the submit button is clicked, send the email
  if ( isset( $_POST['sscf-submitted'] ) ) {

    // sanitize form values
    $name    = sanitize_text_field( $_POST["sscf-name"] );
    $phone   = sanitize_email( $_POST["sscf-phone"] );
    $email   = sanitize_email( $_POST["sscf-email"] );
    $message = esc_textarea( $_POST["sscf-message"] );

    // get the blog administrator's email address
    $to = "acodeabovedesign@gmail.com";

    $subject = "A Message for A Code Above";

    // If email has been process for sending, display a success message
    if ( wp_mail( $to, $subject, $message) ) {
      echo '<div id="message-sent">';
      echo 'Thank you for your message, we will respond shortly!';
      echo '</div>';
    } else {
      echo 'An unexpected error occurred';
    }
  }
}

function sscf_shortcode() {
    ob_start();
    deliver_mail();
    html_form_code();

    return ob_get_clean();
}

add_shortcode( 'super_simple_contact_form', 'sscf_shortcode' );

?>