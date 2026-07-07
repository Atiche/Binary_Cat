<?php
if (! defined('ABSPATH')) {
	exit;
}

$title = getThemeField('contactTitle', 'Напишите нам');
$text = getThemeField('contactText', 'Заполните форму ниже и мы свяжемся с вами в ближайшее время');
?>
<section class="contact" id="contact">
	<div class="contact__inner container">
		<div class="contact__form-column">
			<h2><?php echo esc_html($title); ?></h2>
			<p><?php echo esc_html($text); ?></p>
			<?php component('ContactForm', 'components'); ?>
		</div>
		<div class="contact__contacts-column">
			<?php component('Logo', 'components'); ?>
			<?php component('Footer', 'layouts'); ?>
		</div>
	</div>
</section>
