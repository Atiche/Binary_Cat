<?php
if (! defined('ABSPATH')) {
	exit;
}

$args = wp_parse_args(isset($args) ? $args : array(), array(
	'item' => array(),
));
$item = is_array($args['item']) ? $args['item'] : array();
$title = isset($item['title']) ? $item['title'] : '';
$icon = isset($item['icon']) ? $item['icon'] : 'target';
$layoutVariant = isset($item['layoutVariant']) ? $item['layoutVariant'] : 'rates';
$icons = array(
	'specialist' => 'icon.advantage.specialist',
	'target' => 'icon.advantage.target',
	'global' => 'icon.advantage.global',
	'network' => 'icon.advantage.network',
	'team' => 'icon.advantage.team',
);
$iconPath = isset($icons[$icon]) ? $icons[$icon] : $icons['target'];
?>
<article class="advantage-item advantage-item--<?php echo esc_attr($layoutVariant); ?>">
	<div class="advantage-item__icon advantage-item__icon--<?php echo esc_attr($icon); ?>" aria-hidden="true">
		<img src="<?php echo esc_url(getThemeAsset($iconPath)); ?>" alt="">
	</div>
	<h3 class="advantage-item__title"><?php echo esc_html($title); ?></h3>
</article>
