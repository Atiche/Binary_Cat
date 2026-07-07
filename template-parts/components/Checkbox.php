<?php
if (! defined('ABSPATH')) {
	exit;
}

$args = wp_parse_args(isset($args) ? $args : array(), array(
	'name' => 'privacy',
));
?>
<label class="checkbox">
	<input class="checkbox__input" type="checkbox" name="<?php echo esc_attr($args['name']); ?>" checked required>
	<span class="checkbox__box" aria-hidden="true">
		<img src="<?php echo esc_url(getThemeAsset('icon.checkboxChecked')); ?>" alt="">
	</span>
	<span class="checkbox__label">
		Ознакомился(лась) с <a href="<?php echo esc_url(getPrivacyPolicyLink()); ?>">политикой конфиденциальности</a> и даю согласие на обработку моих персональных данных.
	</span>
</label>
