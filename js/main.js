$(document).ready(function() {

	// // скрипт прокрутки меню и фиксации его в верху экрана
	var h_hght = 0;   // высота 
	var h_mrg = -100; // высота отступа дива с потенциальным логотипом

	$(window).scroll(function(){       // скролим
		var top = $(this).scrollTop(); // расстояние до верха
		var navTop = $('#navigationTop');
		if (top+h_mrg < h_hght) {
			navTop.css('top',(h_hght - top))
		} else {
			navTop.css('top', h_mrg)  // устанавливаем значение отступа
		}
	});

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

});