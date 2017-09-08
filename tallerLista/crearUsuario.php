<?php
include('db/pdo.php');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$req=$conn->prepare(sprintf("INSERT INTO `contactos`(`email`, `nombre`,`rut`, `telefono`) VALUES (:email,:nombre,:rut,:telefono)"));
$req->bindParam(':email',$_POST['correo']);
$req->bindParam(':telefono',$_POST['telefono']);
$req->bindParam(':nombre', $_POST['nombre']);
$req->bindParam(':rut', $_POST['rut']);
$req->execute();
header('Location: index.php');

?>