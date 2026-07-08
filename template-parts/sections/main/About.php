<?php
if (! defined('ABSPATH')) {
	exit;
}

$title = 'О компании';
$text = 'VK Smart Service - многопрофильная компания, которая специализируется на оказании широкого спектра услуг логистического сервиса, а также поставках промышленного оборудования и комплектующих от ведущих российских и иностранных производителей.';
?>
<section class="about" id="about">
	<div class="about__inner container">
		<div class="about__content">
			<h2><?php echo esc_html($title); ?></h2>
			<p><?php echo esc_html($text); ?></p>
			<?php component('Button', 'components', array('text' => 'Связаться с нами', 'url' => '#contact')); ?>
		</div>
		<img class="about__media" src="<?php echo esc_url(getThemeAsset('about.photo')); ?>" alt="">
	</div>
</section>
