<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Главная страница
 * @package Golden_Mandarin
 */

get_header(); ?>



	<div class="container-carousel">
		<div id="top-carousel" class="owl-carousel">
			<div class="item">
				<div class="content-width">
					<p class="title-slide">This is Photoshop's <br>version  of Lorem Ipsum</p>
				</div>
				<img src="<?=get_stylesheet_directory_uri();?>/images/slider_1.png" alt="">
			</div>
			<div class="item">
				<div class="content-width">
					<p class="title-slide">This is Photoshop's <br>version  of Lorem Ipsum</p>
				</div>
				<img src="<?=get_stylesheet_directory_uri();?>/images/slider_1.png" alt="">
			</div>
			<div class="item">
				<div class="content-width">
					<p class="title-slide">This is Photoshop's <br>version  of Lorem Ipsum</p>
				</div>
				<img src="<?=get_stylesheet_directory_uri();?>/images/slider_1.png" alt="">
			</div>
		</div>
		<div class="content-width cont-scroll">
			<a href="#directions" class="scroll-directions"></a>
		</div>
	</div>
	<div id="directions" class="content-width directions">
		<ul class="clear">
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_1.png" alt="">
					<h3>Омоложение</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_2.png" alt="">
					<h3>Косметология лица</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_3.png" alt="">
					<h3>Коррекция фигуры</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_4.png" alt="">
					<h3>Эпиляция</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_7.png" alt="">
					<h3>стрижка и укладка </h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_8.png" alt="">
					<h3>Маникюр, педикюр</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_5.png" alt="">
					<h3>SPA - процедуры</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_6.png" alt="">
					<h3>SPA - программы</h3>
				</a>
			</li>
		</ul>
	</div>
	<div class="few-words">
		<div class="content-width">
			<div class="container-words clear">
				<img src="<?=get_stylesheet_directory_uri();?>/images/more_letter.png" alt="">
				<div class="right">
					<blockquote>
						<p class="title-blockquote">Несколько слов о салоне </p>
						<p class="text-blockquote">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent</p>
						<p class="autor-blockquote">Иванов Иван Иванович</p>
						<p class="head-blockquote">Руководитель салона </p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	<!--banner home-->
	<div class="banner-home banner">
		<img src="<?=get_stylesheet_directory_uri();?>/images/banner/banner_logo.png" alt="">
		<p>This is Photoshop's version<br>  of Lorem Ipsum</p>
		<a href="#"></a>
	</div>
	<!--banner home-->
	<div class="specialists">
		<div class="content-width">
			<h2>Специалисты</h2>
			<ul class="clear">
				<li>
					<a href="#">
						<p><img src="<?=get_stylesheet_directory_uri();?>/images/specialist_img_1.png" alt=""></p>
						<h3>Борисенко Татьяна Марковна</h3>
						<h3>Врач косметолог</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<p><img src="<?=get_stylesheet_directory_uri();?>/images/specialist_img_2.png" alt=""></p>
						<h3>Цыганкова Лейла</h3>
						<h3>Врач косметолог</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<p><img src="<?=get_stylesheet_directory_uri();?>/images/specialist_img_3.png" alt=""></p>
						<h3>Сёмикова Наталья</h3>
						<h3>Парикмахер-стилист</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<p><img src="<?=get_stylesheet_directory_uri();?>/images/specialist_img_4.png" alt=""></p>
						<h3>Ермашова Яна</h3>
						<h3>Парикмахер-стилист</h3>
					</a>
				</li>		
			</ul>		
		</div>
	</div>
	<div class="gallery">
		<div class="content-width">
			<h2>Галерея</h2>	
			<div id="gallery-carousel" class="owl-carousel">
				<div class="item">
					<a href="<?=get_stylesheet_directory_uri();?>/images/gallery_big1.png" class="fancybox" data-fancybox-group="gallery"><img src="<?=get_stylesheet_directory_uri();?>/images/gallery_small1.png" alt=""></a>
				</div>
				<div class="item">
					<a href="<?=get_stylesheet_directory_uri();?>/images/gallery_big2.png" class="fancybox" data-fancybox-group="gallery"><img src="<?=get_stylesheet_directory_uri();?>/images/gallery_small2.png" alt=""></a>
				</div>
				<div class="item">
					<a href="<?=get_stylesheet_directory_uri();?>/images/gallery_big3.png" class="fancybox" data-fancybox-group="gallery"><img src="<?=get_stylesheet_directory_uri();?>/images/gallery_small3.png" alt=""></a>
				</div>
				<div class="item">
					<a href="<?=get_stylesheet_directory_uri();?>/images/gallery_big3.png" class="fancybox" data-fancybox-group="gallery"><img src="<?=get_stylesheet_directory_uri();?>/images/gallery_small3.png" alt=""></a>
				</div>
			</div>
			<a href="#" class="link-next">прейти в галлерею</a>
		</div>
	</div>
	<div class="text-block">
		<div class="content-width">
			<h2>Заголовок текста</h2>
			<div class="clear">
				<div class="left">
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent</p>
				</div>
				<div class="right">
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent</p>
				</div>
			</div>
			<div class="clear">
				<a href="#" class="more">подробнее</a>
			</div>
		</div>
	</div>
	<div class="map-container">
		<div class="content-width">
			<div class="contacts-cont">
				<div class="border-cont">
					<h2>Наш адрес</h2>
					<address>
						119415 Москва,<br>
						Проспект Вернадского, д.37,<br> 
						корпус 1Б
					</address>
					<p><span>Телефон: </span><a class="bold-text" href="tel:4953080866">(495)308-08-66</a></p>
					<p><span>E-mail: </span><a href="mailto:goldenmandarin@mail.ru">goldenmandarin@mail.ru</a></p>
					<p class="time-work">Время работы: <strong>с 10-00 до 22-00</strong></p>
					<a href="#" class="link-next">Записаться на прием</a>
				</div>
			</div>
		</div>
		<div id="map"></div>
	</div>
	









<?php
get_footer();
