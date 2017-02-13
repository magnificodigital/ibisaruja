
//Envia email tabela de valores com ajax
jQuery(document).ready(function (){
	//Primeira seção
	jQuery("#cf_submit-hotel-ibis-0170bafa40236b4788db").click(function(){

		var dados = {
			'action': 'minha_acao_ajax',
			'dados' : $('form#conversion-form-hotel-ibis-0170bafa40236b4788db').serialize()
		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {
			
			console.log(resposta.mensagem);
			//$('#home-slide #solicita_tabela').html(resposta.mensagem);
			//alert(resposta.mensagem);

		}, 'json');

	});

	//Segunda seção
	jQuery("#cf_submit-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b").click(function(){

		var dados = {
			'action': 'minha_acao_ajax',
			'dados' : $('form#conversion-form-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b').serialize()
		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {
			
			console.log(resposta.mensagem);
			//$('#enterprise-content #solicita_tabela').html(resposta.mensagem);
			//alert(resposta.mensagem);


		}, 'json');

	});


	//Form contato

	jQuery('#formcontato button#enviar').click(function(){

		var dados = {
			'action': 'minha_acao_ajax',
			'dados' : $('form#conversion-form-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b').serialize()
		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {
			
			console.log(resposta.mensagem);
			//$('#enterprise-content #solicita_tabela').html(resposta.mensagem);
			//alert(resposta.mensagem);


		}, 'json');

	});

});
