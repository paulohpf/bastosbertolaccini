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