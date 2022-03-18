<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

// function that runs when shortcode is called
function evo_photo_icon_text( $atts = [] ) {

  $atts = shortcode_atts(
        array(
            'text' => 'text',
            'icon' => 'icon',
            'img' => 'img'
        ), $atts
    );

  // Things that you want to do.
  $message = $atts['text'] . $atts['icon'] . $atts['img'];

  // Output needs to be return
  return $message;
}
// register shortcode
add_shortcode('evo_photo_icon_text', 'evo_photo_icon_text');
