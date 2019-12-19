<?php
session_start();
if($_SESSION['autenticado']!="si"){
   $_SESSION['doc']=$_POST['doc'];
   $_SESSION['even']=$_POST['even'];
	header('location: index.php');
	exit();
	}
session_cache_expire(5);
$cache_expire = session_cache_expire();

?>