<?php
/**
 * ACF configuration.
 *
 * @package VkSmartService
 */

if (! defined('ABSPATH')) {
	exit;
}

function vkSmartServiceAcfOptionsPage()
{
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(
			array(
				'page_title' => 'Настройки VkSmartService',
				'menu_title' => 'VkSmartService',
				'menu_slug'  => 'vk-smart-service-options',
				'capability' => 'edit_posts',
				'redirect'   => false,
			)
		);
	}
}
add_action('acf/init', 'vkSmartServiceAcfOptionsPage');

add_filter('acf/settings/load_json', 'vkSmartServiceAcfLoadJson');
function vkSmartServiceAcfLoadJson($paths)
{
	$paths[] = VK_SMART_SERVICE_PATH . '/acf-json';
	return $paths;
}

add_filter('acf/settings/save_json', 'vkSmartServiceAcfSaveJson');
function vkSmartServiceAcfSaveJson($path)
{
	return VK_SMART_SERVICE_PATH . '/acf-json';
}

function vkSmartServiceRegisterAcfFields()
{
	if (! function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key' => 'group_vk_smart_service_options',
			'title' => 'VkSmartService content',
			'fields' => array(
				array('key' => 'field_header_logo', 'label' => 'Header logo', 'name' => 'headerLogo', 'type' => 'image', 'return_format' => 'array'),
				array('key' => 'field_header_phone', 'label' => 'Header phone', 'name' => 'headerPhone', 'type' => 'text'),
				array(
					'key' => 'field_header_menu',
					'label' => 'Header menu',
					'name' => 'headerMenu',
					'type' => 'repeater',
					'button_label' => 'Add menu item',
					'sub_fields' => array(
						array('key' => 'field_header_menu_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text'),
						array('key' => 'field_header_menu_url', 'label' => 'URL', 'name' => 'url', 'type' => 'text'),
					),
				),
				array('key' => 'field_hero_title', 'label' => 'Hero title', 'name' => 'heroTitle', 'type' => 'textarea'),
				array('key' => 'field_hero_subtitle', 'label' => 'Hero subtitle', 'name' => 'heroSubtitle', 'type' => 'text'),
				array('key' => 'field_hero_image_desktop', 'label' => 'Hero image desktop', 'name' => 'heroImageDesktop', 'type' => 'image', 'return_format' => 'array'),
				array('key' => 'field_hero_image_mobile', 'label' => 'Hero image mobile', 'name' => 'heroImageMobile', 'type' => 'image', 'return_format' => 'array'),
				array('key' => 'field_intro_title', 'label' => 'Intro title', 'name' => 'introTitle', 'type' => 'text'),
				array('key' => 'field_intro_text', 'label' => 'Intro text', 'name' => 'introText', 'type' => 'textarea'),
				array('key' => 'field_intro_image', 'label' => 'Intro image', 'name' => 'introImage', 'type' => 'image', 'return_format' => 'array'),
				array(
					'key' => 'field_services_items',
					'label' => 'Services items',
					'name' => 'servicesItems',
					'type' => 'repeater',
					'button_label' => 'Add service',
					'sub_fields' => array(
						array('key' => 'field_services_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
						array('key' => 'field_services_text', 'label' => 'Text', 'name' => 'text', 'type' => 'textarea'),
						array('key' => 'field_services_icon', 'label' => 'Icon key', 'name' => 'icon', 'type' => 'text'),
						array('key' => 'field_services_image_label', 'label' => 'Placeholder label', 'name' => 'imageLabel', 'type' => 'text'),
					),
				),
				array('key' => 'field_about_title', 'label' => 'About title', 'name' => 'aboutTitle', 'type' => 'text'),
				array('key' => 'field_about_text', 'label' => 'About text', 'name' => 'aboutText', 'type' => 'textarea'),
				array('key' => 'field_about_image', 'label' => 'About image', 'name' => 'aboutImage', 'type' => 'image', 'return_format' => 'array'),
				array(
					'key' => 'field_advantages_items',
					'label' => 'Advantages items',
					'name' => 'advantagesItems',
					'type' => 'repeater',
					'button_label' => 'Add advantage',
					'sub_fields' => array(
						array('key' => 'field_advantages_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
						array('key' => 'field_advantages_icon', 'label' => 'Icon key', 'name' => 'icon', 'type' => 'text'),
					),
				),
				array('key' => 'field_contact_title', 'label' => 'Contact title', 'name' => 'contactTitle', 'type' => 'text'),
				array('key' => 'field_contact_text', 'label' => 'Contact text', 'name' => 'contactText', 'type' => 'textarea'),
				array('key' => 'field_contact_form_shortcode', 'label' => 'Contact Form 7 shortcode', 'name' => 'contactFormShortcode', 'type' => 'text'),
				array('key' => 'field_map_embed_code', 'label' => 'Yandex map embed code', 'name' => 'mapEmbedCode', 'type' => 'textarea'),
				array('key' => 'field_footer_address', 'label' => 'Footer address', 'name' => 'footerAddress', 'type' => 'textarea'),
				array('key' => 'field_footer_phone', 'label' => 'Footer phone', 'name' => 'footerPhone', 'type' => 'text'),
				array('key' => 'field_footer_email', 'label' => 'Footer email', 'name' => 'footerEmail', 'type' => 'email'),
				array('key' => 'field_privacy_policy_url', 'label' => 'Privacy policy URL', 'name' => 'privacyPolicyUrl', 'type' => 'url'),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'vk-smart-service-options',
					),
				),
			),
		)
	);
}
add_action('acf/init', 'vkSmartServiceRegisterAcfFields');
