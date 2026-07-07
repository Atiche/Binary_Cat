<?php
if (! defined('ABSPATH')) {
	exit;
}

$phone = getThemeField('headerPhone', '+7 (499) 232-22-22', 'option');
$phoneHref = 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
$menu = getThemeField(
	'headerMenu',
	array(
		array('label' => 'Услуги и решения', 'url' => '#services'),
		array('label' => 'О компании', 'url' => '#about'),
		array('label' => 'Наши преимущества', 'url' => '#advantages'),
	),
	'option'
);
?>
<div class="site-header__inner container">
	<?php component('Logo', 'components', array('variant' => 'header')); ?>
	<nav class="site-header__nav" aria-label="<?php esc_attr_e('Основное меню', 'vk-smart-service'); ?>">
		<?php foreach ($menu as $item) : ?>
			<a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a>
		<?php endforeach; ?>
	</nav>
	<div class="site-header__aside">
		<a class="site-header__phone" href="<?php echo esc_url($phoneHref); ?>"><?php echo esc_html($phone); ?></a>
		<div class="site-header__lang" aria-label="<?php esc_attr_e('Language switcher', 'vk-smart-service'); ?>">
			<a href="#">EN</a>
			<span>|</span>
			<a href="#" aria-current="true">RU</a>
		</div>
	</div>
</div>
