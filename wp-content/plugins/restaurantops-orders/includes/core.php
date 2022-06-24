<?php

// Register settings
function RestaurantOps_register_settings()
{
    register_setting( 'RestaurantOps_settings_group', 'RestaurantOps_settings' );
}
add_action( 'admin_init', 'RestaurantOps_register_settings' );

// Delete options on uninstall
function RestaurantOps_uninstall()
{
    delete_option( 'RestaurantOps_settings' );
}
register_uninstall_hook( __FILE__, 'RestaurantOps_uninstall' );

function restaurantops_shortcodes($atts = [], $content = null) {
    $tmpl =
<<<EOT
  <div id="order-widget" ></div>
EOT;

    return $tmpl;
}

add_shortcode('restaurantops_widget', 'restaurantops_shortcodes');

?>
