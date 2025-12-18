<?php
/**
 * Plugin Name: Vekmiass General
 * Description: Core Code for Vekmiass website.
 * Version: 1.0
 * Author: Vekmiass
 * Author URI: https://vekmiass.ru
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function vekmiass_remove_dashboard_widgets() {
  global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['high']['rank_math_dashboard_widget']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
    
}
add_action('wp_dashboard_setup', 'vekmiass_remove_dashboard_widgets' );