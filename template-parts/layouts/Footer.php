<?php
if (! defined('ABSPATH')) {
	exit;
}

$contacts = getFooterContacts();
$phoneHref = 'tel:' . preg_replace('/[^0-9+]/', '', $contacts['phone']);
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
			<img src="<?php echo esc_url(getThemeAsset('icon.address')); ?>" alt="">
			<p><?php echo esc_html($contacts['address']); ?></p>
		</div>
		<div class="site-footer__contact-item">
			<img src="<?php echo esc_url(getThemeAsset('icon.phone')); ?>" alt="">
			<a href="<?php echo esc_url($phoneHref); ?>"><?php echo esc_html($contacts['phone']); ?></a>
		</div>
		<div class="site-footer__contact-item">
			<img src="<?php echo esc_url(getThemeAsset('icon.email')); ?>" alt="">
			<a href="mailto:<?php echo esc_attr($contacts['email']); ?>"><?php echo esc_html($contacts['email']); ?></a>
		</div>
	</address>

	<div class="site-footer__bottom">
		<span>© 2024 VK Smart Service</span>
		<a href="<?php echo esc_url(getPrivacyPolicyLink()); ?>">Политика конфиденциальности</a>
		<span class="site-footer__developer">
			<span>Разработка сайта:</span>
			<img src="<?php echo esc_url(getThemeAsset('logo.binaryCat')); ?>" alt="Двоичный кот">
		</span>
	</div>
</div>
