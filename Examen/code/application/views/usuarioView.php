<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rentar Pelicula</title>

	<style type="text/css">


	body{
		background-color: #6FB2BF;
		align-self: center;
	}
	h1{
		text-align: center;
		font-family: "Roboto", sans-serif;
	}
	input{
font-size:20px;
border  : none;
background: none;
text-align: left;

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
	textarea {background-color: 
	transparent;border: 1px solid #000000;s
	crollbar-arrow-color: #000066;
	scrollbar-base-color: #000033;
	scrollbar-dark-shadow-color: #336699;
	scrollbar-track-color: #666633;
	scrollbar-face-color: #cc9933;
	scrollbar-shadow-color: #DDDDDD;
	scrollbar-highlight-color: #CCCCCC;}
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
<h1>Bienvenido a la renta de peliculas</h1>
<?php
session_start();
ob_start();
$_SESSION['idUsuario']=$idus[0]->user_id;
?>
	<?php foreach ($peliculas as $i => $c): ?>
		<br>
		<form class="form"method="post" action="http://localhost/Code/index.php/usuarioController/rent">
		    <img align-self: center; id="ima" name="ima" value="<?=$c->imagen;?>" src="<?=$c->imagen;?>">
				<br>
				<label>Id pelicula: </label>
		    <input class="s40" readonly="readonly" type="text" id="va" name="va" value="<?=$c->peliculas_id;?>">
				<br>
				<label>Pelicula: </label>
		    <input class="s40" readonly="readonly" type="text" id="nom" name="nom" value="<?=$c->nombre;?>">
				<br>
				<label>Año: </label>
		    <input class="s40" readonly="readonly" type="text" id="ano" name="ano" value="<?=$c->año;?>">
				<br>
				<label>Duracion: </label>
		    <input class="s40" readonly="readonly" type="text" id="dur" name="dur" value="<?=$c->duracion;?>">
				<br>
				<label>Sinopsis: </label>
		   <!-- <textarea class="s40" cols="50" rows="8"readonly="readonly"  ><?=$c->sinopsis;?></textarea>
-->
<textarea class="s40" cols="50" rows="8"readonly="readonly"  id="sinop" name="sinop" value="<?=$c->sinopsis;?>" ><?=$c->sinopsis;?></textarea>
		    <br>
		    
		    	<input class="rentar" type="submit" id="rentar" name="rentar" value="Rentar">
		    </form>
	<?php endforeach;?>

</html>
