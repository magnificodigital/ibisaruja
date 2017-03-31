<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo get_bloginfo('name') ?></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">

		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">

		<style type="text/css">	
			div#conversion-hotel-ibis-0170bafa40236b4788db.wrapper,
			div#conversion-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b.wrapper,
			div#conversion-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871.wrapper {background: transparent !important;}

			#form-container-hotel-ibis-0170bafa40236b4788db #conversion-hotel-ibis-0170bafa40236b4788db section,
			#form-container-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b #conversion-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b section {margin-left: -20px !important;}
			#conversion-hotel-ibis-0170bafa40236b4788db form input,
			#conversion-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b form input,
			#conversion-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871 form input,
			#form-hotel-ibis-formulario-whatsapp-366e68e297da517f6691 form input {
				border: 0 !important;
				padding: 10px !important;
				border-radius: 0 !important;
				font-size: 24px;

			}

			#form-hotel-ibis-formulario-whatsapp-366e68e297da517f6691 form input {background: #EEE !important;}

			#form-container-hotel-ibis-0170bafa40236b4788db #conversion-hotel-ibis-0170bafa40236b4788db #conversion-form-hotel-ibis-0170bafa40236b4788db div.actions input.call_button,
			#form-container-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b #conversion-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b #conversion-form-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b div.actions input.call_button,
			#form-container-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871 #conversion-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871 #conversion-form-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871 div.actions input.call_button {border-radius: 0 !important; border: 0 !important; box-shadow: none !important;}
			#conversion-modal-hotel-ibis-0170bafa40236b4788db .modal-content section div.actions, #conversion-hotel-ibis-0170bafa40236b4788db section div.actions,
			#conversion-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b section div.actions,
			#conversion-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871 section div.actions {padding: 0px 0 8px 0!important;}
			#form-hotel-ibis-0170bafa40236b4788db *,
			#form-hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b *,
			#form-hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871 *,
			#form-hotel-ibis-formulario-whatsapp-366e68e297da517f6691 * {font-family: 'Open Sans', sans-serif !important;}

			#form-container-hotel-ibis-formulario-whatsapp-366e68e297da517f6691 #conversion-hotel-ibis-formulario-whatsapp-366e68e297da517f6691 section {padding: 20px 0 !important;}

		</style>

		<?php wp_head(); ?>
		
	</head>
<body <?php body_class() ?>>

<div style="display: none; max-width: 550px; margin-left: 20px; margin-right: 20px;" id="materialpublicitario">
	<article class="box-text">
		<?php //aqui é 39 ?>
		<?php $post_id = 39;  //id da pagina "material publicitario"
		$queried_post = get_post($post_id);
		$title = $queried_post->post_title;
		// exibe titulo echo $title;?>
		<h2><?php echo $title; ?></h2>
		<p><?php echo $queried_post->post_content ?></p>
	</article>
</div>

<div style="display: none; max-width: 400px; min-height: 450px; margin-left: 20px; margin-right: 20px;" id="whatsappbox">		
	<div class="whatsapp-box">
		<header>
			<div class="row">
				<div class="col-xs-3">
					<i class="fa fa-whatsapp"></i>
				</div>
				<div class="col-xs-9">
					<h4>Atendimento via <span>Whatsapp</span></h4>
				</div>
			</div>
		</header>
		<section>
			<div class="row">
				<div class="col-xs-12">
					<div id="hotel-ibis-formulario-whatsapp-366e68e297da517f6691"></div>
					<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
					<script type="text/javascript">
					  new RDStationForms('hotel-ibis-formulario-whatsapp-366e68e297da517f6691-html', 'UA-47651710-1').createForm();
					</script>
				</div>
			</div>
		</section>
	</div>
</div>

