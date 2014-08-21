$(function(){
/*==================================================
				MOBILE MENU
==================================================*/
$('span.menu-button').click(function(){
	
	var menuButton = $(this);
	var navBar = $('ul.nav-bar');
	navBar.slideToggle('normal', function(){

		if($(this).is(':visible')){
			menuButton.text('Close');
			//menuMobile();

		} else {
			menuButton.text('Menu');
			//menuMobile();			
		}
	});

});

	//function menuMobile(){

	var mobileLink = $('.primary-nav > .wrapper > ul > li > a');


if ($(window).width() < 580){
mobileLink.click(function() {		

		$('.primary-nav li').removeClass('active-mobile');
		$(this).closest('li').addClass('active-mobile');

		var checkElement = $(this).next();
		

		if((checkElement.is('ul')) && (checkElement.is(':visible'))){	
			console.log("1");
			$(this).closest('li').removeClass('active-mobile');
			checkElement.slideUp('normal');
		}

		if((checkElement.is('ul')) && (!checkElement.is(':visible'))){
			console.log("2");
			$('.primary-nav ul ul:visible').slideUp('normal');
			
			checkElement.slideDown('normal');

		}


		if($(this).closest('li').find('ul').children().length === 0){
			return true;
		} else {
			return false;
		}  

			
});

}
//}

/*==================================================
				MOBILE MENU
==================================================*/

/*==================================================
				bxSlider
==================================================*/

 $('.bxslider').bxSlider({
      infiniteLoop:false,
	
	adaptiveHeight: true,
	pager: false,
	slideHeight:135,
	minSlides: 1,
	maxSlides: 5,  
  hideControlOnEnd: true,
  moveSlides: 1,
});

/*==================================================
				bxSlider
==================================================*/

});