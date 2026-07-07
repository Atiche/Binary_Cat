<?php
if (! defined('ABSPATH')) {
	exit;
}

$name = isset($name) ? $name : 'privacy';
?>
<label class="checkbox">
	<input class="checkbox__input" type="checkbox" name="<?php echo esc_attr($name); ?>" checked required>
	<span class="checkbox__box" aria-hidden="true">
		<img src="<?php echo esc_url(getThemeAssetUri('svg/icons/checkbox-checked.svg')); ?>" alt="">
	</span>
	<span class="checkbox__label">
		Ознакомился(лась) с <a href="<?php echo esc_url(getPrivacyPolicyLink()); ?>">политикой конфиденциальности</a> и даю согласие на обработку моих персональных данных.
	</span>
</label>
