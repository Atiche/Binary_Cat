<?php
/**
 * Theme setup.
 *
 * @package VkSmartService
 */

if (! defined('ABSPATH')) {
	exit;
}

function vkSmartServiceSetup()
{
	load_theme_textdomain('vk-smart-service', VK_SMART_SERVICE_PATH . '/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
	add_theme_support('responsive-embeds');

	register_nav_menus(
		array(
			'primary' => esc_html__('Main menu', 'vk-smart-service'),
			'footer'  => esc_html__('Footer menu', 'vk-smart-service'),
		)
	);
}
add_action('after_setup_theme', 'vkSmartServiceSetup');

function vkSmartServiceContentWidth()
{
	$GLOBALS['content_width'] = 1180;
}
add_action('after_setup_theme', 'vkSmartServiceContentWidth', 0);
