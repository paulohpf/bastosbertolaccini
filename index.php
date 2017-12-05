<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="HandheldFriendly" content="True" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.bxslider.css">

		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<meta name="theme-color" content="#052a45">
		<?php
		$title = get_bloginfo();
		$title = $title." - ".get_bloginfo('description');
		?>
		<title><?php echo $title ?></title>
	</head>
	<?php
		$post_4 = get_post( 4 ); //Pagina Escritorio
	?>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="10">
	  <div class="container-fluid">
	    <div class="navbar-header">
			<a class="scrollSuave" href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mainlogo.png"><br></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuTopo" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	    </div>
		<div class="collapse navbar-collapse" id="menuTopo">
	   		 <ul class="nav navbar-nav">
	      		<li><a class="scrollSuave" href="#escritorio">Escritório</a></li>
	      		<li><a class="scrollSuave" href="#areaatuacao">Áreas de Atuação</a></li>
	      		<li><a class="scrollSuave" href="#profissionais">Profissionais</a></li>
	      		<li><a class="scrollSuave" href="#blog">Notícias Juridicas</a></li>
	    	  	<li><a class="scrollSuave" href="#contato">Contato</a></li>
		    </ul>
		</div>
	  </div>
		<div class="logo-colors">
			<span class="title">Sociedade de Advogados</span>
			<div class="left-bar">
			</div>
			<div class="right-bar">
			</div>		
		</div>	  
	</nav>
		<div id="top" class="header">
			<div class="container">
				<div class="saibaMais">
					<a class="btn scrollSuave" href="#escritorio">Saiba Mais</a>
				</div>
			</div>	
		</div>
		<div id="escritorio" class="topic escritorio">
			<div class="container">
				<h2><?php echo $post_4->post_title; ?></h2>
				
				<h3><?php echo $post_4->post_content; ?></h3>
				<div class="informacoes">
					<div class='missao'>
						<h2>Missão</h2>
						<h3>Atuar, através do exercício da advocacia, com dedicação às necessidades jurídicas de nossos clientes, a fim de obter sucesso.</h3>
					</div>
					<div class='visao'>
						<h2>Visão</h2>
						<h3>Manter-se em constante crescimento através do desenvolvimento de nossa estrutura organizacional e jurídica, sempre com a finalidade de alcançar maior efetividade.</h3>
					</div>
					<div class='valores'>
						<h2>Valores</h2>
						<h3>Trabalhar com transparência, dentro dos mais elevados padrões éticos,atendendo o melhor interesse dos nossos clientes, para alcançar a plena Justiça com máxima competência.</h3>
					</div>
				</div>
			</div>
		</div>
		<div id="areaatuacao" class="topic areaatuacao">
			<div class="container">
			<h2>ÁREAS DE ATUAÇÃO</h2>
			<div>
				<h3>Cível</h3>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/civil.jpg">
				<p>Basicamente, envolve as relações privadas das pessoas físicas ou jurídicas, seja no campo dos contratos, no Direito de família, sucessões (inventários em geral), posse e propriedade. Também no direito indenizatório, em suas mais variadas espécies.</p>
			</div>
			<div>
				<h3>Imobiliário</h3>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/imobiliario.jpg">
				<p>Trata-se de um ramo específico que cuida dos imóveis em geral, em área urbana ou rural, relacionado à venda e compra, locação, doação, permuta, incorporações imobiliárias, entre outras situações que envolvam tais bens. Inclui, também, a atuação jurídica perante condomínios e outras incorporações imobiliárias que detenham corpo diretivo.</p>
				<p>A atuação nesta área poderá ser de natureza administrativa, por meio de assessoria perante os órgãos competentes, ou judicial, se necessário, incluindo-se ações possessórias, indenizatórias, por atraso na entrega das obras, dentre outras. </p>
			</div>
			<div>
				<h3>Empresarial</h3>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/empresarial.jpg">
				<p>Compreende as atividades exercidas por pessoas jurídicas, desde sua constituição, bem como nos assuntos concernentes aos direitos dos sócios, administradores, gerentes e em relação à sociedade em si, como nos casos de transformação, incorporação, fusão, cisão, trespasse, prevenções de crises econômico-financeiras, entre outros assuntos correlatos.</p>
				<p>Envolve, também, a defesa de marcas e patentes, elaboração, análise e defesa frente a contratos de natureza mercantil, títulos de créditos, falência e recuperação de empresas.</p>
			</div>
			<div>
				<h3>Tributário</h3>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tributario.jpg">
				<p>É o ramo do Direito que disciplina a instituição dos tributos em geral, com as conseqüentes relações entre o contribuinte e o Estado.</p>
				<p>Nossa atuação se dá em sede administrativa ou judicial, de pessoas físicas e jurídicas perante o Fisco, cuidando de seus interesses, direitos e deveres relacionados aos tributos. Em tal área do direito, cuida-se não somente da atuação repressiva, por meio de defesa frente à cobrança excessiva de tributos, ou mesmo para restituição daqueles pagos a maior, como também em atuação preventiva, por meio de planejamento tributário.</p>
			</div>
			</div>
		</div>
		<div id="profissionais" class="topic profissionais">
			<div class="container">
				<h2>PROFISSIONAIS</h2>
				<div class="ricardo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team/2.jpg">
					<h3>Ricardo da Silva Bastos</h3>
					<h4>Advogado</h4>
					<ul>
						<li>
							<p>Graduado em Direito pela faculdade de Direito da Instituição Toledo de Ensino – ITE/Bauru, em 1992.</p>
						</li>
						<li>
							<p>Mestre em Direito Civil pela Pontifícia Universidade Católica – PUC/São Paulo, em 2006.</p>
						</li>
						<li>
							<p>Coordenador da Escola Superior da Advocacia – ESA/Bauru, de abril/2007 a janeiro/2013.</p>
						</li>
						<li>
							<p>Professor de Direito Civil com diversos trabalhos publicados.</p>
						</li>						
					</ul>
				</div>
				<div class="andre">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team/1.jpg">
					<h3>André Bertolaccini Bastos</h3>
					<h4>Advogado</h4>
					<ul>
						<li>
							<p>Graduado em Direito pela faculdade de Direito da Instituição Toledo de Ensino – ITE/Bauru, em 2015.</p>
						</li>
						<li>
							<p>Pós-graduando em Direito Empresarial e Advocacia Empresarial pela instituição Luis Flávio Gomes – LFG.</p>
						</li>						
					</ul>
				</div>
			</div>
		</div>
		<div id="blog" class="topic blog">
			<div class="container">
				<h2>Notícias Juridicas</h2>
				<div class="blogTopics">
					<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" title="I am a slide.">
						<p class="data">November 23, 2017</p>
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce finibus neque ac velit tristique interdum. Quisque ut sodales nisl. Phasellus efficitur faucibus euismod. Nunc sed diam sit amet metus venenatis sagittis. Aenean ut nibh turpis. Curabitur nisl ipsum, dignissim nec sapien quis, sodales placerat sapien. Vivamus mollis aliquam odio quis consectetur. Nullam volutpat nec sem nec vestibulum. Sed risus lacus, tincidunt eu venenatis quis, convallis a ligula. Donec a convallis magna. Aenean suscipit sed est sed ornare. Vestibulum sit amet laoreet est, in consequat ligula.</p></div>
					<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" title="I am another slide.">
						<p class="data">November 22, 2017</p>
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce finibus neque ac velit tristique interdum. Quisque ut sodales nisl. Phasellus efficitur faucibus euismod. Nunc sed diam sit amet metus venenatis sagittis. Aenean ut nibh turpis. Curabitur nisl ipsum, dignissim nec sapien quis, sodales placerat sapien. Vivamus mollis aliquam odio quis consectetur. Nullam volutpat nec sem nec vestibulum. Sed risus lacus, tincidunt eu venenatis quis, convallis a ligula. Donec a convallis magna. Aenean suscipit sed est sed ornare. Vestibulum sit amet laoreet est, in consequat ligula.</p></div>
					<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" title="I am another slide.">
						<p class="data">November 22, 2017</p>
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce finibus neque ac velit tristique interdum. Quisque ut sodales nisl. Phasellus efficitur faucibus euismod. Nunc sed diam sit amet metus venenatis sagittis. Aenean ut nibh turpis. Curabitur nisl ipsum, dignissim nec sapien quis, sodales placerat sapien. Vivamus mollis aliquam odio quis consectetur. Nullam volutpat nec sem nec vestibulum. Sed risus lacus, tincidunt eu venenatis quis, convallis a ligula. Donec a convallis magna. Aenean suscipit sed est sed ornare. Vestibulum sit amet laoreet est, in consequat ligula.</p></div>
				</div>
			</div>			
		</div>
		<div id="contato" class="topic contato">
			<div class="container">
				<h2>CONTATO</h2>
				<div class="formcontato">
					<h3>Nos envie sua mensagem e entraremos em contato o mais rápido possível.</h3>
					<form id="formcontato" name="formcontato">
						<div class="form-group">
							<div class="inputBlock"><input class="form-control" type="text" placeholder="Nome" id="name" required></div>
							<div class="inputBlock"><input class="form-control" type="email" placeholder="E-mail" id="email" required></div>
							<div class="inputBlock"><input class="form-control" type="text" placeholder="Telefone" id="telefone" required></div>
							<div class="inputBlock"><textarea class="form-control" placeholder="Mensagem" id="message" required></textarea></div>
							<div class="inputBlock"><button class="btn" type="submit">Enviar Mensagem</button></div>
						</div>
					</form>
				</div>
				<div class="informacoes">
					<div class="phones">
						<span><a href="tel:01432234088"><i class="fa fa-phone"></i>(014)3223-4088</a><a href="tel:01432230146"><i class="fa fa-phone"></i>(014)3223-0146</a><a href="tel:014991043272"><i class="fa fa-mobile"></i>(014)99104-3272</a></span>
					</div>
					<div class="endereco">
						<span><a><i class="fa fa-map-marker"></i>Rua Anvar Dabus, 3-50 - Jardim Aeroporto - CEP 17012-320 - Bauru/SP</a></span>
					</div>
					<div class="email">
						<span><a href="mailto:escritorio@bastosbertolaccini.adv.br"><i class="fa fa-envelope"></i>escritorio@bastosbertolaccini.adv.br</a></span>
					</div>
					<div class="maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.332473176227!2d-49.06630688506985!3d-22.341071723545525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf6712f61e810d%3A0xfbade977de4f086e!2sR.+Anvar+Dabus%2C+3-50+-+Jardim+Paulista%2C+Bauru+-+SP!5e0!3m2!1spt-BR!2sbr!4v1510956027552" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prefixfree.min.js" type="application/javascript"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js" type="text/javascript"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/CustomEvents.js" type="text/javascript"></script>		
	</body>
</html>