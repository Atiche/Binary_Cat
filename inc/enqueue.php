<?php
/**
 * Assets.
 *
 * @package VkSmartService
 */

if (! defined('ABSPATH')) {
	exit;
}

function vkSmartServiceAssetVersion($path)
{
	$fullPath = VK_SMART_SERVICE_PATH . '/' . $path;
	return file_exists($fullPath) ? (string) filemtime($fullPath) : VK_SMART_SERVICE_VERSION;
}

function vkSmartServiceEnqueueAssets()
{
	wp_enqueue_style(
		'vk-smart-service-main',
		VK_SMART_SERVICE_URI . '/assets/css/main.css',
		array(),
		vkSmartServiceAssetVersion('assets/css/main.css')
	);

	wp_enqueue_script(
		'vk-smart-service-main',
		VK_SMART_SERVICE_URI . '/assets/js/main.js',
		array(),
		vkSmartServiceAssetVersion('assets/js/main.js'),
		true
	);
}
add_action('wp_enqueue_scripts', 'vkSmartServiceEnqueueAssets');
