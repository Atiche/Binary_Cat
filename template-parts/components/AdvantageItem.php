<?php
if (! defined('ABSPATH')) {
	exit;
}

$item = isset($item) && is_array($item) ? $item : array();
$title = isset($item['title']) ? $item['title'] : '';
$icon = isset($item['icon']) ? $item['icon'] : 'target';
$icons = array(
	'specialist' => 'svg/icons/icon-advantage-specialist.svg',
	'target' => 'svg/icons/icon-advantage-target.svg',
	'global' => 'svg/icons/icon-advantage-global.svg',
	'network' => 'svg/icons/icon-advantage-network.svg',
	'team' => 'svg/icons/icon-advantage-team.svg',
);
$iconPath = isset($icons[$icon]) ? $icons[$icon] : $icons['target'];
?>
<article class="advantage-item">
	<div class="advantage-item__icon advantage-item__icon--<?php echo esc_attr($icon); ?>" aria-hidden="true">
		<img src="<?php echo esc_url(getThemeAssetUri($iconPath)); ?>" alt="">
	</div>
	<h3 class="advantage-item__title"><?php echo esc_html($title); ?></h3>
</article>
