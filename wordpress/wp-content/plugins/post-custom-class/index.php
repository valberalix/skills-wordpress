<?php
/*
 * Plugin Name:       Post Custom Class
 * Plugin URI:        https://github.com/valberalix/skills-wordpress
 * Description:       A pluggin for adding custom class to your posts "p" tags.
 * Version:           1.0.0
 * Requires PHP:      8.2
 * Author:            Valber Alix
 * Author URI:        https://github.com/valberalix
 * Text Domain:       post-cutom-class-plugin
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
  echo 'Seems like you are here by accident...';
  exit;
}

// Setup
define('MY_PLUGIN_DIR', plugin_dir_path(__FILE__));

// // Includes
// $rootFiles = glob(MY_PLUGIN_DIR . 'includes/*.php');
// $subdirectoryFiles = glob(MY_PLUGIN_DIR . 'includes/**/*.php');
// $allFiles = array_merge($rootFiles, $subdirectoryFiles);

// foreach ($allFiles as $filename) {
//   include_once ($filename);
// }

// // Hooks
// add_action('init', 'add_post_custom_class');