<?php
/**
 * Theme helpers.
 *
 * @package VkSmartService
 */

if (! defined('ABSPATH')) {
	exit;
}

function getComponentPath($componentName, $type = 'components', $subfolder = '')
{
	$basePath = VK_SMART_SERVICE_PATH . "/template-parts/{$type}";
	$path = $subfolder !== ''
		? "{$basePath}/{$subfolder}/{$componentName}.php"
		: "{$basePath}/{$componentName}.php";

	return file_exists($path) ? $path : false;
}

function component($componentName, $type = 'components', $args = array(), $subfolder = '')
{
	if ($type === 'sections' && $subfolder === '' && is_front_page()) {
		$subfolder = 'main';
	}

	$path = getComponentPath($componentName, $type, $subfolder);
	if (! $path) {
		return;
	}

	if (is_array($args) && ! empty($args)) {
		extract($args, EXTR_SKIP); // phpcs:ignore WordPress.PHP.DontExtract.extract_extract
	}

	include $path;
}

function getThemeField($fieldName, $default = '', $location = null)
{
	if (! function_exists('get_field')) {
		return $default;
	}

	$locations = array();
	if ($location !== null) {
		$locations[] = $location;
	} else {
		if (is_singular()) {
			$locations[] = get_the_ID();
		}
		$frontPageId = get_option('page_on_front');
		if ($frontPageId) {
			$locations[] = $frontPageId;
		}
		$locations[] = 'option';
	}

	foreach ($locations as $fieldLocation) {
		$value = get_field($fieldName, $fieldLocation);
		if ($value !== false && $value !== null && $value !== '') {
			return $value;
		}
	}

	return $default;
}

function getThemeImage($image, $size = 'full', $attrs = array())
{
	if (is_numeric($image)) {
		return wp_get_attachment_image((int) $image, $size, false, $attrs);
	}

	if (is_array($image) && ! empty($image['ID'])) {
		return wp_get_attachment_image((int) $image['ID'], $size, false, $attrs);
	}

	if (is_string($image) && $image !== '') {
		$alt = isset($attrs['alt']) ? esc_attr($attrs['alt']) : '';
		return '<img src="' . esc_url($image) . '" alt="' . $alt . '">';
	}

	return '';
}

function getThemeAssetUri($path)
{
	return VK_SMART_SERVICE_URI . '/assets/' . ltrim($path, '/');
}

function getThemeAssetPath($path)
{
	return VK_SMART_SERVICE_PATH . '/assets/' . ltrim($path, '/');
}

function getPrivacyPolicyLink()
{
	$customUrl = getThemeField('privacyPolicyUrl', '', 'option');
	if ($customUrl !== '') {
		return $customUrl;
	}

	if (function_exists('get_privacy_policy_url')) {
		$wpUrl = get_privacy_policy_url();
		return $wpUrl !== '' ? $wpUrl : '#';
	}

	return '#';
}

function getDefaultServicesItems()
{
	return array(
		array('title' => 'Управление  логистикой', 'text' => 'Управляем логистикой, оказываем комплексные таможенно-логистические услуги в формате «от двери до двери» разными видами транспорта', 'icon' => 'delivery', 'image' => 'images/services/logistics.jpg'),
		array('title' => 'Разработка логистичекских систем', 'text' => 'Создаем любые транспортно-логистические схемы по индивидуальному заказу', 'icon' => 'document', 'image' => 'images/services/systems.jpg'),
		array('title' => 'Поставка оборудования', 'text' => 'Организуем закупку и поставку оборудования и комплектующих разных брендов от запорной регулирующей арматуры и насосного оборудования до запасных частей к гидроуплотнениям высокого давления и кислородным компрессорам', 'icon' => 'container', 'image' => 'images/services/equipment.jpg'),
		array('title' => 'Консультации', 'text' => 'Консультируем в сфере промышленно-производственной логистики. К услугам наших клиентов — богатый опыт и знания в сфере логистики', 'icon' => 'consulting', 'image' => 'images/services/consulting.jpg'),
	);
}

function getDefaultAdvantagesItems()
{
	return array(
		array('title' => 'Индивидуальный подход', 'icon' => 'specialist'),
		array('title' => 'Гибкие тарифы', 'icon' => 'target'),
		array('title' => 'Широкая сеть поставщиков в Китае', 'icon' => 'global'),
		array('title' => 'Возможность реализации логистических проектов за пределами страны', 'icon' => 'network'),
		array('title' => 'Профессиональная команда с многолетним опытом работы в промышленном секторе', 'icon' => 'team'),
	);
}
