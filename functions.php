<?php

add_theme_support( 'post-thumbnails' );

// Titulo do site dinamico
function bastosbertolaccini_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'bastosbertolaccini' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'bastosbertolaccini_wp_title', 10, 2 );

// Remove pages from search
function mySearchPostsFilter($query) {
	if ($query->is_search) {
		$query->set('cat','2'); // your category IDs
	}
	return $query;
}

add_filter(‘pre_get_posts’,’mySearchPostsFilter’);

	// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
	global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Leia o artigo completo...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function comment_form_text_area($arg) {
	$arg['title_reply'] = 'Deixe um comentário';

	$arg['fields'] = array(

		'author' =>
		'<div class="inputBlock"><p class="comment-form-author"><input id="author" class="form-control" placeholder="Nome*" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" required' . $aria_req . ' /></p></div>',

		'email' =>
		'<div class="inputBlock"><p class="comment-form-email"><input id="email" class="form-control" placeholder="E-mail*" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30" required' . $aria_req . ' /></p></div>',

		'url' => '',
	);

	$arg['comment_field'] = '<div class="inputBlock"><textarea id="comment" class="form-control" name="comment" cols="45" rows="5" maxlength="65525" placeholder="Digite aqui o seu comentário*" aria-required="true" required="required"></textarea></div>';
	return $arg;
}

add_filter('comment_form_defaults', 'comment_form_text_area');

// Custom WordPress Login Logo
function my_login_logo() { ?>
<style>

.login-action-login{
	background: url(/wp-content/themes/bastosbertolaccini/images/bg-admin.jpg) no-repeat;
	background-size: cover;
	background-position: center center; 
}

body.login div#login h1 a {
	background-image: url(/wp-content/themes/bastosbertolaccini/images/mainlogo.png);
	background-size: 100%;
	width: 100%;
}

.login form{
	padding: 26px 24px 25px !important;
}

.login #backtoblog, .login #nav{
	font-size: 13px;
	padding: 10px 24px;
	background: #fff;
}

#backtoblog{
	margin: 0 !important;
	padding-top: 14px !important;
	padding-bottom: 14px !important;
}

.login #nav{
	margin: 0 !important;
	background: #fff;
}
</style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/icon-functions.php' );

?>