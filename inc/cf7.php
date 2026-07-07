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
	return getThemeField('contactFormShortcode', $default, 'option');
}

function vkSmartServiceIsCf7Active()
{
	return defined('WPCF7_VERSION') || function_exists('wpcf7_contact_form');
}
