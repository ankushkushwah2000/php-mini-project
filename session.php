<?php 
session_start();
if (empty($_SESSION['ankush'])) {
	header('location:index.php');
}

?>