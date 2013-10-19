$(function () {
	$('nav > ul > li').hover(
		function() {
			$(this).find('ul').stop().hide().slideDown('fast')},

		function() {
			$(this).find('ul').stop().slideUp('fast')}
		);

});