<?php
session_start();
	if("username"){
	session_destroy();
	unset($_SESSION['SESS_NAME']);
	include'index.php';
	}
?>