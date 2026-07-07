<?php
if (! defined('ABSPATH')) {
	exit;
}

$title = getThemeField('introTitle', 'Закупка, доставка, таможня, организация логистики.');
$text = getThemeField('introText', 'Компания VK Smart Service поможет закупить и доставить ваш груз даже с самой сложной логистикой из любой части света. Обратитесь к экспертам своего дела, которые предоставят вам исчерпывающие консультации, окажут качественные услуги и предложат надежные решения для любых задач.');
?>
<section class="intro" id="intro">
	<div class="intro__inner container">
		<div class="intro__content">
			<h2><?php echo esc_html($title); ?></h2>
			<p><?php echo esc_html($text); ?></p>
		</div>
		<div class="intro__media-wrap">
			<div class="intro__media-frame intro__media-frame--outer" aria-hidden="true"></div>
			<div class="intro__media-frame intro__media-frame--inner" aria-hidden="true"></div>
			<img class="intro__media" src="<?php echo esc_url(getThemeAsset('intro.photo')); ?>" alt="">
		</div>
	</div>
</section>
