$(document).ready(function() {

	// скрипт прокрутки меню и фиксации его в верху экрана
	var h_hght = 100; // высота дива с приветствием и логотипом
	var h_mrg = 0; // высота отступа, когда шапка не видна

	var top = $(this).scrollTop(); // расстояние до верха
	var navTop = $('#navigationTop'); // топ-меню	

	// до скрола, если страница загрузилась на середине контента
	if (top - h_hght >= 0) {
		navTop.css('top', h_mrg);
	}
	
	// скролим
	$(window).scroll(function() {  
		top = $(this).scrollTop();
		if (top+h_mrg < h_hght) {
			navTop.css('top',(h_hght - top))
		} else {
			navTop.css('top', h_mrg)  // устанавливаем значение отступа
		}
	});

	// меню для маленьких экранов
	$(".hide-nav-button").click(function(){
		$(".nav.nav-top").toggle(500);
		
		$(".nav-item-second").click(function(){
			var secondLevelMenu = $(this).children(".nav.nav-top.nav-second");

			if (!secondLevelMenu.hasClass("active")) {
				secondLevelMenu.show(500);
				secondLevelMenu.addClass("active");
			} else {
				secondLevelMenu.hide(500);
				secondLevelMenu.removeClass("active");
			}		
		});
	});

	// скрипт прокрутки для бокового меню

	var mh_hght = 195; // высота дива с приветствием и логотипом
	var mh_mrg = 85; // высота отступа, когда шапка не видна

	var mtop = $(this).scrollTop(); // расстояние до верха
	var mnavTop = $('.rightNavigation'); // топ-меню	

	// до скрола, если страница загрузилась на середине контента
	if (mtop - mh_hght >= 0) {
		mnavTop.css('top', mh_mrg);
	}
	
	// скролим
	$(window).scroll(function() {  
		mtop = $(this).scrollTop();
		if (mtop+mh_mrg < mh_hght) {
			mnavTop.css('top',(mh_hght - mtop))
		} else {
			mnavTop.css('top', mh_mrg)  // устанавливаем значение отступа
		}
	});

});