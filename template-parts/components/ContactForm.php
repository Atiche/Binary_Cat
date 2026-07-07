<?php
if (! defined('ABSPATH')) {
	exit;
}

$shortcode = getCf7FormShortcode('');
?>
<div class="contact-form">
	<?php if ($shortcode && vkSmartServiceIsCf7Active()) : ?>
		<?php echo do_shortcode($shortcode); ?>
	<?php else : ?>
		<form class="contact-form__fallback" action="#" method="post">
			<?php component('Input', 'components', array('name' => 'your-name', 'placeholder' => 'Ваше имя', 'required' => true)); ?>
			<?php component('Input', 'components', array('type' => 'tel', 'name' => 'your-phone', 'placeholder' => 'Номер телефона', 'required' => true)); ?>
			<?php component('Checkbox', 'components'); ?>
			<?php component('Button', 'components', array('text' => 'Перезвоните мне', 'type' => 'submit', 'class' => 'contact-form__submit')); ?>
		</form>
	<?php endif; ?>
</div>
