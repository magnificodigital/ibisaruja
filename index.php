<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<?php wp_head(); ?>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php bloginfo('name') ?></title>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">		
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

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

		<!--fancybox-->
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/fb/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/fb/source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/js/fb/source/jquery.fancybox.css?v=2.1.5" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/js/fb/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/fb/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/fb/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/fb/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<!--
		<script type="text/javascript">
			window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
			d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
			_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
			$.src="//v2.zopim.com/?3ouh11f0fCCct6Rpb5sJQvduUHHR3yKM";z.t=+new Date;$.
			type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

			function openChat(){
				$zopim.livechat.window.show();
			}
		</script>
		-->
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/subscribe.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.fancybox').fancybox({
					padding: 10,
					helpers: {
						overlay: {
								locked: false
							}
						}
				});
			});
		</script>

        <!-- Início do script Omnize --> 
		<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);</script> 
		<!-- Fim do script Omnize -->

		<!--Google Analytics-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-88643942-1', 'auto');
		  ga('send', 'pageview');

		</script>

		
	</head>
<body>

<div class="lightbox">
	<div class="mask"></div>
	<div class="container">
		<div class="box-light col-md-6 center">
			<span class="close-box"></span>
				<div class="scroll-text swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<article>
								<?php $post_id = 39;  //id da pagina "material publicitario"
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								// exibe titulo echo $title;?>
								<h2><?php echo $title; ?></h2>
								<p><?php echo $queried_post->post_content ?></p>									
							</article>
						</div>
						<div class="swiper-scrollbar"></div>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="top-site">
	<div class="container">
		<div class="row">
			<nav class="menu-desktop">
				<a href="#">
					<h1 title="<?php bloginfo('name') ?>" class="logo">
						<img src="<?php bloginfo('template_url') ?>/img/logo-ibis.png" alt="<?php bloginfo('name') ?>" title="<?php bloginfo('name') ?>">
					</h1>
				</a>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#enterprise-content">Empreendimento</a></li>
					<li><a href="#location-content">Localização</a></li>
					<li><a href="#advantages-content">Invista</a></li>
					<li><a href="#benefits-content">Benefícios</a></li>
					<li><a href="#leaders-content">Realização</a></li>
					<li><a href="#faq-content">FAQ</a></li>
					<li><a href="#contact-content">Contato</a></li>
					<li><span class="open-lightbox"><a href="">Material publicitário</a></span></li>
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
				<div class="row"><span class="link-advertising open-lightbox"><a href="">Material publicitário</a></span></div>
				<div class="row">
				<span class="menu-anchor"><span>MENU</span> <i class="fa fa-bars" aria-hidden="true"></i></span></div>
			</div>
		</div>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#enterprise-content">Empreendimento</a></li>
			<li><a href="#location-content">Localização</a></li>
			<li><a href="#advantages-content">Invista</a></li>
			<li><a href="#benefits-content">Benefícios</a></li>
			<li><a href="#leaders-content">Realização</a></li>
			<li><a href="#faq-content">FAQ</a></li>
			<li><a href="#contact-content">Contato</a></li>
		</ul>
	</nav>
</header>

<main id="content-site">
<!--primeira secao-->
<section id="home-slide" class="content-site">
	<div class="swiper-container slidehome">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background: url('<?php bloginfo('template_url') ?>/img/slide1.jpg'); background-size: cover;">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<section class="newsletter-box box-content col-md-5 col-sm-12 col-xs-12">
					<header>
						<h2><strong>Invista em um hotel</strong><br />que é <strong>referência mundial</strong></h2>
						<h3><strong>Cadastre-se</strong> e saiba como</h3>
					</header>
					 <?php
					    $args = array(
					        'prepend' => '', 
			                'showname' => true,
			                'nametxt' => '', 
			                'nameholder' => 'Nome:', 
			                'emailtxt' => '',
			                'emailholder' => 'E-mail:', 
			                'showsubmit' => true, 
			                'submittxt' => 'Enviar', 
			                'jsthanks' => true,
			                'thankyou' => 'Ajax não funcionou :('
					    );
					    echo smlsubform($args);
					?>
					<button type="button" id='solicita_tabela'><strong>Solicitar tabela</strong> de valores</button>		
				</section>
			</div>
		</div>
	</div>
	
</section>

