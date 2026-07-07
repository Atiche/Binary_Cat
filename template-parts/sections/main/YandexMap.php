<?php
if (! defined('ABSPATH')) {
	exit;
}

$embed = getThemeField('mapEmbedCode', '', 'option');
?>
<section class="yandex-map" aria-label="<?php esc_attr_e('Карта', 'vk-smart-service'); ?>">
	<?php if ($embed) : ?>
		<?php echo wp_kses($embed, array('iframe' => array('src' => true, 'width' => true, 'height' => true, 'frameborder' => true, 'allowfullscreen' => true, 'loading' => true, 'style' => true, 'title' => true))); ?>
	<?php else : ?>
		<div class="yandex-map__placeholder placeholder-media">
			<span>Яндекс карта</span>
		</div>
	<?php endif; ?>
</section>
