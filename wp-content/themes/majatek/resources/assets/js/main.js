(function ($) {
	$(document).ready(function () {
		$(".hamburger").click(function () {
			$(this).toggleClass("hamburger--active");
			$(this).parent().find("nav").slideToggle(300);
		});
	});
})(jQuery);
