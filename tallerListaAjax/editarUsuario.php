<?php
include('db/pdo.php');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

var_dump($_POST);
$req=$conn->prepare(sprintf("UPDATE contactos SET
						nombre = :nombre,
						telefono = :telefono,
						email=:email
						WHERE rut = :rut"));

$req->bindParam(':email',$_POST['correo']);
$req->bindParam(':telefono',$_POST['telefono']);
$req->bindParam(':nombre', $_POST['nombre']);
$req->bindParam(':rut', $_POST['rut']);
$req->execute();
header('Location: index.php');

?>