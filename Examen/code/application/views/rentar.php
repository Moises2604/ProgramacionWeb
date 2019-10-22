<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rentar</title>

	<style type="text/css">

body{
		background-color: #6FB2BF;
		align-self: center;
	}
	h1{
		text-align: center;
		font-family: "Roboto", sans-serif;
	}

		label{
		font-family: "Roboto", sans-serif;
  outline: 0;
  color: blue;
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  
  box-sizing: border-box;
  font-size: 20px;
	}

	img{
		width: 350px; height: 500px;
		float: left;
	}
	form{
		padding:2px;
   cursor:pointer;
   display:block;
   width:350px;
   margin: 0 auto;
   text-align:center;
	}
	.rentar{
		font-family: "Roboto", sans-serif;
  outline: 0;
  background: #467BF7;
  width: 25%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 15px;
	}
	
	</style>
	
</head>
<body>
<h1>Rentar Pelicula</h1>
<?php foreach ($info as $i => $c): ?>
		<br>
		<form method="post" action="index.php/usuarioController/Guardar">
		  
		    <img align-self: center; src="<?=$c->imagen;?>">
		    
				<h1>LLenar formato para llenar pelicula</h1>
				<label>Id de la pelicula:</label>
				<input type="text" readonly="readonly" name="nn" value="<?=$c->peliculas_id;?> " ><br>
				<label>Username:</label>
				<input type="text" class="form"><br>
				<label>Fecha de renta:</label>
				<input type="date" class="form">
				<br>
		    
				<input class="rentar" type="submit" id="rentar" name="rentar" value="Rentar">
				</form>
	<?php endforeach;?>
<!--
	<?php foreach ($peliculas as $i => $c): ?>
		<br>
		<form method="post" action="index.php/usuarioController/regis">
		    <img align-self: center; src="<?=$c->imagen;?>">
		    <input type="text" name="n" class="s40" value="<?=$c->peliculas_id;?>">
		    <input type="text" name="nn" value="<?=$c->nombre;?>" >
		    <input type="text" name="nnn"  value="<?=$c->año;?>">
		    <input type="text" name="nnn"  value="<?=$c->duracion;?>">
		    <input type="text" name="nnnn" value="<?=$c->sinopsis;?>" >
		    <br>
		    
		    	<input class="rentar" type="submit" id="rentar" name="rentar" value="Rentar">
		    </form>
	<?php endforeach;?>
	-->

</html>
