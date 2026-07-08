<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo esc_attr__('VK Smart Service - поставка оборудования, запасных частей и логистические решения для бизнеса.', 'vk-smart-service'); ?>">
	<link rel="icon" type="image/svg+xml" href="<?php echo esc_url(getThemeAsset('logo.favicon')); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-wrapper">
	<header class="site-header">
		<?php component('Header', 'layouts'); ?>
	</header>
	<main class="site-main">
