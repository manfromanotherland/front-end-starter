<?php

/**
 * Basic functions for easy and fast website development
 * @author Edmundo Junior <hello@edmundojr.com>
 */

/**
 * Call header
 * @return file
 */
function get_header() {
	include('inc/header.php');
}

/**
 * Call footer
 * @return file
 */
function get_footer() {
	include('inc/footer.php');
}

/**
 * Get URL without the extension
 * @var string
 */
$page = basename($_SERVER['PHP_SELF'], ".php");

/**
 * Add class to body based on URL
 * @return string
 */
function body_class() {
	global $page;
	echo 'class="is-' . $page . '"';
}

/**
 * Check page URL and add class to nav item
 * @param  string
 * @return string
 */
function active_class($url) {
	global $page;
	if ($page == $url) {
		echo 'class="is-active"';
	}
}