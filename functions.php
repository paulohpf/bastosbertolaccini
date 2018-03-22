<?php

add_theme_support( 'post-thumbnails' );

	// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
	global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Leia o artigo completo...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function comment_form_text_area($arg) {
	$arg['comment_field'] = '<div class="inputBlock"><textarea id="comment" name="comment" cols="45" rows="5" maxlength="65525" placeholder="Digite aqui o seu comentário*" aria-required="true" required="required"></textarea></div>';
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