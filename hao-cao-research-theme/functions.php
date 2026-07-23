<?php
/**
 * Theme bootstrap for the Hao Cao Research Website.
 */

if (!defined('ABSPATH')) {
	exit;
}

function hao_cao_research_setup() {
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'hao_cao_research_setup');

function hao_cao_research_theme_uri($path = '') {
	$path = ltrim((string) $path, '/');

	return get_template_directory_uri() . ($path ? '/' . $path : '');
}

function hao_cao_research_page_url($slug = '') {
	$slug = trim((string) $slug, '/');

	if ($slug === '') {
		return home_url('/');
	}

	return home_url('/' . $slug . '/');
}

function hao_cao_research_body_marker() {
	echo "\n" . '<!-- Hao Cao Research Website theme active. -->' . "\n";
}
add_action('wp_footer', 'hao_cao_research_body_marker');

