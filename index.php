<!DOCTYPE html>
<?php include 'header_index.php'; ?>
<?php
global $blog;

	$post_4 = get_post( 4 ); //Pagina Escritorio
	$post_14 = get_post( 14 ); //Pagina Missão
	$post_17 = get_post( 17 ); //Pagina Visão
	$post_19 = get_post( 19 ); //Pagina Valores
	$post_24 = get_post( 24 ); //Pagina Cível
	$post_26 = get_post( 26 ); //Pagina Imobiliário
	$post_28 = get_post( 28 ); //Pagina Empresarial
	$post_30 = get_post( 30 ); //Pagina Tributário
	$post_34 = get_post( 34 ); //Pagina Ricardo da Silva Bastos
	$post_36 = get_post( 36 ); //Pagina André Bertolaccini Bastos

	//Carregamento dos posts da categoria Blog(2)
	$args = array( 'posts_per_page' => 3,  'category' => '2', 'post_status' => 'publish' );	
	$blogPosts = get_posts( $args );
	?>
	<section id="top" class="header">
		<div class="container">
			<div class="saibaMais">
				<a class="btn scrollSuave" href="#escritorio">Saiba Mais</a>
			</div>
		</div>	
	</section>
	<section id="escritorio" class="topic escritorio">
		<div class="container">
			<h2><?php echo $post_4->post_title; ?></h2>
			
			<h4><?php echo $post_4->post_content; ?></h4>
			<div class="informacoes">
				<div class='missao'>
					<h3><?php echo $post_14->post_title; ?></h3>
					<h4><?php echo $post_14->post_content; ?></h4>
				</div>
				<div class='visao'>
					<h3><?php echo $post_17->post_title; ?></h3>
					<h4><?php echo $post_17->post_content; ?></h4>
				</div>
				<div class='valores'>
					<h3><?php echo $post_19->post_title; ?></h2>
						<h4><?php echo $post_19->post_content; ?></h4>
					</div>
				</div>
			</div>
		</section>
		<section id="areaatuacao" class="topic areaatuacao">
			<div class="container">
				<h2>ÁREAS DE ATUAÇÃO</h2>
				<div>
					<h3><?php echo $post_24->post_title; ?></h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/civil.jpg">
					<p><?php echo $post_24->post_content; ?></p>
				</div>
				<div>
					<h3><?php echo $post_26->post_title; ?></h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/imobiliario.jpg">
					<p><?php echo $post_26->post_content; ?></p>
				</div>
				<div>
					<h3><?php echo $post_28->post_title; ?></h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/empresarial.jpg">
					<p><?php echo $post_28->post_content; ?></p>
				</div>
				<div>
					<h3><?php echo $post_30->post_title; ?></h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tributario.jpg">
					<p><?php echo $post_30->post_content; ?></p>
				</div>
			</div>
		</section>
		<section id="profissionais" class="topic profissionais">
			<div class="container">
				<h2>PROFISSIONAIS</h2>
				<div class="ricardo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team/2.jpg">
					<h3><?php echo $post_34->post_title; ?></h3>
					<p><?php echo $post_34->post_content; ?></p>
				</div>
				<div class="andre">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team/1.jpg">
					<h3><?php echo $post_36->post_title; ?></h3>
					<p><?php echo $post_36->post_content; ?></p>
				</div>
			</div>
		</section>
		<section id="blog" class="topic blog">
			<div class="container">
				<h2>Notícias Juridicas</h2>
				<div class="blogTopics">
					<?php

					get_search_form();

				//	Trago os posts da categoria 2

					global $post;
					$args = array( 'numberposts' => 3, 'cat' => 2 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) : setup_postdata($post); ?>
					<article>
						<?php /*<a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail($post->ID); ?> </a>*/ ?>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<p class="data">Publicado em <?php the_date('d/m/Y'); /*?> por <?php the_author();*/ ?></p>
						<p><?php the_excerpt(); ?></p>

					</article>
				<?php endforeach; ?>

			</div>
		</div>			
	</section> 
	<?php include 'footer.php'; ?>
