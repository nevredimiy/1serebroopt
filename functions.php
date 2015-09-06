<?php
/**
 * Example of load_textdomain usage
 * @param string $domain Unique domain for translation.
 * @param string $mofile Path to the .mo file.
 * @param array|string $args Optional args used in taxonomy registration.
 */

function log_mo_file_load($domain, $mofile){
    echo 'loading file "' . $mofile . '" on domain "' . $domain . '"';
    // or whatever else you'd like to do here.
}

add_action( 'load_textdomain', 'log_mo_file_load' );

?>