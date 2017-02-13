<?php 

add_action('wp_enqueue_scripts', 'meu_tema_enqueue_scripts');
function meu_tema_enqueue_scripts() {
	wp_enqueue_script('scripts', get_template_directory_uri()."/js/scripts.js", array('jquery'));
	wp_localize_script('scripts', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'outro_valor' => 1234));
}

add_action('wp_ajax_minha_acao_ajax', 'funcao_da_minha_acao_ajax');
add_action('wp_ajax_nopriv_minha_acao_ajax', 'funcao_da_minha_acao_ajax');
function funcao_da_minha_acao_ajax() {

	// Modificar o email do remetente para outro email
	add_filter( 'wp_mail_from', 'ewp_wp_mail_from' );
	function ewp_wp_mail_from() {
	    return "contato@ekoconstrutora.com.br";
	}
	 
	// Modificar o nome do remetente
	add_filter( 'wp_mail_from_name', 'ewp_ep_mail_from_name' );
	function ewp_ep_mail_from_name() {
	    return "Eko Construtora - ".get_bloginfo('name'); // Poderia também usar get_bloginfo( 'name' );		 
	}

	parse_str($_REQUEST['dados'], $array_dados);

	$tabela = ''; //url do link da tabela aqui

	//Fazer a mensagem com uma variavel $mensagem
	$mensagem = "Olá, ".$array_dados['name']."\n ";

	if (wp_mail($array_dados['email'], 'Tabela de Valores - '.get_bloginfo('name'), $mensagem, $tabela)) {
		echo json_encode(array('class' => 'sucesso', 'mensagem' => 'Mensagem enviada com sucesso!'));
	} else {
		echo json_encode(array('class' => 'erro', 'mensagem' => 'Sua mensagem não foi enviada.'));
	}

	wp_die();

}

add_theme_support('post-thumbnails');
add_image_size('galery-big-photo', 900, false);
add_image_size('galery-small-photo', 370, 220, true);

