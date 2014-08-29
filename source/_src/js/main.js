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
		if($(this).closest('li').find('ul').children().length === 0)return true;
		else														return false;	
});

}
//}

/*==================================================
				MOBILE MENU
==================================================*/

/*==================================================
				bxSlider
==================================================*/
var desktopSlider = $('.link-description').find('.desktop-slider');
var mobileSlider = $('.link-description').find('.mobile-slider');

if ($(window).width() < 580){
	desktopSlider.removeClass('bxSlider');
	desktopSlider.hide();
	mobileSlider.addClass('bxSlider');
	mobileSlider.show();
	mobileSlider.bxSlider({
		infiniteLoop:false,
		adaptiveHeight: true,
		pager: false,
		slideWidth: 138,
		slideHeight:138,
		minSlides: 1,
		maxSlides: 3,  
		hideControlOnEnd: true,
		moveSlides: 1
	});
}else{
	mobileSlider.removeClass('bxSlider');
	mobileSlider.hide();
	desktopSlider.addClass('bxSlider');
	desktopSlider.show();
	desktopSlider.bxSlider({
		infiniteLoop:false,
		adaptiveHeight: true,
		pager: false,
		slideHeight:138,
		minSlides: 1,
		maxSlides: 1,  
		hideControlOnEnd: true,
		moveSlides: 5
	});


}
/*==================================================
				bxSlider
==================================================*/
/*==================================================
				Phone Number Drop-Down
==================================================*/
var dropDown = $('.country-code');
var phoneCode = $('.phone-code');
dropDown.change(function() { 
	var code=$(this).find('option').filter(':selected').val();
	$(phoneCode).text(code);
});
/*==================================================
				Phone Number Drop-Down
==================================================*/

/*==================================================
				Drop-Down
==================================================*/
var dropDown2 = $('.dropdown');
dropDown2.change(function() {    
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
   if (filter.test(sEmail))				return true;
   else									return false;
}	
		
/*==================================================
				Checkbox
==================================================*/		



/*==================================================
				Search Box
==================================================*/

var searchButton = $('.link-description').find('a.search-link');
var publicationHead = $('.publi-head');
var searchBox = $('.searchbox');
var searchBackground = $('.internal-description');
var close = $('.link-description').find('.close');
searchButton.on('click',function(){
	var checkText = $(this).prev().val();
	if($.trim(checkText) ==='age' || $.trim(checkText) === "Age" || $.trim(checkText) === "AGE"){
	publicationHead.slideUp('normal');
	searchBackground.addClass('searchBackground');
	searchBox.slideDown('slow');
	}else{
		alert("Invalid Input");
	}
});

close.on('click', function(){	
	searchBox.slideUp('fast');
	searchBackground.removeClass('searchBackground');
	publicationHead.slideDown('normal');
});






/*==================================================
				Placeholder for IE9
==================================================*/
if(!Modernizr.input.placeholder){
    $("input").each(function(){
      if($(this).val()==="" && $(this).attr("placeholder")!==""){
        $(this).val($(this).attr("placeholder"));
        $(this).focus(function(){
          if($(this).val()===$(this).attr("placeholder")) $(this).val("");
        });
        $(this).blur(function(){
          if($(this).val()==="") $(this).val($(this).attr("placeholder"));
        });
      }
    });
  }

  /*==================================================
				Hover Text Change
==================================================*/

var hoverLink = $('.link-list').find('a');
var mainHeader = $('.link-description').find('.main-header');
hoverLink.hover(
	function() // on mouseover
		{	
			var nameLink = $(this).attr('name');
			mainHeader.text(nameLink);
		},
	function() // on mouseout
		{
			mainHeader.text("Welcome to National Registry of Diseases Office");
		});


  /*==================================================
				Pagination
==================================================*/

var pagination1 = $('.pagination1');
pagination1.customPaginate({
	itemsToPaginate: ".search-item"
});


/*==================================================
				Enquiry Navigation
==================================================*/

var general = $('.general');
general.on('click', function(){
	$('a').each(function(){
		var category = "general";
		var link = $(this).attr('href');
		console.log(link);
		if(link.indexOf('category')>-1){
				$(this).attr('href',link.slice(0,-2)+category); //= link minus 2 char, + lang
			} else {
				$(this).attr('href',link+'?category='+category);

			}

	});

});

var request = $('.request');
request.on('click', function(){
	$('a').each(function(){
		var category = "request";
		var link = $(this).attr('href');
		console.log(link);
		if(link.indexOf('category')>-1){
				$(this).attr('href',link.slice(0,-2)+category); //= link minus 2 char, + lang
			} else {
				$(this).attr('href',link+'?category='+category);

			}

	});

});



var hyperlink=window.location.href;
var parts=hyperlink.split('=');
console.log(parts[1]);
if(parts.length>1){
			if(parts[1]=='request'){
			$('.data-inquiry').find('option').removeAttr('selected').filter('[value=request]')
				.attr('selected', true);
			}
		else if(parts[1]=='general'){
				$('.data-inquiry').find('option').removeAttr('selected').filter('[value=general]')
				.attr('selected', true);
			}

		}
});


/*==================================================
				IE9 Column
==================================================*/

$('.about-main p').columnize({ columns: 2 });
$('.about-main p').columnize({ width: 340 });
alert("shit");

