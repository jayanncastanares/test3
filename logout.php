<?php
@session_start();
if($_GET['id'] == 'login'){
	unset($_SESSION['login']);
	header('Location: home-care-educational-portal');
}
?>