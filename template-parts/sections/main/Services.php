<?php
if (! defined('ABSPATH')) {
	exit;
}

$items = getServicesItems();
?>
<section class="services" id="services">
	<div class="container">
		<h2 class="section-title services__title">Услуги<br>и решения</h2>
		<div class="services__grid">
			<?php foreach ($items as $item) : ?>
				<?php component('ServiceCard', 'components', array('item' => $item)); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
