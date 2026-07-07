<?php
if (! defined('ABSPATH')) {
	exit;
}

$item = isset($item) && is_array($item) ? $item : array();
$title = isset($item['title']) ? $item['title'] : '';
$text = isset($item['text']) ? $item['text'] : '';
$icon = isset($item['icon']) ? $item['icon'] : 'delivery';
$image = isset($item['image']) ? $item['image'] : 'images/services/logistics.png';
$icons = array(
	'delivery' => 'svg/icons/icon-service-delivery.svg',
	'document' => 'svg/icons/icon-service-document.svg',
	'container' => 'svg/icons/icon-service-container.svg',
	'consulting' => 'svg/icons/icon-service-consulting.svg',
);
$iconPath = isset($icons[$icon]) ? $icons[$icon] : $icons['delivery'];
?>
<article class="service-card">
	<img class="service-card__media" src="<?php echo esc_url(getThemeAssetUri($image)); ?>" alt="">
	<div class="service-card__icon service-card__icon--<?php echo esc_attr($icon); ?>" aria-hidden="true">
		<img src="<?php echo esc_url(getThemeAssetUri($iconPath)); ?>" alt="">
	</div>
	<h3 class="service-card__title"><?php echo esc_html($title); ?></h3>
	<p class="service-card__text"><?php echo esc_html($text); ?></p>
</article>
