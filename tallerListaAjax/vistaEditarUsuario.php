<?php
include('db/pdo.php');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt=$conn->prepare("SELECT * FROM contactos WHERE (rut= :rut)");
$rut=$_GET['rut'];
$stmt->bindParam(':rut', $rut);
$stmt->execute();
$result=$stmt->fetchAll();
$datos=$result[0];
var_dump($datos);

?>

<html>
<head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>

<body>
	<div class="container">
		
			<h2 class="center-align"> Editar Usuario</h2>
	

		
		<div class="row">
			<form class="col s10 offset-s2" action="editarUsuario.php" method="POST" >
				<input  placeholder="nombre" class="col s8 m4" type=text name="nombre" value="<?php echo $datos['nombre']; ?>">
				<input  disabled placeholder="12.345.678-9" class="col s8 m4 offset-m2" type=text   value="<?php echo $datos['rut']; ?>" >
				<input  placeholder="Correo" class="col s8 m4" type=text name="correo" value="<?php echo $datos['email']; ?>">
				<input  placeholder="telefono" class="col s8 m4 offset-m2" type="text" name="telefono" value="<?php echo $datos['telefono']; ?>">
				
				<input  type="hidden"  name="rut"  value="<?php echo $datos['rut']; ?>" >
				<div class="col s8 m4 offset-s2 offset-m3">
					 <button class="btn waves-effect waves-light green" type="submit" name="action">Submit
  				  		<i class="material-icons right">send</i>
 				 	</button>
 				</div>
			</form>
			
			
		</div>

		



	</div>
</body>
	

</html>