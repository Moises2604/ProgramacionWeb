<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	label{
		font-family: "Roboto", sans-serif;
  outline: 0;
  
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  
  box-sizing: border-box;
  font-size: 30px;
	}
	.txt{
	font-family: "Roboto", sans-serif;
  outline: 0;
  background: #5DFF7A;
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 30px;
	}
	.btn{
	font-family: "Roboto", sans-serif;
  outline: 0;
  background: #467BF7;
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 30px;
	}
	body{
		background-color: #4BF068;
		align-self: center;
	}
	div{
  text-align: center;
		}
	
	
	</style>
	
</head>
<body>

<div id="container">
		<img src="https://pngimage.net/wp-content/uploads/2018/06/png-movies-3.png">
		<form method="post" action="index.php/filmController/insertar">
		<label>Titulo de Pelicula</label><br>
		<input class="txt" type="text" id="Pelicula" name="Pelicula" placeholder="Ingrese un Titulo"><br>
		
		<label>Datos del Actor</label><br>
		<input class="txt" type="text" id="Nombre" name="Nombre" placeholder="Ingrese el Nombre"><br>
		<input class="txt" type="text" id="Apellido" name="Apellido" placeholder="Ingrese el Apellido"><br>
		<input class="btn" type="submit" id="Consultar" name="datosUsuario"><br>
	</form>
	</div>

	
</div>

</body>
</html>