<header id="top-site">
	<div class="container">
		<div class="row">
			<nav class="menu-desktop">
				<a href="#homeslide">
					<h1 title="<?php bloginfo('name') ?>" class="logo">
						<img src="<?php bloginfo('template_url') ?>/img/logo-ibis.png" alt="<?php bloginfo('name') ?>" title="<?php bloginfo('name') ?>">
					</h1>
				</a>
				<ul>
					<li><a href="#homeslide">Home</a></li>
					<li><a href="#enterprise-content">Empreendimento</a></li>
					<li><a href="#location-content">Localização</a></li>
					<li><a href="#advantages-content">Invista</a></li>
					<!--<li><a href="benefits-content">Benefícios</a></li>-->
					<li><a href="#faq-content">FAQ</a></li>
					<li><a href="#leaders-content">Realização</a></li>
					<li><a href="#contact-content">Contato</a></li>
					<li class="pull-right"><a data-fancybox data-src="#materialpublicitario" href="javascript:;"><span class="open-material">Material publicitário</span></a></li>
				</ul>
			</nav>

		</div>
	</div>

	<nav class="menu-mobile">
		<div class="row">
			<div class="col-xs-5">
				<a href="#" class="logo-mobile">
					<img src="<?php bloginfo('template_url'); ?>/img/logos/ibis.png" alt="Hotel IBIS - Arujá" title="Hotel IBIS - Arujá">
				</a>
			</div>
			<div class="col-xs-7" style="text-align: center;">
				<div class="row"><span class="link-advertising open-lightbox"><a data-fancybox data-src="#materialpublicitario" href="javascript:;">Material publicitário</a></span></div>
				<div class="row">
				<span class="menu-anchor"><span>MENU</span><i class="fa fa-bars" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<ul>
			<li><a href="#homeslide">Home</a></li>
			<li><a href="#enterprise-content">Empreendimento</a></li>
			<li><a href="#location-content">Localização</a></li>
			<li><a href="#advantages-content">Invista</a></li>
			<!--<li><a href="#benefits-content">Benefícios</a></li>-->
			<li><a href="#faq-content">FAQ</a></li>
			<li><a href="#leaders-content">Realização</a></li>
			<li><a href="#contact-content">Contato</a></li>
		</ul>
	</nav>
</header>

<!--primeira secao-->
<section id="homeslide" class="content-site">
	<div class="container">
		<div class="row">
			<section class="newsletter-box box-content col-lg-5 col-md-7 col-sm-12 col-xs-12">
				<header>
					<h2><strong>Invista em um hotel</strong> <br/>com a bandeira<strong> Ibis</strong></h2>
					<h3><strong>Cadastre-se</strong> e saiba como</h3>
				</header>

				<div id="hotel-ibis-0170bafa40236b4788db"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				  new RDStationForms('hotel-ibis-0170bafa40236b4788db-html', 'UA-47651710-1').createForm();
				</script>

			</section>
		</div>
	</div>	
</section>

<!--segunda secao-->
<section id="enterprise-content" class="content-site">
	<div class="container">
		<div class="row">
			<section class="newsletter-box box-content col-lg-5 col-md-7 col-sm-12 col-xs-12">

				<header>
					<h2><strong>Empreendimento</strong></h2>
					<h3>Venha ser parceiro da ACCOR, empresa líder em operação hoteleira e IBIS, uma marca de referência global, em uma cidade em expansão como Arujá/SP. <small>Dados obtidos em: <a href="http://accorhotels-group.com" target="_blank">accorhotels-group.com</a></small></h3>
				</header>


				<div id="hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				  new RDStationForms('hotel-ibis-tabela-de-valores-empreendimento-5fa6d410407fd908989b-html', 'UA-47651710-1').createForm();
				</script>

							
			</section>
		</div>
		<div class="row">
			<!--baixar documentos-->
			<div class="doc-down col-lg-8 col-md-12">
				<div class="row">
					<header class="col-xs-12">
						<h4><strong>Baixar</strong> documentos</h4>
					</header>

					<ul class="col-md-5">
						<li><a href="<?php the_field('contrato_de_locação_e_outras_avenças', 16); ?>" target="_blank">Contrato de locação e Outras Avenças</a></li>
						<li><a href="<?php the_field('minuta_da_convenção_de_condominio', 16); ?>" target="_blank">Minuta da Convenção de Condomínio</a></li>
						<li><a href="<?php the_field('anexo_ii_memorial_de_incorporação', 16); ?>" target="_blank">Anexo II Memorial de Incorporação</a></li>
						<li><a href="<?php the_field('prospecto_resumido', 16); ?>" target="_blank">Prospecto Resumido</a></li>
						<li><a href="<?php the_field('estudo_de_viabilidade_econômica', 16); ?>" target="_blank">Estudo de Viabilidade Econômica</a></li>
					</ul>
					<ul class="col-md-7">
						<li><a href="<?php the_field('compromisso_de_venda_e_compra', 16); ?>" target="_blank">Compromisso de Venda e Compra</a></li>
						<li><a href="<?php the_field('compromisso_de_venda_e_compra_-_quadro_resumido', 16); ?>" target="_blank">Compromisso de Venda e Compra - Quadro Resumido</a></li>
						<li><a href="<?php the_field('declaração_do_investidor_adquirente', 16); ?>" target="_blank">Declaração do Investidor Adquirente</a></li>
						<li><a href="<?php the_field('contratos_de_investimento_coletivo_no_empreendimento_compilado', 16); ?>" target="_blank">Contratos de Investimento Coletivo no Empreendimento Compilado</a></li>
						<li><a href="<?php the_field('declaração_para_fins_do_artigo_56_da_instrução_cvm_400', 16); ?>" target="_blank">Declaração para Fins do Artigo 56 da Instrução CVM 400</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--galeria-->
