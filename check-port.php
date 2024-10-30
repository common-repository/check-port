<?php
/*
Plugin Name: Check Port
Plugin URI: https://wordpress.org/plugins/check-port/
Description: Plugin to check TCP ports.
Author: Anton Tananaev
Version: 1.1
Author URI: http://www.tananaev.com/
*/

function check_port_connection() {
    $connection = @fsockopen($_REQUEST['address'], $_REQUEST['port'], $errno, $errstr, 5);
    if (is_resource($connection)) {
        echo 'open';
        fclose($connection);
    } else {
        echo 'closed';
    }
    exit;
}

add_action('wp_ajax_port_check', 'check_port_connection');
add_action('wp_ajax_nopriv_port_check', 'check_port_connection');

?>
