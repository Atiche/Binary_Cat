	</main>
	<?php if (! is_front_page()) : ?>
		<?php component('YandexMap', 'sections', array(), 'main'); ?>
	<?php endif; ?>
	<footer class="site-footer">
		<?php component('Footer', 'layouts'); ?>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
