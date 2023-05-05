<?php

/*
 * Define THEME_TEXTDOMAIN Constant
 */
if (!defined('THEME_TEXTDOMAIN')) {
	define('THEME_TEXTDOMAIN', 'base-theme'); // Theme Name
}

/*
 * Template Functions
 */
require_once 'includes/template-functions.php';


/*
 * ShortCode Functions
 */
require_once 'includes/shortcodes.php';


/*
 * Custom Post Types Functions
 */
require_once 'includes/cpt.php';


/*
 * Debug
 */
function pre_print_pre($data, $exit = false)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	if ($exit) {
		exit();
	}
}