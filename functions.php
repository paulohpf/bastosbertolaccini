<?php

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

?>