<div class="container">
	<div class="slides-galery">
		<div class="swiper-container galery-enterprise" >
			<div class="swiper-wrapper">

				<?php $args = array(
					'post_type' => 'galeria',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => '6'
					);
				?>

				<?php query_posts($args); ?>		
				<?php if (have_posts()): while (have_posts()): the_post(); ?>

				<div class="swiper-slide">
					<a href="<?php the_post_thumbnail_url('galery-big-photo'); ?>" data-fancybox="gallery1" title="">
						<?php the_post_thumbnail('galery-small-photo'); ?>
					</a>
				</div>

				<?php endwhile; endif;?>

	
			</div>

			<div class="swiper-button-prev swiper-button-white"></div>
	    	<div class="swiper-button-next swiper-button-white"></div>

		</div>
	</div>
</div>

<!--vantagens-->
<section id="location-content" class="content-site">
	<div class="container">
		<div class="box-content">
			<div class="row">
				<header class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
					<h2>Arujá <strong>está entre as 100 melhores</strong> cidades do brasil para <strong>investir</strong></h2>
					<h3>O maior IDH do Alto Tiête<br /><a href="#">Confira na matéria do G1</a></h3>
				</header>
			</div>
			<div class="row">
				<ul>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/ponte.png" alt="30 minutos do centro de SP" title="30 minutos do centro de SP">
						<p>30 minutos do <strong>Centro de SP</strong></p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/margens.png" alt="Ás margens da Rodovia Dutra" title="Ás margens da Rodovia Dutra">
						<p>Ás margens da <strong>Rodovia Dutra</strong></p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/rodovias.png" alt="Acesso á 
Ayrton Senna, Fernão Dias e Rodoanel" title="Acesso á 
Ayrton Senna, Fernão Dias e Rodoanel">
						<p>Acesso á <strong>Ayrton Senna,<br />Fernão Dias e Rodoanel</strong></p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/navio.png" alt="Próximo aos Portos de Santos e São Sebastião" title="Próximo aos Portos de Santos e São Sebastião">
						<p>Próximo aos <strong>Portos de Santos e São Sebastião</strong></p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/industria.png" alt="10 minutos dos Centros Industriais" title="10 minutos dos Centros Industriais">
						<p>10 minutos dos <strong>Centros Industriais</strong></p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/aviao.png" alt="20 minutos do Aeroporto Internacional de Guarulhos" title="20 minutos do Aeroporto Internacional de Guarulhos.">
						<p>20 minutos do <strong>Aeroporto Internacional</strong> de Guarulhos.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="advantages-content" class="content-site">
	<div class="container">
		<section class="box-content">
			<div class="row">
				<header class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
					<h2>Quais as <strong>vantagens de Investir</strong> em Hotel?</h2>
				</header>
			</div>
			<article class="row">
				<!--
				<div class="col-md-4">
					<p>Um <strong>investimento tão atrativo  que a modalidade combina a possibilidade 
