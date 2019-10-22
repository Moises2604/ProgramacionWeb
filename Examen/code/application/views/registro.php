
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

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
	form{
  text-align: center;

		}
	
	
	</style>
	
</head>
<body>
<div class="Form">
<div id="container">
		<h1>Registrar Datos del Nuevo Usuario</h1>
    <form method="post" action="http://localhost/Code/index.php/usuarioController/nuevoUsuario">
    	<label>Username</label> <br>
	<input class="txt" type="text" id=usuario name="usuario"><br>
	 	<label>Ingresa una Password</label><br>
	<input class="txt" type="Password" id=contrasena name="contrasena"><br>
	<input class="btn" type="submit" id="Consultar" name="datosUsuario2"  value="Registrarme"><br>
	


	</form>
	</div>

	
</div>

</body>
</html>