<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden_Mandarin
 */

?>

<!-- #content -->

	<footer>
		<div class="content-width">
			<a href="/" class="logo"><img src="<?=get_stylesheet_directory_uri();?>/images/logo_footer.png" alt=""></a>
		</div>
		<div class="menu-footer">
			<div class="content-width clear">
				<ul>
					<li class="current-menu-item"><a href="#">Главная</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Цены</a></li>					
					<li><a href="#">Акция</a></li>
					<li><a href="#">О Центре красоты</a></li>
					<li><a href="#">Специалисты</a></li>					
					<li><a href="#">Бренды</a></li>
					<li><a href="#">Бутик</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>	
			</div>
		</div>
		<div class="content-width clear container-links">
			<div class="column column-1">
				<p class="title-h3">Уход за волосами</p>
				<ul>
					<li><a href="#">Окрашивание</a>
						<ul>
							<li><a href="#">Шатуш</a></li>
							<li><a href="#">Омбре</a></li>
						</ul>					
					</li>
					<li><a href="#">Стрижка</a></li>
					<li><a href="#">Лечение волос и кожи головы</a></li>
					<li><a href="#">Ламинирование волос</a></li>
					<li><a href="#">Абсолютное счастье</a></li>
					<li><a href="#">Наращивание волос</a></li>
					<li><a href="#">Масляное обертывание</a></li>
					<li><a href="#">Процедура олаплекс</a></li>
				</ul>
				<p class="title-h3">Маникюр, педикюр</p>
				<ul>
					<li><a href="#">Покрытие ногтей лаком Shellac</a></li>
					<li><a href="#">Маникюр</a></li>
					<li><a href="#">Педикюр</a></li>
					<li><a href="#">Наращивание ногтей</a></li>
					<li><a href="#">SPA-уход за руками</a></li>
				</ul>
			</div>
			<div class="column column-2">
				<p class="title-h3">Косметология лица</p>
				<ul>
					<li><a href="#">Удаление дефектов</a></li>
					<li><a href="#">Увеличение губ</a></li>
					<li><a href="#">Инъекции</a></li>
					<li><a href="#">Лазерный пилинг</a></li>
					<li><a href="#">Уходы</a></li>
					<li><a href="#">Эстетика</a></li>
					<li><a href="#">JetPeel</a></li>
				</ul>
				<p class="title-h3">Коррекция фигуры</p>
				<ul>
					<li><a href="#">Лечение целлюлита</a></li>
					<li><a href="#">Прессотерапия</a></li>
					<li><a href="#">Лимфодренаж</a></li>
					<li><a href="#">Миостимуляция</a></li>
					<li><a href="#">Обертывания</a></li>
					<li><a href="#">Лечение растяжек, рубцов</a></li>
				</ul>
			</div>
			<div class="column column-3">
				<p class="title-h3">SPA-процедуры</p>
				<ul>
					<li><a href="#">Обертывания</a></li>
					<li><a href="#">Душ Виши</a></li>
					<li><a href="#">Душ Шарко</a></li>
					<li><a href="#">Хаммам</a></li>
					<li><a href="#">Пилинги</a></li>
					<li><a href="#">Массаж тела</a></li>
					<li><a href="#">Обертывание водорослями</a></li>
				</ul>
				<p class="title-h3">SPA-программы</p>
				<ul>
					<li><a href="#">SPA универсальные</a></li>
					<li><a href="#">SPA для двоих</a></li>
					<li><a href="#">SPA для мужчин</a></li>
					<li><a href="#">SPA для женщин</a></li>
					<li><a href="#">SPA для беременных</a></li>
				</ul>
			</div>
			<div class="column column-4">
				<p class="title-h3">Омоложение</p>
				<ul>
					<li><a href="#">Мезотерапия</a></li>
					<li><a href="#">Ботокс</a></li>
					<li><a href="#">Плазмолифтинг</a></li>
					<li><a href="#">Биоревитализация</a></li>
					<li><a href="#">Мезонити</a></li>
					<li><a href="#">Лазерное омоложение</a></li>
					<li><a href="#">Микротоки</a></li>
					<li><a href="#">Омоложение JetPeel</a></li>
					<li><a href="#">Массаж лица</a></li>
					<li><a href="#">Лазерная биоревитализация</a></li>
					<li><a href="#">Лазерное омоложение Fotona</a></li>
					<li><a href="#">4D омоложение</a></li>
				</ul>
				<p class="title-h3">Эпиляция</p>
				<ul>
					<li><a href="#">Лазерная эпиляция</a></li>
					<li><a href="#">Эпиляция воском</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="content-width clear">
				<div class="left">
					<span class="copy">© 2009-<?=date("Y")?> "Золотой мандарин" - Cosmetology & SPA salon" </span>
					<span class="licensy">медицинская лицензия <strong>77-01-002242  от 14.06.2007</strong></span>
				</div>
				<ul class="social">
					<?php echo do_shortcode("[social]"); ?>
				</ul>
			</div>
		</div>
	</footer>
	<div class="bg-dark"></div>
	<div class="logo-group"></div>
	<div class="form-popup">
		<div class="container-form">
			<form>
				<h2>Обратный звонок</h2>
				<input type="text" placeholder="Ваше Имя">
				<input type="tel" placeholder="Ваш телефон">
				<input type="submit" value="Отправить">
			</form>
			<div class="close-pop"></div>
		</div>		
	</div>
	<div class="container-map">
		<div class="map-popup" id="map-popup"></div>
		<div class="close-pop"></div>
	</div>
	<div class="scrollTop"></div>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/jquery-1.11.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"> </script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