<!--segunda secao-->
<section id="enterprise-content" class="content-site bgParallax" data-speed="10">
	<div class="container">
		<div class="row">
			<section class="newsletter-box box-content col-md-5">

				<header>
					<h2><strong>Empreendimento</strong></h2>
					<h3>Venha ser parceiro de uma marca de referência global, em uma cidade em expansão como Arujá, um local único e estratégico.</h3>
				</header>

				<?php
				    $args = array(
				        'prepend' => '', 
		                'showname' => true,
		                'nametxt' => '', 
		                'nameholder' => 'Nome:', 
		                'emailtxt' => '',
		                'emailholder' => 'E-mail:', 
		                'showsubmit' => true, 
		                'submittxt' => 'Enviar', 
		                'jsthanks' => true,
		                //'thankyou' => 'Ajax não funcionou :('
				    );

				    echo smlsubform($args);

				?>
				<button type='button' value='solicitar' name='solicitar' id='solicita_tabela'><strong>Solicitar tabela</strong> de valores</button>				
			</section>
		</div>
		<div class="row">
			<!--baixar documentos-->
			<div class="doc-down col-md-8">
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

				<!--galeria-->
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
					<a href="<?php the_post_thumbnail_url('galery-big-photo'); ?>" data-fancybox-group="gallery1" class="fancybox" title="">
					<?php the_post_thumbnail('galery-small-photo');  ?></a>
				</div>

				<?php endwhile; endif;?>
				<!--fim galeria-->		
			</div>

			<div class="swiper-button-prev swiper-button-white"></div>
	    	<div class="swiper-button-next swiper-button-white"></div>

		</div>
	</div>
</div>

<!--vantagens-->
<section id="location-content" class="content-site bgParallax" data-speed="10">
	<div class="container">
		<div class="box-content">
			<div class="row">
				<header class="col-md-5">
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
				<header class="col-md-5">
					<h2>Quais as <strong>vantagens de Investir</strong> em Hotel?</h2>
				</header>
			</div>
			<article class="row">
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
</section>

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
					<form id="formcontato" action="<?php bloginfo('template_url') ?>/send.php" method="post">
						<p><input type="text" name="nome" placeholder="Nome"></p>
						<p><input type="text" name="email" placeholder="E-mail"></p>
						<p><input type="text" name="tel" placeholder="Telefone"></p>
						<p>
							<button type="button" class="open-tel">Clique para <strong>exibir o telefone</strong></button>
							<input type="submit" name="enviar" value="enviar">
						</p>
					</form>
				</div>
			</div>
		</section>
	</div>
</section>
</main>
<footer id="site">
	<div class="container">
		<div class="row">
			<ul>
				<li class="col-md-2 col-xs-12"><p style="margin: 7px 0;"><strong>Fale conosco</strong></p></li>
				<li class="col-md-2 col-xs-3"><a href="http://www.ekoconstrutora.com.br/fale-conosco/" class="ico-mail" target="_blank"><p>Atendimento <span>por e-mail</span></p></a></li>
				<li class="col-md-2 col-xs-3"><a href="http://www.ekoconstrutora.com.br/ligamos-para-voce/" class="ico-tel" target="_blank"><p>Ligamos <span>para você</span></p></a></li>
				<li class="col-md-2 col-xs-3"><a href="http://www.ekoconstrutora.com.br/agende-uma-visita/" class="ico-agenda" target="_blank"><p>Agende <span>uma visita</span></p></a></li>
				<li class="col-md-2 col-xs-3"><a href="#" class="ico-whatsapp" target="_blank"><p>Atendimento <span>via whatsapp</span></p></a></li>
				<li class="col-md-2 chat-online"><a href="javascript:openChat()" class="" target="_blank"><p>Atendimento <span>online</span></p></a></li>
			</ul>
		</div>
	</div>
	
</footer>

<script type="text/javascript">
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

	var swiper = new Swiper('.scroll-text', {
        scrollbar: '.swiper-scrollbar',
        direction: 'vertical',
        slidesPerView: 'auto',
        mousewheelControl: true,
        freeMode: true
    });

</script>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  
<script type="text/javascript">
    var meus_campos = {
        'sml_name': 'nome',
        'sml_email': 'email'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'IBIS Arujá - Subscribe 1', options);
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'IBIS Arujá - Subscribe 2', options);
</script>

<script type="text/javascript">
    var meus_campos = {
        'nome': 'nome',
        'email': 'email',
        'tel': 'telefone'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'IBIS - Contato', options);  
</script>

<?php wp_footer();?>

</body>
</html>