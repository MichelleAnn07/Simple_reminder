var Cards = (function() {
	
	var view 	= $('.view');
	var vw 		= view.innerWidth();
	var vh	 	= view.innerHeight();
	var vo 		= view.offset();
	var card 	= $('.card__item');
	var cardfull = $('.card__full');
	var cardfulltop = cardfull.find('.card__full-top');
	var arrow = cardfulltop.find('svg');
	var cardnum = cardfulltop.find('.card__full-num');
	var cardhandle = cardfull.find('.card__full-handle');
	var cardinfo = cardfull.find('.card__full-info');
	var w 		= $(window);
	
	var data = [
		{
			num: '!!!',
			handle: 'Warning',
			info: 'This is page is currently under intensive development.'
		},
		{
			num: '!!!',
			handle: 'Warning',
			info: 'This is page is currently under intensive development.'
		},
		{
			num: '!!!',
			handle: 'Warning',
			info: 'This is page is currently under intensive development.'
		},
		{
			num: '!!!',
			handle: 'Warning',
			info: 'This is page is currently under intensive development.'
		},
		{
			num: '!!!',
			handle: 'Warning',
			info: 'This is page is currently under intensive development.'
		},
		{
			num: '!!!',
			handle: 'Warning',
			info: 'This is page is currently under intensive development.'
		}
	];
	
	var moveCard = function() {
		var self = $(this);
		var selfIndex = self.index();
		var selfO = self.offset();
		
		var color = self.css('border-top-color');
		cardfulltop.css('background-color', color);
		cardhandle.css('color', color);
		
		updateData(selfIndex);
				
		self.on('transitionend', function() {
			cardfull.addClass('active');
			self.off('transitionend');
		});
		
		return false;
	};
	
	var closeCard = function() {
		cardfull.removeClass('active');
		cardnum.hide();
		cardinfo.hide();
		cardhandle.hide();
		cardfull.on('transitionend', function() {
			cardnum.show();
			cardinfo.show();
			cardhandle.show();
			cardfull.off('transitionend');
		});
	};
	
	var updateData = function(index) {
		cardnum.text(data[index].num);
		cardhandle.text(data[index].handle);
		cardinfo.text(data[index].info);
	};
	
	var bindActions = function() {
		card.on('click', moveCard);
		arrow.on('click', closeCard);
	};
	
	var init = function() {
		bindActions();
	};
	
	return {
		init: init
	};
	
}());

Cards.init();

// $(document).mouseup(function (e)
// {
//     var container = $("YOUR CONTAINER SELECTOR");

//     if (!container.is(e.target) // if the target of the click isn't the container...
//         && container.has(e.target).length === 0) // ... nor a descendant of the container
//     {
//         container.hide();
//     }
// });