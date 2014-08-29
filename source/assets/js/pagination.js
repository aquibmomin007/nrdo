(function($){

		var numberlink = 1;

		$.fn.customPaginate = function(options){

			var paginationContainer = this;
			console.log("option"+options);
			var itemsToPaginate;
			

			var defaults = {
				itemsPerPage : 6
			};

			var settings = {};

			$.extend(settings, defaults, options);
			var itemsPerPage = settings.itemsPerPage;
		
			itemsToPaginate = $(settings.itemsToPaginate);

			$('<ul></ul>').prependTo(paginationContainer);

			var noOfPaginationLinks = Math.ceil(itemsToPaginate.length/itemsPerPage);

			
			paginationContainer.find("ul ").append('<li style="display:inline-block;padding: 0 10px; cursor:pointer;"><a href="#" class="page-prev">Previous</a></li>');
			// for(var index = 0; index < noOfPaginationLinks; index++){
			// 	paginationContainer.find('ul').append('<li style="display:inline-block;padding: 0 10px; cursor:pointer;"><a href="#" class="number-link">'+(index+1)+'</a></li>');
			// }
			paginationContainer.find("ul").append('<li style="display:inline-block;padding: 0 10px; cursor:pointer;"><a href="#" class="page-next">Next</a></li>');

			

			itemsToPaginate.filter(':gt(' + (itemsPerPage-1) + ')').hide();

			function navigateLink(x){
				var itemsToHide = itemsToPaginate.filter(':lt(' + ((x-1) * itemsPerPage) + ')');
				$.merge(itemsToHide, itemsToPaginate.filter(':gt(' + ((x * itemsPerPage)-1) + ')'));
					itemsToHide.hide();
				var itemsToShow = $('.search-item').not(itemsToHide).show();
			}

		// paginationContainer.find('.number-link').on('click', function(){				
		// 		var linkNumber = $(this).text();
		// 		var itemsToHide = itemsToPaginate.filter(':lt(' + ((linkNumber-1) * itemsPerPage) + ')');
		// 		$.merge(itemsToHide, itemsToPaginate.filter(':gt(' + ((linkNumber * itemsPerPage)-1) + ')'));
		// 			itemsToHide.hide();
		// 		var itemsToShow = $('.search-item').not(itemsToHide).show();

		// 	});

		paginationContainer.find('.page-prev').on('click', function(){
			if(numberlink>1){
					--numberlink;
					navigateLink(numberlink);
			}else{
				numberlink = 1;
			}
		});	


		paginationContainer.find('.page-next').on('click', function(){
			if(numberlink<noOfPaginationLinks){
					++numberlink;
					navigateLink(numberlink);
			}else{
				numberlink = noOfPaginationLinks;
			}
		});

		}

}(jQuery));