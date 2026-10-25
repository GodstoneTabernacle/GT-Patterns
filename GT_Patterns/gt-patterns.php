<?php

/**
 * Plugin Name:       GT_Patterns
 * Description:       A library of modern, responsive block patterns for church and general websites: visit, sermons, ministries, events, giving, heroes, features, pricing, forms and full pages. Core blocks only. Colors follow your Blocksy palette.
 * Version:           1.1.0
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Author:            GT
 * License:           GPL-2.0-or-later
 * Text Domain:       gt-patterns
 */

if (! defined('ABSPATH')) {
	exit;
}

define('GT_PATTERNS_VERSION', '1.1.0');
define('GT_PATTERNS_DIR', plugin_dir_path(__FILE__));
define('GT_PATTERNS_URL', plugin_dir_url(__FILE__));

/**
 * Pattern categories shown in the block inserter (Patterns tab).
 * To add a category, add a line here, then use its slug in a pattern file.
 */
function gt_patterns_categories()
{
	return array(
		'gt-grid'         => 'GT Grid',
		'gt-pages'        => 'GT Full Pages',
		'gt-convention'   => 'GT Convention',
		'gt-hero'         => 'GT Hero',
		'gt-visit'        => 'GT Visit & Welcome',
		'gt-sermons'      => 'GT Sermons & Worship',
		'gt-ministries'   => 'GT Ministries',
		'gt-events'       => 'GT Events',
		'gt-giving'       => 'GT Giving, Prayer & Forms',
		'gt-layouts'      => 'GT Layouts & Extras',
		'gt-media'        => 'GT Media & Galleries',
		'gt-features'     => 'GT Features',
		'gt-content'      => 'GT Image & Text',
		'gt-pricing'      => 'GT Pricing',
		'gt-testimonials' => 'GT Testimonials',
		'gt-faq'          => 'GT FAQ',
		'gt-cta'          => 'GT Call to Action',
		'gt-team'         => 'GT Team',
		'gt-stats'        => 'GT Stats',
		'gt-logos'        => 'GT Logos',
		'gt-steps'        => 'GT Steps',
		'gt-contact'      => 'GT Contact',
		'gt-headers'      => 'GT Page Headers',
		'gt-blog'         => 'GT Blog',
		'gt-gallery'      => 'GT Gallery',
		'gt-custom'       => 'GT Custom',
	);
}

/**
 * Register the categories and every pattern file found in /patterns.
 */
function gt_patterns_register()
{
	if (! function_exists('register_block_pattern')) {
		return;
	}

	foreach (gt_patterns_categories() as $slug => $label) {
		register_block_pattern_category($slug, array('label' => $label));
	}

	$files = glob(GT_PATTERNS_DIR . 'patterns/*.php');
	if (! $files) {
		return;
	}
	sort($files);

	foreach ($files as $file) {
		try {
			$pattern = include $file;
		} catch (\Throwable $e) {
			continue; // One broken file never takes the site down.
		}

		if (! is_array($pattern) || empty($pattern['title']) || empty($pattern['content'])) {
			continue;
		}

		register_block_pattern(
			'gt-patterns/' . basename($file, '.php'),
			array(
				'title'         => $pattern['title'],
				'description'   => isset($pattern['description']) ? $pattern['description'] : '',
				'categories'    => ! empty($pattern['categories']) ? (array) $pattern['categories'] : array('gt-custom'),
				'keywords'      => isset($pattern['keywords']) ? (array) $pattern['keywords'] : array(),
				'viewportWidth' => 1440,
				'content'       => gt_patterns_expand_icons($pattern['content']),
			)
		);
	}
}
add_action('init', 'gt_patterns_register');

/**
 * Icons: put SVG files in /assets/icons (e.g. calendar.svg) and write {{icon:calendar}}
 * anywhere in a pattern file. The SVG is inlined (so it takes the text colour), sized by CSS,
 * and hard-coded fills/strokes are switched to currentColor. A missing file renders nothing.
 */
