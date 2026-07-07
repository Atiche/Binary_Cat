<?php
if (! defined('ABSPATH')) {
	exit;
}

$defaults = array(
	'text'  => 'Связаться с нами',
	'url'   => '#contact',
	'type'  => 'link',
	'class' => '',
	'attr'  => array(),
);
$args = wp_parse_args(isset($args) ? $args : array(), $defaults);
$classString = trim('button ' . $args['class']);
$attrs = '';

foreach ($args['attr'] as $key => $value) {
	$attrs .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
}

if ($args['type'] === 'link') :
	?>
	<a class="<?php echo esc_attr($classString); ?>" href="<?php echo esc_url($args['url']); ?>"<?php echo $attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<?php echo esc_html($args['text']); ?>
	</a>
<?php else : ?>
	<button class="<?php echo esc_attr($classString); ?>" type="<?php echo esc_attr($args['type']); ?>"<?php echo $attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<?php echo esc_html($args['text']); ?>
	</button>
<?php endif; ?>
