<?php
if (! defined('ABSPATH')) {
	exit;
}

$args = wp_parse_args(isset($args) ? $args : array(), array(
	'variant' => 'header',
	'logo' => '',
));
$variant = $args['variant'];
$defaultLogo = $variant === 'footer'
	? getThemeAsset('logo.footer')
	: getThemeAsset('logo.header');
$logo = $args['logo'] !== '' ? $args['logo'] : $defaultLogo;
?>
<a class="logo logo--<?php echo esc_attr($variant); ?>" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('VK Smart Service', 'vk-smart-service'); ?>">
	<?php if (is_array($logo) || is_numeric($logo)) : ?>
		<?php echo getThemeImage($logo, 'full', array('alt' => 'VK Smart Service')); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<?php else : ?>
		<img src="<?php echo esc_url($logo ?: $defaultLogo); ?>" alt="VK Smart Service">
	<?php endif; ?>
</a>
