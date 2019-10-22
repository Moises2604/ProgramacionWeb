<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<style type="text/css">


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
		background-color: #6FB2BF;
		align-self: center;
	}
	h1{
		text-align: center;
		font-family: "Roboto", sans-serif;
	}
	div{
  text-align: center;
		}
	
	
	</style>
	
</head>
<body>

<div id="container">
		<h1>Ingresar Usuario</h1>
		<form method="post" action="index.php/usuarioController">
		<label>Nombre</label><br>
		<input class="txt" type="text" id="usuario" name="usuario" placeholder="Ingrese un Usuario"><br>
		
		<label>Contraseña</label><br>
		<input class="txt" type="password" id="pass" name="pass" placeholder="Ingrese una Contraseña"><br>
		<input class="btn" type="submit" id="Consultar" name="datosUsuario" value="Entrar"><br>
	</form>
	</div>

	
</div>
<form method="post" action="index.php/usuarioController/regis">
	<a href="index.php/usuarioController/regis"><h1>Registrate</h1></a>
</body>
</html>