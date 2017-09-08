<?php 
include 'db.php';
session_start();

if(!isset($_SESSION['usuario'])) {
	header('Location: ./');
	die;
}

// IMPLEMENTAR BORRAR AQUÍ

  $id=($_GET['id']);
  $result = $db->query("DELETE FROM `noticias` WHERE `id_noticia`='$id' ");
   if(!$result) {
    	$_SESSION['error'] = $db->error;
   	} 
   header('Location: welcome.php');
  die;

