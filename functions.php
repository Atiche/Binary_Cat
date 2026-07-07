<?php
/**
 * VkSmartService theme bootstrap.
 *
 * @package VkSmartService
 */

if (! defined('ABSPATH')) {
	exit;
}

define('VK_SMART_SERVICE_VERSION', '1.0.0');
define('VK_SMART_SERVICE_PATH', get_template_directory());
define('VK_SMART_SERVICE_URI', get_template_directory_uri());

require_once VK_SMART_SERVICE_PATH . '/inc/setup.php';
require_once VK_SMART_SERVICE_PATH . '/inc/enqueue.php';
require_once VK_SMART_SERVICE_PATH . '/inc/helpers.php';
require_once VK_SMART_SERVICE_PATH . '/inc/cf7.php';

if (class_exists('ACF')) {
	require_once VK_SMART_SERVICE_PATH . '/inc/acf/acfConfig.php';
}
