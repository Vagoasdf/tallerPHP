<?php
include('db/pdo.php');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt=$conn->prepare("DELETE FROM contactos WHERE (rut= :rut)");
$rut=$_GET['rut'];
$stmt->bindParam(':rut', $rut);
$stmt->execute();
header('Location: index.php');
?>