<html>
<head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>

<body>
	<div class="container">
		
			<h2 class="center-align"> Crear nuevo usuario</h2>
	

		
		<div class="row">
			<form class="col s10 offset-s2" action="crearUsuario.php" method="POST" >
				<input  placeholder="nombre" class="col s8 m4" type=text name="nombre">
				<input  placeholder="12.345.678-9" class="col s8 m4 offset-m2" type=text name="rut">
				<input  placeholder="Correo" class="col s8 m4" type=text name="correo">
				<input  placeholder="telefono" class="col s8 m4 offset-m2" type="text" name="telefono">
				
				<div class="col s8 m4 offset-s2 offset-m3">
					 <button class="btn waves-effect waves-light green" type="submit" name="action">Submit
  				  		<i class="material-icons right">send</i>
 				 	</button>
 				</div>
			</form>
			
			
		</div>

		



	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.mi
n.js"></script>


<script type="text/javascript">
	

</script>

</html>