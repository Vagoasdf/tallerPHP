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
			<a class="waves-effect waves-light btn green modal-trigger " href="#modalCrear" id="btn-Crear"> Crear Usuario</a>
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
 						echo '<td> <a class=" waves-effect waves-light btn" href="vistaEditarUsuario.php?rut='.$contacto['rut'].'"> Editar Usuario </a> </td>';
 						echo '<td> <a class=" waves-effect waves-light btn red" href="borrarUsuario.php?rut='.$contacto['rut'].'"> Borrar Usuario </a> </td>';

 						echo'</tr>';
					}
				}
				?>
					
				</tbody>

			</table>
		</div>
	</div>


	<!--Modal crear usuario -->
	<div id="modalCrear" class="modal">
    <div class="modal-content">
      <h4>Crear Usuario</h4>
      <div class="row">
				<input  placeholder="nombre" class="col s8 m4" type=text id="nombre">
				<input  placeholder="12.345.678-9" class="col s8 m4 offset-m2" type=text id="rut">
				<input  placeholder="Correo" class="col s8 m4" type=text id="correo">
				<input  placeholder="telefono" class="col s8 m4 offset-m2" type="text" id="telefono">
				<div class="col s8 m4 offset-s2 offset-m3">
					 <button class="btn waves-effect waves-light green"  id="btnCrear">Enviar
  				  		<i class="material-icons right">send</i>
 				 	</button>
 				</div>
 				<div id="cargando"></div>
			
		</div>
    </div>


    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>

</body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="js/materialize.js"></script>





<script type="text/javascript">
 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

    //inicializando boton de envío
    $('#btnCrear').click(function(e){
    	e.preventDefault();
    	var formData = new FormData();
    	formData.append('nombre', document.getElementById('nombre').value);
		formData.append('rut', document.getElementById('rut').value);
		formData.append('telefono', document.getElementById('telefono').value);
		formData.append('correo', document.getElementById('correo').value);

		$.ajax({
        url: 'crearUsuarioAJAX.php', //la ruta donde se envia el form
        headers: {

        },
        type: 'POST', //tipo post
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
         console.log("success");
         console.log(response);
         $("cargando").text(null);
        },
        error: function(xhr, status, error) {
          console.log(xhr);
 		 alert(xhr.responseText);
          
        },
        beforeSend: function(){
        	$("cargando").text("Cargando");
        	alert("No logro hacer que se vea el mensaje de cargando, no se logra cargar antes de enviar. A si que tienen un hermoso alert que dice: CARGANDO!");
        	console.log("cargando!");
        }
       
     });

    });


  });
      
</script>
</html>