
<?php
	
	session_start();
	ob_start();

	if(isset($_SESSION['login'])) {
		session_destroy();
		unset($_SESSION['login']);
		unset($_SESSION['usuario_nombre']);
		unset($_SESSION['usuario_rol']);
	}

	if(isset($_COOKIE['_uid_']) && isset($_COOKIE['_uiid_'])) {
		setcookie('_uid_', '', time() - 60 * 60 * 24, '/', '', '', true);
		setcookie('_uiid_', '', time() - 60 * 60 * 24, '/', '', '', true);
	}
	header("Location: index.php");

?>