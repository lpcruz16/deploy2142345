<?php

session_start();
$usuario = $_SESSION ['username'];
if (!isset($usuario)){
  header("location: login.php");
}else{

echo " <h3> $usuario </h3>";
echo"<a href='modelo/salir.php'>SALIR </a> ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/ellos.css">
  <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
  <title>Inicio/Women Store</title>
</head>
<body>
  <header>
    <h1>WOMEN STORE</h1>
    <h3> <p>PRODUCTOS DE BELLEZA Y CUIDADO PERSONAL</p> </h3>
   <br>
<nav>
<ul class="menu1">
<li ><a href="interfazindex.php"><b>INICIO</b></I></a> </li>
<li ><a href="interproductos.php"><b>PRODUCTOS</b> </a> </li>
<li ><a href="intercategorias.php"><b>CATEGORIAS</b> </a> </li>
<li ><a href="intercontacto.php"><b>CONTACTO</b> </a> </li>
<li ><a href="paginaprin.php"><b>MICUENTA</b> </a> </li>
<li ><a href="interellos.php"><b>ELLOS</b> </a> </li>
<li><a href="intercarro.php"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
</ul>
</nav> 
<table>
		<tr>
			<td><a href="regalos.html"><img  src="img/bonita.jpg"title="Regalos"><br>REGALOS </a></a></td>
			<td><a href="ofertas.html"><img src="img/oferta2.jpg"title="Ofertas" ><br>OFERTAS</a></td></b>  
			<td><a href="destacados.html"> <img src="img/destacados.jfif" title="Destacados"><br> DESTACADOS</a></a></td>
		</tr>
	</table>
  </header> 
<ul class="menu3">
<li ><a href="condiciones.html "><b>Condiciones</b></I></a> </li>
<li ><a href="quienes.html"><b>¿Quienes somos?</b> </a> </li>
<li ><a href="politicas.html"><b>Politica de Privacidad</b> </a> </li>
<li ><a href="preguntas.html"><b>¿Preguntas Frecuentes?</b> </a> </li>
</ul>
<div class="con">
  <button><i class="fab fa-facebook"></i></button>
  <button><i class="fab fa-whatsapp"></i></button>
  <button><i class="fab fa-instagram"></i></button>
</div>
</body>
</html>