<?php
/**
 * Template Name: Todos os Posts
 *
 * @package WordPress
 * @subpackage BastosBertolaccini
 */
?>


<?php get_header(); ?>

<article id="primary" class="container">
	<main id="main" class="site-main" role="main">

		<div class="allPosts">
			<?php get_search_form(); ?>
		</div>

		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;       
		query_posts( array( 'cat' => 2, 'posts_per_page' => 8, 'category__not_in' => array(), 'paged' => $paged ) );
		while ( have_posts() ) : the_post(); ?> 

		<article>
			<?php /*<a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail($post->ID); ?> </a>*/ ?>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<p class="data">Publicado em <?php the_date('d/m/Y'); /*?> por <?php the_author();*/ ?></p>
			<p><?php the_excerpt(); ?></p>

		</article>

		<?php
	endwhile;
	?>

	<?php wp_pagenavi(); ?>

</main><!-- .site-main -->
</article><!-- .content-area -->

<?php get_footer(); ?>		