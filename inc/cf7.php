<?php
/**
 * Contact Form 7 integration.
 *
 * @package VkSmartService
 */

if (! defined('ABSPATH')) {
	exit;
}

function getCf7FormShortcode($default = '')
{
	$shortcode = defined('VK_SMART_SERVICE_CF7_SHORTCODE')
		? VK_SMART_SERVICE_CF7_SHORTCODE
		: '[contact-form-7 id="4e67702" title="Контактная форма 1"]';

	return apply_filters('vk_smart_service_cf7_shortcode', $shortcode);
}

function vkSmartServiceIsCf7Active()
{
	return defined('WPCF7_VERSION') || function_exists('wpcf7_contact_form');
}