de se obter uma boa rentabilidade com segurança do capital investido.</strong> As unidades são registradas em propriedade horizontal 
e as escrituras no nome de proprietário.</p>
				</div>
				<div class="col-md-4">
					<p>Adquirindo uma unidade em um hotel, 
<strong>o investidor não precisa se preocupar com a manutenção do imóvel, ou inadimplência</strong> e ainda garante a valorização patrimonial de um imóvel comercial de alto padrão, com excelente localização.
</p>
				</div>
				<div class="col-md-4">
					<p>O investidor que adquirir uma unidade, recebe em quantia igual dividida entre 
os outros investidores. <strong>A receita não vem somente das locações dos quartos, mas sim de todos os serviços que fazem parte do empreendimento</strong> hoteleiro.</p>
				</div>-->

				<div class="col-md-4">
					<p>O investimento no setor hoteleiro se transformou em uma boa opção de investimento, propiciando ao investidor segurança patrimonial.</p>
					<p>Adquirindo uma unidade em um hotel, o investidor não precisa se preocupar com a manutenção do imóvel, ou inadimplência e ainda possibilita a valorização patrimonial de um imóvel comercial de alto padrão. </p>
				</div>

				<div class="col-md-4">
					<p>O que faz do Hotel uma forma de investimento tão atrativa é que a modalidade combina a possibilidade de se obter uma boa rentabilidade com segurança do capital investido. As unidades são registradas em propriedade horizontal e as escrituras no nome de proprietário.</p>
					<p><strong><i>Não há garantia de que o retorno financeiro atenderá as projeções inicialmente realizadas.</i></strong></p>
				</div>

				<div class="col-md-4">
					<p>O investidor que adquirir uma unidade, recebe em quantia igual dividida entre os outros investidores, o lucro que o hotel obteve. A receita não vem somente das locações dos quartos, mas sim de todos os serviços que fazem parte do empreendimento hoteleiro: como Restaurante, Bar, lavanderia, estacionamento, etc... </p>
					<p><strong><i>A operação hoteleira do empreendimento pode apresentar prejuízo no fluxos de caixa negativos por um período indeterminado.</i></strong></p>
				</div>


			</article>
		</section>
	</div>

	<section class="reasons-content">
		<header>
			<h2><strong>5 motivos</strong> para investir em um <strong>Hotel Ibis</strong></h2>
		</header>
		<div class="container">
			<div class="row">
				<ol>
					<li class="col-md-1"></li>
					<li class="col-md-2"><span>1</span><strong>Sem preocupação</strong> com inquilino e IPTU</li>
					<li class="col-md-2"><span>2</span><strong>Baixo custo</strong> Operacional</li>
					<li class="col-md-2"><span>3</span>Perspectiva <strong>de ocupação o ano inteiro</strong></li>
					<li class="col-md-2"><span>4</span><strong>Localização Previlegiada</strong></li>
					<li class="col-md-2"><span>5</span><strong>Potencial de</strong> Valorização Imobiliária</li>
					<li class="col-md-1"></li>
				</ol>
			</div>
		</div>
	</section>
</section>

<section id="faq-content" class="content-site bgParallax" data-speed="10">

	<header>
		<h2>Dúvidas Frequentes</h2>
	</header>

	<div class="container">
		<div class="row">
			<div id="faq-itens" class="col-md-10">
				<ul>
					<?php $args = array(
						'post_type' => 'faq',
						'orderby' => 'date',
						'order' => 'DESC',
						//'posts_per_page' => '4',
						//'cat' => '2'
						);
					?>
					<?php query_posts($args); ?>		
    				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<li>
						<h5><?php the_title(); ?></h5>
						<div class="dropdown">
							<?php the_content(); ?>
						</div>
					</li>
					<?php endwhile; endif;?>				
				</ul>
			</div>
		</div>
	</div>
