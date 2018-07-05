<?php
 /*
 Plugin Name: Spectrum of Engagement
 Plugin URI: http://www.unbound.services/
 description: Spectrum of Male Engagement Interactive App
 Version: 1.2
 Author: Unbound
 Author URI: http://www.unbound.services/
 License: GPL2
 */

//add javascript
function addScript() {
 
wp_register_script('maleEngagement', plugins_url('/dist/main.js', __FILE__), array(),null, false);
 
wp_enqueue_script('maleEngagement');
}


function maleEngagementSpectrum(){
 return '<div class="engagement-spectrum" id="demo"></div>
 <script>engagementAppFunction(document.getElementById("demo"))</script>';
}

// Add a shortcode
add_shortcode('maleEngagement', 'maleEngagementSpectrum');
 
// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

//Add script
add_action( 'wp_enqueue_scripts', 'addScript' );  

?>