
	$(document).ready(function() {
		$('.obrazek').css('cursor', 'pointer');

		$('.obrazek').hover(function() { //kursor wchodzi
			$('.obrazek').stop().animate({'opacity': 0.5}, "slow");
			$(this).stop().animate({'opacity': 1}, "slow");
		},function() { //kursor wychodzi
			$('.obrazek').stop().animate({'opacity': 1}, "slow");
		});
	});