</section>
<?php /*
<section id="benefits-content" class="content-site bgParallax" data-speed="10">
	<div class="container">
		<article class="box-content">
			<div class="row">
				<header>
					<h2>Benefícios</h2>		
				</header>
						
			</div>
			<div class="row">
				<ul>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/credibilidade.png" alt="Credibilidade" title="Credibilidade">
						<p>Credibilidade</p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/gestao.png" alt="Gestão" title="Gestão">
						<p>Gestão</p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/iptu.png" alt="IPTU" title="IPTU">
						<p>IPTU</p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/localizacao.png" alt="Localização Privilegiada" title="Localização Privilegiada">
						<p>Localização Privilegiada</p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/perspectiva.png" alt="Perspectiva de ocupação o ano inteiro" title="Perspectiva de ocupação o ano inteiro">
						<p>Perspectiva de ocupação o ano inteiro</p>
					</li>
					<li class="col-md-2 col-xs-6">
						<img src="<?php bloginfo('template_url') ?>/img/icons/retorno-financeiro.png" alt="Retorno Financeiro" title="Retorno Financeiro">
						<p>Retorno financeiro</p>
					</li>
				</ul>
			</div>
		</article>
	</div>
</section> */
?>
<section id="leaders-content" class="content-site">
	<div class="container">
		<article class="box-content">
			<div class="row">
				<header class="col-md-5">
					<h2><strong>Líderes</strong> no que fazem...</h2>
				</header>
			</div>
			<div class="row">

				<div class="partner col-md-12">
					<div class="row">
						<div class="col-md-4">
							<h4><img src="<?php bloginfo('template_url') ?>/img/logos/eko.png" alt="Eko Construtora - Construindo para você" title="Eko Construtora - Construindo para você" /></h4>
						</div>
						<div class="col-md-8">
							<article>
								<p>Ao longo de <strong>11 anos construíndo uma relação de comprometimento, transparência e respeito</strong>. E atuando nas áreas de incorporação, construção, desenvolvimento, vendas e consultoria para investimentos.</p>
								<p><strong>A EKO Construtora já entregou mais de 750 unidades nas regiões de Arujá/SP, Pindamonhangaba/SP, Caraguatatuba/SP, Itacaré/BA e Miami/EUA.</strong><br /><span>Acesse <a href="http://www.ekoconstrutora.com.br" target="_blank">www.ekoconstrutora.com.br</a> e descubra mais</span></p>
							</article>
						</div>
					</div>
				</div>

				<div class="partner col-md-12">
					<div class="row">
						<div class="col-md-4">
							<h4><img src="<?php bloginfo('template_url') ?>/img/logos/ibis.png" alt="Hotel Ibis Arujá" title="Hotel Ibis Arujá" /></h4>
						</div>
						<div class="col-md-8">
							<article>
								<p><strong>Ibis</strong> é uma marca de referência global e está constantemente inovando, demostrando seus valores de modernidade, simplicidade e bem-estar. Nos ultimos seis anos, a marca foi responsável por um crescimento forte e começou a operar em <strong>23 novos países</strong> ao redor do mundo. <strong>Mais de um Hotel ibis é aberto a cada semana.</strong></p>
							</article>
						</div>
					</div>
				</div>

				<div class="partner col-md-12">
					<div class="row">
						<div class="col-md-4">
							<h4><img src="<?php bloginfo('template_url') ?>/img/logos/accor.png" alt="Accor" title="Accor" /></h4>
						</div>
						<div class="col-md-8">
							<article>
								<p>Você terá como parceiro neste empreendimento a <strong>Accor</strong>, uma empresa <strong>líder em operação hoteleira, presente em mais de 90 países.</strong> O amplo portfólio das marcas hoteleiras da Accor oferece uma oferta variada, do luxo ao econômico. O grupo oferece aos seus clientes quase <strong>45 anos de experiência em hotelaria.</strong></p>
							</article>
						</div>
					</div>
				</div>

			</div>
		</article>
	</div>
</section>

