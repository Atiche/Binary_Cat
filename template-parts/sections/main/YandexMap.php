<?php
if (! defined('ABSPATH')) {
	exit;
}

$defaultMapSrc = 'https://yandex.ru/map-widget/v1/?ll=135.071917%2C48.480223&z=13&text=%D0%94%D0%B2%D0%BE%D0%B8%D1%87%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%BE%D1%82%20%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA';
?>
<section class="yandex-map" aria-label="<?php esc_attr_e('Карта', 'vk-smart-service'); ?>">
	<iframe
		src="<?php echo esc_url($defaultMapSrc); ?>"
		title="<?php esc_attr_e('Двоичный кот на карте Хабаровска', 'vk-smart-service'); ?>"
		loading="lazy"
		allowfullscreen
	></iframe>
</section>
