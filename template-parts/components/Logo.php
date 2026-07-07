<?php
if (! defined('ABSPATH')) {
	exit;
}

$variant = isset($variant) ? $variant : 'header';
$defaultLogo = $variant === 'footer'
	? getThemeAssetUri('svg/logo/vk-smart-service-footer.svg')
	: getThemeAssetUri('svg/logo/vk-smart-service-header.svg');
$logo = isset($logo) ? $logo : getThemeField('headerLogo', $defaultLogo, 'option');
?>
<a class="logo logo--<?php echo esc_attr($variant); ?>" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('VK Smart Service', 'vk-smart-service'); ?>">
	<?php if (is_array($logo) || is_numeric($logo)) : ?>
		<?php echo getThemeImage($logo, 'full', array('alt' => 'VK Smart Service')); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<?php else : ?>
		<img src="<?php echo esc_url($logo ?: $defaultLogo); ?>" alt="VK Smart Service">
	<?php endif; ?>
</a>
