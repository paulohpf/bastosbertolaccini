<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="True" />
	<?php
	$title = get_bloginfo();
	$title = $title." - ".get_bloginfo('description');
	?>	
	<meta name="description" content="Escritório de advocacia, Fundado em 1994. Através dos seus mais de 20 anos de atuação, o escritório tem buscado oferecer, com eficiência e com um atendimento personalizado, as melhores soluções para cada cliente, sejam estes pessoas físicas ou jurídicas, pautado na ética e competência.">
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"url": "http://bastosbertolaccini.adv.br/",
			"name": "Bastos e Bertolaccini - Sociedade de advogados",
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "+551432234088",
				"contactType": "customer service"
			},
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Bauru, São Paulo",
				"postalCode": "17012-320",
				"streetAddress": "Rua Anvar Dabus, 3-50 - Jardim Aeroporto"
			},
			"email": "escritorio@bastosbertolaccini.adv.br",
			"member": [
			{
				"@type": "Organization"
			},
			{
				"@type": "Organization"
			}
			],
			"alumni": [
			{
				"@type": "Person",
				"name": "Ricardo da Silva Bastos"
			},
			{
				"@type": "Person",
				"name": "André Bertolaccini Bastos"
			}
			]
		}
	</script>	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.bxslider.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<meta name="theme-color" content="#052a45">
	<title><?php echo $title ?></title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="10">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="scrollSuave" href="#top" alt="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mainlogo.png" alt="logo"><br></a>
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