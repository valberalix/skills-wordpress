<?php
/*
 * Plugin Name:       Post Custom Class
 * Plugin URI:        https://github.com/valberalix/skills-wordpress
 * Description:       A plugin for adding custom class to your posts "p" tags.
 * Version:           1.0.0
 * Requires PHP:      8.2
 * Author:            Valber Alix
 * Author URI:        https://github.com/valberalix
 * Text Domain:       post-custom-class-plugin
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
  echo 'Seems like you are here by accident...';
  exit;
}

// Setup
define('PCC_DIR', plugin_dir_path(__FILE__));

// Includes
$rootFiles = glob(PCC_DIR . 'includes/*.php');
$subdirectoryFiles = glob(PCC_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach ($allFiles as $filename) {
  include_once ($filename);
}

// Hooks
add_filter('the_content', 'add_post_custom_class');