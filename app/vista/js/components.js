/*
(function (){
	var links = null;
	links = $("nav").find(".btn-menu");
	links.on("click", activateMenu);
	function activateMenu(e){
		console.log(e);
		links.removeClass("active");
		var elementActive = $(this);
		elementActive.addClass('active');
	}
})();
*/