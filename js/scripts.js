
//Envia email tabela de valores com ajax
jQuery(document).ready(function (){

	//Primeira seção
	$("#home-slide #solicita_tabela").click(function(){

		var dados = {
			'action': 'minha_acao_ajax',
			'dados' : $('#home-slide form.sml_subscribe').serialize()
		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {
			
			console.log(resposta.mensagem);
			$('#home-slide #solicita_tabela').html(resposta.mensagem);


		}, 'json');

	});

	//Segunda seção
	$("#enterprise-content #solicita_tabela").click(function(){

		var dados = {
			'action': 'minha_acao_ajax',
			'dados' : $('#enterprise-content form.sml_subscribe').serialize()
		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {
			
			console.log(resposta.mensagem);
			$('#enterprise-content #solicita_tabela').html(resposta.mensagem);


		}, 'json');

	});


});
