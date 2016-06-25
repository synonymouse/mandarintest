jQuery(document).ready(function(){
	
	var i=0;
	
	$("#top-carousel").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 500,
		paginationSpeed : 400,
		singleItem:true,
		navigationText: ["",""],
	});
	
	$("#gallery-carousel").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 500,
		items : 3,
		paginationSpeed: 400,
		navigationText: ["",""],
	});
	$("#gallery-results").owlCarousel({ 
		navigation : true, // Show next and prev buttons
		slideSpeed : 500,
		items : 3,
		paginationSpeed: 400,
		navigationText: ["",""],
		autoPlay: 2000,
		stopOnHover: true, 
		
	});
	
	$(".fancybox").fancybox({
		padding: 0,
		margin: 3,
	});
	
	
    $('a').click( function(){ // ловим клик по ссылке с классом go_to
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 700); // анимируем скроолинг к элементу scroll_el
        }
	    return false; // выключаем стандартное действие
    });

	
	$('.top-menu li').each(function() {
		if (!$(this).hasClass('menu-item-has-children')){
			console.log(1);
			if ($(this).parent().parent().hasClass('menu-item-has-children')){
				
				$(this).parent().parent().addClass('menu-item-step');
				$(this).parent().parent().parent().parent().addClass('menu-item-step-start');
				
			}
		}
	});	
	
	
 	$('.menu-item-step-start').hover(function () {
		if (screen.width > 767) {
			clearTimeout($.data(this,'timer'));
			$('ul',this).stop(true,true).fadeIn(300);			
		}
	  }, function () {
		if (screen.width > 767) {
			$.data(this,'timer', setTimeout($.proxy(function() {
				$('ul',this).stop(true,true).fadeOut(300);
			}, this), 1));
		}
	  });
	
	$('.top-menu li ul li a').click(function() {
		if (screen.width > 767) {
			i = 1;
			$('.top-menu li ul li a').removeClass('activea');
			$(this).addClass('activea');
			$('.top-menu li ul li').removeClass('displayBlock');
			$(this).parent().addClass('displayBlock');
		}
	});
	  
	  
	//mobile menu

	var curentHtml;
	var curentHtmlStep2;
	var curentHtmlLink;
	curentHtml = $('.top-menu').html();
	var step = 0;
	
	$('.menu-mobile-container div').html(curentHtml);
	
	$('.menu-item-has-children a').click(function() {
		if (screen.width < 768) {			
			step++;
			$('.top-menu li').removeClass('menu-item-has-children-active');
			$(this).parent().addClass('menu-item-has-children-active');
			if (step == 1) {
				curentHtmlStep2 = $('.menu-item-has-children-active').html();
				curentHtmlLink = $(this).html();	
			} 
			if (step == 2) {
				$('.menu-mobile-container div').addClass('styleStep2');
			} else {
				$('.menu-mobile-container div').removeClass('styleStep2');
			}
			$('.menu-mobile-container p').html($(this).html()).fadeIn(1);
			$('.menu-mobile-container div').html($('.menu-item-has-children-active').html());
			$('.menu-item-has-children a').click(function() {
				if (screen.width < 768) {			
					step++;
					$('.top-menu li').removeClass('menu-item-has-children-active');
					$(this).parent().addClass('menu-item-has-children-active');
					if (step == 1) {
						curentHtmlStep2 = $('.menu-item-has-children-active').html();
						curentHtmlLink = $(this).html();	
					} 
					if (step == 2) {
						$('.menu-mobile-container div').addClass('styleStep2');
					} else {
						$('.menu-mobile-container div').removeClass('styleStep2');
					}
					$('.menu-mobile-container p').html($(this).html()).fadeIn(1);
					$('.menu-mobile-container div').html($('.menu-item-has-children-active').html());

					return false;
				}
			});	
			return false;
		}
	});	
	$('.menu-mobile-container p').click(function() {
		if (step == 1) {
			$('.menu-mobile-container div').html(curentHtml);
			$('.menu-mobile-container p').fadeOut(1);				
		} else if (step == 2) {
			$('.menu-mobile-container div').html(curentHtmlStep2);
			$('.menu-mobile-container p').html(curentHtmlLink);				
		}		
		step--;
		if (step == 2) {
			$('.menu-mobile-container div').addClass('styleStep2');
		} else {
			$('.menu-mobile-container div').removeClass('styleStep2');
		}
		$('.menu-item-has-children a').click(function() {
			if (screen.width < 768) {			
				step++;
				$('.top-menu li').removeClass('menu-item-has-children-active');
				$(this).parent().addClass('menu-item-has-children-active');
				if (step == 1) {
					curentHtmlStep2 = $('.menu-item-has-children-active').html();
					curentHtmlLink = $(this).html();	
				} 
				if (step == 2) {
					$('.menu-mobile-container div').addClass('styleStep2');
				} else {
					$('.menu-mobile-container div').removeClass('styleStep2');
				}
				$('.menu-mobile-container p').html($(this).html()).fadeIn(1);
				$('.menu-mobile-container div').html($('.menu-item-has-children-active').html());
				$('.menu-item-has-children a').click(function() {
					if (screen.width < 768) {			
						step++;
						$('.top-menu li').removeClass('menu-item-has-children-active');
						$(this).parent().addClass('menu-item-has-children-active');
						if (step == 1) {
							curentHtmlStep2 = $('.menu-item-has-children-active').html();
							curentHtmlLink = $(this).html();	
						} 
						if (step == 2) {
							$('.menu-mobile-container div').addClass('styleStep2');
						} else {
							$('.menu-mobile-container div').removeClass('styleStep2');
						}
						$('.menu-mobile-container p').html($(this).html()).fadeIn(1);
						$('.menu-mobile-container div').html($('.menu-item-has-children-active').html());

						return false;
					}
				});	
				return false;
			}
		});	
	});
	
	$('.bg-dark, .close-pop').click(function() {
		$('.menu-mobile-container').fadeOut(300);
		$('.bg-dark').fadeOut(300);
		$('.form-popup').fadeOut(300);
		$('.logo-group').fadeOut(300);
		$('.container-map').fadeOut(300);
		$('.menu-mobile').removeClass('activeMenu');
	});	
	$('.call-back p').click(function() {
		$('.bg-dark').fadeIn(300);
		$('.form-popup').fadeIn(300);
	});	
	
	$('.menu-mobile').click(function() {
		if ($('.menu-mobile-container').css('display') == 'none') {
			$('.menu-mobile-container').fadeIn(300);
			$('.bg-dark').fadeIn(300);
			$('.logo-group').fadeIn(300);
			$('.menu-mobile').addClass('activeMenu');			
		} else {
			$('.menu-mobile-container').fadeOut(300);
			$('.bg-dark').fadeOut(300);
			$('.logo-group').fadeOut(300);
			$('.menu-mobile').removeClass('activeMenu');			
		}
	});
	
	
	
	// Форма
	
	$('form').submit(function() {
		$('input', this).each(function() {
			if ($(this).val() == '') {
				$(this).addClass('error');
			} else {
				$(this).removeClass('error');
			}
		});
			if ($('select', this).val() == 'Выберете услугу') {
				$('select', this).addClass('error');
			} else {
				$('select', this).removeClass('error');
			} 
		return false;
	});
	$('input').change(function() {
		if ($(this).val() !== '') {
			$(this).removeClass('error');
		}		
	});
	$('select').change(function() {
		if ($(this).val() !== 'Выберете услугу') {
			$(this).removeClass('error');
		} 		
	});

	
	// Меню акардион цен

	$('.title-price-big').click(function() {
		$('.title-price-big').removeClass('active-tub');
		$(this).addClass('active-tub');	
			
		if ($('.active-tub + .price-info').css('display') == 'none') {
			$('.price-info').slideUp(300);	
			$('.active-tub + .price-info').slideDown(300);	
			setTimeout(function() {
				$("html, body").animate({ scrollTop: $('.active-tub').offset().top}, 500);
			}, 300);
		} else {
			$('.price-info').slideUp(300);
			$('.title-price-big').removeClass('active-tub');
		}			
	});	
	
	
	//scrollTop
	
	$(document).scroll(function() {
		if ($(document).scrollTop() > 100) {
			$('.scrollTop').css({'right':'20px'});
		} else {
			$('.scrollTop').css({'right':'-100px'});
		}
	});
	$('.scrollTop').click(function() {
		$("html, body").animate({ scrollTop: 0}, 1500);
	});
	// Меню акардион в футере

	$('.column .title-h3').click(function() {
		if (screen.width < 768) {
			$('.column .title-h3').removeClass('active-h3');
			$(this).addClass('active-h3');	
			
			if ($('.active-h3 + ul').css('display') == 'none') {
				$('.column ul').slideUp(300);	
				$('.active-h3 + ul').slideDown(300);		
				$('.active-h3 + ul ul').slideDown(300);		
			} else {
				$('.column ul').slideUp(300);
				$('.column .title-h3').removeClass('active-h3');
			}			
		}
	});
	
	// Карта по кнопке

	$('.see-map').click(function() {
		$('.bg-dark').fadeIn(300);	
		$('.container-map').fadeIn(300);	
	});		
	
	// Карта
	
 			var moscow_map,
				myPlacemark;
			
			if (screen.width < 768) {
				var x = 55.677905;
				var y = 37.510538;
			} else {
				var x = 55.678980;
				var y = 37.520538;
			}
				
			ymaps.ready(function(){
				moscow_map  = new ymaps.Map("map", {
					center: [x, y],
					zoom: 15 
				});
				var myPlacemark = new ymaps.Placemark([55.677905, 37.510538], {
					balloonContent: '<div class="map-balun"><p class="title-balun">ЗОЛОТОЙ МАНДАРИН</p><p>119415 Москва, Проспект Вернадского,<br> д.37, корпус 1Б</p><p>Телефон: <span>(495)308-08-66</span></p><p>E-mail: <span>goldenmandarin@mail.ru</span></p></div>'					
				});
				
				moscow_map.controls.add(
				   new ymaps.control.ZoomControl()
				);
				
				moscow_map.geoObjects.add(myPlacemark);		
			}); 
			
			ymaps.ready(function(){
				var popMap  = new ymaps.Map("map-popup", {
					center: [55.677905, 37.510538],
					zoom: 15 
				});
				var myPlacemark = new ymaps.Placemark([55.677905, 37.510538], {
					balloonContent: '<div class="map-balun"><p class="title-balun">ЗОЛОТОЙ МАНДАРИН</p><p>119415 Москва, Проспект Вернадского,<br> д.37, корпус 1Б</p><p>Телефон: <span>(495)308-08-66</span></p><p>E-mail: <span>goldenmandarin@mail.ru</span></p></div>'					
				});
				popMap.controls.add(
				   new ymaps.control.ZoomControl()
				);
				
				popMap.geoObjects.add(myPlacemark);
				myPlacemark.balloon.open();				
			}); 			
});