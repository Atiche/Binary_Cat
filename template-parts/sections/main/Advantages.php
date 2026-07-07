<?php
if (! defined('ABSPATH')) {
	exit;
}

$items = getThemeField('advantagesItems', getDefaultAdvantagesItems());
?>
<section class="advantages" id="advantages">
	<div class="container">
		<h2 class="section-title advantages__title">Наши<br>преимущества</h2>
		<div class="advantages__grid">
			<?php foreach ($items as $item) : ?>
				<?php component('AdvantageItem', 'components', array('item' => $item)); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
