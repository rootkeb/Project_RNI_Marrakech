<?php
session_start();
if(isset($_SESSION['idAdm'])){
	session_destroy();
	session_unset($_SESSION['idAdm']);
	header('Location: login.php');
}else{
	header('Location: login.php');
	
}
?>