<?php
include('db/pdo.php');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt=$conn->prepare("SELECT * FROM contactos ");
$stmt->execute();
$result=$stmt->fetchAll();

?>

<html>
<head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>

<body>
	<div class="container">
		<div class="col s6 offset-s4">
		<h2> Tabla de Usuarios</h2>
		</div>

		<div class="col s8 m4">
			<a class="btn green" href="vistaCrearUsuario.php"> Crear Usuario</a>
		</div>
		<div class="row">
			<table class="responsive-table centered highlight">
				<thead>
					<th>Rut</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Telefono</th>
				</thead>
				<tbody id="tablaPersonas">
				<?php
				if(isset($result)){
					foreach ($result as $contacto) {
						echo '<tr>';
 						echo '<td>'. $contacto['rut'] . '</td>';
 						echo '<td>'. $contacto['nombre'] . '</td>';
 						echo '<td>'. $contacto['email'] . '</td>';
 						echo '<td>'. $contacto['telefono'] . '</td>';
 						echo '<td> <a class="btn" href="vistaEditarUsuario.php?rut='.$contacto['rut'].'"> Editar Usuario </a> </td>';
 						echo '<td> <a class="btn red" href="borrarUsuario.php?rut='.$contacto['rut'].'"> Borrar Usuario </a> </td>';

 						echo'</tr>';
					}
				}
				?>
					
				</tbody>

			</table>
		</div>



	</div>
</body>
</html>