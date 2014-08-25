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

/*==================================================
				Drop-Down
==================================================*/
$('.dropdown').change(function() {    
    var item=$(this).find('option').filter(':selected').text();
    var dataRequest=$('div.only-data-request');
    var nextDiv = $('div.non-data-request');
    if(item=="Data Request"){
         nextDiv.slideUp('slow');
         dataRequest.slideDown('slow'); 
	}else{
         dataRequest.slideUp('slow');
         nextDiv.slideDown('slow');
         }	
    
    var checkElement1 = $(this).prev();
    if(checkElement1.is('span')){
          $(checkElement1).text(item);
    }

});

/*==================================================
				Drop-Down
==================================================*/

/*==================================================
				Checkbox
==================================================*/
var checkbox_image =  $('span.checkimage ');

checkbox_image.on('click',function(){
		var check1 = $(this);
		var check2 = $(this).next();		
		if(!check1.hasClass('checked')){
				check1.addClass('checked');
				check2.prop('checked', true);		
				
			}else{
				
				check1.removeClass('checked');
				check2.prop('checked', false);
				
			}
});
/*==================================================
				Checkbox
==================================================*/

/*==================================================
				Email Validation
==================================================*/			

var submitButton = $('div.btnValidate');
var invalidDisplay = $('p.invalid-email, img.invalid-image');
var emailBox = $('input.emailClass');

submitButton.on('click', function(){
			var sEmail = $('input.emailClass').val();
			if($.trim(sEmail).length == "0"){
				alert("All fields are mandatory");
				e.preventDefault();
			}

			if(validateEmail(sEmail)){
				alert("Your email is Valid");
			}
			else{
				//alert("Invalid Email");
				emailBox.addClass('invalid-text');
				invalidDisplay.show();
				e.preventDefault();
			}
});
			
function validateEmail(sEmail) {
var filter =  /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    
   if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}	
		



/*==================================================
				Checkbox
==================================================*/

});