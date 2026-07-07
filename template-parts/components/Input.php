<?php
if (! defined('ABSPATH')) {
	exit;
}

$defaults = array(
	'type'        => 'text',
	'name'        => '',
	'placeholder' => '',
	'required'    => false,
);
$args = wp_parse_args(isset($args) ? $args : array(), $defaults);
?>
<input
	class="input"
	type="<?php echo esc_attr($args['type']); ?>"
	name="<?php echo esc_attr($args['name']); ?>"
	placeholder="<?php echo esc_attr($args['placeholder']); ?>"
	<?php echo $args['required'] ? 'required' : ''; ?>
>
