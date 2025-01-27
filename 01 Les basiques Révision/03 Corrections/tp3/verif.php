<?php
session_start();
$admin_login = 'toto';
$admin_psw 	 = '123456';
session_start();
// on récupère les infos du formulaire
if ((isset($_POST["login"])) && (isset($_POST["psw"]))) {
	$login = $_POST["login"];
	$psw   = md5($_POST["psw"]);

	// si login est psw OK
	if (($login == $admin_login) && ($psw == md5($admin_psw))) {
		$_SESSION["login"]  = $login;
		header("location:home.php");
	} else {
		$_SESSION["error_psw"] = true;
		header("Location:login.php");
	}
} else {
	$_SESSION["error_psw"] = true;
	header("Location:login.php");
}
