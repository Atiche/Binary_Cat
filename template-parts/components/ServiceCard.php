<?php
if (! defined('ABSPATH')) {
	exit;
}

$args = wp_parse_args(isset($args) ? $args : array(), array(
	'item' => array(),
));
$item = is_array($args['item']) ? $args['item'] : array();
$title = isset($item['title']) ? $item['title'] : '';
$text = isset($item['text']) ? $item['text'] : '';
$icon = isset($item['icon']) ? $item['icon'] : 'delivery';
$image = isset($item['image']) ? $item['image'] : 'service.logistics';
$layoutVariant = isset($item['layoutVariant']) ? $item['layoutVariant'] : 'primary';
$icons = array(
	'delivery' => 'icon.service.delivery',
	'document' => 'icon.service.document',
	'container' => 'icon.service.container',
	'consulting' => 'icon.service.consulting',
);
$iconPath = isset($icons[$icon]) ? $icons[$icon] : $icons['delivery'];
?>
<article class="service-card service-card--<?php echo esc_attr($layoutVariant); ?>">
	<img class="service-card__media" src="<?php echo esc_url(getThemeAsset($image)); ?>" alt="">
	<div class="service-card__icon service-card__icon--<?php echo esc_attr($icon); ?>" aria-hidden="true">
		<img src="<?php echo esc_url(getThemeAsset($iconPath)); ?>" alt="">
	</div>
	<h3 class="service-card__title"><?php echo esc_html($title); ?></h3>
	<p class="service-card__text"><?php echo esc_html($text); ?></p>
</article>
