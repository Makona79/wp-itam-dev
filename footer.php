<footer class="footer">
	<div class="container footer__container">
		<?php if (is_front_page()) { ?>
			<a class="logo header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Логотип Блога">
			</a>
		<?php } else { ?>
			<a href="<?php echo home_url(); ?>" class="logo header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Логотип Блога">
			</a>
		<?php } ?>
		<nav class="nav footer__nav">
			<ul class="nav__list list-reset">
				<li class="nav__item"><a class="nav__link nav__link--current">Главная</a></li>
				<li class="nav__item"><a href="#" class="nav__link">О нас</a></li>
				<li class="nav__item"><a href="#" class="nav__link">Контакты</a></li>
				<li class="nav__item"><a href="#" class="nav__link search-link">Поиск</a></li>
			</ul>
		</nav>
		<small class="footer__copy">ООО “Организация” 2020. Все права защищены</small>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>