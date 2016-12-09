//Diminui menu ao rolar
$(function(){
	var logo = $('h1.logo');
	var menu = $('nav.menu-desktop ul');

	$(window).scroll(function () { 
		if ($(this).scrollTop() > 50) { 
			logo.addClass('scroll');
			menu.addClass('scroll');
		} else { 
			logo.removeClass('scroll');
			menu.removeClass('scroll');
		} 
	});
});

//Menu
$(function(){
	$('.menu-anchor').on('click', function(){
	    $('nav.menu-mobile ul').slideToggle("fast",function(){
			$('main#content-site').on('click', function(){
				$('nav.menu-mobile ul').slideUp("fast");
			});
	    });
	});
});

//Scroll para ID's
$(function(){
	$('nav.menu-desktop a, nav.menu-mobile a').click(function(e){
		$.scrollTo((this.hash) || 0, 500);
		$('nav.menu-mobile ul').slideUp("fast");
		e.preventDefault();
	});
});

//faq
$(function(){
	$('#faq-itens ul li').click(function(){
		$(this).find('div.dropdown').slideToggle("fast");
	});
});

//Troca telefone
$(function(){
	$('.open-tel').on("click",function(){
		$(this).text("0000-0000");
	});
});

//abre lightbox quando clica
$(function(){
	$('.open-lightbox').on('click',function(){
		$('.lightbox').fadeIn('fast',function(){
			$('.close-box, .mask').on('click',function(){
				$('.lightbox').fadeOut();
			});
		});
	});
});

$(document).ready(function(){
	$('.lightbox').fadeIn('fast',function(){
		$('.close-box, .mask').on('click',function(){
			$('.lightbox').fadeOut();
		});
	});
});