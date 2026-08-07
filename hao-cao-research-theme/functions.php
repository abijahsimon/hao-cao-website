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

function hao_cao_research_get_editor_content($post_id = null) {
	$post_id = $post_id ? (int) $post_id : (int) get_queried_object_id();

	if (!$post_id) {
		return '';
	}

	return (string) get_post_field('post_content', $post_id);
}

function hao_cao_research_has_editor_content($post_id = null) {
	$content = hao_cao_research_get_editor_content($post_id);

	if (trim(wp_strip_all_tags(strip_shortcodes($content))) !== '') {
		return true;
	}

	return (bool) preg_match('/<(img|video|iframe|embed|object|source)\b/i', $content);
}

function hao_cao_research_the_editor_content($class = 'wordpress-page-content') {
	$content = hao_cao_research_get_editor_content();

	if (trim($content) === '') {
		return;
	}

	echo '<div class="' . esc_attr($class) . '">';
	echo apply_filters('the_content', $content);
	echo '</div>';
}

function hao_cao_research_body_marker() {
	echo "\n" . '<!-- Hao Cao Research Website theme active. -->' . "\n";
}
add_action('wp_footer', 'hao_cao_research_body_marker');
