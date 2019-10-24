<?php

$url = "";
$description = "";
$section = "";
$client = "";

if (ISSET($_POST)) {
	$url = $_POST["img_url"];
	$description = $_POST["description"];
	$section = $_POST["section"];
	$client = $_POST["client"];
	var_dump($_POST);
	$archivos = file_get_contents("datos_imag.json");
	$usuarios = json_decode($archivos, true);
	$usuarios[] = $_POST;
	$json = json_encode($usuarios);
	file_put_contents("datos_imag.json", $json);
	//header("Location:inicio.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Panel Administrador</title>
</head>
<body>
	

    

    

<div class="row mt-5">
	<div class="container">
		<form action="index.php" method="post">
		  <div class="form-group">
		    <label>URL imagen</label>
		    <input type="text" class="form-control" id="img_url" placeholder="URL imagen" value="" name="img_url">
		    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>

		  <div class="form-group">
		    <label>Titulo</label>
		    <input type="text" class="form-control" id="description" placeholder="Descripcion del trabajo" value="" name="description">
		    <!-- <small id="img_description" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>

		  <div class="form-group">
		    <label>Seccion</label>
		    <input type="text" class="form-control" id="section" placeholder="Seccion" value="" name="section">
		    <!-- <small id="img_section" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>

		  <div class="form-group">
		    <label>Cliente</label>
		    <input type="text" class="form-control" id="client" placeholder="Cliente" value="" name="client">
		    <!-- <small id="img_client" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>
		  
		  <div class="form-check">
			  <input class="form-check-input" type="radio" name="personal" id="personal" value="personal" checked>
			  <label class="form-check-label" for="personal">
			    Personal
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="profesional" id="profesional" value="profesional">
			  <label class="form-check-label" for="profesional">
			    Profesional
			  </label>
			</div>

		  <button type="submit" class="btn btn-primary mt-5">Submit</button>
		</form>
	</div>
</div>





















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>