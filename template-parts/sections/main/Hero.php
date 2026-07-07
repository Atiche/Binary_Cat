<?php
if (! defined('ABSPATH')) {
	exit;
}

$title = getThemeField('heroTitle', 'Осуществляем поставку оборудования, запасных частей, запорно-регулирующей арматуры широкого профиля');
$subtitle = getThemeField('heroSubtitle', 'Организуем доставку любых видов грузов');
?>
<section class="hero" id="top">
	<picture class="hero__bg" aria-hidden="true">
		<source media="(max-width: 600px)" srcset="<?php echo esc_url(getThemeAsset('hero.mobile')); ?>">
		<img src="<?php echo esc_url(getThemeAsset('hero.desktop')); ?>" alt="">
	</picture>
	<div class="hero__inner container">
		<h1 class="hero__title"><?php echo esc_html($title); ?></h1>
		<p class="hero__subtitle"><?php echo esc_html($subtitle); ?></p>
		<?php component('Button', 'components', array('text' => 'Связаться с нами', 'url' => '#contact')); ?>
	</div>
	<?php component('ScrollDown', 'components'); ?>
</section>
