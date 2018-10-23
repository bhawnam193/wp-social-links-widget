<?php
/**
* Plugin Name: WP Social Links Widget
* Description: Adds social icons with links to profiles to 
* Version: 1.0
* Author: Bhawna
* Plugin URI: http://www.raadeen.com/
*
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-class.php');

// Register Widget
function register_social_links(){
	register_widget('Social_Links_Widget');
}

add_action('widgets_init', 'register_social_links');