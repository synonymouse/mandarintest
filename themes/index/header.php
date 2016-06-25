<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden_Mandarin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>		
		<div class="top-header clear">
			<div class="content-width">
				<a href="/" class="logo logo-pc"><img src="<?=get_stylesheet_directory_uri();?>/images/logo.png" alt=""></a>
				<a href="/" class="logo logo-mob"><img src="<?=get_stylesheet_directory_uri();?>/images/logo_mobile.png" alt=""></a>
				<div class="menu-mobile"></div>
				<div class="adress-header">
					<p><?php echo do_shortcode("[address]"); ?></p>
					<div class="see-map">Посмотреть на карте</div>
					<ul class="social">
						<?php echo do_shortcode("[social]"); ?>
					</ul>
				</div>
				<div class="phone-header clear">
					<div class="mob-left">
						<p><?php echo do_shortcode("[phone]"); ?></p>
						<div class="call-back"><p>обратный звонок</p></div>
					</div>
					<div class="call-form">Записаться online</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="content-width clear">
				<ul>
					<li class="current-menu-item"><a href="#">Главная</a></li>
					<li class="menu-item-has-children"><a href="#">Услуги</a>
						<ul>
							<li class="menu-item-has-children"><a href="#">ОМОЛОЖЕНИЕ</a>
								<ul>
									<li><a href="#">Окрашивание</a>
										<ul>
											<li><a href="#">Шатуш</a></li>
											<li><a href="#">Омбре</a></li>
										</ul>									
									</li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
							<li class="menu-item-has-children"><a href="#">КОСМЕТОЛОГИЯ ЛИЦА</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
							<li class="menu-item-has-children"><a href="#">КОРРЕКЦИЯ ФИГУРЫ</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
							<li class="menu-item-has-children"><a href="#">ЭПИЛЯЦИЯ</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
							<li class="menu-item-has-children"><a href="#">SPA-ПРОЦЕДУРЫ</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
							<li class="menu-item-has-children"><a href="#">SPA-ПРОГРАММЫ</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
							<li class="menu-item-has-children"><a href="#">УХОД ЗА ВОЛОСАМИ</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>							
							</li>
							<li class="menu-item-has-children"><a href="#">МАНИКЮР, ПЕДИКЮР</a>
								<ul>
									<li><a href="#">Окрашивание</a></li>
									<li><a href="#">Стрижка</a></li>
									<li><a href="#">Лечение волос и кожи головы</a></li>
									<li><a href="#">Ламинирование волос - Абсолютное счастье</a></li>
									<li><a href="#">Наращивание волос</a></li>
									<li><a href="#">Масляное обертывание</a></li>
									<li><a href="#">Процедура олаплекс</a></li>
								</ul>								
							</li>
						</ul>						
					</li>
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
		<div class="menu-mobile-container">
			<p></p>
			<div></div>
		</div>
	</header>