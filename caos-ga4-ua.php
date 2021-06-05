<?php

/**
 * Plugin Name: CAOS GA4 & UA Paralel 
 * Description: This mini plugin allows you to run Google Analytics V4 and Universal Analytics (GA V3) in paralel. 
 * Version: 1.0.0
 * Author: Daan from FFW.Press
 * Author URI: https://daan.dev
 * License: GPL2v2 or later
 * Text Domain: host-analyticsjs-local
 */

defined('ABSPATH') || exit;

function add_ga4_tracking_id()
{
    $tracking_id = __('G-XXXXXXX', 'host-analyticsjs-local'); // Enter your GA4 tracking ID here.
?>
    gtag('config', '<?= $tracking_id; ?>');
<?php
}

/**
 * Make sure you've set CAOS to use gtag.js (v3) and you've entered your Universal Analytics tracking code (starting with UA-) 
 * under CAOS' Basic Settings.
 */
add_filter('caos_gtag_additional_config', 'add_ga4_tracking_id');
