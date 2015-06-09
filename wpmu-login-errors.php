<?php
/**
 * Plugin Name: WPMU Login Errors
 * Description: Hide all login errors on the wp-login page.
 * Author: Jason Jersey
 * Version: 1.0
 */


/**
 * Hide Login Errors
 */
function hide_login_errors() {
    return 'Incorrect login details.';
}
add_filter('login_errors', 'hide_login_errors');
