$(window).scroll(function(){
	var menu = document.getElementById('menu'); // colocar em cache
	window.addEventListener('scroll', function(){
	if (window.scrollY > 0) menu.classList.add('menu-auxiliar'); // > 0 ou outro valor desejado
	else menu.classList.remove('menu-auxiliar');
	});
});

$(function(){
	$('.mobile-menu').click(function(){
		$('.mobile-menu').find('ul').slideToggle();
	})
})