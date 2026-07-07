<?php
if (! defined('ABSPATH')) {
	exit;
}

$embed = getThemeField('mapEmbedCode', '', 'option');
$defaultMapSrc = 'https://yandex.ru/map-widget/v1/?ll=135.071917%2C48.480223&z=13&text=%D0%94%D0%B2%D0%BE%D0%B8%D1%87%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%BE%D1%82%20%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA';
$allowedEmbed = array(
	'iframe' => array(
		'src' => true,
		'width' => true,
		'height' => true,
		'frameborder' => true,
		'allowfullscreen' => true,
		'loading' => true,
		'style' => true,
		'title' => true,
	),
);
?>
<section class="yandex-map" aria-label="<?php esc_attr_e('Карта', 'vk-smart-service'); ?>">
	<?php if ($embed) : ?>
		<?php echo wp_kses($embed, $allowedEmbed); ?>
	<?php else : ?>
		<iframe
			src="<?php echo esc_url($defaultMapSrc); ?>"
			title="<?php esc_attr_e('Двоичный кот на карте Хабаровска', 'vk-smart-service'); ?>"
			loading="lazy"
			allowfullscreen
		></iframe>
	<?php endif; ?>
</section>
