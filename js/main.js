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


//scroll
$(function(){

	var elements = $('nav.menu-desktop a, nav.menu-mobile a');

	elements.click(function(e){
		var offThis = $(this.hash).offset().top;
		var alturaHeader = $('header#top-site').outerHeight();
		var menuScroll = offThis - alturaHeader;
		$.scrollTo((menuScroll) || 0, 500);
		e.preventDefault();
		if ($(window).width() <= 768) {$('.menu-mobile ul').slideUp();}
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
	$('.open-material').on('click',function(){
		$('.material-publicitario').fadeIn('fast',function(){
			$('.close-box, .mask').on('click',function(){
				$('.material-publicitario').fadeOut();
			});
		});
	});
});

//material publicitario
$(document).ready(function(){
	$('.material-publicitario').fadeIn('fast',function(){
		$('.close-box, .mask').on('click',function(){
			$('.material-publicitario').fadeOut();
		});
	});
});

$(function(){

	//whatsapp form
	$('.open-whatsapp').click(function(e){
		$('.whatsapp-box').fadeIn('fast',function(){
			$(this).css({'display':'flex'});
			$('.close-box, .mask').on('click',function(){
				$('.whatsapp-box').fadeOut();
			});
		});
		e.preventDefault();
	});

});