<section id="contact-content" class="content-site">
	<div class="container">
		<section class="box-content">
			<div class="row">
				<div class="col-md-6">
					<header>
						<h2><strong>Garanta esta OPORTUNIDADE</strong> e seja parceiro de uma <strong>marca reconhecida mundialmente</strong></h2>
						<h3><strong>Cadastre-se</strong> e saiba como</h3>
						<div class="row">
							<div class="col-md-8">
								<p class="call"></p>
								<p class="online"></p>
							</div>
						</div>
					</header>
				</div>
				<div class="col-md-6">
					<!--
					<form id="formcontato" action="<?php bloginfo('template_url') ?>/send.php" method="post">
						<p><input type="text" name="nomecontato" placeholder="Nome"></p>
						<p><input type="text" name="emailcontato" placeholder="E-mail"></p>
						<p><input type="text" name="telcontato" placeholder="Telefone"></p>
						<p>
							<button type="button" id="enviar">Enviar</button>
						</p>
					</form>
					-->


					<div id="hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871"></div>
					<script async type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
					<script async type="text/javascript">
						new RDStationForms('hotel-ibis-formulario-de-contato-e08911d1cc0ecf785871-html', 'UA-47651710-1').createForm();
					</script>

					<div style="padding: 0 20px; width: 100%;">
						<button type="button" class="open-tel">Clique para <strong>exibir o telefone</strong></button>
					</div>

				</div>
			</div>
		</section>
	</div>
</section>
<footer id="site">
	<div class="container">
		<div class="row">
			<ul>	
				<li class="col-20 first"><p style="margin: 7px 0;"><strong>Fale conosco</strong></p></li>
				<li class="col-20"><a href="http://www.ekoconstrutora.com.br/fale-conosco/" class="ico-mail" target="_blank"><p>Atendimento <span>por e-mail</span></p></a></li>
				<li class="col-20"><a href="http://www.ekoconstrutora.com.br/ligamos-para-voce/" class="ico-tel" target="_blank"><p>Ligamos <span>para você</span></p></a></li>
				<li class="col-20"><a href="http://www.ekoconstrutora.com.br/agende-uma-visita/" class="ico-agenda" target="_blank"><p>Agende <span>uma visita</span></p></a></li>
				<li class="col-20"><a data-fancybox data-src="#whatsappbox" href="javascript:;" class="ico-whatsapp" target="_blank"><p>Atendimento <span>via whatsapp</span></p></a></li>
				<!--
				<li class="col-md-2 chat-online"><a href="javascript:openChat()" class="" target="_blank"><p>Atendimento <span>online</span></p></a></li>-->
			</ul>
		</div>
	</div>

</footer>





<!--
<script type="text/javascript">
    var meus_campos = {
        'nome': 'nome',
        'email': 'email',
        'tel': 'telefone'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'IBIS - Contato', options);  
</script>-->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		$('[data-fancybox]').fancybox();	
		$.fancybox.open({
			src  : '#materialpublicitario',
			type : 'inline',
			/*opts : {
				onComplete : function() {
					console.info('!');
				}
			}*/
		});
	});
	
</script>

<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);
</script> 

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88643942-1', 'auto');
  ga('send', 'pageview');

</script>



<script async type="text/javascript">

	var slider = new Swiper('.slidehome', {
	    loop:true,
	    effect:'fade'
	});
	var slider = new Swiper('.galery-enterprise', {
	    spaceBetween: 30,
	    loop:false,
	    slidesPerView: 3,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',    
	    breakpoints: {
            1199: {
                slidesPerView: 3,
                //spaceBetween: 40
            },
            768: {
                slidesPerView: 2,
                //spaceBetween: 30
            },
             480: {
                slidesPerView: 1,
                //spaceBetween: 
            }
        }
	});

	/*
	var swiper = new Swiper('.scroll-text', {
        scrollbar: '.swiper-scrollbar',
        direction: 'vertical',
        slidesPerView: 'auto',
        mousewheelControl: true,
        freeMode: true
    });*/

</script>

<script async type="text/javascript">
	//Paralaxx
	$(function(){

		if ($(window).width() > 767) {
			$('.bgParallax').each(function(){
				var $obj = $(this);
				$(window).scroll(function() {
					var yPos = -($(window).scrollTop() / $obj.data('speed')); 
					var bgpos = '50% '+ yPos + 'px';
					$obj.css('background-position', bgpos );
				});
			});	
		}
	});
</script>

<?php wp_footer();?>

</body>
</html>