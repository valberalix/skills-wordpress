<?php
/*
 * Plugin Name:       GitHub Meta Tag
 * Plugin URI:        https://github.com/valberalix/skills-wordpress
 * Description:       Adds a HTML head meta tag for github url.
 * Version:           1.0.0
 * Requires PHP:      8.2
 * Author:            Valber Alix
 * Author URI:        https://github.com/valberalix
 * Text Domain:       github-metatag-plugin
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
  echo 'Seems like you are here by accident...';
  exit;
}

// Setup
define('GMT_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes
$rootFiles = glob(GMT_PLUGIN_DIR . 'includes/*.php');
$subdirectoryFiles = glob(GMT_PLUGIN_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach ($allFiles as $filename) {
  include_once ($filename);
}

// Hooks
add_action('admin_menu', 'add_github_menu');