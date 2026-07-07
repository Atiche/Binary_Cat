<?php
if (! defined('ABSPATH')) {
	exit;
}

$address = getThemeField('footerAddress', '682645, Хабаровский край, г. Амурск, Западное шоссе, 18 офис 1', 'option');
$phone = getThemeField('footerPhone', '+7 (499) 232-22-22', 'option');
$email = getThemeField('footerEmail', 'dk@vksmartservice.com', 'option');
?>
<div class="site-footer__inner container">
	<div class="site-footer__form" id="contact">
		<h2>Напишите нам</h2>
		<p>Заполните форму ниже и мы свяжемся с вами в ближайшее время</p>
		<?php component('ContactForm', 'components'); ?>
	</div>

	<div class="site-footer__brand">
		<?php component('Logo', 'components', array('variant' => 'footer')); ?>
	</div>

	<address class="site-footer__contacts">
		<div class="site-footer__contact-item">
			<img src="<?php echo esc_url(getThemeAssetUri('svg/icons/icon-address.svg')); ?>" alt="">
			<p><?php echo esc_html($address); ?></p>
		</div>
		<div class="site-footer__contact-item">
			<img src="<?php echo esc_url(getThemeAssetUri('svg/icons/icon-phone.svg')); ?>" alt="">
			<a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
		</div>
		<div class="site-footer__contact-item">
			<img src="<?php echo esc_url(getThemeAssetUri('svg/icons/icon-email.svg')); ?>" alt="">
			<a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
		</div>
	</address>

	<div class="site-footer__bottom">
		<span>© 2024 VK Smart Service</span>
		<a href="<?php echo esc_url(getPrivacyPolicyLink()); ?>">Политика конфиденциальности</a>
		<span class="site-footer__developer">
			<span>Разработка сайта:</span>
			<img src="<?php echo esc_url(getThemeAssetUri('svg/logo/binary-cat.svg')); ?>" alt="Двоичный кот">
		</span>
	</div>
</div>
