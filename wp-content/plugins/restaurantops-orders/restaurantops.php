<?php
/*
 * Plugin Name: RestaurantOps Orders
 * Version: 1.0.2
 * Description: Adds an online ordering widget. Designed for restaurants like yours to increase sales, increase efficiency and increase income.
 * Author: RestaurantOps
 * Plugin URI: https://www.restaurantops.co/?ref=wordpress
 */

// Prevent Direct Access
defined('ABSPATH') or die("Restricted access!");

/*
* Define
*/
define('RESTAURANTOPS_VERSION', '1.0.3');
define('RESTAURANTOPS_DIR', plugin_dir_path(__FILE__));
define('RESTAURANTOPS_URL', plugin_dir_url(__FILE__));
defined('RESTAURANTOPS_PATH') or define('RESTAURANTOPS_PATH', untrailingslashit(plugins_url('', __FILE__)));

require_once(RESTAURANTOPS_DIR . 'includes/core.php');
require_once(RESTAURANTOPS_DIR . 'includes/menus.php');
require_once(RESTAURANTOPS_DIR . 'includes/admin.php');
require_once(RESTAURANTOPS_DIR . 'includes/embed.php');


?>
