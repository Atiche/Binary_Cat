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

	$args = is_array($args) ? $args : array();

	include $path;
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

function getThemeAssetMap()
{
	return array(
		'logo.header' => 'svg/logo/vk-smart-service-header.svg',
		'logo.footer' => 'svg/logo/vk-smart-service-footer.svg',
		'logo.binaryCat' => 'svg/logo/binary-cat.svg',
		'logo.favicon' => 'svg/logo/favicon.svg',
		'hero.desktop' => 'images/hero/hero-desktop.jpg',
		'hero.mobile' => 'images/hero/hero-mobile.jpg',
		'intro.photo' => 'images/intro/intro-photo.jpg',
		'about.photo' => 'images/about/about-photo.jpg',
		'service.logistics' => 'images/services/logistics.jpg',
		'service.systems' => 'images/services/systems.jpg',
		'service.equipment' => 'images/services/equipment.jpg',
		'service.consulting' => 'images/services/consulting.jpg',
		'icon.address' => 'svg/icons/icon-address.svg',
		'icon.phone' => 'svg/icons/icon-phone.svg',
		'icon.email' => 'svg/icons/icon-email.svg',
		'icon.scrollDown' => 'svg/icons/icon-scroll-down.svg',
		'icon.checkboxChecked' => 'svg/icons/checkbox-checked.svg',
		'icon.service.delivery' => 'svg/icons/icon-service-delivery.svg',
		'icon.service.document' => 'svg/icons/icon-service-document.svg',
		'icon.service.container' => 'svg/icons/icon-service-container.svg',
		'icon.service.consulting' => 'svg/icons/icon-service-consulting.svg',
		'icon.advantage.specialist' => 'svg/icons/icon-advantage-specialist.svg',
		'icon.advantage.target' => 'svg/icons/icon-advantage-target.svg',
		'icon.advantage.global' => 'svg/icons/icon-advantage-global.svg',
		'icon.advantage.network' => 'svg/icons/icon-advantage-network.svg',
		'icon.advantage.team' => 'svg/icons/icon-advantage-team.svg',
	);
}

function getThemeAsset($key, $asUri = true)
{
	$assetMap = getThemeAssetMap();
	$path = isset($assetMap[$key]) ? $assetMap[$key] : ltrim((string) $key, '/');

	return $asUri ? getThemeAssetUri($path) : getThemeAssetPath($path);
}

function getPrivacyPolicyLink()
{
	if (function_exists('get_privacy_policy_url')) {
		$wpUrl = get_privacy_policy_url();
		return $wpUrl !== '' ? $wpUrl : '#';
	}

	return '#';
}

function getHeaderPhone()
{
	return '+7 (499) 232-22-22';
}

function getHeaderMenu()
{
	return array(
		array('label' => 'Услуги и решения', 'url' => '#services'),
		array('label' => 'О компании', 'url' => '#about'),
		array('label' => 'Наши преимущества', 'url' => '#advantages'),
	);
}

function getDefaultServicesItems()
{
	return array(
		array('title' => 'Управление логистикой', 'text' => 'Управляем логистикой, оказываем комплексные таможенно-логистические услуги в формате «от двери до двери» разными видами транспорта', 'icon' => 'delivery', 'image' => 'service.logistics', 'layoutVariant' => 'primary'),
		array('title' => 'Разработка логистических систем', 'text' => 'Создаем любые транспортно-логистические схемы по индивидуальному заказу', 'icon' => 'document', 'image' => 'service.systems', 'layoutVariant' => 'secondary'),
		array('title' => 'Поставка оборудования', 'text' => 'Организуем закупку и поставку оборудования и комплектующих разных брендов от запорной регулирующей арматуры и насосного оборудования до запасных частей к гидроуплотнениям высокого давления и кислородным компрессорам', 'icon' => 'container', 'image' => 'service.equipment', 'layoutVariant' => 'tertiary'),
		array('title' => 'Консультации', 'text' => 'Консультируем в сфере промышленно-производственной логистики. К услугам наших клиентов - богатый опыт и знания в сфере логистики', 'icon' => 'consulting', 'image' => 'service.consulting', 'layoutVariant' => 'quaternary'),
	);
}

function getDefaultAdvantagesItems()
{
	return array(
		array('title' => 'Индивидуальный подход', 'icon' => 'specialist', 'layoutVariant' => 'approach'),
		array('title' => 'Гибкие тарифы', 'icon' => 'target', 'layoutVariant' => 'rates'),
		array('title' => 'Широкая сеть поставщиков в Китае', 'icon' => 'global', 'layoutVariant' => 'china'),
		array('title' => 'Возможность реализации логистических проектов за пределами страны', 'icon' => 'network', 'layoutVariant' => 'projects'),
		array('title' => 'Профессиональная команда с многолетним опытом работы в промышленном секторе', 'icon' => 'team', 'layoutVariant' => 'team'),
	);
}

function getServicesItems()
{
	return getDefaultServicesItems();
}

function getAdvantagesItems()
{
	return getDefaultAdvantagesItems();
}

function getFooterContacts()
{
	return array(
		'address' => '682645, Хабаровский край, г. Амурск, Западное шоссе, 18 офис 1',
		'phone' => '+7 (499) 232-22-22',
		'email' => 'dk@vksmartservice.com',
	);
}