function gt_patterns_icon_block($name)
{
	static $cache = array();
	$name = preg_replace('/[^a-z0-9_-]/i', '', $name);
	if (isset($cache[$name])) {
		return $cache[$name];
	}
	$file = GT_PATTERNS_DIR . 'assets/icons/' . $name . '.svg';
	$out  = '';
	if ($name !== '' && is_readable($file)) {
		$svg = (string) file_get_contents($file);
		$svg = preg_replace('/<\?xml.*?\?>|<!DOCTYPE.*?>|<!--.*?-->/s', '', $svg);
		if (preg_match('/<svg\b[^>]*>/i', $svg, $m)) {
			$tag = $m[0];
			$new = $tag;
			if (! preg_match('/viewBox=/i', $tag) && preg_match('/width="([\d.]+)/i', $tag, $w) && preg_match('/height="([\d.]+)/i', $tag, $h)) {
				$new = preg_replace('/<svg\b/i', '<svg viewBox="0 0 ' . $w[1] . ' ' . $h[1] . '"', $new, 1);
			}
			$new = preg_replace('/\s(width|height|class)="[^"]*"/i', '', $new);
			$new = preg_replace('/<svg\b/i', '<svg width="44" height="44" class="gtc-svg" aria-hidden="true" focusable="false"', $new, 1);
			$svg = str_replace($tag, $new, $svg);
			if (apply_filters('gt_patterns_icon_recolor', true, $name)) {
				$svg = preg_replace('/\b(fill|stroke)="(?!none|currentColor|url)[^"]*"/i', '$1="currentColor"', $svg);
			}
			$out = "<!-- wp:html -->\n<span class=\"gtc-ico\">" . trim($svg) . "</span>\n<!-- /wp:html -->";
		}
	}
	return $cache[$name] = $out;
}

function gt_patterns_expand_icons($content)
{
	// {{asset:images/file.jpg}} becomes the URL of a file inside this plugin's /assets folder.
	$content = preg_replace_callback('/\{\{asset:([a-z0-9_\/.-]+)\}\}/i', function ($m) {
		return esc_url(GT_PATTERNS_URL . 'assets/' . ltrim(str_replace('..', '', $m[1]), '/'));
	}, $content);
	return preg_replace_callback('/\{\{icon:([a-z0-9_-]+)\}\}/i', function ($m) {
		return gt_patterns_icon_block($m[1]);
	}, $content);
}

/**
 * Styles load on the front end AND inside the editor.
 */
function gt_patterns_assets()
{
	$path = GT_PATTERNS_DIR . 'assets/patterns.css';
	wp_enqueue_style(
		'gt-patterns',
		GT_PATTERNS_URL . 'assets/patterns.css',
		array(),
		file_exists($path) ? (string) filemtime($path) : GT_PATTERNS_VERSION
	);
}
add_action('enqueue_block_assets', 'gt_patterns_assets');

function gt_patterns_convention_assets()
{
	$path = GT_PATTERNS_DIR . 'assets/convention.css';
	wp_enqueue_style(
		'gt-patterns-convention',
		GT_PATTERNS_URL . 'assets/convention.css',
		array(),
		file_exists($path) ? (string) filemtime($path) : GT_PATTERNS_VERSION
	);
}
add_action('enqueue_block_assets', 'gt_patterns_convention_assets', 20);

/**
 * Tiny front-end script: scroll-in animations, number counters, countdown, rotating words.
 * The class is added in <head> so content never flashes; a failsafe removes it if the script fails.
 */
function gt_patterns_head_flag()
{
	echo "<script>(function(d){if(!('IntersectionObserver' in window)||(window.matchMedia&&window.matchMedia('(prefers-reduced-motion: reduce)').matches))return;d.classList.add('gt-js');setTimeout(function(){if(!window.gtOK)d.classList.remove('gt-js')},4000)})(document.documentElement)</script>\n"; // phpcs:ignore WordPress.Security.EscapeOutput
}
add_action('wp_head', 'gt_patterns_head_flag', 1);

function gt_patterns_front_script()
{
	$path = GT_PATTERNS_DIR . 'assets/patterns.js';
	wp_enqueue_script(
		'gt-patterns',
		GT_PATTERNS_URL . 'assets/patterns.js',
		array(),
		file_exists($path) ? (string) filemtime($path) : GT_PATTERNS_VERSION,
		array('in_footer' => true, 'strategy' => 'defer')
	);
}
add_action('wp_enqueue_scripts', 'gt_patterns_front_script');

function gt_patterns_convention_script()
{
	$path = GT_PATTERNS_DIR . 'assets/convention.js';
	wp_enqueue_script(
		'gt-patterns-convention',
		GT_PATTERNS_URL . 'assets/convention.js',
		array(),
		file_exists($path) ? (string) filemtime($path) : GT_PATTERNS_VERSION,
		array('in_footer' => true, 'strategy' => 'defer')
	);
}
add_action('wp_enqueue_scripts', 'gt_patterns_convention_script');
