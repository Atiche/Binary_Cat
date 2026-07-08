<?php
if (! defined('ABSPATH')) {
	exit;
}

$title = 'Напишите нам';
$text = 'Заполните форму ниже и мы свяжемся с вами в ближайшее время';
?>
<section class="contact" id="contact">
	<div class="contact__inner container">
		<h2><?php echo esc_html($title); ?></h2>
		<p><?php echo esc_html($text); ?></p>
		<?php component('ContactForm', 'components'); ?>
	</div>
</section>
