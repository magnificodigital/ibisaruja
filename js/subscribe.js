$(document).ready(function(){

	//button para tabela
	//$('.sml_subscribe').append("<button type='button' value='solicitar' name='solicitar' id='solicita_tabela'><strong>Solicitar tabela</strong> de valores</button>");

	//submit form
	$('.sml_subscribe').submit(function() {

	    var form = $(this);
	    $.post(form.attr('action'), form.serialize(), function(retorno) {
	        $('.sml_submitbtn').val("Obrigado!");
	        $('.sml_nameinput').val('');
	        $('.sml_emailinput').val('');
	    });

	    return false;

	});

});