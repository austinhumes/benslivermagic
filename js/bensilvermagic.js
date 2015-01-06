/*document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
*/
function changeBkgd(imageName) {
	$('body').css('background', 'url("images/backgrounds/background_' + imageName + '.jpg")');		
}

function showLogo() {
	//Header fade in
	$('#title').fadeIn(2500);
}

function startSlideShow() {
	var currentImage, nextImage;
	
	//	Find current elem with 'active' class to find the next one in the list
	currentImage = $('.slide.active');
	nextImage = currentImage.next('.slide');
	
	var pos = currentImage.prevAll('.slide').length;
	
	$('#slides').stop().animate({marginLeft:-positions[pos]+'px'},450);
	
	currentImage.removeClass('active');
	if (nextImage.length) {
		nextImage.addClass('active');
	} else {
		$('.slide:first').addClass('active');
	}
		
	setTimeout("startSlideShow()", 4000);
}

$(document).ready(function() {
	showLogo();
})