<?php
include('db/pdo.php');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
for($i=0; $i<1000; $i++){
	echo "esto es para que se demore en enviaar";
	for($a=0; $a<3; $a++){
		echo "0";
	}
}
if(empty($correo)||empty($telefono)||empty($nombre)||empty($rut)){
	header('HTTP/1.1 500 Internal Server Error');
    print "Rellene todas las variables porfavor";
    die;
}
if(!is_numeric($telefono)){
	header('HTTP/1.1 500 Internal Server Error');
    print "Ingrese un Telefono valido porfavor";
    die;
}
if(!is_numeric($rut)){
	header('HTTP/1.1 500 Internal Server Error');
    print "Ingrese un rut Valido Porfavor";
    die;
}

if(!ctype_alpha($nombre)){
	header('HTTP/1.1 500 Internal Server Error');
    print "Ingrese un nombre válido. Solo letras";
    die;
}


$req=$conn->prepare(sprintf("INSERT INTO `contactos`(`email`, `nombre`,`rut`, `telefono`) VALUES (:email,:nombre,:rut,:telefono)"));
$req->bindParam(':email',$_POST['correo']);
$req->bindParam(':telefono',$_POST['telefono']);
$req->bindParam(':nombre', $_POST['nombre']);
$req->bindParam(':rut', $_POST['rut']);
$req->execute();
return json_encode("1");

?>